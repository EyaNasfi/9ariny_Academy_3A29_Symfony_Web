<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Entity\User;
use App\Form\InscriptionType;
use App\Form\UserType;
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/certif', name: 'app_certif')]
    public function certif(QuizRepository $rep): Response
    {
        $q = $rep->findAll(); //n3ml instance 
        return $this->render('certif.html.twig', [
            'controller_name' => 'HomeController',
            'quizs'=>$q,
        ]);
        return $this->redirectToRoute('app_pdf');

        
    }
    #[Route('/pdf', name: 'app_pdf')]
    public function pdf(): Response
    {
        return $this->render('/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf', [
            'controller_name' => 'pdfController',
        ]);
        
    }
    #[Route('/map', name: 'app_map')]
    public function map(): Response
    {
        return $this->render('map.html.twig', [
            'controller_name' => 'MapController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig', [
            'controller_name' => 'contactController',
        ]);
    }
    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('team.html.twig', [
            'controller_name' => 'teamController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about.html.twig', [
            'controller_name' => 'aboutController',
        ]);
    }
    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(Request $req,EntityManagerInterface $em ,UserRepository $userRepository ): Response
    {
            $u = new User();
            $u->setRole("Etudiant");
        $form = $this->createForm(InscriptionType::class,$u); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
        
            if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
                $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
                $em->persist($u); //T3awedh persist l'entité Reclamation fil entity manager.
                $em->flush(); //na3ml refresh f bd
                return $this->redirectToRoute('app_home');
            }
        
            return $this->render('register.html.twig', [
                'form' => $form->createView()        ]);
        }
}
