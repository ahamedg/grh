<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapVille;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapVilleController extends AbstractController
{
    /**
     * @Route( "/ville", name = "ville" )
     * Permet d'avoir la liste des villes
     */
    public function loading()
    {
        $listMapVille = $this->getListMapVille();

        return $this->render('cloud_compte/localisation/ville.html.twig', [
            'listMapVille' => $listMapVille,
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
