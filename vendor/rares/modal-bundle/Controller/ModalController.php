<?php

namespace Rares\ModalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ModalController extends Controller
{
    /**
     * Finds and displays a ContactMessage entity.
     *
     * @Route("/modal", name="contact_show_modal")
     * @Method("GET")
     */
    public function showModalAction(ContactMessage $contactMessage)
    {
        $deleteForm = $this->createDeleteForm($contactMessage);

        return $this->render('AppBundle:contact:showModal.html.twig', array(
            'contactMessage' => $contactMessage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Helper function to display a simple translatable message in a modal.
     * The link to this route should have the attributes:
     *  class: modal-open
     *
     * @Route("/modal/open/{message}", name="rares_modal_open_message")
     */
    public function openMessageModalAction($message)
    {
        return $this->render('RaresModalBundle::messageModal.html.twig', [
            'message' => $this->get('translator')->trans($message),
        ]);
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
        return $this->render('RaresModalBundle::baseConfirmModal.html.twig');
    }
}
