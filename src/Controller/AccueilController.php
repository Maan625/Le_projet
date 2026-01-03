<?php

namespace App\Controller;
use App\Repository\CoursRepository;
use App\Repository\CategorieRepository;

use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(CoursRepository $coursRepository): Response
    {
        $cours = $coursRepository->findBy(['id' => [3, 5, 9, 15, 20, 12, 19, 10]]);

        return $this->render('accueil/index.html.twig', [
            'cours' => $cours,
        ]);
    }
}
