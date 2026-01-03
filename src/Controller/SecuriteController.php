<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecuriteController extends AbstractController
{
    #[Route('/connexion', name: 'connexion')]
    public function index(): Response
    {
        return $this->render('connexion/index.html.twig');
    }

    #[Route('/inscription', name: 'inscription')]
public function inscription(): Response
{
    return $this->render('inscription/index.html.twig');
}
}
