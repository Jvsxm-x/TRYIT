<?php
namespace App\Repository;

use App\Entity\Scheduler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Scheduler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scheduler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scheduler[]    findAll()
 * @method Scheduler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SchedulerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scheduler::class);
    }

    /**
     * @return Scheduler[] Returns an array of Scheduler objects
     */
    public function findByCoach($coachId): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.coach = :coachId')
            ->setParameter('coachId', $coachId)
            ->orderBy('s.date', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
