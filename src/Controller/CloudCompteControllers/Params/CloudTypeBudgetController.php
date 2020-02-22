<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudTypeBudget;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CloudCompteForms\Params\CloudTypeBudgetFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudTypeBudgetController extends AbstractController
{
    private $num;

    /**
     * @Route("/type_budget", name="type_budget")
     * Permet de créer un type de budget
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        $listCloudTypeBudget = $this->getListCloudTypeBudget();
        $cloudTypeBudget = new CloudTypeBudget();

        $form = $this->createForm(CloudTypeBudgetFormType::class, $cloudTypeBudget);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(100, 1000);
            $code = "CODETYB$rand";
            //dump($code);
            //dump($now);
            $cloudTypeBudget->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudTypeBudget);
            $manager->flush();
            $listCloudTypeBudget = $this->getListCloudTypeBudget();
            //$CloudTypeBudget = new CloudTypeBudget();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $CloudTypeBudget;
        }



        return $this->render('cloud_compte/params/cloudTypeBudget.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
            'listCloudTypeBudget' => $listCloudTypeBudget,
        ]);
    }

    /*
     * Permet d'avoir la liste des catégories de service issues de la base !
     * @return array
     * */
    private function getListCloudTypeBudget()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeBudget::class);
        return $repo->findAll();
    }
}
