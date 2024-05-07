<?php

namespace App\Entity;
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
     * @var int
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomCategorie", referencedColumnName="nomCategorie")
     * })
     */
    private $nomCategorie;
    public function getIidDeFormation(): int
    {
        return $this->idDeFormation;
    }

    public function getNomDeFormation(): string
    {
        return $this->nomDeFormation;
    }

    public function setNomDeFormation(string $nomDeFormation): void
    {
        $this->nomDeFormation = $nomDeFormation;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDuree(): string
    {
        return $this->durée;
    }

    public function setDuree(string $duree): void
    {
        $this->durée = $duree;
    }

    public function getNiveau(): string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): void
    {
        $this->niveau = $niveau;
    }

    public function getDateDeb(): \DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): void
    {
        $this->dateDeb = $dateDeb;
    }

    public function getDateFin(): \DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): void
    {
        $this->dateFin = $dateFin;
    }

    public function getCout(): string
    {
        return $this->coût;
    }

    public function setCout(string $cout): void
    {
        $this->coût = $cout;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note): void
    {
        $this->note = $note;
    }

    public function getNomCategorie(): ?Categorie
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(?Categorie $nomCategorie): void
    {
        $this->nomCategorie = $nomCategorie;
    }

}
