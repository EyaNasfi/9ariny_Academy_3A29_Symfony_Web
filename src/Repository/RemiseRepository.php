<?php

namespace App\Repository;

use App\Entity\Remise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Remise>
 *
 * @method Remise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Remise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Remise[]    findAll()
 * @method Remise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Remise::class);
    }

//    /**
//     * @return Remise[] Returns an array of Remise objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Remise
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
