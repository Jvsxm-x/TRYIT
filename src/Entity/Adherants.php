<?php
namespace App\Entity;
use App\Entity\Users;
use App\Entity\Coachs;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
class Adherants extends Users
{
    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $joinedAt = null;

    #[ORM\ManyToOne(targetEntity: Coachs::class, inversedBy: 'adherants')]
    private ?Coachs $coach = null;

    #[ORM\OneToMany(targetEntity: Abonnements::class, mappedBy: 'adherant')]
    private Collection $abonnements;

    public function __construct()
    {
        parent::__construct();
        $this->joinedAt = new \DateTime();
        $this->roles = ['ROLE_ADHERANT'];
        $this->abonnements = new ArrayCollection();
        $this->trainingSessions = new ArrayCollection();


    }



    public function getJoinedAt(): ?\DateTimeInterface
    {
        return $this->joinedAt;
    }

    public function setJoinedAt(?\DateTimeInterface $joinedAt): void
    {
        $this->joinedAt = $joinedAt;
    }

    public function getCoach(): ?Coachs
    {
        return $this->coach;
    }


    public function setCoach(?Coachs $coach): void
    {
        $this->coach = $coach;
    }

    public function getAbonnements(): Collection
    {
        return $this->abonnements;
    }

    public function setAbonnements(Collection $abonnements): void
    {
        $this->abonnements = $abonnements;
    }
    #[ORM\OneToMany(mappedBy: 'adherant', targetEntity: TrainingSession::class)]
    private $trainingSessions;


    public function getTrainingSessions(): ?Collection
    {
        return $this->trainingSessions;
    }

    public function setTrainingSessions($trainingSessions): self
    {
        $this->trainingSessions = $trainingSessions;
        return $this;
    }



    public function addAbonnement(Abonnements $abonnement): static
    {
        if (!$this->abonnements->contains($abonnement)) {
            $this->abonnements->add($abonnement);
            $abonnement->setAdherant($this);
        }

        return $this;
    }

    public function removeAbonnement(Abonnements $abonnement): static
    {
        if ($this->abonnements->removeElement($abonnement)) {
            // set the owning side to null (unless already changed)
            if ($abonnement->getAdherant() === $this) {
                $abonnement->setAdherant(null);
            }
        }

        return $this;
    }

}
