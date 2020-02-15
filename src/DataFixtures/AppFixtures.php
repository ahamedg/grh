<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\MapCommune;
use App\Entity\Utilisateur;
use App\Entity\CloudSection;
use Faker\Provider\DateTime;
use App\Entity\MapPrefecture;
use App\Entity\CloudTypeBudget;
use App\Entity\CloudTypeCompte;
use App\Entity\CloudTypeService;
use App\Entity\CloudCategorieService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create("fr-FR");

        //Nous gérons les utilisateurs
        $listUtilisateur = [];
        $genres = ['male', 'female'];

        for ($i = 1; $i <= 3; $i++) {
            $utilisateur = new Utilisateur();

            $genre = $faker->randomElement($genres);
            $picture = 'https://randomuser.me/api/portraits/';
            $pictureId = $faker->numberBetween(1, 99) . 'jpg';
            $picture .= ($genre === 'male' ? 'men/' : 'women/') . $pictureId;

            $password = $this->encoder->encodePassword($utilisateur, 'grh');

            $rand = rand(100, 1000);
            $code = "CODE$rand";
            $utilisateur->setUsername($faker->firstName($genre))
                ->setPassword($password)
                ->setCode($code)
                ->setChangePassword($password)
                ->setDateLostPassword($faker->dateTime)
                ->setEmailCompte($faker->email)
                ->setLostPasswordUrl($faker->email)
                ->setTelephone1Utilisateur($faker->phoneNumber)
                ->setNomPhotoProfil($picture);

            $manager->persist($utilisateur);
            //$listUtilisateur[] = $utilisateur;
            $manager->flush();
        }


        //Nous gérons les catégories services
        /*for ($i = 1; $i <= 5; $i++) {
            $cloudCategorieService = new CloudCategorieService();

            $cloudCategorieService->setCode("CODECAT$i")
                ->setLibelle("Organisation **==$i")
                ->setDescription("Description ***===$i");
            $manager->persist($cloudCategorieService);
        }

        //Nous gérons les types compte
        for ($i = 1; $i <= 5; $i++) {
            $cloudTypeCompte = new CloudTypeCompte();

            $cloudTypeCompte->setCode("CODETYC$i")
                ->setLibelle("Type compte **==$i")
                ->setDescription("Description ***===$i");
            $manager->persist($cloudTypeCompte);
        }

        //Nous gérons les types service
        for ($i = 1; $i <= 5; $i++) {
            $cloudTypeService = new CloudTypeService();

            $cloudTypeService->setCode("CODETYS$i")
                ->setLibelle("Type service **==$i")
                ->setDescription("Description ***===$i");
            $manager->persist($cloudTypeService);
        }

        //Nous gérons les types budget
        for ($i = 1; $i <= 5; $i++) {
            $cloudTypeBudget = new CloudTypeBudget();

            $cloudTypeBudget->setCode("CODETYB$i")
                ->setLibelle("Type budget **==$i")
                ->setDescription("Description ***===$i");
            $manager->persist($cloudTypeBudget);
        }

        //Nous gérons les sections
        for ($i = 1; $i <= 5; $i++) {
            $cloudSection = new CloudSection();

            $cloudSection->setCode("CODESEC$i")
                ->setLibelle("Section cloud **==$i")
                ->setDescription("Description ***===$i");
            $manager->persist($cloudSection);
        }*/

        // //Nous gérons les préfectures
        // for ($i = 1; $i <= 5; $i++) {
        //     $mapPrefecture = new MapPrefecture();

        //     $mapPrefecture->setCode("CODESEC$i")
        //         ->setLibelle("Préfecture **==$i")
        //         ->setDescription("Description ***===$i")
        //         ->setStates("1");
        //     $manager->persist($mapPrefecture);
        // }

        // //Nous gérons les communes
        // for ($i = 1; $i <= 5; $i++) {
        //     $mapCommune = new MapCommune();

        //     $mapCommune->setCode("CODESEC$i")
        //         ->setLibelle("Commune **==$i")
        //         ->setDescription("Description ***===$i");
        //     $manager->persist($mapCommune);
        // }

        $manager->flush();
    }
}
