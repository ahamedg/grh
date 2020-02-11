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
     * @Route("/sous_comptes/{id}/new", name="sous_compte_new_by_compte")
     * Permet de créer un nouveau sous-compte
     * 
     * @return Response
     */
    public function ajouterFromCompte(Request $request, $id)
    {
        //Il faut récupérer l'id du compte parent
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

        return $this->render('cloud_compte/compte/nouveauCloudCompteFromFamilleCompte.html.twig', [
            'form' => $form->createView(),
            'cloudFamilleCompte' => $cloudFamilleCompte,
            'listCloudCompte' => $this->listCloudCompte,
        ]);
    }

    /**
     * @Route("/sous_comptes/{id}/new2", name="sous_compte_new_by_sous_compte")
     * Permet de créer un nouveau sous-compte
     * 
     * @return Response
     */
    public function ajouterFromSousCompte(Request $request, $id)
    {
        //Il faut récupérer l'id du sous-compte parent
        $repo = $this->getDoctrine()->getRepository(CloudCompte::class);
        $cloudCompte = $repo->find($id);

        $cloudFamilleCompte = $cloudCompte->getCloudFamilleCompte();

        dump($cloudCompte);
        dump($cloudFamilleCompte);


        $cloudCompteFils = new CloudCompte();

        $form = $this->createForm(CloudCompteFormType::class, $cloudCompteFils);
        $form->handleRequest($request);
        //dump($cloudCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($cloudCompte);
            $rand = random_int(100, 1000);
            $code = "CODECP$rand";
            //dump($code);
            //dump($now);
            $cloudCompteFils->setCodeCloudCompte($code)
                ->setProfondeurCloudCompte($cloudCompte->getProfondeurCloudCompte() + 1)
                ->setCloudCompte($cloudCompte)
                ->setCloudFamilleCompte($cloudFamilleCompte);
            //dump($cloudCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCompteFils);
            $manager->flush();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');

            return $this->redirectToRoute('sous_compte', [
                'listCloudCompte' => $this->listCloudCompte,
            ]);
        }

        return $this->render('cloud_compte/compte/nouveauCloudCompteFromCompte.html.twig', [
            'form' => $form->createView(),
            'cloudCompte' => $cloudCompte,
            'listCloudCompte' => $this->listCloudCompte,
        ]);
    }

    /**
     * @Route("/sous_comptes/{id}/edit", name="sous_compte_edit")
     * Permet de modifier un sous-compte
     * @return Response
     */
    public function modifier(Request $request, $id)
    {
        //Il faut récupérer l'id du sous-compte à modifier
        $repo = $this->getDoctrine()->getRepository(CloudCompte::class);
        $cloudCompte = $repo->find($id);

        $cloudFamilleCompte = $cloudCompte->getCloudFamilleCompte();
        dump($cloudCompte);
        dump($cloudFamilleCompte);

        $form = $this->createForm(CloudCompteFormType::class, $cloudCompte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump($cloudFamilleCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCompte);
            $manager->flush();
            $this->addFlash('success', 'Modification effectuée avec succès !');

            return $this->redirectToRoute('sous_compte', [
                'listCloudCompte' => $this->listCloudCompte,
            ]);
        }
        return $this->render('cloud_compte/compte/editCloudCompte.html.twig', [
            'form' => $form->createView(),
            'cloudCompte' => $cloudCompte,
            'cloudFamilleCompte' => $cloudFamilleCompte,
            'listCloudCompte' => $this->listCloudCompte,
        ]);
    }

    /*
   * Permet d'avoir la liste des comptes issus de la base !
   * @return array
   * */
    private function getListCloudCompte()
    {
        $repo = $this->getDoctrine()->getRepository(CloudCompte::class);
        return $repo->findAll();
    }
}
