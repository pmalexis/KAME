<?php

namespace App\Repository;

use App\Entity\AdminUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminUsers[]    findAll()
 * @method AdminUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminUsersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminUsers::class);
    }

//    /**
//     * @return AdminUsers[] Returns an array of AdminUsers objects
//     */
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
    public function findOneBySomeField($value): ?AdminUsers
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
