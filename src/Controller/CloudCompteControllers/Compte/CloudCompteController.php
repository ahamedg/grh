<?php

namespace App\Controller\CloudCompteControllers\Compte;

use App\Entity\CloudCompte;
use App\Entity\CloudFamilleCompte;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CloudCompteForms\Compte\CloudCompteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudCompteController extends AbstractController
{
    private $listCloudCompte = [];

    /**
     * @Route("/sous_comptes", name="sous_compte")
     * @return Response
     */
    public function loading()
    {
        $this->listCloudCompte = $this->getListCloudCompte();

        return $this->render('cloud_compte/compte/listCloudCompte.html.twig', [
            'listCloudCompte' => $this->listCloudCompte,
        ]);
    }

    /**
     * @Route("/sous_comptes/{id}/new", name="sous_compte_new")
     * Permet de créer un nouveau sous-compte
     * 
     * @return Response
     */
    public function ajouter(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(CloudFamilleCompte::class);
        $cloudFamilleCompte = $repo->find($id);

        dump($cloudFamilleCompte);

        $cloudCompte = new CloudCompte();

        $form = $this->createForm(CloudCompteFormType::class, $cloudCompte);
        $form->handleRequest($request);
        //dump($cloudCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($cloudCompte);
            $rand = random_int(100, 1000);
            $code = "CODECP$rand";
            //dump($code);
            //dump($now);
            $cloudCompte->setCodeCloudCompte($code)
                ->setProfondeurCloudCompte(1)
                ->setCloudFamilleCompte($cloudFamilleCompte);
            //dump($cloudCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCompte);
            $manager->flush();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');

            return $this->redirectToRoute('sous_compte', [
                'listCloudCompte' => $this->listCloudCompte,
            ]);
        }

        return $this->render('cloud_compte/compte/nouveauCloudCompte.html.twig', [
            'form' => $form->createView(),
            'cloudFamilleCompte'=> $cloudFamilleCompte,
            'listCloudCompte' => $this->listCloudCompte,
        ]);
    }

    /*
   * Permet d'avoir la liste des familles de compte issus de la base !
   * @return array
   * */
    private function getListCloudCompte()
    {
        $repo = $this->getDoctrine()->getRepository(CloudCompte::class);
        return $repo->findAll();
    }
}
