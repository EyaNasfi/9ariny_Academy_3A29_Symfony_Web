<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remise
 *
 * @ORM\Table(name="remise", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="idpaiement", columns={"idpaiement"})})
 * @ORM\Entity
 */
class Remise
{
    /**
     * @var int
     *
     * @ORM\Column(name="idremise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremise;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage", type="integer", nullable=false)
     */
    private $pourcentage;

    /**
     * @var int
     *
     * @ORM\Column(name="montantapresremise", type="integer", nullable=false)
     */
    private $montantapresremise;

    /**
     * @var \Paiement
     *
     * @ORM\ManyToOne(targetEntity="Paiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpaiement", referencedColumnName="idpaiement")
     * })
     */
    private $idpaiement;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;


}
