<?php

namespace App\Entity;

use App\Repository\SallesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SallesRepository::class)]
class Salles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    //#[ORM\Column]
    //private ?int $salle_id = null;

    #[ORM\Column(length: 30)]
    private ?string $salle_nom = null;

    #[ORM\Column]
    private ?int $salle_capacite = null;

    #[ORM\Column(length: 100)]
    private ?string $salle_adresse = null;

    #[ORM\OneToMany(mappedBy: 'manif_lieu', targetEntity: Manifestations::class)]
    private Collection $manifestations;

    public function __construct()
    {
        $this->manifestations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalleId(): ?int
    {
        return $this->salle_id;
    }

    public function setSalleId(int $salle_id): self
    {
        $this->salle_id = $salle_id;

        return $this;
    }

    public function getSalleNom(): ?string
    {
        return $this->salle_nom;
    }

    public function setSalleNom(string $salle_nom): self
    {
        $this->salle_nom = $salle_nom;

        return $this;
    }

    public function getSalleCapacite(): ?int
    {
        return $this->salle_capacite;
    }

    public function setSalleCapacite(int $salle_capacite): self
    {
        $this->salle_capacite = $salle_capacite;

        return $this;
    }

    public function getSalleAdresse(): ?string
    {
        return $this->salle_adresse;
    }

    public function setSalleAdresse(string $salle_adresse): self
    {
        $this->salle_adresse = $salle_adresse;

        return $this;
    }

    /**
     * @return Collection<int, Manifestations>
     */
    public function getManifestations(): Collection
    {
        return $this->manifestations;
    }

    public function addManifestation(Manifestations $manifestation): self
    {
        if (!$this->manifestations->contains($manifestation)) {
            $this->manifestations->add($manifestation);
            $manifestation->setManifLieu($this);
        }

        return $this;
    }

    public function removeManifestation(Manifestations $manifestation): self
    {
        if ($this->manifestations->removeElement($manifestation)) {
            // set the owning side to null (unless already changed)
            if ($manifestation->getManifLieu() === $this) {
                $manifestation->setManifLieu(null);
            }
        }

        return $this;
    }
}
