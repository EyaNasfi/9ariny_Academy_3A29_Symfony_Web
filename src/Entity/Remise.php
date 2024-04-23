<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remise
 *
 * @ORM\Table(name="remise", indexes={@ORM\Index(name="idpaiement", columns={"idpaiement"}), @ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Remise
{
    /**
     * @var int
     *
     * @ORM\Column(name="idremise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremise;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage", type="integer", nullable=false)
     */
    private $pourcentage;

    /**
     * @var int
     *
     * @ORM\Column(name="montantapresremise", type="integer", nullable=false)
     */
    private $montantapresremise;

    /**
     * @var \Paiement
     *
     * @ORM\ManyToOne(targetEntity="Paiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpaiement", referencedColumnName="idpaiement")
     * })
     */
    private $idpaiement;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    public function getIdremise(): ?int
    {
        return $this->idremise;
    }

    public function getPourcentage(): ?int
    {
        return $this->pourcentage;
    }

    public function setPourcentage(int $pourcentage): static
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    public function getMontantapresremise(): ?int
    {
        return $this->montantapresremise;
    }

    public function setMontantapresremise(int $montantapresremise): static
    {
        $this->montantapresremise = $montantapresremise;

        return $this;
    }

    public function getIdpaiement(): ?Paiement
    {
        return $this->idpaiement;
    }

    public function setIdpaiement(?Paiement $idpaiement): static
    {
        $this->idpaiement = $idpaiement;

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
