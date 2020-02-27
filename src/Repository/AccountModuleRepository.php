<?php

namespace App\Repository;

use App\Entity\AccountModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountModule[]    findAll()
 * @method AccountModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountModuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountModule::class);
    }

    // /**
    //  * @return AccountModule[] Returns an array of AccountModule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccountModule
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
