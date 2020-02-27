<?php

namespace App\Controller\AccountControllers;

use App\Entity\AccountAction;
use App\Form\AccountForms\AccountActionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountActionController extends AbstractController
{
    private $num = 1;

    /**
     * @Route( "/account_action", name = "action" )
     * Permet de créer une action
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        $listAccountAction = $this->getListAccountAction();
        $accountAction = new AccountAction();

        $form = $this->createForm(AccountActionFormType::class, $accountAction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump( $AccountAction );
            $rand = random_int(100, 1000);
            $code = "CODECAT$rand";
            ///dump( $code );
            $accountAction->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($accountAction);
            $manager->flush();
            $listAccountAction = $this->getListAccountAction();
            //$AccountAction = new AccountAction();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
        }

        return $this->render('account/accountAction.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
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
