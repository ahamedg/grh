<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ConnexionController extends AbstractController
{
    /**
     * Permet de se connecter
     * @Route("/", name="login")
     * @return Response 
     */
    public function login(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        //dump($error);
        $username = $utils->getLastUsername();

        return $this->render('connexion/login.html.twig', [
            'hasError' => $error !== null,
            'username' => $username
        ]);
    }

    /*
     * Permet de se déconnecter
     *
     * @return void
     * @Route("/logout",name="logout")
     * */
    public function logout()
    {
        //rien
    }
}
