<?php

namespace App\Entity;

use App\Repository\AdherentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdherentRepository::class)]
class Adherent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?bool $caution = null;

    #[ORM\OneToMany(mappedBy: 'adherent', targetEntity: Emprut::class)]
    private Collection $empruts;

    public function __construct()
    {
        $this->empruts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function isCaution(): ?bool
    {
        return $this->caution;
    }

    public function setCaution(bool $caution): static
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * @return Collection<int, Emprut>
     */
    public function getEmpruts(): Collection
    {
        return $this->empruts;
    }

    public function addEmprut(Emprut $emprut): static
    {
        if (!$this->empruts->contains($emprut)) {
            $this->empruts->add($emprut);
            $emprut->setAdherent($this);
        }

        return $this;
    }

    public function removeEmprut(Emprut $emprut): static
    {
        if ($this->empruts->removeElement($emprut)) {
            // set the owning side to null (unless already changed)
            if ($emprut->getAdherent() === $this) {
                $emprut->setAdherent(null);
            }
        }

        return $this;
    }
}
