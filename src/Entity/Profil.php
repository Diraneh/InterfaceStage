<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Codepostale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Telephonne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lienportfolio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Liengithub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lienCV;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $promotion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompetenceUn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompetenceDeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompetenceTrois;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompetenceQuatre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompetenceCinq;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompetenceSix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Avatar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mobilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ZonneMobilite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getCodepostale(): ?string
    {
        return $this->Codepostale;
    }

    public function setCodepostale(string $Codepostale): self
    {
        $this->Codepostale = $Codepostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephonne(): ?string
    {
        return $this->Telephonne;
    }

    public function setTelephonne(string $Telephonne): self
    {
        $this->Telephonne = $Telephonne;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getLienportfolio(): ?string
    {
        return $this->Lienportfolio;
    }

    public function setLienportfolio(string $Lienportfolio): self
    {
        $this->Lienportfolio = $Lienportfolio;

        return $this;
    }

    public function getLiengithub(): ?string
    {
        return $this->Liengithub;
    }

    public function setLiengithub(string $Liengithub): self
    {
        $this->Liengithub = $Liengithub;

        return $this;
    }

    public function getLienCV(): ?string
    {
        return $this->lienCV;
    }

    public function setLienCV(string $lienCV): self
    {
        $this->lienCV = $lienCV;

        return $this;
    }

    public function getPromotion(): ?string
    {
        return $this->promotion;
    }

    public function setPromotion(string $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getCompetenceUn(): ?string
    {
        return $this->CompetenceUn;
    }

    public function setCompetenceUn(string $CompetenceUn): self
    {
        $this->CompetenceUn = $CompetenceUn;

        return $this;
    }

    public function getCompetenceDeux(): ?string
    {
        return $this->CompetenceDeux;
    }

    public function setCompetenceDeux(string $CompetenceDeux): self
    {
        $this->CompetenceDeux = $CompetenceDeux;

        return $this;
    }

    public function getCompetenceTrois(): ?string
    {
        return $this->CompetenceTrois;
    }

    public function setCompetenceTrois(string $CompetenceTrois): self
    {
        $this->CompetenceTrois = $CompetenceTrois;

        return $this;
    }

    public function getCompetenceQuatre(): ?string
    {
        return $this->CompetenceQuatre;
    }

    public function setCompetenceQuatre(string $CompetenceQuatre): self
    {
        $this->CompetenceQuatre = $CompetenceQuatre;

        return $this;
    }

    public function getCompetenceCinq(): ?string
    {
        return $this->CompetenceCinq;
    }

    public function setCompetenceCinq(string $CompetenceCinq): self
    {
        $this->CompetenceCinq = $CompetenceCinq;

        return $this;
    }

    public function getCompetenceSix(): ?string
    {
        return $this->CompetenceSix;
    }

    public function setCompetenceSix(string $CompetenceSix): self
    {
        $this->CompetenceSix = $CompetenceSix;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->Avatar;
    }

    public function setAvatar(string $Avatar): self
    {
        $this->Avatar = $Avatar;

        return $this;
    }

    public function getMobilite(): ?string
    {
        return $this->Mobilite;
    }

    public function setMobilite(string $Mobilite): self
    {
        $this->Mobilite = $Mobilite;

        return $this;
    }

    public function getZonneMobilite(): ?string
    {
        return $this->ZonneMobilite;
    }

    public function setZonneMobilite(string $ZonneMobilite): self
    {
        $this->ZonneMobilite = $ZonneMobilite;

        return $this;
    }
}
