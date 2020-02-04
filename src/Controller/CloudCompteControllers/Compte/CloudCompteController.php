<?php

namespace App\Controller\CloudCompteControllers\Compte;

use App\Entity\CloudCompte;
use App\Form\CloudCompteForms\Compte\CloudCompteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCompteController extends AbstractController
{
    /**
     * @Route("/service", name="service")
     * @return Response
     */
    public function loading()
    {
        $listCloudCompte = $this->getListCloudCompte();

        return $this->render('cloud_compte/compte/listCloudCompte.html.twig', [
            'listCloudCompte' => $listCloudCompte,
        ]);
    }

    /**
     * @Route("/service/new", name="service_new")
     * Permet de créer un nouveau service/subdivision
     * @param Request $request
     * @return Response
     */
    public function ajouter(Request $request): Response
    {
        $listCloudCompte = $this->getListCloudCompte();
        $cloudCompte = new CloudCompte();

        $form = $this->createForm(CloudCompteFormType::class, $cloudCompte);
        $form->handleRequest($request);
        dump($cloudCompte);
        if ($form->isSubmitted() && $form->isValid()) {
        dump($cloudCompte);
            $rand = random_int(100, 1000);
            $code = "CODECP$rand";
            //dump($code);
            //dump($now);
            $cloudCompte->setCodeCloudCompte($code)
                ->setProfondeurCloudCompte(1);
            dump($cloudCompte);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCompte);
            $manager->flush();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');

            return $this->redirectToRoute('compte', [
                'listCloudCompte' => $listCloudCompte,
            ]);
        }

        return $this->render('cloud_compte/compte/nouveauCloudCompte.html.twig', [
            'form' => $form->createView(),
            'listCloudCompte' => $listCloudCompte,
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
