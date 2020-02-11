<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CloudFamilleCompteRepository")
 * @UniqueEntity(
 *     fields={"designationCloudFamilleCompte"},
 *     message="Ce compte existe déjà !"
 * )
 */
class CloudFamilleCompte extends BaseEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\Length(max="150",maxMessage="Le nom du compte ne peut pas dépasser 150 caractères !")
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
     * @Assert\Length(min="8", minMessage="La clé d'accès doit avoir au moins 8 caractères !")
     */
    private $cleAccesCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $sigleCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email(message="Cet email n'est pas une adresse email valide !")
     */
    private $emailCloudFamilleCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneCloudFamilleCompte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CloudTypeCompte")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull(message="Veuillez sélectionner un type compte !")
     */
    private $cloudTypeCompte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapPays")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull(message="Veuillez sélectionner un pays !")
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapStates")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull(message="Veuillez sélectionner une région !")
     */
    private $states;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MapVille")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull(message="Veuillez sélectionner une ville !")
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoCloudFamilleCompte;

    /**
     *
     * @Assert\EqualTo(propertyPath="cleAccesCloudFamilleCompte", message="Echec lors de la confirmation de la clé d'accès. Réessayez !")
     */
    private $cleAccesCloudFamilleCompteConfirm;

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

    public function getCloudTypeCompte(): ?CloudTypeCompte
    {
        return $this->cloudTypeCompte;
    }

    public function setCloudTypeCompte(?CloudTypeCompte $cloudTypeCompte): self
    {
        $this->cloudTypeCompte = $cloudTypeCompte;

        return $this;
    }

    public function getAdresseCloudFamilleCompte(): ?string
    {
        return $this->adresseCloudFamilleCompte;
    }

    public function setAdresseCloudFamilleCompte(?string $adresseCloudFamilleCompte): self
    {
        $this->adresseCloudFamilleCompte = $adresseCloudFamilleCompte;

        return $this;
    }

    public function getEmailCloudFamilleCompte(): ?string
    {
        return $this->emailCloudFamilleCompte;
    }

    public function setEmailCloudFamilleCompte(?string $emailCloudFamilleCompte): self
    {
        $this->emailCloudFamilleCompte = $emailCloudFamilleCompte;

        return $this;
    }

    public function getTelephoneCloudFamilleCompte(): ?string
    {
        return $this->telephoneCloudFamilleCompte;
    }

    public function setTelephoneCloudFamilleCompte(string $telephoneCloudFamilleCompte): self
    {
        $this->telephoneCloudFamilleCompte = $telephoneCloudFamilleCompte;

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLogoCloudFamilleCompte(): ?string
    {
        return $this->logoCloudFamilleCompte;
    }

    public function setLogoCloudFamilleCompte(?string $logoCloudFamilleCompte): self
    {
        $this->logoCloudFamilleCompte = $logoCloudFamilleCompte;

        return $this;
    }

    public function getCleAccesCloudFamilleCompteConfirm(): ?string
    {
        return $this->cleAccesCloudFamilleCompteConfirm;
    }

    public function setCleAccesCloudFamilleCompteConfirm(?string $cleAccesCloudFamilleCompteConfirm): self
    {
        $this->cleAccesCloudFamilleCompteConfirm = $cleAccesCloudFamilleCompteConfirm;

        return $this;
    }
}
