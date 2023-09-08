<?php

namespace App\Repository;

use App\Entity\Emprut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Emprut>
 *
 * @method Emprut|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emprut|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emprut[]    findAll()
 * @method Emprut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmprutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Emprut::class);
    }

//    /**
//     * @return Emprut[] Returns an array of Emprut objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Emprut
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
