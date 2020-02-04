<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapStates;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapStatesController extends AbstractController
{
    /**
     * @Route( "/states", name = "states" )
     * Permet d'avoir la liste des states/régions
     */
    public function loading()
    {
        $listMapStates = $this->getListMapStates();

        return $this->render('cloud_compte/localisation/states.html.twig', [
            'listMapStates' => $listMapStates,
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
