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
use App\Entity\Inscription;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
 




class PanierController extends AbstractController
{
    #[Route('/panier', name: 'panier_index')]
    public function index(SessionInterface $session, CoursRepository $coursRepo): Response
    {
        $panier = $session->get('panier', []); // [id => qty]

        $items = [];
        $totalGeneral = 0;

        if (!empty($panier)) {
            $ids = array_keys($panier);

            $coursList = $coursRepo->findBy(['id' => $ids]);

            // باش نسهّل الوصول بالكورسات حسب id
            $coursById = [];
            foreach ($coursList as $cours) {
                $coursById[$cours->getId()] = $cours;
            }

            foreach ($panier as $id => $qty) {
                if (!isset($coursById[$id])) {
                    continue; // إذا كورس محذوف من DB
                }

                $cours = $coursById[$id];

                $prix = (float) $cours->getPrix();
                $lineTotal = $prix * $qty;

                $items[] = [
                    'cours' => $cours,
                    'qty' => $qty,
                    'lineTotal' => $lineTotal,
                ];

                $totalGeneral += $lineTotal;
            }
        }

        return $this->render('panier/index.html.twig', [
            'items' => $items,
            'count' => array_sum($panier),
            'totalGeneral' => $totalGeneral,
        ]);
    }


    #[Route('/panier/add/{id}/ajax', name: 'panier_add_ajax', methods: ['POST'])]
    public function addAjax(int $id, SessionInterface $session): JsonResponse
    {
        $panier = $session->get('panier', []);

        // يزيد مرة واحدة فقط (إذا موجود ما يزيد)
        if (!isset($panier[$id])) {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->json([
            'success' => true,
            'type' => 'success',
            'message' => 'Le cours a bien ajouté au panier',
            'count' => array_sum($panier),
        ]);
    }

    #[Route('/panier/remove/{id}', name: 'panier_remove', methods: ['POST'])]
    public function remove(int $id, SessionInterface $session): RedirectResponse
    {
        $panier = $session->get('panier', []);

        if (isset($panier[$id])) {
            unset($panier[$id]);
            $session->set('panier', $panier);
        }

        return $this->redirectToRoute('panier_index');
    }
   #[Route('/panier/checkout', name: 'panier_checkout', methods: ['GET', 'POST'])]
#[IsGranted('ROLE_USER')]
public function checkout(
    Request $request,
    SessionInterface $session,
    CoursRepository $coursRepo,
    EntityManagerInterface $em
): Response
{
    $panier = $session->get('panier', []);

    if (empty($panier)) {
        $this->addFlash('warning', 'Votre panier est vide.');
        return $this->redirectToRoute('panier_index');
    }

    /** @var \App\Entity\User $user */
    $user = $this->getUser();

    // ✅ GET: عرض صفحة تأكيد
    if ($request->isMethod('GET')) {
        // نحضر items + total
        $items = [];
        $totalGeneral = 0.0;

        foreach ($panier as $coursId => $qty) {
            $cours = $coursRepo->find($coursId);
            if (!$cours) continue;

            $prix = (float) $cours->getPrix();
            $lineTotal = $prix * (int) $qty;
            $totalGeneral += $lineTotal;

            $items[] = [
                'cours' => $cours,
                'qty' => (int) $qty,
                'lineTotal' => $lineTotal,
            ];
        }

        return $this->render('panier/checkout.html.twig', [
            'items' => $items,
            'totalGeneral' => $totalGeneral,
        ]);
    }

    // ✅ POST: إنشاء commande + items + inscription
    $commande = new Commande();
    $commande->setUser($user);
    $commande->setStatut('en_attente');

    $total = 0.0;

    foreach ($panier as $coursId => $qty) {
        $cours = $coursRepo->find($coursId);
        if (!$cours) continue;

        $unitPrice = (float) $cours->getPrix();
        $lineTotal = $unitPrice * (int) $qty;
        $total += $lineTotal;

        $item = new CommandeItem();
        $item->setCommande($commande);
        $item->setCours($cours);
        $item->setQuantity((int) $qty);
        $item->setUnitPrice(number_format($unitPrice, 2, '.', ''));

        $em->persist($item);

        // ✅ منع تكرار inscription
        $existing = $em->getRepository(Inscription::class)->findOneBy([
            'user' => $user,
            'cours' => $cours,
        ]);

        if (!$existing) {
            $inscription = new Inscription();
            $inscription->setUser($user);
            $inscription->setCours($cours);
            $inscription->setCreatedAt(new \DateTimeImmutable());
            $em->persist($inscription);
        }
    }

    $commande->setTotal(number_format($total, 2, '.', ''));
    $em->persist($commande);
    $em->flush();

    $session->remove('panier');

    $this->addFlash('success', 'Commande créée avec succès ✅');
    return $this->redirectToRoute('panier_index');
}
}
