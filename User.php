<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
<<<<<<< HEAD
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;
=======
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface 
{   
    public function getUsername(): string
    {
        return $this->email;
    }

    public function getRoles(): array
    {
        return [$this->role];
    }

    public function getPassword(): string
    {
        return $this->mdp;
    }

    public function getSalt(): ?string
    {
        // Vous n'avez pas besoin de sel pour encoder le mot de passe
        // car vous utilisez un encoder Symfony qui gère cela automatiquement
        return null;
    }

    public function eraseCredentials()
    {
        // Méthode vide car vous ne stockez pas de données sensibles supplémentaires
        // dans votre entité utilisateur
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;
=======
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

<<<<<<< HEAD
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="reset_code", type="string", length=255, nullable=false)
     */
    private $resetCode;
    public function getIduser(): ?int
    {
        return $this->iduser;
=======
    public function getId(): ?int
    {
        return $this->id;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

<<<<<<< HEAD
    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;
=======
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

<<<<<<< HEAD
public function __toString(): string
{
    return $this->nom;
}

public function getUsername(): string
{
    return $this->mail;
}



public function getSalt(): ?string
{
    // Vous n'avez pas besoin de sel pour encoder le mot de passe
    // car vous utilisez un encoder Symfony qui gère cela automatiquement
    return null;
}


public function getRoles(): array
{
    $roles = $this->role;
    // guarantee every user at least has ROLE_USER
    $roless[] = 'ROLE_USER';

    return array_unique($roless);
}

public function setRoles(array $roles): self
{
    $this->role = $roles;

    return $this;
}

/**
 * @see PasswordAuthenticatedUserInterface
 */
public function getPassword(): string
{
    return $this->mdp;
}

public function setPassword(string $password): self
{
    $this->mdp = $password;

    return $this;
}
=======

>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
}
