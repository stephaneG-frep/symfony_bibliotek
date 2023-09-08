<?php

namespace App\Entity;

use App\Repository\ExemplaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExemplaireRepository::class)]
class Exemplaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usure $usure = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Stock $stock = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Livres $livres = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsure(): ?Usure
    {
        return $this->usure;
    }

    public function setUsure(?Usure $usure): static
    {
        $this->usure = $usure;

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getLivres(): ?Livres
    {
        return $this->livres;
    }

    public function setLivres(?Livres $livres): static
    {
        $this->livres = $livres;

        return $this;
    }
}
