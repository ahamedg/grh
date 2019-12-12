<?php

namespace App\Repository\Cloud;

use App\Entity\Cloud\CloudTypeCompte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudTypeCompte|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudTypeCompte|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudTypeCompte[]    findAll()
 * @method CloudTypeCompte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudTypeCompteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudTypeCompte::class);
    }

    // /**
    //  * @return CloudTypeCompte[] Returns an array of CloudTypeCompte objects
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
    public function findOneBySomeField($value): ?CloudTypeCompte
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
