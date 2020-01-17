<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CloudTypeCompteRepository")
 * @UniqueEntity(
 *     fields={"libelle"},
 *     message="Ce type de compte existe déjà !"
 * )
 */
class CloudTypeCompte extends BaseEntity
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
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(max="30", maxMessage="Le libellé ne peut pas dépasser 30 caractères !")
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CloudFamilleCompte", mappedBy="cloudTypeCompte")
     */
    private $cloudFamilleComptes;

    public function __construct()
    {
        $this->cloudFamilleComptes = new ArrayCollection();
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
     * @return Collection|CloudFamilleCompte[]
     */
    public function getCloudFamilleComptes(): Collection
    {
        return $this->cloudFamilleComptes;
    }

    public function addCloudFamilleCompte(CloudFamilleCompte $cloudFamilleCompte): self
    {
        if (!$this->cloudFamilleComptes->contains($cloudFamilleCompte)) {
            $this->cloudFamilleComptes[] = $cloudFamilleCompte;
            $cloudFamilleCompte->setCloudTypeCompte($this);
        }

        return $this;
    }

    public function removeCloudFamilleCompte(CloudFamilleCompte $cloudFamilleCompte): self
    {
        if ($this->cloudFamilleComptes->contains($cloudFamilleCompte)) {
            $this->cloudFamilleComptes->removeElement($cloudFamilleCompte);
            // set the owning side to null (unless already changed)
            if ($cloudFamilleCompte->getCloudTypeCompte() === $this) {
                $cloudFamilleCompte->setCloudTypeCompte(null);
            }
        }

        return $this;
    }
}
