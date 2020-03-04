<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

abstract class BaseEntityRepository extends EntityRepository
{
    /* Permet de sélectionner toute les occurrences de l'entité à partir de idCompte
     * @return array
     * */
    public function findAllByIdCompte($idCompte)
    {
        try {
            //$this->_entityName
            $em = $this->getEntityManager();
            $query = $em->createQuery('SELECT e FROM ' + $this->_entityName + ' e WHERE e.idCompte = :idCompte');
            $query->setParameter('idCompte', $idCompte);
            $users = $query->getResult();
        } catch (\Exception $ex) {

        }
    }
}
