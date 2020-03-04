<?php

namespace App\Repository;

use App\Entity\ChangeName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ChangeName|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChangeName|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChangeName[]    findAll()
 * @method ChangeName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChangeNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChangeName::class);
    }

    // /**
    //  * @return ChangeName[] Returns an array of ChangeName objects
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
    public function findOneBySomeField($value): ?ChangeName
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
