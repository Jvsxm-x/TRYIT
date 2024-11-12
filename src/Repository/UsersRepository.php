<?php
namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
* @method Users|null find($id, $lockMode = null, $lockVersion = null)
* @method Users|null findOneBy(array $criteria, array $orderBy = null)
* @method Users[]    findAll()
* @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class UsersRepository extends ServiceEntityRepository
{
public function __construct(ManagerRegistry $registry)
{
parent::__construct($registry, Users::class);
}

// Add custom methods here

public function findByEmail($email): ?Users
{
return $this->createQueryBuilder('u')
->andWhere('u.email = :email')
->setParameter('email', $email)
->getQuery()
->getOneOrNullResult();
}

public function findByCredentials($email, $password): ?Users
{
return $this->createQueryBuilder('u')
->andWhere('u.email = :email')
->andWhere('u.password = :password')
->setParameter('email', $email)
->setParameter('password', $password)
->getQuery()
->getOneOrNullResult();
}
}
