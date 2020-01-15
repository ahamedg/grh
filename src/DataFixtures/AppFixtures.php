<?php

namespace App\DataFixtures;

use App\Entity\CloudCategorieService;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create("fr-FR");

        //Nous gérons les utilisateurs
        $listUtilisateur = [];
        for ($i = 1; $i <= 3; $i++) {
            $utilisateur = new Utilisateur();
            $rand = rand(100, 1000);
            $code = "CODE$rand";
            $utilisateur->setUsername("gobi")
                ->setChangePassword("gobi$i")
                ->setCode($code)
                ->setChangePassword(null)
                ->setDateLostPassword(null)
                ->setEmailCompte($faker->email)
                ->setLostPasswordUrl("lostgobi")
                ->setNomPhotoProfil($faker->imageUrl());

            $manager->persist($utilisateur);
            $listUtilisateur[]=$utilisateur;
        }


        //Nous gérons les catégories services
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
