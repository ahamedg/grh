<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Controller\GlobalController;
use App\Entity\CloudCategorieService;

use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends GlobalController
{
    private $num = 1;
    private CloudCategorieService $cloudCategorieServiceEdit;

    /**
     * @Route( "/categorie_service", name = "categorie_service" )
     * Permet de créer une catégorie de service
     * @param Request $request
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

    /**
     * @Route("/categorie_service/{id}/edit", name="categorie_service_edit_modal")
     * @param Request $request
     * @param $id
     * @return string|Response
     */
    public function modifier(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);
        $cloudCategorieService = $repo->find($id);

        $form = $this->createForm(CloudCategorieServiceEditFormType::class, $cloudCategorieService);
//        , [
//            'action' => $this->generateUrl('categorie_service_edit_modal'),
//            'method' => 'GET',
//        ]);
        $form->handleRequest($request);
//        dump($cloudCategorieService);
        if ($form->isSubmitted() && $form->isValid()) {
//            dump($cloudCategorieService);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCategorieService);
            $manager->flush();
            $this->addFlash('success', 'Modification effectuée avec succès !');

//            return $this->redirectToRoute('compte', [
//                'listCloudCategorieService' => $this->listCloudCategorieService,
//            ]);
        }
        return $this->render('cloud_compte/params/modals/modalEditCloudCategorieService.html.twig', [
            'form' => $form->createView(),
            'cloudCategorieService' => $cloudCategorieService
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
