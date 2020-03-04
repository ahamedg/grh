<?php

namespace App\Repository;

use App\Entity\AccountAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountAction[]    findAll()
 * @method AccountAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountAction::class);
    }
}
