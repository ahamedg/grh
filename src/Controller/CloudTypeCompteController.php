<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudTypeCompteController extends AbstractController
{
    /**
     * @Route("/cloud/type/compte", name="cloud_type_compte")
     */
    public function index()
    {
        return $this->render('cloud_type_compte/index.html.twig', [
            'controller_name' => 'CloudTypeCompteController',
        ]);
    }
}
