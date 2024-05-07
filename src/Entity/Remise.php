<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remise
 *
 * @ORM\Table(name="remise")
 * @ORM\Entity
 */
class Remise
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
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage", type="integer", nullable=false)
     */
    private $pourcentage;

    /**
     * @var float
     *
     * @ORM\Column(name="montantaprespourcentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantaprespourcentage;
public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
    public function getMontant():?float
    {
        return $this->montant;
    }
    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
    public function getPourcentage():?int
    {
        return $this->pourcentage;
    }
    public function setPourcentage(int $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }
    public function getMontantaprespourcentage():?float
    {
        return $this->montantaprespourcentage;
    }
    public function setMontantaprespourcentage(float $montantaprespourcentage): self

    {
        $this->montantaprespourcentage = $montantaprespourcentage;

        return $this;
    }

}
