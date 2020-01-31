<?php

namespace App\Repository;

use App\Entity\CloudSection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudSection|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudSection|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudSection[]    findAll()
 * @method CloudSection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudSectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudSection::class);
    }

    // /**
    //  * @return CloudSection[] Returns an array of CloudSection objects
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
    public function findOneBySomeField($value): ?CloudSection
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
