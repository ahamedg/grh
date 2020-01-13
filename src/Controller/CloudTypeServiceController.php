<?php

namespace App\Controller;

use App\Entity\CloudTypeCompte;
use App\Entity\CloudTypeService;
use App\Form\CloudTypeServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeServiceController extends AbstractController
{
    /*
     * Permet d'avoir la liste des types service issus de la base !
     * @return array
     * */
    private function getListCloudTypeService()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeCompte::class);
        return $repo->findAll();
    }
    /**
     * Undocumented function
     * @Route("/cloud/type/service", name="cloud_type_servicenew")
     * @param Request $request
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudTypeService = $this->getListCloudTypeService();
        $cloudTypeService = new CloudTypeService();

        $form = $this->createForm(CloudTypeServiceFormType::class, $cloudTypeService);
        $form->handleRequest($request);
        dump($cloudTypeService);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudTypeService);
            $manager->flush();

            $listCloudTypeService = $this->getListCloudTypeService();
            $this->addFlash("success", "Enregistrement effectué avec succes");
        }

        return $this->render('cloud_type_service/index.html.twig', [
            'form' => $form->createView(),
            'listCloudTypeService' => $listCloudTypeService,

        ]);
    }

    /**
     * @Route("/cloud/type/service", name="cloud_type_service")
     */
    /*public function index()
    {
        return $this->render('cloud_type_service/index.html.twig', [
            'controller_name' => 'CloudTypeServiceController',

        ]);
    }
    */
}
