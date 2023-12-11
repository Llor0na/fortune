<?php

namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuteurRepository::class)]
class Auteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'livres', targetEntity: Livre::class)]
    private Collection $nom;

    public function __construct()
    {
        $this->nom = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Livre>
     */
    public function getNom(): Collection
    {
        return $this->nom;
    }

    public function addNom(Livre $nom): static
    {
        if (!$this->nom->contains($nom)) {
            $this->nom->add($nom);
            $nom->setLivres($this);
        }

        return $this;
    }

    public function removeNom(Livre $nom): static
    {
        if ($this->nom->removeElement($nom)) {
            // set the owning side to null (unless already changed)
            if ($nom->getLivres() === $this) {
                $nom->setLivres(null);
            }
        }

        return $this;
    }
}
