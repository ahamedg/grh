<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapPays;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MapPaysController extends AbstractController
{

    /**
     * @Route( "/pays", name = "pays" )
     * Permet d'avoir la liste des pays
     */
    public function loading()
    {
        $listMapPays = $this->getListMapPays();

        return $this->render('cloud_compte/localisation/pays.html.twig', [
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
