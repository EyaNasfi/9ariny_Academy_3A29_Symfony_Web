<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use App\Repository\ReponseRepository;
=======
use Symfony\Component\Validator\Constraints as Assert;
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
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
<<<<<<< HEAD
=======
     * @Assert\NotBlank( message="Entrez le contenu de reponse  svp")

>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
     */
    private $contenu;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrec", referencedColumnName="idrec")
<<<<<<< HEAD
     * })
     */
    private $idrec;
public function getIdrep()
{
    return $this->idrep;
}
public function setIdrep($idrep)
{
    $this->idrep = $idrep;

}
public function getContenu()
{
    return $this->contenu;
}
public function setContenu($contenu)
{
    $this->contenu = $contenu;

}
public function getIdrec()
{
    return $this->idrec;
}
public function setIdrec($idrec)
{
    $this->idrec = $idrec;

}
}
=======

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
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
