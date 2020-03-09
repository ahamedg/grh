<?php

namespace App\Controller;

use App\Entity\CloudCategorieService;
use App\Form\CloudCompteForms\Params\CloudCategorieServiceFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModalController extends AbstractController
{

    /*
     * @Route("/modal", name="modal")
     * */
    public function modal()
    {
        return $this->render('cloud_compte/params/modals/modalEditCloudCategorieService.html.twig');
    }
}
