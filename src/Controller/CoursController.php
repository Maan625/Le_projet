<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\InscriptionRepository;


use App\Repository\LeconRepository;


final class CoursController extends AbstractController
{
    #[Route('/cours', name: 'cours')]
    public function index(CoursRepository $coursRepository): Response
    {
        
        $cours = $coursRepository->findAll();

        return $this->render('cours/tout_les_cours.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/cours/communication', name: 'cours_communication')]
    public function coursCommunication(CoursRepository $coursRepository): Response
    {
        // إذا كانت categorie_id = 1
        $cours = $coursRepository->findBy(['categorie' => 1]);

        return $this->render('cours/communication/communication.html.twig', [
            'cours' => $cours,
            'showFilter' => true

        ]);
    }
    #[Route('/cours/best', name: 'cours_best')]
    public function best(CoursRepository $repo): Response
    {
        $cours = $repo->findBy(['nombreLecons' => [20, 25]]); // عدّل note حسب عمودك

        return $this->render('cours/tout_les_cours.html.twig', [
            'cours' => $cours,
            'pageTitle' => 'Nos meilleurs cours',
            'pageDesc' => 'Nos meilleurs cours regroupent des cours spécialisés en communication et technologies de l’information, conçus pour développer des compétences techniques pratiques et professionnelles.',
            'showFilter' => false

        ]);
    }
    #[Route('/cours/new', name: 'cours_new')]
    public function new(CoursRepository $repo): Response
    {
        $cours = $repo->findBy([], ['dateCreation' => 'DESC'], 7);

        return $this->render('cours/tout_les_cours.html.twig', [
            'cours' => $cours,
            'pageTitle' => 'Nos nouveaux formations',
            'pageDesc'  => "Nos nouvelles formations présentent les derniers cours en communication et technologies de l’information, adaptés aux besoins actuels du marché et à l’évolution des compétences techniques.",
            'showFilter' => false
        ]);
    }


    #[Route('/cours/informatique', name: 'cours_informatique')]
    public function coursInformatique(CoursRepository $coursRepository): Response
    {
        // إذا كانت categorie_id = 2
        $cours = $coursRepository->findBy(['categorie' => 2]);

        return $this->render('cours/informatique/resuaux_informatiques.html.twig', [
            'cours' => $cours
        ]);
    }

    // صفحة تفاصيل كورس (مؤقتاً بالـ id لأن جدولك ما فيه slug)

// ...

#[Route('/cours/{id}', name: 'cours_show', requirements: ['id' => '\d+'])]
public function show(
    int $id,
    CoursRepository $coursRepo,
    LeconRepository $leconRepo,
    InscriptionRepository $inscriptionRepo
): Response
{
    $cours = $coursRepo->find($id);

    if (!$cours) {
        throw $this->createNotFoundException('Cours introuvable');
    }
     
    $lecons = $leconRepo->findBy(
        ['cours' => $cours],
        ['position' => 'ASC']
    );

    $hasAccess = false;
    $canAccessPremium = false;
    
    if ($this->getUser()) {
        if ($this->isGranted('ROLE_ADMIN')) {
            $canAccessPremium = true;
        } else {
            $inscription = $inscriptionRepo->findOneBy([
                'user' => $this->getUser(),
                'cours' => $cours,
            ]);
            $canAccessPremium = (bool) $inscription;
        $hasAccess = (bool) $inscription;

        }
    }
    $addToPainierRoute = $this->generateUrl('panier_add_ajax', ['id' => $cours->getId()]);
    return $this->render('cours/show.html.twig', [
        'cours' => $cours,
        'lecons' => $lecons,
        'hasAccess' => $hasAccess,
        'addToPainierRoute' => $addToPainierRoute,
        'canAccessPremium' => $canAccessPremium,
    ]);
}



 
}
