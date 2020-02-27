<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudCategorieService;

use App\Form\CloudCompteForms\Compte\CloudFamilleCompteEditFormType;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends AbstractController
{
    private $num = 1;

    /**
     * @Route( "/categorie_service", name = "categorie_service" )
     * Permet de créer une catégorie de service
     * @return Response
     * @throws Exception
     */
    public function ajouter(Request $request)
    {
        $listCloudCategorieService = $this->getListCloudCategorieService();
        $cloudCategorieService = new CloudCategorieService();

        $form = $this->createForm(CloudCategorieServiceFormType::class, $cloudCategorieService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump( $cloudCategorieService );
            $rand = random_int(100, 1000);
            $code = "CODECAT$rand";
            ///dump( $code );
            $cloudCategorieService->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCategorieService);
            $manager->flush();
            $listCloudCategorieService = $this->getListCloudCategorieService();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
        }

        return $this->render('cloud_compte/params/cloudCategorieService.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
            'listCloudCategorieService' => $listCloudCategorieService,
        ]);
    }

    /*
     * @Route("", name="")
     * */
    public function modifier(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);
        $cloudCategorieService = $repo->find($id);

        $form = $this->createForm(CloudFamilleCompteEditFormType::class, $cloudCategorieService);
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
    * Permet d'avoir la liste des catégories de service issues de la base !
    * @return array
    * */
    private function getListCloudCategorieService()
    {
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);
        return $repo->findAll();
    }
}
