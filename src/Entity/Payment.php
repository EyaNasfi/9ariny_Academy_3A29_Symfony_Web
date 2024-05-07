<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="idformation", columns={"idformation"})})
 * @ORM\Entity
 */
class Payment
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
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="moyendepaiement", type="string", length=255, nullable=false)
     */
    private $moyendepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idformation", referencedColumnName="ID_de_Formation")
     * })
     */
    private $idformation;
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter and setter for montant
    public function getMontant(): int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    // Getter and setter for moyendepaiement
    public function getMoyendepaiement(): string
    {
        return $this->moyendepaiement;
    }

    public function setMoyendepaiement(string $moyendepaiement): self
    {
        $this->moyendepaiement = $moyendepaiement;
        return $this;
    }

    // Getter and setter for email
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    // Getter and setter for date
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    // Getter and setter for idformation
    public function getIdformation(): ?\Formation
    {
        return $this->idformation;
    }

    public function setIdformation(?\Formation $idformation): self
    {
        $this->idformation = $idformation;
        return $this;
    }
}
