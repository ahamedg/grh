<?php

namespace App\Controller;

use App\Entity\AccountAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController
{
    /**
     * @Route("/global", name="global")
     */
    public function index()
    {
        return $this->render('global/index.html.twig', [
            'controller_name' => 'GlobalController',
        ]);
    }

    /* Permet d'enregistrer les actions qu'on peut intenter dans le système
     * @return void
     * */
    protected function saveAccountAction($code, $libelle, $description): void
    {
        $accountAction = new AccountAction();
        $accountAction->setCode($code)
            ->setLibelle($libelle)
            ->setDescription($description);
    }
}
