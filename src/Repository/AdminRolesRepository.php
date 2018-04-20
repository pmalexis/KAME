<?php

namespace App\Repository;

use App\Entity\AdminRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminRoles[]    findAll()
 * @method AdminRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminRolesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminRoles::class);
    }

//    /**
//     * @return AdminRoles[] Returns an array of AdminRoles objects
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
    public function findOneBySomeField($value): ?AdminRoles
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
