<?php

namespace App\Repository;

use App\Entity\MapCommune;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MapCommune|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapCommune|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapCommune[]    findAll()
 * @method MapCommune[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapCommuneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MapCommune::class);
    }

    // /**
    //  * @return Commune[] Returns an array of Commune objects
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
    public function findOneBySomeField($value): ?Commune
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
