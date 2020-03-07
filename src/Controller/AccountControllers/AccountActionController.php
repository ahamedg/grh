<?php

namespace App\Controller\AccountControllers;

use App\Controller\GlobalController;
use App\Entity\AccountAction;
use App\Form\AccountForms\AccountActionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountActionController extends GlobalController
{
    private $num = 1;

    /**
     * @Route( "/account_action", name = "action" )
     * Permet de créer une action
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request): Response
    {
        $listAccountAction = $this->selectionnerToutByIdCompteNull(AccountAction::class);

        return $this->render('account/accountAction.html.twig', [
            'num' => $this->num++,
            'listAccountAction' => $listAccountAction,
        ]);
    }

    /*
    * Permet d'avoir la liste des catégories de service issues de la base !
    * @return array
    * */
    private function getListAccountAction()
    {
        $repo = $this->getDoctrine()->getRepository(AccountAction::class);
        return $repo->findAll();
    }
}
