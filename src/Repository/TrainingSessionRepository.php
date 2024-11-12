<?php
// src/Repository/TrainingSessionRepository.php

namespace App\Repository;

use App\Entity\TrainingSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TrainingSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrainingSession::class);
    }

    public function findByCoachWithAdherentDetails($coachId)
    {
        return $this->createQueryBuilder('t')
            ->innerJoin('t.adherant', 'a') // Join adherant relation
            ->innerJoin('t.coach', 'c')    // Join coach relation
            ->addSelect('a', 'c')          // Select both adherant and coach
            ->where('t.coach = :coach')
            ->setParameter('coach', $coachId)
            ->orderBy('t.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByAdherentWithCoachDetails($adherentId)
    {
        return $this->createQueryBuilder('t')
            ->innerJoin('t.coach', 'c')    // Join coach relation
            ->innerJoin('t.adherant', 'a') // Join adherant relation
            ->addSelect('a', 'c')          // Select both adherant and coach
            ->where('t.adherant = :adherent')
            ->setParameter('adherent', $adherentId)
            ->orderBy('t.date', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
