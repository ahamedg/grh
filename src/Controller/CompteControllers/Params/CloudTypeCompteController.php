<?php

namespace App\Controller\CompteControllers\Params;

use App\Entity\CloudTypeCompte;

use App\Form\CloudCompte\Params\CloudTypeCompteFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeCompteController extends AbstractController
{

    /*
     * @
     * */
    /*public function __construct()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeCompte::class);
        return $repo->findAll();
    }*/

    private $numeroLigne = 0;

    /**
     * @Route( "/compte/type_compte", name = "type_compte" )
     * Permet de créer un nouveau CloudTypeCompte
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudTypeCompte = $this->getListCloudTypeCompte();
        $cloudTypeCompte = new CloudTypeCompte();

        $form = $this->createForm(CloudTypeCompteFormType::class, $cloudTypeCompte);
        $form->handleRequest($request);
        //dump($cloudTypeCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            $rand = rand(100, 1000);
            $code = "CODE$rand";
            //dump($code);
            $cloudTypeCompte->setCode($code);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudTypeCompte);
            $manager->flush();
            $listCloudTypeCompte = $this->getListCloudTypeCompte();
            //$cloudTypeCompte = new CloudTypeCompte();
            $this->addFlash("success", "Enregistrement effectué avec succès !");
        }
        $formView = $form->createView();
        return $this->render('/cloud_compte/params/cloudTypeCompte.html.twig', [
            //'cloudTypeCompte' => $cloudTypeCompte,
            'form' => $formView,
            'listCloudTypeCompte' => $listCloudTypeCompte,
        ]);
    }

    /**
     * @Route( "/compte/type_compte_edit", name = "type_compte_edit", methods={"GET", "POST"})
     * Permet de modifier un CloudTypeCompte
     * @param Request $request
     * @return Response
     */
    public function editer(Request $request)
    {
        $listCloudTypeCompte = $this->getListCloudTypeCompte();
        $cloudTypeCompte = new CloudTypeCompte();

        $formEdit = $this->createForm(CloudTypeCompteFormType::class, $cloudTypeCompte);
        $formEdit->handleRequest($request);
        $formView = $formEdit->createView();
        return $this->render('/cloud_compte/params/cloudTypeCompteEdit.html.twig', [
            //'cloudTypeCompte' => $cloudTypeCompte,
            'formEdit' => $formView,
            'listCloudTypeCompte' => $listCloudTypeCompte,
        ]);
    }

    /*
     * Permet d'avoir la liste des types compte issus de la base !
     * @return array
     * */
    private function getListCloudTypeCompte()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeCompte::class);
        return $repo->findAll();
    }
}
