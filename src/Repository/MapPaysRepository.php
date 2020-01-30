<?php

namespace App\Repository;

use App\Entity\MapPays;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MapPays|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapPays|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapPays[]    findAll()
 * @method MapPays[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapPaysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MapPays::class);
    }

    // /**
    //  * @return Pays[] Returns an array of Pays objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pays
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
