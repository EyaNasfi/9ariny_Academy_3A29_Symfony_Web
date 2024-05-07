<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipements
 *
 * @ORM\Table(name="equipements", indexes={@ORM\Index(name="idsalle", columns={"salle_id"})})
 * @ORM\Entity
 */
class Equipements
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
     * @ORM\Column(name="brand", type="string", length=255, nullable=false)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=false)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qr_code", type="string", length=255, nullable=true)
     */
    private $qrCode;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salle_id", referencedColumnName="id")
     * })
     */
    private $salle;
    public function getNom(): ?string
    {
        return $this->nom;
    }
  
    public function getBrand(): ?string
    {
        return $this->brand;
    }
    public function getCategory(): ?string
    {
        return $this->category;
    }
    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }
    public function getSalle(): ?Salle
    {
        return $this->salle;
    }
    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }
    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }
    public function setQrCode(string $qrCode): static
    {
        $this->qrCode = $qrCode;

        return $this;
    }
    public function setSalle(?Salle $salle): static
    {
        $this->salle = $salle;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(): static
    {
        $this->id = $id;

        return $this;
    }
    public function __toString(): string
    {
        return $this->nom;
    }
    


}
