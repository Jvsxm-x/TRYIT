<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Adherants;

#[ORM\Entity]
class Coachs extends Users
{
    #[ORM\Column(length: 255)]
    private ?string $specialty = null;

    #[ORM\OneToMany(targetEntity: Adherants::class, mappedBy: 'coach')]
    private Collection $adherants;

   // Ensure this is declared only once

    #[ORM\OneToMany(targetEntity: TrainingSession::class, mappedBy: 'coach')]
    private Collection $trainingSessions;

    public function __construct()
    {
        parent::__construct();
        $this->adherants = new ArrayCollection();
        $this->roles = ['ROLE_COACH'];
        $this->trainingSessions = new ArrayCollection();
    }

    public function getUserCoaches(): Collection
    {
        return $this->userCoaches;  // Return user coaches
    }

    public function getTrainingSessions(): Collection
    {
        return $this->trainingSessions;
    }

    public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(?string $specialty): void
    {
        $this->specialty = $specialty;
    }

    public function getAdherants(): Collection
    {
        return $this->adherants;
    }

    public function addAdherant(Adherants $adherant): static
    {
        if (!$this->adherants->contains($adherant)) {
            $this->adherants->add($adherant);
            $adherant->setCoach($this);
        }
        return $this;
    }

    public function removeAdherant(Adherants $adherant): static
    {
        if ($this->adherants->removeElement($adherant)) {
            if ($adherant->getCoach() === $this) {
                $adherant->setCoach(null);
            }
        }
        return $this;
    }
}
