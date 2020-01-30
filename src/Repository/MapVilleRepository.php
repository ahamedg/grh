<?php

namespace App\Repository;

use App\Entity\MapVille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MapVille|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapVille|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapVille[]    findAll()
 * @method MapVille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapVilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MapVille::class);
    }

    // /**
    //  * @return Ville[] Returns an array of Ville objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ville
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
