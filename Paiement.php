<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
<<<<<<< HEAD
 * @ORM\Table(name="paiement", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="IDformation", columns={"IDformation"})})
=======
 * @ORM\Table(name="paiement", indexes={@ORM\Index(name="IDformation", columns={"IDformation"}), @ORM\Index(name="iduser", columns={"iduser"})})
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
 * @ORM\Entity
 */
class Paiement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idpaiement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="modepaiement", type="string", length=255, nullable=false)
     */
    private $modepaiement;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDformation", referencedColumnName="ID_de_Formation")
     * })
     */
    private $idformation;

<<<<<<< HEAD
=======
    public function getIdpaiement(): ?int
    {
        return $this->idpaiement;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getModepaiement(): ?string
    {
        return $this->modepaiement;
    }

    public function setModepaiement(string $modepaiement): static
    {
        $this->modepaiement = $modepaiement;

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

    public function getIdformation(): ?Formation
    {
        return $this->idformation;
    }

    public function setIdformation(?Formation $idformation): static
    {
        $this->idformation = $idformation;

        return $this;
    }

>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

}
