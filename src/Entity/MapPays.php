<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapPaysRepository")
 */
class MapPays
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $nomTriPays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomPays;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $indicatifPays;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MapStates", mappedBy="pays")
     */
    private $states;

    public function __construct()
    {
        $this->states = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTriPays(): ?string
    {
        return $this->nomTriPays;
    }

    public function setNomTriPays(string $nomTriPays): self
    {
        $this->nomTriPays = $nomTriPays;

        return $this;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(string $nomPays): self
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getIndicatifPays(): ?string
    {
        return $this->indicatifPays;
    }

    public function setIndicatifPays(string $indicatifPays): self
    {
        $this->indicatifPays = $indicatifPays;

        return $this;
    }

    /**
     * @return Collection|MapStates[]
     */
    public function getStates(): Collection
    {
        return $this->states;
    }

    public function addState(MapStates $state): self
    {
        if (!$this->states->contains($state)) {
            $this->states[] = $state;
            $state->setPays($this);
        }

        return $this;
    }

    public function removeState(MapStates $state): self
    {
        if ($this->states->contains($state)) {
            $this->states->removeElement($state);
            // set the owning side to null (unless already changed)
            if ($state->getPays() === $this) {
                $state->setPays(null);
            }
        }

        return $this;
    }
}
