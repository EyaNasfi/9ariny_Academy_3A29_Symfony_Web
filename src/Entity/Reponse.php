<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="nom", columns={"idrec"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrep;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     * @Assert\NotBlank( message="Entrez le contenu de reponse  svp")

     */
    private $contenu;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrec", referencedColumnName="idrec")

     * })
     */
    private $idrec;

    public function getIdrep(): ?int
    {
        return $this->idrep;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdrec(): ?Reclamation
    {
        return $this->idrec;
    }

    public function setIdrec(?Reclamation $idrec): static
    {
        $this->idrec = $idrec;

        return $this;
    }
    public function __toString()
    {
        return $this->getContenu();
    }


}
