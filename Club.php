<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Club
{
    /**
     * @var int
     *
     * @ORM\Column(name="idclub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="nameclub", type="string", length=255, nullable=false)
     */
    private $nameclub;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="numtlf", type="integer", nullable=false)
     */
    private $numtlf;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
<<<<<<< HEAD
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
=======
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
     * })
     */
    private $iduser;

    public function getIdclub(): ?int
    {
        return $this->idclub;
    }

    public function getNameclub(): ?string
    {
        return $this->nameclub;
    }

<<<<<<< HEAD
    public function setNameclub(string $nameclub): self
=======
    public function setNameclub(string $nameclub): static
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    {
        $this->nameclub = $nameclub;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

<<<<<<< HEAD
    public function setEmail(string $email): self
=======
    public function setEmail(string $email): static
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    {
        $this->email = $email;

        return $this;
    }

    public function getNumtlf(): ?int
    {
        return $this->numtlf;
    }

<<<<<<< HEAD
    public function setNumtlf(int $numtlf): self
=======
    public function setNumtlf(int $numtlf): static
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    {
        $this->numtlf = $numtlf;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

<<<<<<< HEAD
    public function setIduser(?User $iduser): self
=======
    public function setIduser(?User $iduser): static
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    {
        $this->iduser = $iduser;

        return $this;
    }
<<<<<<< HEAD
    
    public function __toString(): string
    {
        return $this->nameclub;
    }
=======


>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
}
