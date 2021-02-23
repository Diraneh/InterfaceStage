<?php

namespace App\Entity;

use App\Repository\EntreprisesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntreprisesRepository::class)
 */
class Entreprises
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
    private $Nomentreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adressentreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Codepostaleentreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Villeentreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Telephonneentreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Emailentreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Siteintertentreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomentreprise(): ?string
    {
        return $this->Nomentreprise;
    }

    public function setNomentreprise(string $Nomentreprise): self
    {
        $this->Nomentreprise = $Nomentreprise;

        return $this;
    }

    public function getAdressentreprise(): ?string
    {
        return $this->Adressentreprise;
    }

    public function setAdressentreprise(string $Adressentreprise): self
    {
        $this->Adressentreprise = $Adressentreprise;

        return $this;
    }

    public function getCodepostaleentreprise(): ?string
    {
        return $this->Codepostaleentreprise;
    }

    public function setCodepostaleentreprise(string $Codepostaleentreprise): self
    {
        $this->Codepostaleentreprise = $Codepostaleentreprise;

        return $this;
    }

    public function getVilleentreprise(): ?string
    {
        return $this->Villeentreprise;
    }

    public function setVilleentreprise(string $Villeentreprise): self
    {
        $this->Villeentreprise = $Villeentreprise;

        return $this;
    }

    public function getTelephonneentreprise(): ?string
    {
        return $this->Telephonneentreprise;
    }

    public function setTelephonneentreprise(string $Telephonneentreprise): self
    {
        $this->Telephonneentreprise = $Telephonneentreprise;

        return $this;
    }

    public function getEmailentreprise(): ?string
    {
        return $this->Emailentreprise;
    }

    public function setEmailentreprise(string $Emailentreprise): self
    {
        $this->Emailentreprise = $Emailentreprise;

        return $this;
    }

    public function getSiteintertentreprise(): ?string
    {
        return $this->Siteintertentreprise;
    }

    public function setSiteintertentreprise(string $Siteintertentreprise): self
    {
        $this->Siteintertentreprise = $Siteintertentreprise;

        return $this;
    }
}
