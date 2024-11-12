<?php
// src/Entity/Imc.php

namespace App\Entity;

use App\Repository\ImcRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


 #[ORM\Entity(repositoryClass:ImcRepository::class)]

class Imc
{

      #[ORM\Id]
      #[ORM\GeneratedValue]
      #[ORM\Column(type:"integer")]

    private $id;


     #[ORM\Column(type:"float")]
      #[Assert\NotBlank]

    private $imc;


    #[ORM\Column(type:"float")]
    #[Assert\NotBlank]
    private $caloriesForWeightGain;


      #[ORM\Column(type:"text", nullable:true)]

    private $mealDetails;


      #[ORM\ManyToOne(targetEntity:Users::class, inversedBy:"Imcs")]
      #[ORM\JoinColumn(nullable:false)]

    private $user;

    // Getters and setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImc(): ?float
    {
        return $this->imc;
    }

    public function setImc(float $imc): self
    {
        $this->imc = $imc;

        return $this;
    }

    public function getCaloriesForWeightGain(): ?float
    {
        return $this->caloriesForWeightGain;
    }

    public function setCaloriesForWeightGain(float $caloriesForWeightGain): self
    {
        $this->caloriesForWeightGain = $caloriesForWeightGain;

        return $this;
    }

    public function getMealDetails(): ?string
    {
        return $this->mealDetails;
    }

    public function setMealDetails(?string $mealDetails): self
    {
        $this->mealDetails = $mealDetails;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }
}
