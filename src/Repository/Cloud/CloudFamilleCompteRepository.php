<?php

namespace App\Repository\Cloud;

use App\Entity\Cloud\CloudFamilleCompte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudFamilleCompte|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudFamilleCompte|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudFamilleCompte[]    findAll()
 * @method CloudFamilleCompte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudFamilleCompteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudFamilleCompte::class);
    }

    // /**
    //  * @return CloudFamilleCompte[] Returns an array of CloudFamilleCompte objects
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
    public function findOneBySomeField($value): ?CloudFamilleCompte
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
