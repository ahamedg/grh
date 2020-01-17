<?php

namespace App\Controller\CompteControllers\Params;

use App\Entity\CloudFamilleCompte;
use App\Form\CloudFamilleCompteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudFamilleCompteController extends AbstractController
{
    /**
     * @Route("/compte/famille_compte", name="famille_compte")
     */
    public function index()
    {
        return $this->render('/cloud_compte/params/cloudFamilleCompte.html.twig', [
            'controller_name' => 'CloudFamilleCompteController',
        ]);
    }

    /**
     * @Route("/compte/famille_compte", name="famille_compte")
     * @return Response
     */
    public function ajouter(Request $request){
        $listCloudFamilleCompte = $this->getListCloudFamilleCompte();
        $cloudFamilleCompte = new CloudFamilleCompte();

        $form = $this->createForm(CloudFamilleCompteFormType::class, $cloudFamilleCompte);
        $form->handleRequest($request);
        //dump($CloudFamilleCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            //$date = new Date();
            //$now = $date instanceof Date;
            $rand = rand(100, 1000);
            $code = "CODE$rand";
            //dump($code);
            //dump($now);
            //$cloudFamilleCompte->setCode($code)
              //  ->setActif(true);

            //$manager = $this->getDoctrine()->getManager();
            //$manager->persist($cloudFamilleCompte);
            //$manager->flush();
            $listCloudFamilleCompte = $this->getListCloudFamilleCompte();
            //$CloudFamilleCompte = new CloudFamilleCompte();
            $this->addFlash("success", "Enregistrement effectué avec succès !");
            //return $CloudFamilleCompte;
        }
        $formView = $form->createView();
        return $this->render('/cloud_compte/params/CloudFamilleCompte.html.twig', [
            //'CloudFamilleCompte' => $CloudFamilleCompte,
            'form' => $formView,
            'listCloudFamilleCompte' => $listCloudFamilleCompte,
        ]);
    }

    /*
   * Permet d'avoir la liste des familles de compte issus de la base !
   * @return array
   * */
    private function getListCloudFamilleCompte()
    {
        $repo = $this->getDoctrine()->getRepository(CloudFamilleCompte::class);
        return $repo->findAll();
    }
}
