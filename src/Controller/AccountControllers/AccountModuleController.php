<?php

namespace App\Controller\AccountControllers;

use App\Entity\AccountModule;
use App\Form\AccountForms\AccountModuleFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountModuleController extends AbstractController
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
        $listAccountModule = $this->getListAccountModule();
        $accountModule = new AccountModule();

        $form = $this->createForm(AccountModuleFormType::class, $accountModule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump( $AccountModule );
            $rand = random_int(100, 1000);
            $code = "CODECAT$rand";
            ///dump( $code );
            $accountModule->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($accountModule);
            $manager->flush();
            $listAccountModule = $this->getListAccountModule();
            //$AccountModule = new AccountModule();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
        }

        return $this->render('account/accountModule.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
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
