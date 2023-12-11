<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'nom')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Auteur $livres = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivres(): ?Auteur
    {
        return $this->livres;
    }

    public function setLivres(?Auteur $livres): static
    {
        $this->livres = $livres;

        return $this;
    }
}
