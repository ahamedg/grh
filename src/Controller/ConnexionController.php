<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/login", name="connexion")
     */
    public function index()
    {
        return $this->render('connexion/login.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }
}
