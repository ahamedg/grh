<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapCommuneController extends AbstractController
{
    /**
     * @Route("/map/commune", name="map_commune")
     */
    public function index()
    {
        return $this->render('map_commune/index.html.twig', [
            'controller_name' => 'MapCommuneController',
        ]);
    }
}
