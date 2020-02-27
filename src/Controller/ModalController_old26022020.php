<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ModalController_old26022020 extends AbstractController
{
    /**
     * @Route("/modal", name="modal")
     * @param Request $request
     * @return
     */
//    public function index()
//    {
//        return $this->render('modal/modal.html.twig', []);
//    }
//    public function thisActionWillRedirect(Request $request)
//    {
//        return $this->redirectWithAjaxSupport($request, '/new/url');
//    }

    public function thisActionWillReload(Request $request)
    {
        return $this->reloadWithAjaxSupport($request);
    }

//    public function thisActionWillReload(Request $request)
//    {
//        return $this->redirectToRouteWithAjaxSupport($request,'route_name',['parameters'=>$parameters]);
//    }
}
