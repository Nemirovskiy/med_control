<?php

namespace App\Repository;

use App\Entity\Sugar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sugar>
 *
 * @method Sugar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sugar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sugar[]    findAll()
 * @method Sugar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SugarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sugar::class);
    }

    //    /**
    //     * @return Sugar[] Returns an array of Sugar objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Sugar
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
