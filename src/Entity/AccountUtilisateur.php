<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AccountUtilisateurRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(
 *     fields={"emailCompte"},
 *     message="Un utilisateur a déjà été créé avec cet email. Veuillez en renseigner un autre !"
 * )
 */
class AccountUtilisateur extends BaseEntity implements UserInterface
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
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit avoir au moins 8 caractères !")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lostPasswordUrl;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateLostPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $changePassword;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Cet email n'est pas une adresse email valide !")
     */
    private $emailCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomPhotoProfil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone1Utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone2Utilisateur;

    /**
     *
     * @Assert\EqualTo(propertyPath="password", message="Echec lors de la confirmation du mot de passe. Réessayez !")
     */
    private $passwordConfirm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseUtilisateur;

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getLostPasswordUrl(): ?string
    {
        return $this->lostPasswordUrl;
    }

    public function setLostPasswordUrl(string $lostPasswordUrl): self
    {
        $this->lostPasswordUrl = $lostPasswordUrl;

        return $this;
    }

    public function getDateLostPassword(): ?\DateTimeInterface
    {
        return $this->dateLostPassword;
    }

    public function setDateLostPassword(\DateTimeInterface $dateLostPassword): self
    {
        $this->dateLostPassword = $dateLostPassword;

        return $this;
    }

    public function getChangePassword(): ?string
    {
        return $this->changePassword;
    }

    public function setChangePassword(?string $changePassword): self
    {
        $this->changePassword = $changePassword;

        return $this;
    }

    public function getEmailCompte(): ?string
    {
        return $this->emailCompte;
    }

    public function setEmailCompte(string $emailCompte): self
    {
        $this->emailCompte = $emailCompte;

        return $this;
    }

    public function getNomPhotoProfil(): ?string
    {
        return $this->nomPhotoProfil;
    }

    public function setNomPhotoProfil(?string $nomPhotoProfil): self
    {
        $this->nomPhotoProfil = $nomPhotoProfil;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {

    }

    public function eraseCredentials()
    {
    }

    public function getTelephone1Utilisateur(): ?string
    {
        return $this->telephone1Utilisateur;
    }

    public function setTelephone1Utilisateur(string $telephone1Utilisateur): self
    {
        $this->telephone1Utilisateur = $telephone1Utilisateur;

        return $this;
    }

    public function getTelephone2Utilisateur(): ?string
    {
        return $this->telephone2Utilisateur;
    }

    public function setTelephone2Utilisateur(?string $telephone2Utilisateur): self
    {
        $this->telephone2Utilisateur = $telephone2Utilisateur;

        return $this;
    }

    public function getPasswordConfirm(): ?string
    {
        return $this->passwordConfirm;
    }

    public function setPasswordConfirm(string $passwordConfirm): self
    {
        $this->passwordConfirm = $passwordConfirm;

        return $this;
    }

    public function getAdresseUtilisateur(): ?string
    {
        return $this->adresseUtilisateur;
    }

    public function setAdresseUtilisateur(?string $adresseUtilisateur): self
    {
        $this->adresseUtilisateur = $adresseUtilisateur;

        return $this;
    }
}
