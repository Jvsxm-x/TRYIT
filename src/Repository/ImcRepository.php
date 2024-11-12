<?php
// src/Repository/ImcRepository.php

namespace App\Repository;

use App\Entity\Imc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ImcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Imc::class);
    }

    // Add custom methods here if needed
}
