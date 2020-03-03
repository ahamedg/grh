<?php

namespace App\Controller;

use App\Entity\AccountAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController
{

    /* Permet d'enregistrer les actions qu'on peut intenter dans le système
     * @return void
     * */
    protected function saveAccountAction($code, $libelle, $description): void
    {
        $repo = $this->getDoctrine()->getRepository(AccountAction::class);
        $accountAction = $repo->find($code);

        $accountAction->setCode($code)
            ->setLibelle($libelle)
            ->setDescription($description);
    }
}
