<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapPaysController extends AbstractController
{
    /**
     * @Route("/map/pays", name="map_pays")
     */
    public function index()
    {
        return $this->render('map_pays/index.html.twig', [
            'controller_name' => 'MapPaysController',
        ]);
    }
}
