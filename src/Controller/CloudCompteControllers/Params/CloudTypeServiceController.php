<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudTypeService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CloudCompteForms\Params\CloudTypeServiceFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeServiceController extends AbstractController
{

    /**
     * Undocumented function
     * @Route("/type_service", name="type_service")
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        $listCloudTypeService = $this->getListCloudTypeService();
        $cloudTypeService = new CloudTypeService();

        $form = $this->createForm(CloudTypeServiceFormType::class, $cloudTypeService);
        $form->handleRequest($request);
        dump($cloudTypeService);
        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(100, 1000);
            $code = "CODETYS$rand";
            //dump($code);
            $cloudTypeService->setCode($code);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudTypeService);
            $manager->flush();

            $listCloudTypeService = $this->getListCloudTypeService();
            $this->addFlash('success', 'Enregistrement effectué avec succes');
        }
        $formView = $form->createView();
        return $this->render('/cloud_compte/params/cloudTypeService.html.twig', [
            'form' => $formView,
            'listCloudTypeService' => $listCloudTypeService,
            'active' => "active"


        ]);
    }

    private function getListCloudTypeService()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeService::class);
        return $repo->findAll();
    }


    /**
     *
     * @Route("/compte/type_service/{id}", name="editcloudtypeservice", requirements={"id" : "\d+"})
     */
    public function moutonEditAction(CloudTypeService $cloudtypeservice, Request $request)
    {
        $manager = $this->getDoctrine()->getManager();

        $form = $this->get('form.factory')->create(CloudTypeServiceFormType::class, $cloudtypeservice, array(
            'action' => $this->generateUrl('moutonedit', array('id' => $cloudtypeservice->getId())),
        ));

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if (($form->isSubmitted()) && ($form->isValid())) {
                $manager->flush();


                return $this->json(array('message' => 'OK'));
            }
        }

        return $this->render('MNFermeBundle:panel:moutonedit.html.twig', array(
            'clouttypeservice' => $cloudtypeservice,
            'form' => $form->createView()
        ));
    }
}
