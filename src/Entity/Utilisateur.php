<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
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
     * @ORM\Column(type="string", length=20)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lostPasswordUrl;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateLostPassword;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $changePassword;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $emailCompte;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nomPhotoProfil;

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
}
