<?php

namespace App\Controller;
use App\Entity\CloudTypeService;

use App\Form\CloudCompte\Params\CloudTypeServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeServiceController extends AbstractController
{

    /**
     * Undocumented function
     * @Route("/compte/type_service", name="type_service")
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
        $formView = $form->createView();
        return $this->render('/cloud_compte/params/cloudTypeService.html.twig', [
            'form' => $formView,
            'listCloudTypeService' => $listCloudTypeService,

        ]);
    }

    /*
     * Permet d'avoir la liste des types service issus de la base !
     * @return array
     * */
    private function getListCloudTypeService()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeService::class);
        return $repo->findAll();
    }
}
