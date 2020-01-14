<?php

namespace App\Controller\CompteControllers\Params;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudFamilleCompteController extends AbstractController
{
    /**
     * @Route("/compte/famille_compte", name="famille_compte")
     */

    public function index()
    {
        return $this->render('/cloud_compte/params/cloudFamilleCompte.html.twig', [
            'controller_name' => 'CloudFamilleCompteController',
        ]);
    }
}
