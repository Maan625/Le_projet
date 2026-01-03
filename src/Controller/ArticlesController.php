<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticlesController extends AbstractController
{
    #[Route('/articles-techniques', name: 'articles-techniques')]
    public function index(): Response
    {
        return $this->render('articles-techniques/index.html.twig');
    }

    #[Route('/articles-techniques/{slug}', name: 'article_technique_show')]
    public function show(string $slug): Response
{
    return $this->render("articles-techniques/$slug.html.twig");
}

}
