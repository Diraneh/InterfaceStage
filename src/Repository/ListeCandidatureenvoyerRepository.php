<?php

namespace App\Repository;

use App\Entity\ListeCandidatureenvoyer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeCandidatureenvoyer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeCandidatureenvoyer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeCandidatureenvoyer[]    findAll()
 * @method ListeCandidatureenvoyer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeCandidatureenvoyerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeCandidatureenvoyer::class);
    }

    // /**
    //  * @return ListeCandidatureenvoyer[] Returns an array of ListeCandidatureenvoyer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeCandidatureenvoyer
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
