<?php

namespace App\Repository;

use App\Entity\Un;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Un|null find($id, $lockMode = null, $lockVersion = null)
 * @method Un|null findOneBy(array $criteria, array $orderBy = null)
 * @method Un[]    findAll()
 * @method Un[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Un::class);
    }

    // /**
    //  * @return Un[] Returns an array of Un objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Un
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
