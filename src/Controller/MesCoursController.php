<?php

namespace App\Controller;

use App\Repository\InscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class MesCoursController extends AbstractController
{
    #[Route('/mes-cours', name: 'mes_cours')]
    #[IsGranted('ROLE_USER')]
    public function index(InscriptionRepository $inscriptionRepo): Response
    {
        $user = $this->getUser();

        $inscriptions = $inscriptionRepo->findBy(
            ['user' => $user],
            ['createdAt' => 'DESC']
        );

        // ✅ تحويل inscriptions إلى cours بدون تكرار
        $coursMap = [];
        foreach ($inscriptions as $inscription) {
            $cours = $inscription->getCours();
            $coursMap[$cours->getId()] = $cours; // نفس id يتبدّل وما يتكرر
        }

        // إذا بدك نفس ترتيب createdAt (الأحدث أولاً) خليها كما هي:
        $cours = array_values($coursMap);

        return $this->render('user/mes_cours.html.twig', [
            'cours' => $cours,
        ]);
    }
}