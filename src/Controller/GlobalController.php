<?php /** @noinspection ALL */

namespace App\Controller;

use App\Entity\AccountAction;
use App\Entity\AccountModule;
use App\Entity\CloudCategorieService;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use MongoDB\Driver\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GlobalController extends AbstractController
{

    private ObjectManager $manager;

    /* Permet d'enregistrer les actions qu'on peut intenter dans le système
     * @return void
     * */
    protected function saveAccountAction($code, $libelle, $description): void
    {
        $repo = $this->getDoctrine()->getRepository(AccountAction::class);
        $accountAction = $repo->findOneBy($code);

        if ($accountAction === null) {
            $accountAction = new AccountAction();
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

        if ($accountModule === null) {
            $accountModule->setCode($code)
                ->setLibelle($libelle)
                ->setDescription($description);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($accountModule);
            $manager->flush();
        }
    }

    /** Méthode selectionnerToutByIdCompte() requête basée sur des paramètres
     *  permettant de sélectionner toutes les occurrences de l'entité
     *
     * @param int $idCompte
     * @return mixed
     */
    protected function selectionnerToutByIdCompte($persistentObject, int $idCompte)
    {
        if ($idCompte !== null) {
            try {
                $em = $this->getDoctrine()->getManager();
                $queryBuilder = $em->createQueryBuilder('po');
                $queryBuilder->SELECT('po')
                    ->FROM($persistentObject, 'po')
                    ->WHERE('po.actif = true AND po.supprimer = false')
                    ->ANDWHERE('po.idCompte =:idCompte')
                    ->ORDERBY('po.libelle', 'ASC');
                if ($idCompte !== null) {
                    $queryBuilder->setParameter('idCompte', $idCompte);
                }
                $query = $queryBuilder->getQuery();
                $listActions = $query->getResult();
                return $listActions;
            } catch (Exception $ex) {

            }
            return null;
        } else {
            return null;
        }
    }

    /** Méthode selectionnerToutByPropertyBoolean() requête basée sur des paramètres
     *  permettant de sélectionner toutes les occurrences de l'entité
     *
     * @param int $idCompte
     * @param boolean $trierParActif
     * @param boolean $ordre
     * @return mixed
     */
    protected function selectionnerToutByIdCompteParTri($persistentObject, int $idCompte, boolean $trierParActif, boolean $ordre)
    {
        if ($trierParActif) {
            try {
                $em = $this->getDoctrine()->getManager();
                $queryBuilder = $em->createQueryBuilder('po');
                $queryBuilder->SELECT('po')
                    ->FROM($persistentObject, 'e')
                    ->WHERE('po.idCompte = :idCompte')
                    ->ORDERBY(($asc) ? ' ASC' : ' DESC ');
                if ($idCompte !== null) {
                    $queryBuilder->setParameter('idCompte', $idCompte);
                }
                $query = $queryBuilder->getQuery();
                $listActions = $query->getResult();
                return $listActions;
            } catch (Exception $ex) {

            }
            return null;
        } else {
            return $this->selectionnerToutByIdCompte($idCompte);
        }

    }

    /** Méthode selectionnerToutByPropertyBoolean() requête basée sur des paramètres
     *  permettant de sélectionner toutes les occurrences de l'entité
     *
     * @param int $idCompte
     * @param String $property
     * @param boolean $propertyVal
     * @return mixed
     */
    protected function selectionnerToutByPropertyBoolean($persistentObject, int $idCompte, String $property, boolean $propertyVal)
    {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->createQueryBuilder('po');
        $queryBuilder->SELECT('po')
            ->FROM(CloudCategorieService::class, 'po')
            ->WHERE('po.idCompte = :idCompte')
            ->ORDERBY('po.libelle', 'ASC');
        if ($idCompte !== null) {
            $queryBuilder->setParameter('idCompte', $idCompte);
        }
        $query = $queryBuilder->getQuery();
        $listActions = $query->getResult();
        return $listActions;
    }

}
