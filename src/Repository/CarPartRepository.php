<?php

namespace App\Repository;

use App\Entity\CarPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CarPart>
 *
 * @method CarPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarPart[]    findAll()
 * @method CarPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarPartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarPart::class);
    }

//    /**
//     * @return CarPart[] Returns an array of CarPart objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CarPart
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
