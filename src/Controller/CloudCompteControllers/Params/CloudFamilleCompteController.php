<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudFamilleCompte;
use App\Form\CloudCompteForms\Params\CloudFamilleCompteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudFamilleCompteController extends AbstractController
{
    /**
     * @Route("/accueil/compte", name="compte")
     * @return Response
     */
    public function loading()
    {
        $listCloudFamilleCompte = $this->getListCloudFamilleCompte();

        return $this->render('cloud_compte/compte/cloudFamilleCompte.html.twig', [
            'listCloudFamilleCompte' => $listCloudFamilleCompte,
        ]);
    }

    /**
     * @Route("/accueil/compte/new", name="compte_new")
     * Permet de créer un nouveau compte
     * @param Request $request
     * @return Response
     */
    public function ajouter(Request $request): Response
    {
        $listCloudFamilleCompte = $this->getListCloudFamilleCompte();
        $cloudFamilleCompte = new CloudFamilleCompte();

        $form = $this->createForm(CloudFamilleCompteFormType::class, $cloudFamilleCompte);
        $form->handleRequest($request);
        dump($cloudFamilleCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(100, 1000);
            $code = "CODECPT$rand";
            dump($code);
            //dump($now);
            $cloudFamilleCompte->setCode($code)
                ->setActif(true);
            dump($cloudFamilleCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudFamilleCompte);
            $manager->flush();
            //$listCloudFamilleCompte = $this->getListCloudFamilleCompte();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $cloudCategorieService;

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
