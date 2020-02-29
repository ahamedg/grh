<?php

namespace App\Controller\CloudCompteControllers\Params;

use App\Entity\CloudCategorieService;

use App\Form\CloudCompteForms\Compte\CloudFamilleCompteEditFormType;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CloudCategorieServiceController extends AbstractController
{
    private $num = 1;

    /**
     * @Route( "/categorie_service", name = "categorie_service" )
     * Permet de créer une catégorie de service
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
     * @Method({"GET", "POST"})
     * @Route("/categorie_service/{id}/edit", name="categorie_service_edit_modal")
     * @param CloudCategorieService $cloudCategorieService
     * @param Request $request
     * @return Response
     */
    public function modifier(CloudCategorieService $cloudCategorieService, Request $request)
    {
        //$cloudCategorieService = new CloudCategorieService();
        $form = $this->createForm(CloudCategorieServiceFormType::class, $cloudCategorieService);
//        $form = $this->createForm(CloudCategorieServiceTypeForm::class, $cloudCategorieService, [
//            // Make sure to explicitly set the action.
//            'action' => $this->generateUrl('categorie_service_edit_modal', ['id' => $cloudCategorieService->getId()])
//        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
//            $$cloudCategorieService->setDateInscription(new \DateTime());
//            $$cloudCategorieService->setCloudCategorieService($cloudCategorieService);

            $em->persist($cloudCategorieService);
            $em->flush();
            $request->getSession()->getFlashbag()->add('success', 'Votre inscription a été enregistré.');
            return $this->redirectToRoute('categorie_service');
        }
//        return $this->render(
//        //On affiche  une vue twig simple (pas de head ni rien, donc aucun héritage de template...) qui sera intégrée dans la modale.
//            'CloudCategorieServices/CloudCategorieServiceModale.html.twig', array('form' => $form->createView(), 'CloudCategorieService' => $cloudCategorieService
//            )
//        );
        return $this->render('cloud_compte/params/modals/modalEditCloudCategorieService.html.twig', [
            'form' => $form->createView(),
            'cloudCategorieService' => $cloudCategorieService,
        ]);
    }

    public function modifier2(Request $request, CloudCategorieService $cloudCategorieService)
    {
        $deleteForm = $this->createDeleteForm($cloudCategorieService);
        $editForm = $this->createForm(CloudCategorieServiceType::class, $cloudCategorieService, [
            // Make sure to explicitly set the action.
            'action' => $this->generateUrl('categorie_service_edit_modal', ['id' => $cloudCategorieService->getId()])
        ]);
        $editForm->add('save', SubmitType::class, ['label' => 'Edit']);

        $editForm->handleRequest($request);

        dump($cloudCategorieService);
        if ($editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cloudCategorieService);
            $em->flush();

            $this->addFlash('notice', 'Entity edited.');

            // On success, redirection should be done by returning a new ModalRedirectResponse object.
            return new ModalRedirectResponse($this->generateUrl('modal'));
        }

        return $this->render('cloud_compte/params/modals/modalEditCloudCategorieService.html.twig', [
            'cloudCategorieService' => $cloudCategorieService,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
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
