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
     * @ORM\ManyToOne(targetEntity="App\Entity\MapCommune", inversedBy="villes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commune;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapStates", inversedBy="villes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $state;





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

    public function getCommune(): ?MapCommune
    {
        return $this->commune;
    }

    public function setCommune(?MapCommune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getState(): ?MapStates
    {
        return $this->state;
    }

    public function setState(?MapStates $state): self
    {
        $this->state = $state;

        return $this;
    }


}
