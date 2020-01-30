<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudCategorieService;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends AbstractController
{
    private $num = 1;

    /**
     * @Route("/accueil/params_compte/categorie_service", name="categorie_service")
     * Permet de créer une catégorie de service
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudCategorieService = $this->getListCloudCategorieService();
        $cloudCategorieService = new CloudCategorieService();

        $form = $this->createForm(CloudCategorieServiceFormType::class, $cloudCategorieService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(100, 1000);
            $code = "CODECAT$rand";
            //dump($code);
            //dump($now);
            $cloudCategorieService->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCategorieService);
            $manager->flush();
            $listCloudCategorieService = $this->getListCloudCategorieService();
            //$cloudCategorieService = new CloudCategorieService();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $cloudCategorieService;
        }



        return $this->render('cloud_compte/params/cloudCategorieService.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
            'listCloudCategorieService' => $listCloudCategorieService,
        ]);
    }

    /*
     * Permet d'avoir la liste des catégories de service issues de la base !
     * @return array
     * */
    private function getListCloudCategorieService()
    {
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);
        return $repo->findAll();
    }
}
