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
        $idCompte = 1;
        parent::__construct($registry, CloudCategorieService::class);
//        findAllByIdCompte2();

    }
}
