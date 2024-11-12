<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Adherants;
use App\Entity\Coachs;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "users_type", type: "string")]
#[ORM\DiscriminatorMap([
    "users" => Users::class,
    "coach" => Coachs::class,
    "adherent" => Adherants::class,
    "admin"=>Administrators::class])]
#[ORM\Table(name: "users")]
class Users implements  UserInterface,PasswordAuthenticatedUserInterface
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column]
private ?int $id = null;

#[ORM\Column(length: 255)]
private ?string $name = null;

#[ORM\Column(length: 255, unique: true)]
private ?string $email = null;

#[ORM\Column(length: 255)]
private ?string $password = null;

#[ORM\Column]
private array $roles = [];

#[ORM\Column(type: 'datetime')]
private ?\DateTimeInterface $createdAt = null;


#[ORM\Column(type: 'datetime')]
private ?\DateTimeInterface $updatedAt = null;

#[ORM\OneToMany(targetEntity: Messageries::class, mappedBy: 'sender')]
private Collection $sentMessages;

#[ORM\OneToMany(targetEntity: Messageries::class, mappedBy: 'receiver')]
private Collection $receivedMessages;
    // One-to-many relationship with UserCoach where the user is an adherent
    #[ORM\OneToMany(targetEntity: UserCoach::class, mappedBy: 'user')]
    protected Collection $userCoaches;

    // One-to-many relationship with UserCoach where the user is a coach
    #[ORM\OneToMany(targetEntity: UserCoach::class, mappedBy: 'coach')]
    private Collection $coachCoaches;
    #[ORM\OneToMany(targetEntity: Imc::class, mappedBy: 'imcs')]
    private  $Imcs;

public function __construct()
{
$this->sentMessages = new ArrayCollection();
$this->receivedMessages = new ArrayCollection();
$this->createdAt = new \DateTime();
$this->updatedAt = new \DateTime();
$this->userCoaches=new ArrayCollection();
$this->coachCoaches=new ArrayCollection();
$this->Imcs = new ArrayCollection();

}



    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getSentMessages(): Collection
    {
        return $this->sentMessages;
    }

    public function setSentMessages(Collection $sentMessages): void
    {
        $this->sentMessages = $sentMessages;
    }

    public function getReceivedMessages(): Collection
    {
        return $this->receivedMessages;
    }

    public function setReceivedMessages(Collection $receivedMessages): void
    {
        $this->receivedMessages = $receivedMessages;
    }

    public function addSentMessage(Messageries $sentMessage): static
    {
        if (!$this->sentMessages->contains($sentMessage)) {
            $this->sentMessages->add($sentMessage);
            $sentMessage->setSender($this);
        }

        return $this;
    }

    public function removeSentMessage(Messageries $sentMessage): static
    {
        if ($this->sentMessages->removeElement($sentMessage)) {
            // set the owning side to null (unless already changed)
            if ($sentMessage->getSender() === $this) {
                $sentMessage->setSender(null);
            }
        }

        return $this;
    }

    public function addReceivedMessage(Messageries $receivedMessage): static
    {
        if (!$this->receivedMessages->contains($receivedMessage)) {
            $this->receivedMessages->add($receivedMessage);
            $receivedMessage->setReceiver($this);
        }

        return $this;
    }

    public function removeReceivedMessage(Messageries $receivedMessage): static
    {
        if ($this->receivedMessages->removeElement($receivedMessage)) {
            // set the owning side to null (unless already changed)
            if ($receivedMessage->getReceiver() === $this) {
                $receivedMessage->setReceiver(null);
            }
        }

        return $this;
    }
    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }

    public function getUserIdentifier(): string
    {

           return $this->email;
    }

    public function getCoachCoaches(): Collection
    {
        return $this->coachCoaches;
    }

    public function setCoachCoaches(Collection $coachCoaches): void
    {
        $this->coachCoaches = $coachCoaches;
    }

    public function getImcs(): Collection
    {
        return $this->Imcs;
    }

    public function setUserImcs(Collection $Imcs): void
    {
        $this->Imcs = $Imcs;
    }

}
