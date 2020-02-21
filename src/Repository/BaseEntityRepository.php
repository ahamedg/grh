<?php

namespace App\Repository;

use App\Entity\BaseEntity;
use App\Entity\CloudCategorieService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\QueryBuilder;

/**
 * @method BaseEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaseEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaseEntity[]    findAll()
 * @method BaseEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaseEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaseEntity::class);
    }

    /**
     * //* @return BaseEntity[] Returns an array of BaseEntity objects
     */
    /*public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }*/

    /*
     * @return CloudCategorieService[] Returns an array of BaseEntity objects
     * */
    // Sélectionner tout par idCompte
    public function findAllByIdCompte():array
    {
        $qb = new QueryBuilder();
        $qb->select('*')
            ->from('CloudCategorieService', 'cat')
            ->orderBy('cat.libelle', 'ASC');
    }

    public function findAllByActif($idCompte, $actif, $asc)
    {

    }

    public function findAllByProperty($idCompte, $propriete, $valeur)
    {

    }

    public function findAllByIntProperty($idCompte, $intPropriete, $intValeur)
    {

    }

    public function findAllOrderBy($idCompte)
    {

    }

    /*
    public function findOneBySomeField($value): ?BaseEntity
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
