<?php

namespace App\Controller;

use App\Entity\AccountModule;
use App\Entity\AccountUtilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends GlobalController
{

    /**
     * @Route("/accueil", name="home")
     */
    public function index()
    {
        $listModuleCloud = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountModule::class, 'code', 'moduleGestionCloud');
        $listModuleUtilisateur = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountModule::class, 'code', 'moduleGestionUtilisateur');
        $listModuleRecrutement = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountModule::class, 'code', 'moduleGestionRecrutement');
        $listModuleEngagement = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountModule::class, 'code', 'moduleGestionEngagement');
        $listModuleCarriere = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountModule::class, 'code', 'moduleGestionCarriere');

        // Vérifier si une collection de module gestion clouds existe et contient un nombre d'éléments inférieur à 1
        if (isset($listModuleCloud) && count($listModuleCloud) < 1) {
            $module = new AccountModule();
            $module->setCode('moduleGestionCloud')
                ->setLibelle('Module de gestion des clouds')
                ->setDescription('Module de gestion des clouds: module permettant de gérer les clouds');
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($module);
            $manager->flush();
        }
        // Vérifier si une collection de module gestion utilisateurs existe et contient un nombre d'éléments inférieur à 1
        if (isset($listModuleUtilisateur) && count($listModuleUtilisateur) < 1) {
            $module = new AccountModule();
            $module->setCode('moduleGestionUtilisateur')
                ->setLibelle('Module de gestion des utilisateurs')
                ->setDescription('Module de gestion des clouds: module permettant de gérer les utilisateurs');
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($module);
            $manager->flush();
        }
        // Vérifier si une collection de module gestion recrutements existe et contient un nombre d'éléments inférieur à 1
        if (isset($listModuleRecrutement) && count($listModuleRecrutement) < 1) {
            $module = new AccountModule();
            $module->setCode('moduleGestionRecrutement')
                ->setLibelle('Module de gestion des recrutements')
                ->setDescription('Module de gestion des recrutements: module permettant de gérer les recrutements');
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($module);
            $manager->flush();
        }
        // Vérifier si une collection de module gestion engagements existe et contient un nombre d'éléments inférieur à 1
        if (isset($listModuleEngagement) && count($listModuleEngagement) < 1) {
            $module = new AccountModule();
            $module->setCode('moduleGestionEngagement')
                ->setLibelle('Module de gestion des engagements')
                ->setDescription('Module de gestion des engagements: module permettant de gérer les engagements');
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($module);
            $manager->flush();
        }
        // Vérifier si une collection de module gestion carrières existe et contient un nombre d'éléments inférieur à 1
        if (isset($listModuleCarriere) && count($listModuleCarriere) < 1) {
            $module = new AccountModule();
            $module->setCode('moduleGestionCarriere')
                ->setLibelle('Module de gestion des carrières')
                ->setDescription('Module de gestion des carrières: module permettant de gérer les carrières');
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($module);
            $manager->flush();
        }
        return $this->render('home/home.html.twig');
    }
}
