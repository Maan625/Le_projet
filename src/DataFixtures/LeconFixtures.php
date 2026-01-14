<?php
namespace App\DataFixtures;

use App\Entity\Lecon;
use App\Repository\CoursRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LeconFixtures extends Fixture
{
    public function __construct(private CoursRepository $coursRepo) {}

    public function load(ObjectManager $manager): void
    {
        $coursList = $this->coursRepo->findAll();

        foreach ($coursList as $cours) {

            // إذا عندك nombreLecons في Cours نستعمله، وإلا نعمل رقم عشوائي للعرض
            $count = method_exists($cours, 'getNombreLecons') && $cours->getNombreLecons()
                ? (int) $cours->getNombreLecons()
                : random_int(5, 25);

            for ($i = 1; $i <= $count; $i++) {
                $lecon = new Lecon();
                $lecon->setTitre("Leçon $i : " . $cours->getTitre());
                $lecon->setVideoUrl("https://www.youtube.com/embed/dQw4w9WgXcQ"); // فيديو تجريبي
                $lecon->setPosition($i);
                $lecon->setEstGratuite($i === 1); // أول درس مجاني
                $lecon->setCours($cours);

                $manager->persist($lecon);
            }
        }

        $manager->flush();
    }
}
