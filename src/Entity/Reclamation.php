<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReclamationRepository;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrec;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;
public function getIduser(): ?User
{
    return $this->iduser;

}
public function setIduser(?User $iduser): self
{
    $this->iduser = $iduser;

    return $this;
}
public function getIdrec():?int
{
    return $this->idrec;
}
public function setIdrec(int $idrec): self
{
    $this->idrec = $idrec;

    return $this;
}
public function getTitre():?string
{
    return $this->titre;
}

public function setTitre(string $titre): self
{
    $this->titre = $titre;

    return $this;
}
public function getDescription():?string
{
    return $this->description;
}

public function setDescription(string $description): self
{
    $this->description = $description;

    return $this;
}
public function __toString()
{
    return $this->getTitre();

}


}