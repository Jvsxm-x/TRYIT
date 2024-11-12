<?php

namespace App\Repository;

use App\Entity\Coachs;
use App\Entity\UserCoach;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserCoach|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCoach|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCoach[]    findAll()
 * @method UserCoach[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCoachRepository extends ServiceEntityRepository
{


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCoach::class);
    }
    public function findByUser(Users $user): array
    {
        return $this->createQueryBuilder('uc')
            ->andWhere('uc.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    public function findByCoach(Coachs $coach): array
    {
        return $this->createQueryBuilder('uc')
            ->andWhere('uc.coach = :coach')
            ->setParameter('coach', $coach)
            ->getQuery()
            ->getResult();
    }

    public function findAdherentsByCoach(int $coachId): array
    {
        return $this->createQueryBuilder('uc')  // 'uc' stands for UserCoach
        ->innerJoin('uc.user', 'u')  // Join on the 'user' field in UserCoach (the adherent)
        ->innerJoin('uc.coach', 'c')  // Join on the 'coach' field in UserCoach
        ->andWhere('c.id = :coachId')  // Filter by coach ID
        ->setParameter('coachId', $coachId)
            ->select('u.name', 'u.createdAt')  // Select the name and createdAt from the user (adherent)
            ->getQuery()
            ->getResult();
    }



}