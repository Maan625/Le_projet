<?php

namespace App\Controller;

use App\Repository\LeconRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LeconController extends AbstractController
{
 #[Route('/lecon/{id}', name: 'lecon_show', requirements: ['id' => '\d+'])]
public function show(int $id, LeconRepository $repo): Response
{
    $lecon = $repo->find($id);

    if (!$lecon) {
        throw $this->createNotFoundException('Leçon introuvable');
    }

    // حماية: لو بدك تمنع غير المجاني
    if (!$lecon->isEstGratuite()) {
        throw $this->createAccessDeniedException('Cette leçon est réservée.');
    }

    $cours = $lecon->getCours();

    // playlist = كل دروس نفس الكورس مرتبة
    $playlist = $repo->findBy(
        ['cours' => $cours],
        ['position' => 'ASC']
    );

    $previousLecon = $repo->findOneBy(['cours' => $cours, 'position' => $lecon->getPosition() - 1]);
    $nextLecon     = $repo->findOneBy(['cours' => $cours, 'position' => $lecon->getPosition() + 1]);

    return $this->render('lecon/show.html.twig', [
        'lecon' => $lecon,
        'playlist' => $playlist,
        'previousLecon' => $previousLecon,
        'nextLecon' => $nextLecon,
    ]);
}



}

