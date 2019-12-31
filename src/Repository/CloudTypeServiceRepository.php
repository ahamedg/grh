<?php

namespace App\Repository;

use App\Entity\CloudTypeService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudTypeService|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudTypeService|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudTypeService[]    findAll()
 * @method CloudTypeService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudTypeServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudTypeService::class);
    }

    // /**
    //  * @return CloudTypeService[] Returns an array of CloudTypeService objects
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
    public function findOneBySomeField($value): ?CloudTypeService
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
