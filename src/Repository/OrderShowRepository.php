<?php

namespace App\Repository;

use App\Entity\OrderShow;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrderShow|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderShow|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderShow[]    findAll()
 * @method OrderShow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderShowRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderShow::class);
    }

    // /**
    //  * @return OrderShow[] Returns an array of OrderShow objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrderShow
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
