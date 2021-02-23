<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 * fields= {"Email"},
 * message= "L'email que vous avez indiquez est déjà utilisé"
 * )
 */
class User implements UserInterface
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
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     
     */
    private $Username;

     /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="votre mots de passe doit faire 8 caractéres")
     
     * @Assert\EqualTo(propertyPath="Confirm_password", message="Votre mots de passe doit être le même que celui  que vous confirme")
     */
  
    private $Password;
 /**
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le même mots de passe")
     */
    public $Confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;
    public function getId(): ?int
    {
        return $this->id;
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

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function eraseCredentials(){}
   
    public function getSalt(){}
   
    public function getRoles(){
        return ['ROLE_USER'];
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
   

}
