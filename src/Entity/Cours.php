<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "IdCour", type: "integer", nullable: false)]
    private $idcour;

    #[ORM\Column(name: "Nom_Cours", type: "string", length: 50, nullable: false)]
    private $nomCours;

    #[ORM\Column(name: "Description_Cours", type: "blob", length: 0, nullable: false)]
    private $descriptionCours;

    #[ORM\ManyToOne(targetEntity: Formation::class)]
    #[ORM\JoinColumn(name: "IDfor", referencedColumnName: "ID_de_Formation")]
    private $idformation;

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

    public function getIdformation(): ?Formation
    {
        return $this->idformation;
    }

    public function setIdformation(?Formation $idformation): static
    {
        $this->idformation = $idformation;

        return $this;
    }
    public function getFormation(): ?String
    {
        return $this->idformation ? $this->idformation->getnomDeFormation() : null;
    }
    
    public function setFormation(?Formation $formation): self
    {
        $this->idformation = $formation;
    
        return $this;
    }
}
