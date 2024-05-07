<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", indexes={@ORM\Index(name="nomCategorie", columns={"nomCategorie"})})
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=false)
   
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *   @ORM\Id
     * @ORM\Column(name="nomCategorie", type="string", length=255, nullable=false)
     */
    private $nomCategorie;
    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdcategorie(int $idCategorie): static
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getnomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setnomCategorie(string $nomcategorie): static
    {
        $this->nomCategorie = $nomcategorie;

        return $this;
    }



}
