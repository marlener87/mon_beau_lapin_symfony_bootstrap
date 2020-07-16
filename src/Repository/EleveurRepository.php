<?php

namespace App\Repository;

use App\Entity\Eleveur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Eleveur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eleveur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eleveur[]    findAll()
 * @method Eleveur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EleveurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eleveur::class);
    }

    // /**
    //  * @return Eleveur[] Returns an array of Eleveur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eleveur
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
