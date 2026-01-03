<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LeconController extends AbstractController
{
    #[Route('/lecon/{slug}', name: 'lecon_show')]
    public function show(string $slug): Response
    {
        $lecons = $this->getLecons();

        if (!isset($lecons[$slug])) {
            throw $this->createNotFoundException('Leçon introuvable');
        }

        return $this->render('lecon/show.html.twig', [
            'slug' => $slug,
            'lecon' => $lecons[$slug],
        ]);
    }

    private function getLecons(): array
    {
        return [
            'coeur-5g' => [
                'titre' => 'Cours Cœur 5G | Architecture, Protocoles et Déploiement',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours Cœur 5G  Architecture, Protocoles et Déploiement.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Comprendre l’architecture du cœur 5G (5GC), les protocoles, et le déploiement.",
            ],
            'satellite' => [
                'titre' => 'Cours en communications satellitaires',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours en communications satellitaires.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Les principes des liaisons satellitaires, bandes de fréquences et architectures.",
            ],
            '5g-a-z' => [
                'titre' => 'Cours 5G complète de A à Z',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours 5G complète  de A à Z.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Panorama complet de la 5G : radio, core, slicing et cas d’usage.",
            ],
            'reseaux-mobiles-technicien-terrain' => [
                'titre' => 'Réseaux mobiles pour technicien de terrain',

                'duree' => '20h',
                'nb_lecons' => 10,
                'prix' => '149€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours aux réseaux mobiles pour technicien de terrain.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Planification FH : profils, budgets de liaison, zones de Fresnel, paramétrage et interprétation des résultats.",

            ],
            'logiciel-pathloss' => [
                'titre' => 'Cours au logiciel Pathloss',

                'duree' => '180h',
                'nb_lecons' => 96,
                'prix' => '299€',
                'formateur' => 'John Doe',

                'image' => 'Images/cours_réseaux_informatiques/Cours au logiciel Pathloss.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Planification FH : profils, budgets de liaison, zones de Fresnel, paramétrage et interprétation des résultats.",
            ],
            'communications-integrees' => [
                'titre' => 'Cours des communications intégrées',

                'duree' => '300h',
                'nb_lecons' => 150,
                'prix' => '499€',
                'formateur' => 'John Doe',

                'image' => 'Images/cours_communication/Cours des communications intégrées.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Voix, data, collaboration : principes, architecture, services et intégration en entreprise.",
            ],
            'sans-fil-forfait-mobile-bout-a-bout' => [
                'titre' => 'Sans fil (forfait mobile) : BOUT à BOUT',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',

                'image' => 'Images/cours_communication/Cours sans fil (forfait mobile) BOUT à BOUT.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Du terminal au réseau : signal, accès radio, cœur, transport et services bout-en-bout.",
            ],
            'transmission-fibre-optique' => [
                'titre' => 'Cours de transmission par fibre optique',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours de transmission par fibre optique.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Notions optiques, atténuation, dispersion, connectique, mesures (OTDR) et bonnes pratiques.",
            ],
            'simulation-systemes-sans-fil' => [
                'titre' => 'Cours en simulation de systèmes sans fil',
                'duree' => '400h',
                'nb_lecons' => 196,
                'prix' => '399€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours en simulation de systèmes sans fil.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Modélisation, canaux radio, scénarios, interprétation des résultats et validation.",
            ],
            'introduction-fibre-debutants' => [
                'titre' => 'Introduction à la fibre optique pour débutants',
                'duree' => '920h',
                'nb_lecons' => 450,
                'prix' => '1199€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours  Introduction à la fibre optique pour débutants.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Comprendre la fibre, les connecteurs, les installations FTTH et les règles de sécurité.",
            ],
            'cables-sous-marins' => [
                'titre' => 'Cours sur les câbles sous-marins',
                'duree' => '400h',
                'nb_lecons' => 196,
                'prix' => '399€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours sur les câbles sous-marins.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Architecture, pose, répéteurs, capacité, maintenance et enjeux internationaux.",
            ],
            'certification-a-plus' => [
                'titre' => 'Certification A+ : technologies de l’information',
                'duree' => '400h',
                'nb_lecons' => 196,
                'prix' => '399€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours A.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Matériel, systèmes, dépannage, support et bases réseau : préparation structurée à l’A+.",
            ],
            'reseaux-entreprise-avances' => [
                'titre' => 'Réseaux d’entreprise avancés : routage, commutation, serveurs et pare-feu',
                'duree' => '920h',
                'nb_lecons' => 450,
                'prix' => '1199€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours sur les réseaux d’entreprise avancés  routage, commutation, serveurs et pare-feu.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "VLAN, routage, services, sécurité, et scénarios d’architecture en entreprise.",
            ],
            'systemes-ibs-niveaux-1-3' => [
                'titre' => 'Systèmes IBS (Indoor Building Solution) – niveaux 1 à 3',
                'duree' => '400h',
                'nb_lecons' => 196,
                'prix' => '399€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours sur les systèmes IBS (Indoor Building Solution) – niveaux 1 à 3.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Couverture indoor : design, équipements, tests, optimisation et bonnes pratiques.",
            ],
            'acces-mobile-au-coeur-du-reseau' => [
                'titre' => "Cours de l’accès mobile au cœur du réseau",
                'duree' => '6h',
                'nb_lecons' => 3,
                'prix' => '90€',
                'formateur' => 'John Doe',
                'image' => "Images/cours_communication/Cours de l'accès mobile au cœur du réseau.png",
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "De la radio au core : accès, transport, signalisation et services.",
            ],
            'transmission-micro-ondes-bout-a-bout' => [
                'titre' => 'Transmission micro-ondes (BOUT à BOUT)',
                'duree' => '20h',
                'nb_lecons' => 10,
                'prix' => '149€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours de transmission micro-ondes (BOUT à BOUT).png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Faisceaux hertziens : dimensionnement, fréquences, interférences et mise en œuvre.",
            ],
            'techniques-modulation-codage' => [
                'titre' => 'Techniques de modulation et de codage',
                'duree' => '180h',
                'nb_lecons' => 96,
                'prix' => '299€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_communication/Cours en techniques de modulation et de codage.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Modulations, codage canal, BER, performance et exemples en systèmes numériques.",
            ],
            'ccna-fondamentaux' => [
                'titre' => 'CCNA : maîtrisez les fondamentaux du réseau',
                'duree' => '300h',
                'nb_lecons' => 150,
                'prix' => '499€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours complet CCNA  Maîtrisez les fondamentaux du réseau.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Adressage IP, switching, routage, VLAN, ACL : une préparation solide au CCNA.",
            ],
            'ccnp-cisco-professionnel' => [
                'titre' => 'CCNP : réseaux professionnels Cisco',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours complet CCNP – Préparation aux réseaux professionnels Cisco.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', 
                'description' => "Approfondissement : routage avancé, services, sécurité et scénarios pro Cisco.",
            ],
            'introduction-iot-transformation-digitale' => [
                'titre' => 'Introduction à l’IoT (IdO) et à la transformation digitale',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/iot.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Capteurs, protocoles, plateformes, cas d’usage et transformation digitale.",
            ],
            'reseaux-informatiques-avances' => [
                'titre' => 'Cours avancé en réseaux informatiques',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours avencée en réseaux informatiques.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "Switching/routage avancés, services réseau, bonnes pratiques et architecture.",
            ],
            'mikrotik-administration-routage' => [
                'titre' => 'MikroTik : administration et routage pratique',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours MikroTik – Administration et routage pratique.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "RouterOS : interfaces, firewall, NAT, routage, VPN et bonnes pratiques.",
            ],
            'voip-installation-configuration-avancee' => [
                'titre' => 'VoIP : de l’installation à la configuration avancée',
                'duree' => '2h',
                'nb_lecons' => 5,
                'prix' => '100€',
                'formateur' => 'John Doe',
                'image' => 'Images/cours_réseaux_informatiques/Cours VoIP – De l’installation à la configuration avancée.png',
                'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'description' => "SIP, RTP, codecs, QoS et mise en œuvre : de zéro à une config avancée.",
            ],
        ];
    }
}
