<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapPays;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapPaysController extends Controller
{

    /**
     * @Route( "/pays", name = "pays" )
     * Permet d'avoir la liste des pays
     */
    public function loading(Request $request)
    {
        $listMapPays = $this->getListMapPays();

        $mapPays = $this-> get ('knp_paginator')->paginate(
            // Doctrine Query, not results
            $listMapPays,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            15
        );


        return $this->render('cloud_compte/localisation/pays.html.twig', [
            'mapPays' => $mapPays,
            'listMapPays' => $listMapPays,
        ]);
    }

    /*
    * Permet d'avoir la liste des pays de la base !
    * @return array
    * */
    private function getListMapPays()
    {
        $repo = $this->getDoctrine()->getRepository(MapPays::class);
        return $repo->findAll();
    }
}
