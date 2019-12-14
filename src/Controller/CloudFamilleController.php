<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudFamilleController extends AbstractController
{
    /**
     * @Route("/cloud/famille", name="cloud_famille")
     */
    public function index()
    {
        return $this->render('cloud_famille/index.html.twig', [
            'controller_name' => 'CloudFamilleController',
        ]);
    }
}
