<?php

namespace App\Entity\Cloud;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Repository")
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
     * @ORM\Column(type="string", length=50)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $codeAcces;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cleAcces;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $sigle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getCodeAcces(): ?string
    {
        return $this->codeAcces;
    }

    public function setCodeAcces(string $codeAcces): self
    {
        $this->codeAcces = $codeAcces;

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

    public function getCleAcces(): ?string
    {
        return $this->cleAcces;
    }

    public function setCleAcces(string $cleAcces): self
    {
        $this->cleAcces = $cleAcces;

        return $this;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }
}
