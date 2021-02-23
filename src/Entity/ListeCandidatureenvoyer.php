<?php

namespace App\Entity;

use App\Repository\ListeCandidatureenvoyerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ListeCandidatureenvoyerRepository::class)
 */
class ListeCandidatureenvoyer
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
    private $EntrepriseContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datedemande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $daterelance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateentretient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntrepriseContact(): ?string
    {
        return $this->EntrepriseContact;
    }

    public function setEntrepriseContact(string $EntrepriseContact): self
    {
        $this->EntrepriseContact = $EntrepriseContact;

        return $this;
    }

    public function getDatedemande(): ?string
    {
        return $this->datedemande;
    }

    public function setDatedemande(string $datedemande): self
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    public function getDaterelance(): ?string
    {
        return $this->daterelance;
    }

    public function setDaterelance(string $daterelance): self
    {
        $this->daterelance = $daterelance;

        return $this;
    }

    public function getDateentretient(): ?string
    {
        return $this->dateentretient;
    }

    public function setDateentretient(string $dateentretient): self
    {
        $this->dateentretient = $dateentretient;

        return $this;
    }

    public function getStatut1(): ?string
    {
        return $this->Statut1;
    }

    public function setStatut1(string $Statut1): self
    {
        $this->Statut1 = $Statut1;

        return $this;
    }

    public function getStatut2(): ?string
    {
        return $this->Statut2;
    }

    public function setStatut2(string $Statut2): self
    {
        $this->Statut2 = $Statut2;

        return $this;
    }

    public function getStatut3(): ?string
    {
        return $this->Statut3;
    }

    public function setStatut3(string $Statut3): self
    {
        $this->Statut3 = $Statut3;

        return $this;
    }

    public function getStatut4(): ?string
    {
        return $this->Statut4;
    }

    public function setStatut4(string $Statut4): self
    {
        $this->Statut4 = $Statut4;

        return $this;
    }
}
