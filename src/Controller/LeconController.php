<?php

namespace App\Controller;

use App\Repository\LeconRepository;
use App\Repository\InscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LeconController extends AbstractController
{
    #[Route('/lecon/{id}', name: 'lecon_show', requirements: ['id' => '\d+'])]
    public function show(
        int $id,
        LeconRepository $repo,
        InscriptionRepository $inscriptionRepo
    ): Response {
        $lecon = $repo->find($id);

        if (!$lecon) {
            throw $this->createNotFoundException('Leçon introuvable');
        }

        $cours = $lecon->getCours();

        // ✅ 1) إذا الدرس مجاني => نعرضه للجميع
        if (!$lecon->isEstGratuite()) {

            // ✅ 2) إذا غير مجاني: لازم يكون المستخدم مسجل
            if (!$this->getUser()) {
                $this->addFlash('info', 'Veuillez vous connecter pour accéder à cette leçon.');
                return $this->redirectToRoute('connexion'); // غيّرها إذا اسم route login عندك مختلف
            }

            // ✅ 3) لازم يكون عنده Inscription لهذا الكورس
            $inscription = $inscriptionRepo->findOneBy([
                'user' => $this->getUser(),
                'cours' => $cours,
            ]);

            if (!$inscription && !$this->isGranted('ROLE_ADMIN')) {
                $this->addFlash('warning', 'Cette leçon est réservée aux personnes inscrites à ce cours.');
                return $this->redirectToRoute('cours_show', ['id' => $cours->getId()]);
                // إذا عندك show بالـ id بدل slug بدّلها:
                // return $this->redirectToRoute('cours_show', ['id' => $cours->getId()]);
            }
        }

        // playlist = كل دروس نفس الكورس مرتبة
        $playlist = $repo->findBy(['cours' => $cours], ['position' => 'ASC']);

        $previousLecon = $repo->findOneBy(['cours' => $cours, 'position' => $lecon->getPosition() - 1]);
        $nextLecon     = $repo->findOneBy(['cours' => $cours, 'position' => $lecon->getPosition() + 1]);
        $canAccessPremium = false;

        if ($this->getUser() && ($this->isGranted('ROLE_ADMIN') || $inscriptionRepo->findOneBy([
            'user' => $this->getUser(),
            'cours' => $cours,
        ]))) {
            $canAccessPremium = true;
        }

        return $this->render('lecon/show.html.twig', [
            'lecon' => $lecon,
            'playlist' => $playlist,
            'previousLecon' => $previousLecon,
            'nextLecon' => $nextLecon,
            'canAccessPremium' => $canAccessPremium,
        ]);
    }
}
