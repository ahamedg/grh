<?php

namespace App\Repository;

use App\Entity\AccountModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountModule[]    findAll()
 * @method AccountModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountModuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountModule::class);
    }
}
