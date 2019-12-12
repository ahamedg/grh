<?php

namespace App\Repository\Cloud;

use App\Entity\Cloud\CloudCompte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudCompte|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudCompte|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudCompte[]    findAll()
 * @method CloudCompte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudCompteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudCompte::class);
    }

    // /**
    //  * @return CloudCompte[] Returns an array of CloudCompte objects
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
    public function findOneBySomeField($value): ?CloudCompte
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
