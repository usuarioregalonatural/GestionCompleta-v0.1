<?php

namespace App\Repository;

use App\Entity\PedidosRealizados;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PedidosRealizados|null find($id, $lockMode = null, $lockVersion = null)
 * @method PedidosRealizados|null findOneBy(array $criteria, array $orderBy = null)
 * @method PedidosRealizados[]    findAll()
 * @method PedidosRealizados[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PedidosRealizadosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PedidosRealizados::class);
    }

    // /**
    //  * @return PedidosRealizados[] Returns an array of PedidosRealizados objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PedidosRealizados
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
