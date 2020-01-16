<?php

namespace App\DataFixtures;

use App\Entity\CloudCategorieService;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Provider\DateTime;
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
            $picture .= ($genre == 'male' ? 'men/' : 'women/') . $pictureId;

            $password = $this->encoder->encodePassword($utilisateur,'password');

            $rand = rand(100, 1000);
            $code = "CODE$rand";
            $utilisateur->setUsername($faker->firstName($genre))
                ->setPassword($password)
                ->setCode($code)
                ->setChangePassword($password)
                ->setDateLostPassword($faker->dateTime)
                ->setEmailCompte($faker->email)
                ->setLostPasswordUrl($faker->email)
                ->setNomPhotoProfil($picture);

            $manager->persist($utilisateur);
            $listUtilisateur[] = $utilisateur;
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
