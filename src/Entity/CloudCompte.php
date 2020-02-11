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
     * @Assert\Length(max="150",maxMessage="Le nom du service/subdivision ne peut pas dépasser 150 caractères !")
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
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Cet email n'est pas une adresse email valide !")
     */
    private $emailCloudCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone1CloudCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone2CloudCompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $profondeurCloudCompte;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapCommune")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commune;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapPrefecture")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prefecture;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudTypeBudget")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cloudTypeBudget;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudSection")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cloudSection;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudCategorieService")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cloudCategorieService;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudTypeService")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cloudTypeService;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudFamilleCompte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cloudFamilleCompte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudCompte")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cloudCompte;

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

    public function getCommune(): ?MapCommune
    {
        return $this->commune;
    }

    public function setCommune(?MapCommune $commune): self
    {
        $this->commune = $commune;

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

    public function getCloudTypeBudget(): ?CloudTypeBudget
    {
        return $this->cloudTypeBudget;
    }

    public function setCloudTypeBudget(?CloudTypeBudget $cloudTypeBudget): self
    {
        $this->cloudTypeBudget = $cloudTypeBudget;

        return $this;
    }

    public function getCloudSection(): ?CloudSection
    {
        return $this->cloudSection;
    }

    public function setCloudSection(?CloudSection $cloudSection): self
    {
        $this->cloudSection = $cloudSection;

        return $this;
    }

    public function getCloudCategorieService(): ?CloudCategorieService
    {
        return $this->cloudCategorieService;
    }

    public function setCloudCategorieService(?CloudCategorieService $cloudCategorieService): self
    {
        $this->cloudCategorieService = $cloudCategorieService;

        return $this;
    }

    public function getCloudTypeService(): ?CloudTypeService
    {
        return $this->cloudTypeService;
    }

    public function setCloudTypeService(?CloudTypeService $cloudTypeService): self
    {
        $this->cloudTypeService = $cloudTypeService;

        return $this;
    }

    public function getCloudFamilleCompte(): ?CloudFamilleCompte
    {
        return $this->cloudFamilleCompte;
    }

    public function setCloudFamilleCompte(?CloudFamilleCompte $cloudFamilleCompte): self
    {
        $this->cloudFamilleCompte = $cloudFamilleCompte;

        return $this;
    }

    public function getCloudCompte(): ?self
    {
        return $this->cloudCompte;
    }

    public function setCloudCompte(?self $cloudCompte): self
    {
        $this->cloudCompte = $cloudCompte;

        return $this;
    }
}
