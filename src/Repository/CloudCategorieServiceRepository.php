<?php

namespace App\Repository;

use App\Entity\CloudCategorieService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @method CloudCategorieService|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudCategorieService|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudCategorieService[]    findAll()
 * @method CloudCategorieService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudCategorieServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudCategorieService::class);
        
    }

    public function findAllByIdCompte()
    {
        $qb = new QueryBuilder();
        $qb->select('*')
            ->from('CloudCategorieService', 'cat')
            ->orderBy('cat.libelle', 'ASC');
        return $qb;
    }

    /*
    public function findOneBySomeField($value): ?CloudCategorieService
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
