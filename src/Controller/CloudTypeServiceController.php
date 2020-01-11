<?php

namespace App\Controller;

use App\Entity\CloudTypeService;
use App\Form\CloudTypeServiceFormType;
use Symfony\Component\BrowserKit\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeServiceController extends AbstractController
{
    /**
     * Undocumented function
     * @Route('/cloud/type/service', name='cloud_type_servicenew')
     * @param Request $request
     * @return Response
     */
    public function ajouter(Request $request, ObjectManager $em)
    {
        $cloudTypeService = new CloudTypeService();
        $form = $this->createForm(CloudTypeServiceFormType::class, $cloudTypeService);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($cloudTypeService);
            $em->flush();
        }

        return $this->render('cloud_type_service/index.html.twig', [
            'form' => $form->createView()

        ]);
    }

    /**
     * @Route("/cloud/type/service", name="cloud_type_service")
     */
    public function index()
    {
        return $this->render('cloud_type_service/index.html.twig', [
            'controller_name' => 'CloudTypeServiceController',
        ]);
    }
}
