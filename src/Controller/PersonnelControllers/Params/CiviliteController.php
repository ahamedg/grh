<?php

namespace App\Controller\PersonnelControllers\Params;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CiviliteController extends AbstractController
{
    /**
     * @Route("/civilite", name="civilite")
     */
    public function index()
    {
        return $this->render('personnel/params/civilite.html.twig');
    }
}
