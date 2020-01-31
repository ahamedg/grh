<?php

namespace App\Repository;

use App\Entity\CloudTypeBudget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudTypeBudget|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudTypeBudget|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudTypeBudget[]    findAll()
 * @method CloudTypeBudget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudTypeBudgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudTypeBudget::class);
    }

    // /**
    //  * @return CloudTypeBudget[] Returns an array of CloudTypeBudget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CloudTypeBudget
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
