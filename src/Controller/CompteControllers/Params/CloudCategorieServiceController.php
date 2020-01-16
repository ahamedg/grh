<?php

namespace App\Controller\CompteControllers\Params;

use App\Entity\CloudCategorieService;

use App\Repository\CloudCategorieServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CloudCompte\Params\CloudCategorieServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends AbstractController
{
    /**
     * CloudCategorieServiceController constructor.
     */
    /*private $listCloudCategorieService;
    public function __construct()
    {
        $listCloudCategorieService = $this->getListCloudCategorieService();
    }*/
    private $listCloudCategorieService = [];

    /*
     * @Route("/compte/categorie", name="categorie")
     * */
    public function index(CloudCategorieServiceRepository $repo)
    {
        $listCloudCategorieService = $repo->findAll();
        return $this->render('/cloud_compte/params/cloudCategorieService.html.twig', [
            'listCloudCategorieService' => $listCloudCategorieService,
        ]);
    }

    /**
     * @Route("/compte/categorie_service", name="categorie_service")
     * Permet de créer un nouveau CloudCategorieService
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudCategorieService = $this->getListCloudCategorieService();
        $cloudCategorieService = new CloudCategorieService();

        $form = $this->createForm(CloudCategorieServiceFormType::class, $cloudCategorieService);
        $form->handleRequest($request);
        //dump($cloudCategorieService);
        if ($form->isSubmitted() && $form->isValid()) {
            //$date = new Date();
            //$now = $date instanceof Date;
            $rand = rand(100, 1000);
            $code = "CODE$rand";
            //dump($code);
            //dump($now);
            $cloudCategorieService->setCode($code)
                ->setActif(true)
                ->setSupprimer(true)
                ->setIdCompte(1)
                ->setDateAjout(null)
                ->setDateEdit(null)
                ->setIdUserAuteur(null)
                ->setIdUserEdit(null)
                ->setVersion(1);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudCategorieService);
            $manager->flush();
            $listCloudCategorieService = $this->getListCloudCategorieService();
            //$cloudCategorieService = new CloudCategorieService();
            $this->addFlash("success", "Enregistrement effectué avec succès !");
            //return $cloudCategorieService;
        }
        $formView = $form->createView();
        return $this->render('/cloud_compte/params/cloudCategorieService.html.twig', [
            //'cloudCategorieService' => $cloudCategorieService,
            'form' => $formView,
            'listCloudCategorieService' => $listCloudCategorieService,
        ]);
    }

    /*
    * Permet d'avoir la liste des types compte issus de la base !
    * @return array
    * */
    private function getListCloudCategorieService()
    {
        $repo = $this->getDoctrine()->getRepository(CloudCategorieService::class);
        return $repo->findAll();
    }

}
