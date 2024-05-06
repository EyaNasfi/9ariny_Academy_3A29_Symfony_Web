<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="idquiz", columns={"idquiz"})})
 * @ORM\Entity
 * @UniqueEntity("question",message="Cette question existe déjà")

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
     * @Assert\NotBlank( message="Entrez l'option 1  svp")

     */
    private $op1;

    /**
     * @var string
     *
     * @ORM\Column(name="op2", type="string", length=255, nullable=false)
     * @Assert\NotBlank( message="Entrez l'option 2  svp")

     */
    private $op2;

    /**
     * @var string
     *
     * @ORM\Column(name="op3", type="string", length=255, nullable=false)
     * @Assert\NotBlank( message="Entrez l'option 3  svp")

     */
    private $op3;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255, nullable=false)
     * @Assert\NotBlank( message="Entrez la reponse  svp")

     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=false, unique=true)
     * @Assert\NotBlank( message="Entrez la question  svp")
     * @Assert\Regex(
     *     pattern="/\?$/",
     *     message="La question doit se terminer par ? ."
     * )
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

    public function getIdquest(): ?int
    {
        return $this->idquest;
    }

    public function getOp1(): ?string
    {
        return $this->op1;
    }

    public function setOp1(string $op1): static
    {
        $this->op1 = $op1;

        return $this;
    }

    public function getOp2(): ?string
    {
        return $this->op2;
    }

    public function setOp2(string $op2): static
    {
        $this->op2 = $op2;

        return $this;
    }

    public function getOp3(): ?string
    {
        return $this->op3;
    }

    public function setOp3(string $op3): static
    {
        $this->op3 = $op3;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): static
    {
        $this->answer = $answer;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getIdquiz(): ?Quiz
    {
        return $this->idquiz;
    }

    public function setIdquiz(?Quiz $idquiz): static
    {
        $this->idquiz = $idquiz;

        return $this;
    }

public function __toString(): string
    {
        return $this->op1 && $this->op2 && $this->op3;
    }
}