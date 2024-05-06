<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback")
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="opinion", type="string", length=255, nullable=true)
     */
    private $opinion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="methodes_enseignement", type="string", length=255, nullable=true)
     */
    private $methodesEnseignement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evaluation_recherche", type="string", length=255, nullable=true)
     */
    private $evaluationRecherche;


}
