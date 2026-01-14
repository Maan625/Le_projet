<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CoursRepository;


final class AProposController extends AbstractController
{
    #[Route('/a-propos', name: 'a_propos')]
    public function index(CoursRepository $coursRepository): Response
    {
        $cours = $coursRepository->findAll();

        return $this->render('a_propos/index.html.twig', [
            'cours' => $cours,
        ]);
    }
}
