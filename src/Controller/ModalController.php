<?php

namespace App\Controller;

use App\Entity\CloudCategorieService;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModalController extends AbstractController
{

    /*
     * @Route("/modal", name="modal")
     * */
    public function modal()
    {
        return $this->render('modal.html.twig');
    }

    /**
     * Helper function to open a simple confirm modal.
     * The link to this route should have the attributes:
     *  class: modal-open-confirm
     *  data-modal-href: {{ path('rares_modal_open_confirm') }}
     *
     * @Route("/modal/confirm", name="rares_modal_open_confirm")
     */
    public function openConfirmModalAction()
    {
        return $this->render('modal.html.twig');
    }

    /**
     * Helper function to display a simple translatable message in a modal.
     * The link to this route should have the attributes:
     *  class: modal-open
     *
     * @Route("/modal/open/", name="rares_modal_open_message")
     * @return Response
     */
    public function openMessageModalAction()
    {
        return $this->render('modal.html.twig');
    }

    /**
     * Finds and displays a ContactMessage entity.
     *
     * @Route("/modal/", name="contact_show_modal")
     * @return Response
     */
    public function showModalAction()
    {
        $cloudCategorieService = new CloudCategorieService();
        $form = $this->createForm(CloudCategorieServiceFormType::class, $cloudCategorieService);

        return $this->render('modal.html.twig', array(
            'cloudCategorieService' => $cloudCategorieService,
            'form' => $form->createView(),
        ));
    }


}
