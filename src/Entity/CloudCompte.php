<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CloudCompteRepository")
 */
class CloudCompte extends BaseEntity
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
    private $codeCloudCompte;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $designationCloudCompte;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $logoCloudCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseCloudCompte;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $emailCloudCompte;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $telephone1CloudCompte;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $telephone2CloudCompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $profondeurCloudCompte;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $sigleCloudCompte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapPays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapStates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $states;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapVille")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCloudCompte(): ?string
    {
        return $this->codeCloudCompte;
    }

    public function setCodeCloudCompte(string $codeCloudCompte): self
    {
        $this->codeCloudCompte = $codeCloudCompte;

        return $this;
    }

    public function getDesignationCloudCompte(): ?string
    {
        return $this->designationCloudCompte;
    }

    public function setDesignationCloudCompte(string $designationCloudCompte): self
    {
        $this->designationCloudCompte = $designationCloudCompte;

        return $this;
    }

    public function getLogoCloudCompte(): ?string
    {
        return $this->logoCloudCompte;
    }

    public function setLogoCloudCompte(?string $logoCloudCompte): self
    {
        $this->logoCloudCompte = $logoCloudCompte;

        return $this;
    }

    public function getAdresseCloudCompte(): ?string
    {
        return $this->adresseCloudCompte;
    }

    public function setAdresseCloudCompte(?string $adresseCloudCompte): self
    {
        $this->adresseCloudCompte = $adresseCloudCompte;

        return $this;
    }

    public function getEmailCloudCompte(): ?string
    {
        return $this->emailCloudCompte;
    }

    public function setEmailCloudCompte(string $emailCloudCompte): self
    {
        $this->emailCloudCompte = $emailCloudCompte;

        return $this;
    }

    public function getTelephone1CloudCompte(): ?string
    {
        return $this->telephone1CloudCompte;
    }

    public function setTelephone1CloudCompte(string $telephone1CloudCompte): self
    {
        $this->telephone1CloudCompte = $telephone1CloudCompte;

        return $this;
    }

    public function getTelephone2CloudCompte(): ?string
    {
        return $this->telephone2CloudCompte;
    }

    public function setTelephone2CloudCompte(?string $telephone2CloudCompte): self
    {
        $this->telephone2CloudCompte = $telephone2CloudCompte;

        return $this;
    }

    public function getProfondeurCloudCompte(): ?int
    {
        return $this->profondeurCloudCompte;
    }

    public function setProfondeurCloudCompte(int $profondeurCloudCompte): self
    {
        $this->profondeurCloudCompte = $profondeurCloudCompte;

        return $this;
    }

    public function getSigleCloudCompte(): ?string
    {
        return $this->sigleCloudCompte;
    }

    public function setSigleCloudCompte(string $sigleCloudCompte): self
    {
        $this->sigleCloudCompte = $sigleCloudCompte;

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

    public function getStates(): ?MapStates
    {
        return $this->states;
    }

    public function setStates(?MapStates $states): self
    {
        $this->states = $states;

        return $this;
    }

    public function getVille(): ?MapVille
    {
        return $this->ville;
    }

    public function setVille(?MapVille $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}
