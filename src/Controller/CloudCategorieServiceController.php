<?php

namespace App\Controller;

use App\Entity\CloudCategorieService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends AbstractController
{
    /**
     * @Route("/cloud/categorie/service", name="cloud_categorie_service")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);

        $listCloudCategorieService = $repo ->findAll();

        return $this->render('cloud_categorie_service/index.html.twig', [
            'listCloudCategorieService' => $listCloudCategorieService,
        ]);
    }
}
