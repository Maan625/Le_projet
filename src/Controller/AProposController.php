<?php

namespace App\Controller;
use App\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CoursRepository;


final class AProposController extends AbstractController
{
    #[Route('/a-propos', name: 'a_propos')]
    public function index(CoursRepository $coursRepository): Response
    {
        $cours = $coursRepository->findBy(['formateur' => ['Adam al ali', 'Nadia zen', 'John Doe']]);

        return $this->render('a_propos/index.html.twig', [
            'cours' => $cours,
        ]);
    }
}
