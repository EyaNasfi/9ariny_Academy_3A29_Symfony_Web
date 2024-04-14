<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_quiz')]
    public function ajouter(Request $req,EntityManagerInterface $em ,UserRepository $userRepository ): Response
    {
        $user=$userRepository->findOneBy(['id' => 4]);    
    $quiz = new Quiz();
    $quiz->setIdUser($user);
    $form = $this->createForm(QuizType::class,$quiz); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($quiz); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_questions');
        }
    
        return $this->render('quiz/index.html.twig', [
            'form' => $form->createView()        ]);
    }
    #[Route('/quiz/afficher', name: 'app_afficherquiz')]
    public function affiche(QuizRepository $rep ){
        $r = $rep->findAll();
    
        return $this->render('/quiz/affiche.html.twig', [
            'quizs'=>$r
        ]);
    }
    #[Route('/quiz/front/afficherquiz', name: 'app_afficherfront')]
    public function affichefront(QuizRepository $rep ){
        $q = $rep->findAll();
    
        return $this->render('/quiz/front/passerquiz.html.twig', [
            'quizs'=>$q
        ]);
    }
    #[Route('/quiz/supprimer/{id}', name: 'app_supprimerquiz')]
    public function supprimer($id,EntityManagerInterface $em,QuizRepository $rep): Response
    {
        $p=$rep->find($id);
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherquiz');
    }
    #[Route('/quiz/modifier/{id}', name: 'app_modifierquiz')]
    public function modifier(QuizRepository $quiz,Request $req,EntityManagerInterface $em,$id): Response
    {
        
        $p = $quiz->find($id); //n3ml instance 

        $form = $this->createForm(QuizType::class,$p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
        
            if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
                $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
                $em->flush(); //na3ml refresh f bd
                return $this->redirectToRoute('app_afficherquiz');
            }
        
            return $this->render('/quiz/modifier.html.twig', [
                'form' => $form->createView() ,'Quiz' => $quiz->findAll()        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
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

}
