<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Coachs;

#[ORM\Entity]
class Scheduler
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\ManyToOne(targetEntity: Coachs::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $coach;

    #[ORM\Column(type: "string", length: 50)]
    private $salle;

    #[ORM\Column(type: "datetime")]
    private $date;

    #[ORM\Column(type: "time")]
    private $startTime;

    #[ORM\Column(type: "time")]
    private $endTime;

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSalle(): ?string
    {
        return $this->salle;
    }

    public function setSalle(string $salle): self
    {
        $this->salle = $salle;
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

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }
}
