<?php

namespace App\Repository;

use App\Entity\Champioships;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Champioships|null find($id, $lockMode = null, $lockVersion = null)
 * @method Champioships|null findOneBy(array $criteria, array $orderBy = null)
 * @method Champioships[]    findAll()
 * @method Champioships[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChampioshipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Champioships::class);
    }

    // /**
    //  * @return Champioships[] Returns an array of Champioships objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Champioships
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
