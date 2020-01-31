<?php

namespace App\Controller\CloudCompteControllers\Compte;

use App\Entity\CloudFamilleCompte;
use App\Form\CloudCompteForms\Compte\CloudFamilleCompteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudFamilleCompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     * @return Response
     */
    public function loading()
    {
        $listCloudFamilleCompte = $this->getListCloudFamilleCompte();

        return $this->render('cloud_compte/compte/listCloudFamilleCompte.html.twig', [
            'listCloudFamilleCompte' => $listCloudFamilleCompte,
        ]);
    }

    /**
     * @Route("/compte/new", name="compte_new")
     * Permet de créer un nouveau compte
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudFamilleCompte = $this->getListCloudFamilleCompte();
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
                'listCloudFamilleCompte' => $listCloudFamilleCompte,
            ]);
        }

        return $this->render('cloud_compte/compte/nouveauCloudFamilleCompte.html.twig', [
            'form' => $form->createView(),
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
