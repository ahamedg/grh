<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapStatesRepository")
 */
class MapStates
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
    private $nomStates;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MapPrefecture", mappedBy="states")
     */
    private $prefectures;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapPays", inversedBy="states")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pays;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MapVille", mappedBy="state")
     */
    private $villes;

    public function __construct()
    {
        $this->prefectures = new ArrayCollection();
        $this->villes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStates(): ?string
    {
        return $this->nomStates;
    }

    public function setNomStates(string $nomStates): self
    {
        $this->nomStates = $nomStates;

        return $this;
    }



    /**
     * @return Collection|MapPrefecture[]
     */
    public function getPrefectures(): Collection
    {
        return $this->prefectures;
    }

    public function addPrefecture(MapPrefecture $prefecture): self
    {
        if (!$this->prefectures->contains($prefecture)) {
            $this->prefectures[] = $prefecture;
            $prefecture->setStates($this);
        }

        return $this;
    }

    public function removePrefecture(MapPrefecture $prefecture): self
    {
        if ($this->prefectures->contains($prefecture)) {
            $this->prefectures->removeElement($prefecture);
            // set the owning side to null (unless already changed)
            if ($prefecture->getStates() === $this) {
                $prefecture->setStates(null);
            }
        }

        return $this;
    }

    public function getPays(): ?MapPays
    {
        return $this->pays;
    }

    public function setPays(?MapPays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * @return Collection|MapVille[]
     */
    public function getVilles(): Collection
    {
        return $this->villes;
    }

    public function addVille(MapVille $ville): self
    {
        if (!$this->villes->contains($ville)) {
            $this->villes[] = $ville;
            $ville->setState($this);
        }

        return $this;
    }

    public function removeVille(MapVille $ville): self
    {
        if ($this->villes->contains($ville)) {
            $this->villes->removeElement($ville);
            // set the owning side to null (unless already changed)
            if ($ville->getState() === $this) {
                $ville->setState(null);
            }
        }

        return $this;
    }
}
