<?php

namespace App\Controller;

use App\Entity\Questions;
use App\Form\QuestionsType;
use App\Repository\QuestionsRepository;
use App\Repository\QuizRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionsController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function home(ReponseRepository $rep ,ReclamationRepository $r): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController','Reponses '=>$rep->findAll(),'Reclamations '=>$r->findAll()
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

    #[Route('/questions', name: 'app_questions')]
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
    $qu= new Questions();
    $form = $this->createForm(QuestionsType::class,$qu); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($request); //traitement de requete  , 
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($qu); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_questions');
        }
    
        return $this->render('/questions/index.html.twig', [
            'form' => $form->createView()        ]);
    }

    #[Route('/afficherquest/{idquiz}', name: 'app_afficherquestions')]
    public function affiche(QuestionsRepository $rep,QuizRepository $rr,$idquiz,PaginatorInterface $paginator, Request $request){
        $r = $rep->findAll();

        return $this->render('/questions/affiche.html.twig', [
            'questions'=>$r,'quizs'=>$rr->findAll(),'idquiz'=>$idquiz,
        ]);
    }
    #[Route('/questions/supprimer/{id}', name: 'app_supprimerquestion')]
    public function supprimer($id, QuestionsRepository $rep){
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherquestions');
        

}
#[Route('/questions/modifier/{id}', name: 'app_modifierquestion')]
public function modifier(Request $req,$id, QuestionsRepository $rep){
    $p = $rep->find($id); //n3ml instance 

    $form = $this->createForm(QuestionsType::class,$p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_afficherquestions');
        }
    
        return $this->render('/questions/modifier.html.twig', [
            'form' => $form->createView() ,'questions' => $rep->findAll()        ]);

}
#[Route('/afficherquestback', name: 'app_afficherbackquestions')]
public function afficheback(QuestionsRepository $rep,PaginatorInterface $paginator, Request $request){
    $r = $rep->findAll();

    return $this->render('/questions/back/afficheback.html.twig', [
        'questions'=>$r,'quizs'=>$rep->findAll()
    ]);
}
}