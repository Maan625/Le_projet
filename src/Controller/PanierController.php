<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Commande;
use App\Entity\CommandeItem;
use App\Repository\CoursRepository;
use App\Repository\CommandeRepository;
use App\Repository\CommandeItemRepository;
use App\Entity\Inscription;
use App\Repository\InscriptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;





class PanierController extends AbstractController
{
    #[Route('/panier', name: 'panier_index')]
    public function index(SessionInterface $session, CoursRepository $coursRepo, CommandeRepository $commandeRepo): Response
    {
        $items = [];
        $totalGeneral = 0;
        $count = 0;

        $user = $this->getUser();
        $statutPanier = 'en_attente';

        //✅si utilisateur connecté => panier depuis la BDD
        if ($user) {
            $commande = $commandeRepo->findOneBy(['user' => $user, 'statut' => $statutPanier]);

            if ($commande) {
                foreach ($commande->getCommandeItems() as $ci) {
                    $cours = $ci->getCours();
                    $qty = $ci->getQuantity();
                    $prix = (float) $ci->getUnitPrice();
                    $lineTotal = $prix * $qty;

                    $items[] = [
                        'cours' => $cours,
                        'qty' => $qty,
                        'lineTotal' => $lineTotal,
                    ];

                    $totalGeneral += $lineTotal;
                    $count += $qty;
                }
            }

            return $this->render('panier/index.html.twig', [
                'items' => $items,
                'count' => $count,
                'totalGeneral' => $totalGeneral,
            ]);
        }

        // ✅ si visiteur => panier depuis la session
        $panier = $session->get('panier', []);
        if (!empty($panier)) {
            $ids = array_keys($panier);
            $coursList = $coursRepo->findBy(['id' => $ids]);

            $coursById = [];
            foreach ($coursList as $cours) {
                $coursById[$cours->getId()] = $cours;
            }

            foreach ($panier as $id => $qty) {
                if (!isset($coursById[$id])) continue;

                $cours = $coursById[$id];
                $prix = (float) $cours->getPrix();
                $lineTotal = $prix * $qty;

                $items[] = ['cours' => $cours, 'qty' => $qty, 'lineTotal' => $lineTotal];
                $totalGeneral += $lineTotal;
                $count += $qty;
            }
        }

        return $this->render('panier/index.html.twig', [
            'items' => $items,
            'count' => $count,
            'totalGeneral' => $totalGeneral,
        ]);
    }


    #[Route('/panier/add/{id}/ajax', name: 'panier_add_ajax', methods: ['POST'])]
    public function addAjax(
        int $id,
        SessionInterface $session,
        CoursRepository $coursRepo,
        CommandeRepository $commandeRepo,
        CommandeItemRepository $commandeItemRepo,
        EntityManagerInterface $em
    ): JsonResponse {
        $user = $this->getUser();
        $statutPanier = 'en_attente';

        // ✅ إذا زائر => session (كما كان)
        if (!$user) {
            $panier = $session->get('panier', []);
            if (!isset($panier[$id])) $panier[$id] = 1;
            $session->set('panier', $panier);

            return $this->json([
                'success' => true,
                'message' => 'Ajouté au panier ✅',
                'count' => array_sum($panier),
            ]);
        }

        // ✅ مستخدم مسجل => DB
        $cours = $coursRepo->find($id);
        if (!$cours) {
            return $this->json(['success' => false, 'message' => 'Cours introuvable'], 404);
        }

        $commande = $commandeRepo->findOneBy(['user' => $user, 'statut' => $statutPanier]);

        if (!$commande) {
            $commande = new Commande();
            $commande->setUser($user);
            $commande->setStatut($statutPanier);
            $commande->setTotal('0.00');
            $em->persist($commande);
        }

        // هل هذا الكورس موجود أصلاً في السلة؟
        $existingItem = $commandeItemRepo->findOneBy([
            'commande' => $commande,
            'cours' => $cours
        ]);

        if (!$existingItem) {
            $item = new CommandeItem();
            $item->setCommande($commande);
            $item->setCours($cours);
            $item->setQuantity(1);
            $item->setUnitPrice((string)$cours->getPrix());
            $em->persist($item);
        }

        $em->flush();

        // count
        $count = 0;
        foreach ($commande->getCommandeItems() as $ci) {
            $count += $ci->getQuantity();
        }

        // ✅ مزامنة session أيضا
        $panier = $session->get('panier', []);
        if (!isset($panier[$id])) {
            $panier[$id] = 1;
        }
        $session->set('panier', $panier);

        return $this->json([
            'success' => true,
            'message' => 'Ajouté au panier ✅',
            'count' => $count,
        ]);
    }

