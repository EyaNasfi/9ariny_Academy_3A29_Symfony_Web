<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
<<<<<<< HEAD
 * @ORM\Table(name="salle")
=======
 * @ORM\Table(name="salle", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
=======
     * @ORM\Column(name="idsalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsalle;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", length=255, nullable=false)
     */
    private $matiere;

<<<<<<< HEAD
public function getId(): ?int
{
    return $this->id;
}

public function getMatiere(): ?string
{
    return $this->matiere;
}

public function setMatiere(string $matiere): self
{
    $this->matiere = $matiere;

    return $this;
}
=======
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    public function getIdsalle(): ?int
    {
        return $this->idsalle;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(string $matiere): static
    {
        $this->matiere = $matiere;

        return $this;
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

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }


>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
}
