<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapPrefectureController extends AbstractController
{
    /**
     * @Route("/map/prefecture", name="map_prefecture")
     */
    public function index()
    {
        return $this->render('map_prefecture/index.html.twig', [
            'controller_name' => 'MapPrefectureController',
        ]);
    }
}
