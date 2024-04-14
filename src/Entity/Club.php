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
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
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

    public function setNameclub(string $nameclub): static
    {
        $this->nameclub = $nameclub;

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

    public function getNumtlf(): ?int
    {
        return $this->numtlf;
    }

    public function setNumtlf(int $numtlf): static
    {
        $this->numtlf = $numtlf;

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


}
