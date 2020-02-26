<?php

namespace App\Controller\CloudCompteControllers\Compte;

use App\Entity\CloudFamilleCompte;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CloudCompteForms\Compte\CloudFamilleCompteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CloudCompteForms\Compte\CloudFamilleCompteEditFormType;

class CloudFamilleCompteController extends AbstractController
{

    private $listCloudFamilleCompte = [];

    /**
     * @Route("/comptes", name="compte")
     * @return Response
     */
    public function loading()
    {
        $this->listCloudFamilleCompte = $this->getListCloudFamilleCompte();

        return $this->render('cloud_compte/compte/listCloudFamilleCompte.html.twig', [
            'listCloudFamilleCompte' => $this->listCloudFamilleCompte,
        ]);
    }

    /**
     * @Route("/comptes/new", name="compte_new")
     * Permet de créer un nouveau compte
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        //$listCloudFamilleCompte = $this->getListCloudFamilleCompte();
        $cloudFamilleCompte = new CloudFamilleCompte();

        $form = $this->createForm(CloudFamilleCompteFormType::class, $cloudFamilleCompte);
        $form->handleRequest($request);
        dump($cloudFamilleCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(100, 1000);
            $code = "CODECP$rand";
            dump($code);
            //dump($now);
            $cloudFamilleCompte->setCode($code);
            dump($cloudFamilleCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudFamilleCompte);
            $manager->flush();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');

            return $this->redirectToRoute('compte', [
                'listCloudFamilleCompte' => $this->listCloudFamilleCompte,
            ]);
        }

        return $this->render('cloud_compte/compte/nouveauCloudFamilleCompte.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/comptes/{id}/edit", name="compte_edit")
     * Permet de modifier un compte famille !
     * @return Response
     */
    public function modifier(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(CloudFamilleCompte::class);
        $cloudFamilleCompte = $repo->find($id);

        $form = $this->createForm(CloudFamilleCompteEditFormType::class, $cloudFamilleCompte);
        $form->handleRequest($request);
        dump($cloudFamilleCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($cloudFamilleCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudFamilleCompte);
            $manager->flush();
            $this->addFlash('success', 'Modification effectuée avec succès !');

            return $this->redirectToRoute('compte', [
                'listCloudFamilleCompte' => $this->listCloudFamilleCompte,
            ]);
        }
        return $this->render('cloud_compte/compte/editCloudFamilleCompte.html.twig', [
            'form' => $form->createView(),
            'cloudFamilleCompte' => $cloudFamilleCompte
            //'listCloudFamilleCompte' => $this->listCloudFamilleCompte,
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
