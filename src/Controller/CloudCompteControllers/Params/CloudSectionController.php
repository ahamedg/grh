<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudSection;
use App\Form\CloudCompteForms\Params\CloudSectionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudSectionController extends AbstractController
{
    /**
     * @Route("/params_compte/section", name="section")
     * Permet de créer une section
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudSection = $this->getListCloudSection();
        $cloudSection = new CloudSection();

        $form = $this->createForm(CloudSectionFormType::class, $cloudSection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(100, 1000);
            $code = "CODETYB$rand";
            //dump($code);
            //dump($now);
            $cloudSection->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudSection);
            $manager->flush();
            $listCloudSection = $this->getListCloudSection();
            //$CloudSection = new CloudSection();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $CloudSection;
        }



        return $this->render('cloud_compte/params/cloudSection.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
            'listCloudSection' => $listCloudSection,
        ]);
    }

    /*
     * Permet d'avoir la liste des catégories de service issues de la base !
     * @return array
     * */
    private function getListCloudSection()
    {
        $repo = $this->getDoctrine()->getRepository(CloudSection::class);
        return $repo->findAll();
    }
}
