<?php

namespace App\Repository;

use App\Entity\TeamMotoGp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TeamMotoGp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamMotoGp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamMotoGp[]    findAll()
 * @method TeamMotoGp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamMotoGpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamMotoGp::class);
    }

    // /**
    //  * @return TeamMotoGp[] Returns an array of TeamMotoGp objects
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
    public function findOneBySomeField($value): ?TeamMotoGp
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
