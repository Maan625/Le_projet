<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LivresInformatiquesController extends AbstractController
{
   #[Route('/livres_informatiques', name: 'livres_informatiques')]
public function index(): Response
{
    return $this->render('livres_informatiques/index.html.twig');
}
}
