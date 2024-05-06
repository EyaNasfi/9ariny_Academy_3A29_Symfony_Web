<?php

namespace App\Entity;

use App\Repository\RemiseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;




#[ORM\Entity(repositoryClass: RemiseRepository::class)]


class Remise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le montant ne peut pas être vide')]
    #[Assert\GreaterThan(value: 0, message: 'Le montant doit être supérieur à 0')]

    private ?float $montant = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le pourcentage ne peut pas être vide')]
    #[Assert\GreaterThan(value: 0, message: 'Le pourcentage doit être supérieur à 0')]
    private ?int $pourcentage = null;

    #[ORM\Column]
    private ?float $montantaprespourcentage = null;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getPourcentage(): ?int
    {
        return $this->pourcentage;
    }

    public function setPourcentage(int $pourcentage): static
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    public function getMontantaprespourcentage(): ?float
    {
        return $this->montantaprespourcentage;
    }

    public function setMontantaprespourcentage(float $montantaprespourcentage): static
    {
        $this->montantaprespourcentage = $montantaprespourcentage;

        return $this;
    }

   
}
