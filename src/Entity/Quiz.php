<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="quiz_ibfk_2", columns={"ID_de_Formation"})})
 * @ORM\Entity
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
     * @var int
     *
     * @ORM\Column(name="nbrquest", type="integer", nullable=false)
     */
    private $nbrquest;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_de_Formation", referencedColumnName="ID_de_Formation")
     * })
     */
    private $idDeFormation;


}
