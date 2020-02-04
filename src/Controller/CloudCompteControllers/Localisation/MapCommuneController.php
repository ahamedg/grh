<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapCommune;
use App\Form\MapCommuneFormType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MapCommuneController extends AbstractController
{

    /**
     * @Route( "/commune", name = "commune" )
     * Permet d'avoir la liste des communes
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listMapCommune = $this->getListMapCommune();
        $mapCommune = new MapCommune();

        $form = $this->createForm(MapCommuneFormType::class, $mapCommune);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump( $mapCommune );
            $rand = random_int(100, 1000);
            $code = "CODECOM$rand";
            ///dump( $code );
            $mapCommune->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($mapCommune);
            $manager->flush();
            $listMapCommune = $this->getListMapCommune();
            //$MapCommune = new MapCommune();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $MapCommune;
        }
        return $this->render('cloud_compte/localisation/commune.html.twig', [
            'form' => $form->createView(),
            'listMapCommune' => $listMapCommune,
        ]);
    }

    /*
     * Permet d'avoir la liste des commune de la base !
    * @return array
    * */

    private function getListMapCommune()
    {
        $repo = $this->getDoctrine()->getRepository(MapCommune::class);
        return $repo->findAll();
    }
}
