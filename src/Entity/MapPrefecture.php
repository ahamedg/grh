<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapPrefectureRepository")
 * @UniqueEntity(
 * fields={"libelle"}, 
 * message="Cette préfecture existe déjà !")
 */
class MapPrefecture extends BaseEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\Length(max="150", maxMessage="Le libellé ne peut pas dépasser 150 caractères !")
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapStates", inversedBy="prefectures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $states;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MapCommune", mappedBy="prefecture")
     */
    private $communes;

    public function __construct()
    {
        parent::__construct();
        $this->communes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    /**
     * @return Collection|MapCommune[]
     */
    public function getCommunes(): Collection
    {
        return $this->communes;
    }

    public function addCommune(MapCommune $commune): self
    {
        if (!$this->communes->contains($commune)) {
            $this->communes[] = $commune;
            $commune->setPrefecture($this);
        }

        return $this;
    }

    public function removeCommune(MapCommune $commune): self
    {
        if ($this->communes->contains($commune)) {
            $this->communes->removeElement($commune);
            // set the owning side to null (unless already changed)
            if ($commune->getPrefecture() === $this) {
                $commune->setPrefecture(null);
            }
        }

        return $this;
    }


}
