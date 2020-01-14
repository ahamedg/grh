<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** @ORM\MappedSuperclass() */
class BaseEntity
{
    /**
     * @ORM\Column(type="integer")
     * @Assert\IsNull()
     */
    protected $idCompte;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\IsTrue()
     */
    protected $actif = true;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\IsFalse()
     */
    protected $supprimer = false;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull()
     */
    protected $dateAjout;

    /**
     * @ORM\Column(type="string")
     * @Assert\IsNull()
     */
    protected $dateEdit;

    /**
     * @ORM\Column(type="integer")
     * @Assert\IsNull()
     */
    protected $idUserAuteur;

    /**
     * @ORM\Column(type="integer")
     * @Assert\IsNull()
     */
    protected $idUserEdit;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull()
     */
    protected $version ;

    /**
     * @return mixed
     */
    public function getIdCompte()
    {
        return $this->idCompte;
    }

    /**
     * @param mixed $idCompte
     */
    public function setIdCompte($idCompte): void
    {
        $this->idCompte = $idCompte;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif): void
    {
        $this->actif = $actif;
    }

    /**
     * @return mixed
     */
    public function getSupprimer()
    {
        return $this->supprimer;
    }

    /**
     * @param mixed $supprimer
     */
    public function setSupprimer($supprimer): void
    {
        $this->supprimer = $supprimer;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * @param mixed $dateAjout
     */
    public function setDateAjout($dateAjout): void
    {
        $this->dateAjout = $dateAjout;
    }

    /**
     * @return mixed
     */
    public function getDateEdit()
    {
        return $this->dateEdit;
    }

    /**
     * @param mixed $dateEdit
     */
    public function setDateEdit($dateEdit): void
    {
        $this->dateEdit = $dateEdit;
    }

    /**
     * @return mixed
     */
    public function getIdUserAuteur()
    {
        return $this->idUserAuteur;
    }

    /**
     * @param mixed $idUserAuteur
     */
    public function setIdUserAuteur($idUserAuteur): void
    {
        $this->idUserAuteur = $idUserAuteur;
    }

    /**
     * @return mixed
     */
    public function getIdUserEdit()
    {
        return $this->idUserEdit;
    }

    /**
     * @param mixed $idUserEdit
     */
    public function setIdUserEdit($idUserEdit): void
    {
        $this->idUserEdit = $idUserEdit;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version): void
    {
        $this->version = $version;
    }


}
