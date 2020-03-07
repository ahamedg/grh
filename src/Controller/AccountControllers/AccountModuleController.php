<?php

namespace App\Controller\AccountControllers;

use App\Controller\GlobalController;
use App\Entity\AccountModule;
use App\Form\AccountForms\AccountModuleFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountModuleController extends GlobalController
{
    private $num = 1;

    /**
     * @Route( "/account_module", name = "module" )
     * Permet de créer une Module
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        $listAccountModule = $this->selectionnerToutByIdCompteNull(AccountModule::class);

        return $this->render('account/accountModule.html.twig', [
            'num' => $this->num++,
            'listAccountModule' => $listAccountModule,
        ]);
    }

    /*
    * Permet d'avoir la liste des catégories de service issues de la base !
    * @return array
    * */
    private function getListAccountModule()
    {
        $repo = $this->getDoctrine()->getRepository(AccountModule::class);
        return $repo->findAll();
    }
}
