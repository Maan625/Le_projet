<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        // ✅ إذا POST: نحفظ الرسالة
        if ($request->isMethod('POST')) {
            $nom = trim((string) $request->request->get('nom'));
            $email = trim((string) $request->request->get('email'));
            $sujet = trim((string) $request->request->get('sujet'));
            $message = trim((string) $request->request->get('message'));

            if ($nom === '' || $email === '' || $sujet === '' || $message === '') {
                $this->addFlash('danger', 'Veuillez remplir tous les champs.');
                return $this->redirectToRoute('contact');
            }

            $contact = new ContactMessage();
            $contact->setNom($nom);
            $contact->setEmail($email);
            $contact->setSujet($sujet);
            $contact->setMessage($message);
            $contact->setCreatedAt(new \DateTimeImmutable());
            $contact->setIsRead(false);

            $em->persist($contact);
            $em->flush();

            $this->addFlash('success', 'Message envoyé ✅ Merci, nous vous répondrons bientôt.');
            return $this->redirectToRoute('contact');
        }

        // ✅ GET: عرض الصفحة
        return $this->render('contact/index.html.twig');
    }
}