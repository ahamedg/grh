<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UtilisateurController extends AbstractController
{

    /**
     * @Route("/accueil/utilisateur", name="utilisateur")
     * Permet de créer un nouvel utilisateur
     * @return Response
     */
    public function loading()
    {
        $listUtilisateur = $this->getListUtilisateur();

        return $this->render('utilisateur/listUtilisateur.html.twig', [
            'listUtilisateur' => $listUtilisateur,
        ]);
    }


    /**
     * @Route("/accueil/utilisateur/new", name="utilisateur_new")
     * Permet de créer un nouvel utilisateur
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function ajouter(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $listUtilisateur = $this->getListUtilisateur();
        $utilisateur = new Utilisateur();

        $form = $this->createForm(UtilisateurFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rand = random_int(1000, 10000);
            $code = "USER$rand";
            //dump($code);
            //dump($now);
            $password = $encoder->encodePassword($utilisateur, $utilisateur->getPassword());

            $utilisateur->setPassword($password)
                ->setCode($code)
                ->setActif(true);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($utilisateur);
            $manager->flush();
            $listUtilisateur = $this->getListUtilisateur();
            //$utilisateur = new Utilisateur();
            $this->addFlash('success', 'Enregistrement effectué avec succès !');
            //return $utilisateur;
            return $this->redirectToRoute('utilisateur', [
                'listUtilisateur' => $listUtilisateur,
            ]);
        }
        return $this->render('utilisateur/nouveauUtilisateur.html.twig', [
            'form' => $form->createView(),
            'listUtilisateur' => $listUtilisateur,
        ]);
    }

    /*
  * Permet d'avoir la liste des catégories de service issues de la base !
  * @return array
  * */
    private function getListUtilisateur()
    {
        $repo = $this->getDoctrine()->getRepository(Utilisateur::class);
        return $repo->findAll();
    }
}
