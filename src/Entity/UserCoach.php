<?php
// src/Entity/UserCoach.php
namespace App\Entity;

use App\Entity\Users;
use App\Repository\UserCoachRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserCoachRepository::class)]
class UserCoach
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'userCoaches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null; // The adherent

    #[ORM\ManyToOne(targetEntity: Users::class, cascade: ['persist', 'remove'], inversedBy: 'coachCoaches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $coach = null; // The coach

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdAt = null;
    #[ORM\OneToMany(targetEntity: TrainingSession::class, mappedBy: 'userCoach', cascade: ['persist', 'remove'])]
    private Collection $trainingSessions;
    public function __construct(?Users $user = null, ?Users $coach = null)
    {
        $this->user = $user;
        $this->coach = $coach;
        $this->createdAt = new \DateTime();
        $this->trainingSessions = new ArrayCollection();

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUser(): ?\App\Entity\Users
    {
        return $this->user;
    }

    public function setUser(?\App\Entity\Users $user): void
    {
        $this->user = $user;
    }

    public function getCoach(): ?\App\Entity\Users
    {
        return $this->coach;
    }

    public function setCoach(?\App\Entity\Users $coach): void
    {
        $this->coach = $coach;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    public function getTrainingSessions(): Collection
    {
        return $this->trainingSessions;
    }

    public function addTrainingSession(TrainingSession $trainingSession): self
    {
        if (!$this->trainingSessions->contains($trainingSession)) {
            $this->trainingSessions[] = $trainingSession;
            $trainingSession->setUserCoach($this);
        }

        return $this;
    }

    public function removeTrainingSession(TrainingSession $trainingSession): self
    {
        if ($this->trainingSessions->removeElement($trainingSession)) {
            if ($trainingSession->getUserCoach() === $this) {
                $trainingSession->setUserCoach(null);
            }
        }

        return $this;
    }

}
