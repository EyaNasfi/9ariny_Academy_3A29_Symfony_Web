<?php

namespace App\Controller;

use App\Entity\Equipement;
use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\EquipementRepository;
use App\Repository\SalleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/salle')]
class FrontController extends AbstractController
{
    #[Route('/', name: 'app_salle_indexf', methods: ['GET'])]
    public function index(SalleRepository $salleRepository, EquipementRepository $equipementRepository): Response
    {
        return $this->render('salle/show.html.twig', [
            'salles' => $salleRepository->findAll(),
            'equipements' => $equipementRepository->findAll(),
        ]);
    }

   
   
  
}
