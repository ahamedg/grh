<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudTypeServiceController extends AbstractController
{
    /**
     * @Route("/cloud/type/service", name="cloud_type_service")
     */
    public function index()
    {
        return $this->render('cloud_type_service/index.html.twig', [
            'controller_name' => 'CloudTypeServiceController',
        ]);
    }
}
