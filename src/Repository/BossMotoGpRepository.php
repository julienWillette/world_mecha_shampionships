<?php

namespace App\Repository;

use App\Entity\BossMotoGp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BossMotoGp|null find($id, $lockMode = null, $lockVersion = null)
 * @method BossMotoGp|null findOneBy(array $criteria, array $orderBy = null)
 * @method BossMotoGp[]    findAll()
 * @method BossMotoGp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BossMotoGpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BossMotoGp::class);
    }

    // /**
    //  * @return BossMotoGp[] Returns an array of BossMotoGp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BossMotoGp
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
