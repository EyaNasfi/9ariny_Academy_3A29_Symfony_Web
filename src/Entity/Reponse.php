<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReponseRepository;
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
