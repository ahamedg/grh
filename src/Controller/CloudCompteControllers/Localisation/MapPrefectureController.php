<?php

namespace App\Controller\CloudCompteControllers\Localisation;

use App\Entity\MapPrefecture;
use App\Form\MapPrefectureFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapPrefectureController extends AbstractController
{
    /**
     * @Route( "/prefecture", name = "prefecture" )
     * Permet d'avoir la liste des préfecture
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        $listMapPrefecture = $this->getListMapPrefecture();
        $mapPrefecture = new MapPrefecture();

        $form = $this->createForm(MapPrefectureFormType::class, $mapPrefecture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump( $mapPrefecture );
            $rand = random_int(100, 1000);
            $code = "CODEPRF$rand";
            ///dump( $code );
            $mapPrefecture->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($mapPrefecture);
            $manager->flush();
            $listMapPrefecture = $this->getListMapPrefecture();
            //$MapPrefecture = new MapPrefecture();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $MapPrefecture;
        }
        return $this->render('cloud_compte/localisation/prefecture.html.twig', [
            'form'=>$form->createView(),
            'listMapPrefecture' => $listMapPrefecture,
        ]);
    }

    /*
   * Permet d'avoir la liste des préfectures de la base !
    * @return array
    * */

    private function getListMapPrefecture()
    {
        $repo = $this->getDoctrine()->getRepository(MapPrefecture::class);
        return $repo->findAll();
    }
}
