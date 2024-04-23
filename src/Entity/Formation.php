<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="test", columns={"nomCategorie"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_de_Formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDeFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_de_Formation", type="string", length=255, nullable=false)
     */
    private $nomDeFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Durée", type="string", length=255, nullable=false)
     */
    private $durée;

    /**
     * @var string
     *
     * @ORM\Column(name="Niveau", type="string", length=255, nullable=false)
     */
    private $niveau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Deb", type="date", nullable=false)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Coût", type="string", length=255, nullable=false)
     */
    private $coût;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomCategorie", referencedColumnName="nomCategorie")
     * })
     */
    private $nomcategorie;

    public function getIdDeFormation(): ?int
    {
        return $this->idDeFormation;
    }

    public function getNomDeFormation(): ?string
    {
        return $this->nomDeFormation;
    }

    public function setNomDeFormation(string $nomDeFormation): static
    {
        $this->nomDeFormation = $nomDeFormation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDurée(): ?string
    {
        return $this->durée;
    }

    public function setDurée(string $durée): static
    {
        $this->durée = $durée;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): static
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getCoût(): ?string
    {
        return $this->coût;
    }

    public function setCoût(string $coût): static
    {
        $this->coût = $coût;

        return $this;
    }

    public function getNomcategorie(): ?Categorie
    {
        return $this->nomcategorie;
    }

    public function setNomcategorie(?Categorie $nomcategorie): static
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }


}
