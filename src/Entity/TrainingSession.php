<?php

// src/Entity/TrainingSession.php

namespace App\Entity;

use App\Repository\TrainingSessionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainingSessionRepository::class)]
class TrainingSession
{
#[ORM\Id]
#[ORM\GeneratedValue(strategy: "AUTO")]
#[ORM\Column(type: "integer")]
private ?int $id = null;

// Other fields and associations...

#[ORM\ManyToOne(targetEntity: Adherants::class, inversedBy: 'trainingSessions')]
#[ORM\JoinColumn(name: "adherant_id", referencedColumnName: "id", onDelete: "RESTRICT")]
private ?Adherants $adherant = null;

#[ORM\ManyToOne(targetEntity: Coachs::class, inversedBy: 'trainingSessions')]
#[ORM\JoinColumn(name: "coach_id", referencedColumnName: "id", onDelete: "RESTRICT")]
private ?Coachs $coach = null;

#[ORM\Column(type: 'datetime')]
private ?\DateTimeInterface $date = null;

// Getters and setters...

public function getId(): ?int
{
return $this->id;
}

public function getAdherant(): ?Adherants
{
return $this->adherant;
}
    public function getUserCoach(): ?Adherants
    {
        return $this->userCoach;
    }

    public function setUserCoach(?Adherants $userCoach): self
    {
        $this->userCoach = $userCoach;
        return $this;
    }
public function setAdherant(?Adherants $adherant): self
{
$this->adherant = $adherant;
return $this;
}

public function getCoach(): ?Coachs
{
return $this->coach;
}

public function setCoach(?Coachs $coach): self
{
$this->coach = $coach;
return $this;
}

public function getDate(): ?\DateTimeInterface
{
return $this->date;
}

public function setDate(\DateTimeInterface $date): self
{
$this->date = $date;
return $this;
}
}
