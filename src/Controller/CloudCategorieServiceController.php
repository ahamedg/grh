<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends AbstractController
{
    /**
     * @Route("/cloud/categorie/service", name="cloud_categorie_service")
     */
    public function index()
    {
        return $this->render('cloud_categorie_service/index.html.twig', [
            'controller_name' => 'CloudCategorieServiceController',
        ]);
    }
}
