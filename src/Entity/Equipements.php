<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipements
 *
 * @ORM\Table(name="equipements", indexes={@ORM\Index(name="idsalle", columns={"idsalle"})})
 * @ORM\Entity
 */
class Equipements
{
    /**
     * @var int
     *
     * @ORM\Column(name="idequip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequip;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsalle", referencedColumnName="idsalle")
     * })
     */
    private $idsalle;


}