    #[Route('/panier/remove/{id}', name: 'panier_remove', methods: ['POST'])]
    public function remove(
        int $id,
        SessionInterface $session,
        CoursRepository $coursRepo,
        CommandeRepository $commandeRepo,
        CommandeItemRepository $commandeItemRepo,
        EntityManagerInterface $em
    ): RedirectResponse {
        $user = $this->getUser();
        $statutPanier = 'en_attente';

        // ✅ زائر => session
        if (!$user) {
            $panier = $session->get('panier', []);
            if (isset($panier[$id])) {
                unset($panier[$id]);
                $session->set('panier', $panier);
            }
            return $this->redirectToRoute('panier_index');
        }

        // ✅ مستخدم => DB
        $commande = $commandeRepo->findOneBy(['user' => $user, 'statut' => $statutPanier]);
        if (!$commande) return $this->redirectToRoute('panier_index');

        $cours = $coursRepo->find($id);
        if (!$cours) return $this->redirectToRoute('panier_index');

        $item = $commandeItemRepo->findOneBy(['commande' => $commande, 'cours' => $cours]);
        if ($item) {
            $em->remove($item);
            $em->flush();
            $panier = $session->get('panier', []);
            unset($panier[$id]);
            $session->set('panier', $panier);
        }


        return $this->redirectToRoute('panier_index');
    }




    // ...

    #[Route('/panier/checkout', name: 'panier_checkout', methods: ['GET', 'POST'])]
    public function checkout(
        SessionInterface $session,
        CoursRepository $coursRepo,
        InscriptionRepository $inscriptionRepo,   // ✅ add this
        CommandeRepository $commandeRepo,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        $panier = $session->get('panier', []);

        if (empty($panier)) {
            $this->addFlash('warning', 'Votre panier est vide.');
            return $this->redirectToRoute('panier_index');
        }

        // ✅ GET => عرض صفحة checkout
        if ($request->isMethod('GET')) {
            $ids = array_keys($panier);
            $coursList = $coursRepo->findBy(['id' => $ids]);

            $coursById = [];
            foreach ($coursList as $cours) {
                $coursById[$cours->getId()] = $cours;
            }

            $items = [];
            $totalGeneral = 0;

            foreach ($panier as $id => $qty) {
                if (!isset($coursById[$id])) continue;

                $cours = $coursById[$id];
                $prix = (float) $cours->getPrix();
                $lineTotal = $prix * (int) $qty;

                $items[] = [
                    'cours' => $cours,
                    'qty' => (int) $qty,
                    'lineTotal' => $lineTotal,
                ];

                $totalGeneral += $lineTotal;
            }

            return $this->render('panier/checkout.html.twig', [
                'items' => $items,
                'count' => array_sum($panier),
                'totalGeneral' => $totalGeneral,
            ]);
        }

        // ✅ POST => لازم يكون المستخدم مسجل
        if (!$this->getUser()) {
            $this->addFlash('info', 'Veuillez vous connecter pour passer au paiement.');
            return $this->redirectToRoute('connexion');
        }

        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        $commande = $commandeRepo->findOneBy([
            'user' => $user,
            'statut' => 'EN_ATTENTE',
        ]);

        if (!$commande) {
            $this->addFlash('warning', 'Aucun panier en cours.');
            return $this->redirectToRoute('panier_index');
        }

        $total = 0.0;

        foreach ($commande->getCommandeItems() as $item) {
            $cours = $item->getCours();
            $qty   = $item->getQuantity();

            // إذا مشترك مسبقاً لا نعيد شراءه
            $existingInscription = $inscriptionRepo->findOneBy([
                'user' => $user,
                'cours' => $cours,
            ]);

            if ($existingInscription) {
                $this->addFlash('info', 'Vous êtes déjà inscrit à : ' . $cours->getTitre());
                continue;
            }

            $unitPrice = (float) $item->getUnitPrice();
            $total += $unitPrice * $qty;

            $inscription = new Inscription();
            $inscription->setUser($user);
            $inscription->setCours($cours);
            $inscription->setCreatedAt(new \DateTimeImmutable());
            $em->persist($inscription);
        }

        $commande->setTotal(number_format($total, 2, '.', ''));
        $commande->setStatut('PAYEE'); // ✅ مهم
        $em->persist($commande);
        $em->flush();

        $session->remove('panier');

        $this->addFlash('success', 'Commande confirmée ✅');
        return $this->redirectToRoute('panier_index');
    }
}
