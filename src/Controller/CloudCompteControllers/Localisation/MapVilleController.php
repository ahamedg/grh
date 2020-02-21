<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapVille;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapVilleController extends Controller
{
    /**
     * @Route( "/ville", name = "ville" )
     * Permet d'avoir la liste des villes
     */
    public function loading(Request $request)
    {
        $listMapVille = $this->getListMapVille();

        $mapVille = $this-> get ('knp_paginator')->paginate(
            // Doctrine Query, not results
            $listMapVille,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            15
        );

        return $this->render('cloud_compte/localisation/ville.html.twig', [
            'mapVille' => $mapVille,
        ]);
    }

    /*
   * Permet d'avoir la liste des villes de la base !
   * @return array
   * */
    private function getListMapVille()
    {
        $repo = $this->getDoctrine()->getRepository(MapVille::class);
        return $repo->findAll();
    }
}
