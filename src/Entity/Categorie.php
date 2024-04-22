<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

//rbatna binet class w repository
#[ORM\Entity(repositoryClass: CategorieRepository::class)]


class Categorie
{   
    

    #[ORM\Column(name: "idCategorie", type: "integer", nullable: false)]
    private $idcategorie;

    #[ORM\Id]
    #[ORM\Column(name: "nomCategorie", type: "string", length: 50, nullable: false)]
    #[Assert\Regex(
        pattern: '/\d/',
        match: false,
        message: 'Le Nom ne doit pas contenir de chiffres.'
    )]
    private $nomCategorie;

    public function getIdcategorie(): ?int
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(int $idcategorie): static
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    public function getNomcategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomcategorie(string $nomcategorie): static
    {
        $this->nomCategorie = $nomcategorie;

        return $this;
    }


}
