<?php

namespace App\Repository;

use App\Entity\MapPrefecture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MapPrefecture|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapPrefecture|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapPrefecture[]    findAll()
 * @method MapPrefecture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapPrefectureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MapPrefecture::class);
    }

    // /**
    //  * @return Prefecture[] Returns an array of Prefecture objects
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
    public function findOneBySomeField($value): ?Prefecture
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
