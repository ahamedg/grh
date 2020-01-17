<?php

namespace App\Controller;

use App\Entity\CloudCategorieService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudParamsController extends AbstractController
{
    /**
     * @Route("/cloud/params", name="cloud_params")
     */

    public function index()
    {
        $numeroLigne = 0;
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);
        $listCloudCategorieService = $repo->findAll();

        return $this->render('cloud_params/index.html.twig', [
            'controller_name' => 'CloudParamsController',
            'listCloudCategorieService' => $listCloudCategorieService,
            'numeroLigne' => $numeroLigne
        ]);
    }


    /**
     * @return int
     */
    public function getNumeroLigne(): int
    {
        return $this->numeroLigne++;
    }

    /**
     * @param int $numeroLigne
     */
    public function setNumeroLigne(int $numeroLigne): void
    {
        $this->numeroLigne = $numeroLigne;
    }
}
