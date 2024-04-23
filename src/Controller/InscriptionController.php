<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(Request $req,EntityManagerInterface $em ,UserRepository $userRepository ): Response
    {
            $u = new User();
            $u->setRole("Etudiant");
        $form = $this->createForm(InscriptionType::class,$u); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
        
            if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
                $em->persist($u);
                $em->flush();
                return $this->redirectToRoute('app_inscription');

            }
        
            return $this->render('/register.html.twig', [
                'form' => $form->createView()        ]);
        }
}
