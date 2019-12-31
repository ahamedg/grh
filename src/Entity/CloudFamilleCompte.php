<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CloudFamilleCompteRepository")
 */
class CloudFamilleCompte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $designationCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $codeAccesCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cleAccesCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $sigleCloudFamilleCompte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignationCloudFamilleCompte(): ?string
    {
        return $this->designationCloudFamilleCompte;
    }

    public function setDesignationCloudFamilleCompte(string $designationCloudFamilleCompte): self
    {
        $this->designationCloudFamilleCompte = $designationCloudFamilleCompte;

        return $this;
    }

    public function getDescriptionCloudFamilleCompte(): ?string
    {
        return $this->descriptionCloudFamilleCompte;
    }

    public function setDescriptionCloudFamilleCompte(?string $descriptionCloudFamilleCompte): self
    {
        $this->descriptionCloudFamilleCompte = $descriptionCloudFamilleCompte;

        return $this;
    }

    public function getCodeAccesCloudFamilleCompte(): ?string
    {
        return $this->codeAccesCloudFamilleCompte;
    }

    public function setCodeAccesCloudFamilleCompte(string $codeAccesCloudFamilleCompte): self
    {
        $this->codeAccesCloudFamilleCompte = $codeAccesCloudFamilleCompte;

        return $this;
    }

    public function getCleAccesCloudFamilleCompte(): ?string
    {
        return $this->cleAccesCloudFamilleCompte;
    }

    public function setCleAccesCloudFamilleCompte(string $cleAccesCloudFamilleCompte): self
    {
        $this->cleAccesCloudFamilleCompte = $cleAccesCloudFamilleCompte;

        return $this;
    }

    public function getSigleCloudFamilleCompte(): ?string
    {
        return $this->sigleCloudFamilleCompte;
    }

    public function setSigleCloudFamilleCompte(string $sigleCloudFamilleCompte): self
    {
        $this->sigleCloudFamilleCompte = $sigleCloudFamilleCompte;

        return $this;
    }
}
