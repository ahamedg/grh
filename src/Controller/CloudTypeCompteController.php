<?php

namespace App\Controller;

use App\Entity\CloudTypeCompte;
use App\Form\CloudTypeCompteFormType;

use Doctrine\Common\Persistence\ObjectManager;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeCompteController extends AbstractController
{
    /**
     * @Route("/cloud/type/compte", name="cloud_type_compte_new_old")
     * Permet de créer un nouveau CloudTypeCompte
     * @param Request $request
     * @return Response
     */
    public function ajouter_old(Request $request)
    {
        $cloudTypeCompte = new CloudTypeCompte();
        $form = $this->createForm(CloudTypeCompteFormType::class, $cloudTypeCompte);
        $form->handleRequest($request);

        dump($request);

        /*if ($form->isSubmitted()){
        //if ($form->isSubmitted() && $form->isValid()) {
           // $em = $this->getDoctrine()->getManager();
            $em->persist($cloudTypeCompte);
            $em->flush();
            //return new Response('Type compte ajouté...')
        }*/
        $formView = $form->createView();
        return $this->render('cloud_type_compte/index.html.twig', [
            'form' => $formView
        ]);
    }

    /**
     * @Route("/cloud/type/compte", name="cloud_type_compte")
     */
    public function index()
    {
        return $this->render('cloud_type_compte/index.html.twig', [
            'controller_name' => 'CloudTypeCompteController',
        ]);
    }
}
