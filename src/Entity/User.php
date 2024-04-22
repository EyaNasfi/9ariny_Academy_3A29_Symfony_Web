<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

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
public function __toString()
{
    return $this->email && $this->nom;
}
public function getId()
{
    return $this->id;
}
public function setId($id)
{
    $this->id = $id;
}
public function getNom()
{
    return $this->nom;
}
public function setNom($nom)
{
    $this->nom = $nom;
}
public function getPrenom()
{
    return $this->prenom;
}
public function setPrenom($prenom)
{
    $this->prenom = $prenom;
}
public function getEmail()
{
    return $this->email;
}
public function setEmail($email)
{
    $this->email = $email;
}
public function getAdresse()
{
    return $this->adresse;
}
public function setAdresse($adresse)
{
    $this->adresse = $adresse;
}
public function getMdp()
{
    return $this->mdp;
}
public function setMdp($mdp)
{
    $this->mdp = $mdp;
}
}
