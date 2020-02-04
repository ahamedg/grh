<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapVilleController extends AbstractController
{
    /**
     * @Route("/map/ville", name="map_ville")
     */
    public function index()
    {
        return $this->render('map_ville/index.html.twig', [
            'controller_name' => 'MapVilleController',
        ]);
    }
}
