<?php /** @noinspection ALL */

namespace App\Controller;

use App\Entity\AccountAction;
use App\Entity\AccountModule;
use App\Entity\CloudCategorieService;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use MongoDB\Driver\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GlobalController extends AbstractController
{

    /* Permet d'enregistrer les actions qu'on peut intenter dans le système
     * @return void
     * */
    protected function saveAccountAction($code, $libelle, $description, $codeModule): void
    {
        try {
            // Rechercher une action déjà existante dans la base de données à partir du code
            $listAction = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountAction::class, 'code', $code);
            // Vérifier si une collection d'actions existe et contient un nombre d'éléments inférieur à 1
            if (isset($listAction) && count($listAction) < 1) {
                // Rechercher un module déjà existant dans la base de données à partir du code
                $listModule = $this->selectionnerToutByPropertyStringWithIdCompteNull(AccountModule::class, 'code', $codeModule);
                // Vérifier si une collection de modules existe et contient un nombre d'éléments supérieur ou égal à 1
                if (isset($listModule) && count($listModule) >= 1) {
                    // Ajouter une nouvelle action
                    $accountModule = new AccountModule();
                    $accountModule = $listModule[0];
                    //dump($accountModule);
                    $accountAction = new AccountAction();
                    $accountAction->setCode($code)
                        ->setLibelle($libelle)
                        ->setDescription($description)
                        ->setAccountModule($accountModule);
                    $manager = $this->getDoctrine()->getManager();
                    $manager->persist($accountAction);
                    $manager->flush();
                }
            }
        } catch (Exception $ex) {

        }
    }

    /** Méthode selectionnerToutByIdCompte() requête permettant
     *  de sélectionner les occurrences de l'entité selon l'idCompte
     *
     * @param int $idCompte
     * @return array
     */
    protected
    function selectionnerToutByIdCompte($persistentObject, int $idCompte)
    {
        if ($idCompte !== null) {
            try {
                $em = $this->getDoctrine()->getManager();
                $queryBuilder = $em->createQueryBuilder('po');
                $queryBuilder->SELECT('po')
                    ->FROM($persistentObject, 'po')
                    ->WHERE('po.actif = true AND po.supprimer = false AND po.idCompte =:idCompte')
//                    ->ANDWHERE('')
                    ->ORDERBY('po.libelle', 'ASC');
                if ($idCompte !== null) {
                    $queryBuilder->setParameter('idCompte', $idCompte);
                }
                $query = $queryBuilder->getQuery();
                $results = $query->getResult();
                return $results;
            } catch (Exception $ex) {

            }
            return null;
        } else {
            return null;
        }
    }

    /** Méthode selectionnerToutByIdCompte() requête permettant
     *  de sélectionner les occurrences de l'entité selon l'idCompte
     *
     * @return array
     */
    protected
    function selectionnerToutByIdCompteNull($persistentObject)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $queryBuilder = $em->createQueryBuilder('po');
            $queryBuilder->SELECT('po')
                ->FROM($persistentObject, 'po')
                ->WHERE('po.actif = true AND po.supprimer = false')
