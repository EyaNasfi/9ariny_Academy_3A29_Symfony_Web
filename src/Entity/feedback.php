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
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="opinion", type="string", length=255, nullable=false)
     */
    private $opinion;

    /**
     * @var string
     *
     * @ORM\Column(name="methodes_enseignement", type="string", length=255, nullable=false)
     */
    private $methodesEnseignement;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluation_recherche", type="string", length=255, nullable=false)
     */
    private $evaluationRecherche;

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getOpinion(): ?string
    {
        return $this->opinion;
    }

    public function setOpinion(string $opinion): self
    {
        $this->opinion = $opinion;
        return $this;
    }

    public function getMethodesEnseignement(): ?string
    {
        return $this->methodesEnseignement;
    }

    public function setMethodesEnseignement(string $methodesEnseignement): self
    {
        $this->methodesEnseignement = $methodesEnseignement;
        return $this;
    }

    public function getEvaluationRecherche(): ?string
    {
        return $this->evaluationRecherche;
    }

    public function setEvaluationRecherche(string $evaluationRecherche): self
    {
        $this->evaluationRecherche = $evaluationRecherche;
        return $this;
    }
}
