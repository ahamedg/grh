<?php

namespace App\Repository;

use App\Entity\MapStates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MapStates|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapStates|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapStates[]    findAll()
 * @method MapStates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapStatesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MapStates::class);
    }


    public function findAllStatesByPays($pays): \Doctrine\ORM\QueryBuilder
    {
        $qb = $this->createQueryBuilder('s');

        $qb->where('s.pays = :pays')
            ->setParameter('pays', $pays);
        return $qb;
    }
    // /**
    //  * @return States[] Returns an array of States objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?States
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
