<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{ #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "ID_de_Formation", type: "integer", nullable: false)]
    
    private $idDeFormation;

    #[ORM\Column(name: "Nom_de_Formation", type: "string", length: 20, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Regex(
        pattern: '/\d/',
        match: false,
        message: 'Le Nom de la Formation ne doit pas contenir de chiffres.'
    )]
    private $nomDeFormation;

   
    #[ORM\Column(name: "Description", type: "string", length: 20, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Regex(
        pattern: '/\d/',
        match: false,
        message: 'La description ne doit pas contenir de chiffres.'
    )]
    private $description;


    #[ORM\Column(name: "Durée", type: "string",length:20, nullable: false)]
   
    private $duree;

  
    #[ORM\Column(name: "Niveau", type: "string", length: 20, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Regex(
        pattern: '/\d/',
        match: false,
        message: 'Le niveau ne doit pas contenir de chiffres.'
    )]
    private $niveau;
    #[ORM\Column(name: "Date_Deb", type: "date", nullable: false)]
  
    private $dateDeb;



    #[ORM\Column(name: "Date_Fin", type: "date", nullable: false)]
   
    private $dateFin;


    #[ORM\Column(name: "Coût", type: "string", length: 20, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Regex(
        pattern: '/^\d+$/',
        message: 'Le coût doit contenir uniquement des chiffres.'
    )]
    private $cout;


    #[ORM\ManyToOne(targetEntity: Categorie::class)]
    #[ORM\JoinColumn(name: "nomCategorie", referencedColumnName: "nomCategorie")]
    private $nomCategorie;
    
    


    public function getIidDeFormation(): ?int
    {
        return $this->idDeFormation;
    }

    public function getnomDeFormation(): ?string
    {
        return $this->nomDeFormation;
    }

    public function setnomDeFormation(string $nomDeFormation): static
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

    public function getduree(): ?string
    {
        return $this->duree;
    }

    public function setduree(String $duree): static
    {
        $this->duree = $duree;

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

    public function getdateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setdateDeb(\DateTimeInterface $dateDeb): static
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getdateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setdateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getcout(): ?String
    {
        return $this->cout;
    }

    public function setcout(string $cout): static
    {
        $this->cout = $cout;

        return $this;
    }

   

    public function getNomCategorie(): ?Categorie
    {
        return $this->nomCategorie;
    }
    
        public function setNomCategorie(?Categorie $nomCategorie): self
        {
            $this->nomCategorie = $nomCategorie;
    
            return $this;
        }
    
        public function getCategorie(): ?String
        {
            return $this->nomCategorie ? $this->nomCategorie->getNomCategorie() : null;
        }
        
        public function setCategorie(?Categorie $categorie): self
        {
            $this->nomCategorie = $categorie;
        
            return $this;
        }
    

}
