<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapCommuneRepository")
 * @UniqueEntity(
 * fields={"libelle"},
 * message="Cette commune existe déjà !")
 */
class MapCommune extends BaseEntity
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
     * @ORM\OneToMany(targetEntity="App\Entity\MapVille", mappedBy="commune")
     */
    private $villes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapPrefecture", inversedBy="communes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prefecture;

    public function __construct()
    {
        parent::__construct();
        $this->villes = new ArrayCollection();
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
            $ville->setCommune($this);
        }

        return $this;
    }

    public function removeVille(MapVille $ville): self
    {
        if ($this->villes->contains($ville)) {
            $this->villes->removeElement($ville);
            // set the owning side to null (unless already changed)
            if ($ville->getCommune() === $this) {
                $ville->setCommune(null);
            }
        }

        return $this;
    }

    public function getPrefecture(): ?MapPrefecture
    {
        return $this->prefecture;
    }

    public function setPrefecture(?MapPrefecture $prefecture): self
    {
        $this->prefecture = $prefecture;

        return $this;
    }
}
