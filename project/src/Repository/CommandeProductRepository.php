<?php

namespace App\Repository;

use App\Entity\CommandeProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommandeProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeProduct[]    findAll()
 * @method CommandeProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeProduct::class);
    }

    // /**
    //  * @return CommandeProduct[] Returns an array of CommandeProduct objects
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
    public function findOneBySomeField($value): ?CommandeProduct
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
