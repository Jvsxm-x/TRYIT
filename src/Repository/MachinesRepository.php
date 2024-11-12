<?php

namespace App\Repository;

use App\Entity\Machines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Machines>
 */
class MachinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Machines::class);
    }

    //    /**
    //     * @return Machines[] Returns an array of Machines objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Machines
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function sumNbrMachines(): int
    {
        $queryBuilder = $this->createQueryBuilder('m')
            ->select('SUM(m.nbrMachines)') // Sum of nbrmachines
            ->getQuery();

        return (int) $queryBuilder->getSingleScalarResult(); // Return the result as an integer
    }
}
