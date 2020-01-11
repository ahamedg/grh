<?php

namespace App\DataFixtures;

use App\Entity\CloudCategorieService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 15; $i++) {
            $cloudCategorieService = new CloudCategorieService();

            $cloudCategorieService->setCode("CODECAT$i")
                ->setLibelle("Organisation **==$i")
                ->setDescription("Description ***===$i");
            $manager->persist($cloudCategorieService);
        }

        $manager->flush();
    }
}