//                    ->ANDWHERE('')
                ->ORDERBY('po.libelle', 'ASC');
            $query = $queryBuilder->getQuery();
            $results = $query->getResult();
            return $results;
        } catch (Exception $ex) {

        }
        return null;
    }

    /** Méthode selectionnerToutByPropertyBoolean() requête permettant
     *  de sélectionner les occurrences de l'entité par un ordre de tri
     *
     * @param int $idCompte
     * @param boolean $trierParActif
     * @param boolean $ordre
     * @return array
     */
    protected
    function selectionnerToutByIdCompteParTri($persistentObject, int $idCompte, boolean $trierParActif, boolean $ordre)
    {
        if ($trierParActif) {
            if ($idCompte !== null) {
                try {
                    $em = $this->getDoctrine()->getManager();
                    $queryBuilder = $em->createQueryBuilder('po');
                    $queryBuilder->SELECT('po')
                        ->FROM($persistentObject, 'po')
                        ->WHERE('po.actif = true AND po.supprimer = false AND po.idCompte =:idCompte')
//                    ->ANDWHERE('')
                        ->ORDERBY(($asc) ? ' ASC' : ' DESC ');
                    if ($idCompte !== null) {
                        $queryBuilder->setParameter('idCompte', $idCompte);
                    }
                    $query = $queryBuilder->getQuery();
                    $results = $query->getResult();
                    return $results;
                } catch (Exception $ex) {

                }
                return null;
            } else {
                return null;
            }
        } else {
            return $this->selectionnerToutByIdCompte($idCompte);
        }

    }

    /** Méthode selectionnerToutByPropertyBoolean() requête permettant de sélectionner
     *  les occurrences de l'entité selon une propriété et une valeur booléennes
     *
     * @param int $idCompte
     * @param String $property
     * @param boolean $propertyVal
     * @return array
     */
    protected
    function selectionnerToutByPropertyBoolean($persistentObject, int $idCompte, String $property, boolean $propertyVal)
    {
        if ($idCompte !== null) {
            try {
                $em = $this->getDoctrine()->getManager();
                $queryBuilder = $em->createQueryBuilder('po');
                $queryBuilder->SELECT('po')
                    ->FROM($persistentObject, 'po')
                    ->WHERE('po.actif = true AND po.supprimer = false AND po.idCompte =:idCompte AND po.' . $property . '=:valeur')
//                    ->ANDWHERE('po.'. $property .'=:valeur')
                    ->ORDERBY('po.libelle', 'ASC');
                if ($idCompte !== null) {
                    $queryBuilder->setParameter('idCompte', $idCompte);
                }
                if ($propertyVal !== null) {
                    $queryBuilder->setParameter('valeur', $propertyVal);
                }
                $query = $queryBuilder->getQuery();
                $results = $query->getResult();
                return $results;
            } catch (Exception $ex) {
                return null;
            }
            return null;
        } else {
            return null;
        }

    }

    /** Méthode selectionnerToutByPropertyString() requête permettant
     *  de sélectionner les occurrences de l'entité selon une propriété de type String
     *
     * @param int $idCompte
     * @param String $property
     * @param String $propertyVal
     * @return array
     */
    protected
    function selectionnerToutByPropertyString($persistentObject, int $idCompte, String $property, String $propertyVal)
    {
        if ($idCompte !== null) {
            try {
                $em = $this->getDoctrine()->getManager();
                $queryBuilder = $em->createQueryBuilder('po');
                $queryBuilder->SELECT('po')
                    ->FROM($persistentObject, 'po')
                    ->WHERE('po.actif = true AND po.supprimer = false AND po.idCompte =:idCompte')
                    ->ANDWHERE('po.' . $property . '=:valeur')
                    ->ORDERBY('po.libelle', 'ASC');
                if ($idCompte !== null) {
                    $queryBuilder->setParameter('idCompte', $idCompte);
                }
                if ($propertyVal !== null) {
                    $queryBuilder->setParameter('valeur', $propertyVal);
                }
                $query = $queryBuilder->getQuery();
                $results = $query->getResult();
                return $results;
            } catch (Exception $ex) {
                return null;
            }
            return null;
        } else {
            return null;
        }

    }

    /** Méthode selectionnerToutByPropertyStringWithIdCompteNull() requête permettant
     *  de sélectionner les occurrences de l'entité selon une propriété de type String
     *
     * @param String $property
     * @param String $propertyVal
     * @return array
     */
    protected
    function selectionnerToutByPropertyStringWithIdCompteNull($persistentObject, String $property, String $propertyVal)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $queryBuilder = $em->createQueryBuilder('po');
            $queryBuilder->SELECT('po')
                ->FROM($persistentObject, 'po')
                ->WHERE('po.actif = true AND po.supprimer = false AND po.' . $property . ' =:valeur');
//                ->ANDWHERE('po.' . $property . ' =:valeur')
//                ->ORDERBY('po.libelle', 'ASC');
            if ($propertyVal !== null) {
                $queryBuilder->setParameter('valeur', $propertyVal);
            }
            $query = $queryBuilder->getQuery();
            $results = $query->getResult();
            return $results;
        } catch (Exception $ex) {
            return null;
        }
        return null;
    }

    /** Méthode selectionnerToutByPropertyBoolean() requête permettant
     *  de sélectionner les occurrences de l'entité selon une propriété de type integer
     *
     * @param int $idCompte
     * @param String $property
     * @param int $propertyVal
     * @return mixed
     */
    protected
    function selectionnerToutByPropertyInt($persistentObject, int $idCompte, String $property, int $propertyVal)
    {
        if ($idCompte !== null) {
            try {
                $em = $this->getDoctrine()->getManager();
                $queryBuilder = $em->createQueryBuilder('po');
                $queryBuilder->SELECT('po')
                    ->FROM($persistentObject, 'po')
                    ->WHERE('po.actif = true AND po.supprimer = false AND po.idCompte =:idCompte')
                    ->ANDWHERE('po.' + $property + '=:valeur')
                    ->ORDERBY('po.libelle', 'ASC');
                if ($idCompte !== null) {
                    $queryBuilder->setParameter('idCompte', $idCompte);
                }
                if ($propertyVal !== null) {
                    $queryBuilder->setParameter('valeur', $propertyVal);
                }
                $query = $queryBuilder->getQuery();
                $results = $query->getResult();
                return $results;
            } catch (Exception $ex) {
                return null;
            }
            return null;
        } else {
            return null;
        }

    }

}
