<?php

namespace App\Repository;

use App\Entity\AccountUtilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountUtilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountUtilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountUtilisateur[]    findAll()
 * @method AccountUtilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountUtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountUtilisateur::class);
    }
}
