<?php

namespace App\Repository;

use App\Entity\CliniqueVeterinaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CliniqueVeterinaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method CliniqueVeterinaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method CliniqueVeterinaire[]    findAll()
 * @method CliniqueVeterinaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CliniqueVeterinaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CliniqueVeterinaire::class);
    }

    // /**
    //  * @return CliniqueVeterinaire[] Returns an array of CliniqueVeterinaire objects
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
    public function findOneBySomeField($value): ?CliniqueVeterinaire
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
