<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapVilleRepository")
 */
class MapVille
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomVille;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapStates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $states;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapCommune")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commune;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(string $nomVille): self
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    public function getStates(): ?MapStates
    {
        return $this->states;
    }

    public function setStates(?MapStates $states): self
    {
        $this->states = $states;

        return $this;
    }

    public function getCommune(): ?MapCommune
    {
        return $this->commune;
    }

    public function setCommune(?MapCommune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function __toString()
    {
        return $this->nomVille;
    }
}
