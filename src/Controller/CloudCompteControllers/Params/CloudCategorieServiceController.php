<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Controller\GlobalController;
use App\Entity\CloudCategorieService;

use Doctrine\Common\Persistence\ObjectManager;
use Exception;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends GlobalController
{
    private $num = 1;
    private ObjectManager $manager;
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
        $code = "ajoutCloudCategorieService";
        $libelle = "Ajouter une nouvelle catégorie service";
        $description = "Permet d'ajouter une nouvelle catégorie service";
//        $this->saveAccountAction($code, $libelle, $description);
//        $listCloudCategorieService = $this->getListCloudCategorieService();

        $listCloudCategorieService = $this->selectionnerToutByIdCompte(CloudCategorieService::class,1);
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
//            $listCloudCategorieService = $this->getListCloudCategorieService();
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

//    private function findAllByIdCompte(int $int)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $queryBuilder = $em->createQueryBuilder('e');
//        $queryBuilder->select('e')
//            ->from(CloudCategorieService::class, 'e')
//            ->where('e.idCompte = :idCompte')
//            ->orderBy('e.libelle', 'ASC');
//            if($int!==null){
//                $queryBuilder->setParameter('idCompte', $int);
//            }
//        $query = $queryBuilder->getQuery();
//        $listActions = $query->getResult();
//        return $listActions;
//    }
}
