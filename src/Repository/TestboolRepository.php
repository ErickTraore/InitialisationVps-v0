<?php

namespace App\Repository;

use App\Entity\Testbool;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Testbool|null find($id, $lockMode = null, $lockVersion = null)
 * @method Testbool|null findOneBy(array $criteria, array $orderBy = null)
 * @method Testbool[]    findAll()
 * @method Testbool[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestboolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Testbool::class);
    }

    // /**
    //  * @return Testbool[] Returns an array of Testbool objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Testbool
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
