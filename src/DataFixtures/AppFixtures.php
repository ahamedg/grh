<?php

namespace App\DataFixtures;

use App\Entity\CloudCategorieService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cloudCategorieService = new CloudCategorieService();

        $cloudCategorieService->setCode("CODECAT")
            ->setLibelle("Organisation")
            ->setDescription("");

        // $product = new Product();
        $manager->persist($cloudCategorieService);
        $manager->flush();
    }
}
