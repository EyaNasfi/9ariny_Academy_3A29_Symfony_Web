<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipements
 *
<<<<<<< HEAD
 * @ORM\Table(name="equipements", indexes={@ORM\Index(name="idsalle", columns={"salle_id"})})
=======
 * @ORM\Table(name="equipements", indexes={@ORM\Index(name="idsalle", columns={"idsalle"})})
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
 * @ORM\Entity
 */
class Equipements
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
     * @ORM\Column(name="idequip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequip;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

    /**
     * @var string
     *
<<<<<<< HEAD
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
=======
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
<<<<<<< HEAD
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
=======
     *   @ORM\JoinColumn(name="idsalle", referencedColumnName="idsalle")
     * })
     */
    private $idsalle;

    public function getIdequip(): ?int
    {
        return $this->idequip;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

        return $this;
    }

<<<<<<< HEAD
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
    
=======
    public function getIdsalle(): ?Salle
    {
        return $this->idsalle;
    }

    public function setIdsalle(?Salle $idsalle): static
    {
        $this->idsalle = $idsalle;

        return $this;
    }
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518


}
