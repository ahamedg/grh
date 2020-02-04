<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapStatesController extends AbstractController
{
    /**
     * @Route("/map/states", name="map_states")
     */
    public function index()
    {
        return $this->render('map_states/index.html.twig', [
            'controller_name' => 'MapStatesController',
        ]);
    }
}
