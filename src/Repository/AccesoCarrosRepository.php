<?php

namespace App\Repository;

use App\Entity\AccesoCarros;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AccesoCarros|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccesoCarros|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccesoCarros[]    findAll()
 * @method AccesoCarros[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccesoCarrosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccesoCarros::class);
    }

    // /**
    //  * @return AccesoCarros[] Returns an array of AccesoCarros objects
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
    public function findOneBySomeField($value): ?AccesoCarros
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
