<?php

namespace App\Controller;

use App\Entity\AccountAction;
use App\Entity\AccountModule;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GlobalController extends AbstractController
{

    /* Permet d'enregistrer les actions qu'on peut intenter dans le système
     * @return void
     * */
    protected function saveAccountAction($code, $libelle, $description): void
    {
        $repo = $this->getDoctrine()->getRepository(AccountAction::class);
        $accountAction = $repo->find($code);

        if ($accountAction === null){
            $accountAction= new AccountAction();
            $accountAction->setCode($code)
                ->setLibelle($libelle)
                ->setDescription($description);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($accountAction);
            $manager->flush();
        }

    }

    /* Permet d'enregistrer les modules du système
     * @return voi
     * */
    protected function saveAccountModule($code, $libelle, $description): void
    {
        $repo = $this->getDoctrine()->getRepository(AccountModule::class);
        $accountModule = $repo->find($code);

        if ($accountModule === null){
            $accountModule->setCode($code)
                ->setLibelle($libelle)
                ->setDescription($description);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($accountModule);
            $manager->flush();
        }
    }
}
