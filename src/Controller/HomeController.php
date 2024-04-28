<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: "home")]
    public function index2(): Response
    {
        return $this->render('Front/home.html.twig');
    }


    
    #[Route('/contact', name: "contact")]
    public function index(): Response
    {
        return $this->render('Front/formtest.html.twig');
    }

     
    #[Route('/affiche', name: "affiche")]
    public function index1(): Response
    {
        return $this->render('affiche.html.twig');
    }
    #[Route('/affiche1', name: "affiche1")]
    public function index0(): Response
    {
        return $this->render('rating.html.twig');
    }
   
    
    
}
