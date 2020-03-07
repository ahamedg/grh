<?php

namespace App\Controller\AccountControllers;

use App\Controller\GlobalController;
use App\Entity\AccountProfil;
use App\Form\AccountForms\AccountProfilFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountProfilController extends GlobalController
{
    private $num = 1;

    /**
     * @Route( "/account_profil", name = "profil" )
     * Permet de créer une Profil
     * @return Response
     * @throws \Exception
     */
    public function ajouter(Request $request)
    {
        $listAccountProfil = $this->getListAccountProfil();
        $accountProfil = new AccountProfil();

        $form = $this->createForm(AccountProfilFormType::class, $accountProfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //dump( $AccountProfil );
            $rand = random_int(100, 1000);
            $code = "CODECAT$rand";
            ///dump( $code );
            $accountProfil->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($accountProfil);
            $manager->flush();
            $listAccountProfil = $this->getListAccountProfil();
            //$AccountProfil = new AccountProfil();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
        }

        return $this->render('account/accountProfil.html.twig', [
            'num' => $this->num++,
            'form' => $form->createView(),
            'listAccountProfil' => $listAccountProfil,
        ]);
    }

    /*
    * Permet d'avoir la liste des catégories de service issues de la base !
    * @return array
    * */
    private function getListAccountProfil()
    {
        $repo = $this->getDoctrine()->getRepository(AccountProfil::class);
        return $repo->findAll();
    }
}
