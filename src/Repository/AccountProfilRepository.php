<?php

namespace App\Repository;

use App\Entity\AccountProfil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountProfil|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountProfil|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountProfil[]    findAll()
 * @method AccountProfil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountProfilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountProfil::class);
    }

    // /**
    //  * @return AccountProfil[] Returns an array of AccountProfil objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccountProfil
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
