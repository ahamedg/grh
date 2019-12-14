<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudCompteController extends AbstractController
{
    /**
     * @Route("/cloud/compte", name="cloud_compte")
     */
    public function index()
    {
        return $this->render('cloud_compte/index.html.twig', [
            'controller_name' => 'CloudCompteController',
        ]);
    }
}
