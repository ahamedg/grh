<?php

namespace App\Controller\CompteControllers\Params;

use App\Entity\CloudTypeService;
use App\Form\CloudCompte\Compte\CloudCompteFormType;
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
            $rand = rand(100, 1000);
            $code = "CODE$rand";
            //dump($code);
            $cloudTypeService->setCode($code);
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
    /**
     * 
     * @Route("/compte/type_service/{id}", name="editcloudtypeservice", requirements={"id" : "\d+"})
     */
    public function EditAction(CloudTypeService $cloudTypeService, Request $request)
    {
        $manager = $this->getDoctrine()->getManager();

        $form = $this->get('form.factory')->create(CloudCompteFormType::class, $cloudTypeService, array(
            'action' => $this->generateUrl('editcloudTypeservice',  array('id' => $cloudTypeService->getId())),
        ));

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if (($form->isSubmitted()) && ($form->isValid())) {
                $manager->flush();

                return $this->json(array('message' => 'OK'));
            }
        }

        return $this->render('/cloud_compte/params/cloudTypeService.html.twig', array(
            'cloudtypeservice' => $cloudTypeService,
            'form' => $form->createView()
        ));
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
