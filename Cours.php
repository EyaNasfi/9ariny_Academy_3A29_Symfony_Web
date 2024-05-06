<?php

namespace App\Entity;

<<<<<<< HEAD
=======
use Doctrine\DBAL\Types\Types;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="IDfor", columns={"IDfor"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcour;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Cours", type="string", length=255, nullable=false)
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="Description_Cours", type="blob", length=0, nullable=false)
     */
    private $descriptionCours;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDfor", referencedColumnName="ID_de_Formation")
     * })
     */
    private $idfor;

<<<<<<< HEAD
=======
    public function getIdcour(): ?int
    {
        return $this->idcour;
    }

    public function getNomCours(): ?string
    {
        return $this->nomCours;
    }

    public function setNomCours(string $nomCours): static
    {
        $this->nomCours = $nomCours;

        return $this;
    }

    public function getDescriptionCours()
    {
        return $this->descriptionCours;
    }

    public function setDescriptionCours($descriptionCours): static
    {
        $this->descriptionCours = $descriptionCours;

        return $this;
    }

    public function getIdfor(): ?Formation
    {
        return $this->idfor;
    }

    public function setIdfor(?Formation $idfor): static
    {
        $this->idfor = $idfor;

        return $this;
    }

>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

}
