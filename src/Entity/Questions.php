<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="idquiz", columns={"idquiz"}), @ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var int
     *
     * @ORM\Column(name="idquest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquest;

    /**
     * @var string
     *
     * @ORM\Column(name="op1", type="string", length=255, nullable=false)
     */
    private $op1;

    /**
     * @var string
     *
     * @ORM\Column(name="op2", type="string", length=255, nullable=false)
     */
    private $op2;

    /**
     * @var string
     *
     * @ORM\Column(name="op3", type="string", length=255, nullable=false)
     */
    private $op3;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255, nullable=false)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=false)
     */
    private $question;

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idquiz", referencedColumnName="idquiz")
     * })
     */
    private $idquiz;

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
