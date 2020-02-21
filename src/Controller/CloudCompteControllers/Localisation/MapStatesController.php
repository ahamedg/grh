<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapStates;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapStatesController extends Controller
{
    /**
     * @Route( "/states", name = "states" )
     * Permet d'avoir la liste des states/régions
     */
    public function loading(Request $request)
    {
        $listMapStates = $this->getListMapStates();

        $mapStates = $this-> get ('knp_paginator')->paginate(
            // Doctrine Query, not results
            $listMapStates,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            15
        );

        return $this->render('cloud_compte/localisation/states.html.twig', [
            'mapStates' => $mapStates,
        ]);
    }

    /*
   * Permet d'avoir la liste des states/régions de la base !
   * @return array
   * */
    private function getListMapStates()
    {
        $repo = $this->getDoctrine()->getRepository(MapStates::class);
        return $repo->findAll();
    }
}
