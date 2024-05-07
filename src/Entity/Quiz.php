<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Quiz
 *
 * @ORM\Table(name="quiz", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
*@UniqueEntity("nom" ,message="Ce quiz existe déjà")
 */
class Quiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="idquiz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquiz;

    

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false, unique=true)
     * @Assert\NotBlank( message="Entrez le nom svp")
     */

    private $nom;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    public function getIdquiz(): ?int
    {
        return $this->idquiz;
    }


   
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }
public function __toString(): string
    {
        return $this->nom;
    }

}
