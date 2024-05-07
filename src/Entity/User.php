<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @Groups({"user:read"})
     */
    private $iduser;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({"user:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({"user:read"})
     */
    private $prenom;

    /**
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     * @Assert\Email
     * @Groups({"user:read"})
     */
    private $email;

    /**
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     * @Groups({"user:read"})
     */
    private $address;

    /**
     * @ORM\Column(name="mdp", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     * @Groups({"user:read"})
     */
    private $role;

    /**
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     * @Groups({"user:read"})
     */
    private $status;

    /**
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     * @Groups({"user:read"})
     */
    private $image;

    /**
     * @ORM\Column(name="reset_code", type="string", length=255, nullable=false)
     */
    private $resetCode;

    private $confirmPassword;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->email;
    }

    public function setMail(string $mail): self
    {
        $this->email = $mail;

        return $this;
    }



   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
 

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */


    /**
     * @see UserInterface
     */


    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
  

    /**
     * @see UserInterface
     */
 

    /**
     * @return string|null
     */
   

    /**
     * @param string|null $nom
     */
 

    /**
     * @return string|null
     */


    /**
     * @param string|null $prenom
     */
   

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }



    public function getResetCode(): ?string
    {
        return $this->resetCode;
    }

    public function setResetCode(string $resetCode): self
    {
        $this->resetCode = $resetCode;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(?string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getUsername(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = [$this->role];
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->role = $roles;

        return $this;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
