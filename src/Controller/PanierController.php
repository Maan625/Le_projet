<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\CoursRepository;

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
            'seccess' => true,
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
}
