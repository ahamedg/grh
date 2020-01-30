<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudCompteController extends AbstractController
{
    /**
     * @Route("/accueil/cloud_compte", name="cloud_compte_nouveau")
     */
    public function index()
    {
        return $this->render('cloud_compte/compte/nouveauCloudCompte.html.twig');
    }
}
