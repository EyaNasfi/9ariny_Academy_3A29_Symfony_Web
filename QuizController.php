<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
<<<<<<< HEAD
use Symfony\Component\Mime\Email;
=======
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use App\Repository\ReponseRepository;
use App\Repository\QuestionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\Loader\Configurator\mailer;
=======
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_quiz')]
    public function ajouter(Request $req,EntityManagerInterface $em ,UserRepository $userRepository,QuizRepository $qr ,ReclamationRepository $rep,ReponseRepository $re,QuestionsRepository $qq): Response
    {
<<<<<<< HEAD
        $user=$userRepository->findOneBy(['iduser' => 4]);    
=======
        $user=$userRepository->findOneBy(['id' => 4]);    
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    $quiz = new Quiz();
    $quiz->setIdUser($user);
    $form = $this->createForm(QuizType::class,$quiz); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req);
    $totalQuest = $qq->createQueryBuilder('q')
            ->select('COUNT(q.idquest)')
            ->getQuery()
            ->getSingleScalarResult(); //traitement de requete  , 
    $totalQuizzes = $qr->createQueryBuilder('q')
            ->select('COUNT(q.idquiz)')
            ->getQuery()
            ->getSingleScalarResult();
            $totalrec = $rep->createQueryBuilder('q')
    ->select('COUNT(q.idrec)')
    ->getQuery()
    ->getSingleScalarResult();
    $totalrep = $re->createQueryBuilder('q')
    ->select('COUNT(q.idrep)')
    ->getQuery()
    ->getSingleScalarResult();
    $pourcentageReponses = 0;
if ($totalrec > 0) {
    $pourcentageReponses = ($totalrep / $totalrec) * 100;
}    
$totalQuest = $qq->createQueryBuilder('q')
->select('COUNT(q.idquest)')
->getQuery()
->getSingleScalarResult();
$pourcentagequest = 0;
if ($totalQuest > 0) {
    $pourcentagequest = ($totalQuizzes / $totalQuest) * 100;
} 


        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($quiz); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_questions');
        }
    
        return $this->render('quiz/index.html.twig', [
            'form' => $form->createView()  ,  'totalQuizzes' => $totalQuizzes,'totalrep' => $totalrep,  'totalrec' => $totalrec,    'pourcentageReponses' => $pourcentageReponses,  'totalquest' => $totalQuest ,'pourcentagequest' => $pourcentagequest

        ]);
    }
    // QuizRepository.php

    public function findQuestionsCountPerQuiz(): array
    {
        $queryBuilder = $this->createQueryBuilder('q')
            ->select('q.idquiz, COUNT(quest.idquest) as question_count')
            ->leftJoin('q.idquiz', 'quest')
            ->groupBy('q.idquiz');
    
        $results = $queryBuilder->getQuery()->getResult();
    
        $questionsCountPerQuiz = [];
        foreach ($results as $result) {
            $questionsCountPerQuiz[$result['idquiz']] = $result['question_count'];
        }
    
        return $questionsCountPerQuiz;
    }

    #[Route('/quiz/afficher', name: 'app_afficherquiz')]
    public function affiche(QuizRepository $rep ,ReclamationRepository $repp ,ReponseRepository $re,QuestionsRepository $qq ){
        $r = $rep->findAll();
        $totalQuizzes = $rep->createQueryBuilder('q')
        ->select('COUNT(q.idquiz)')
        ->getQuery()
        ->getSingleScalarResult();
        $totalrec = $repp->createQueryBuilder('q')
        ->select('COUNT(q.idrec)')
        ->getQuery()
        ->getSingleScalarResult();
        $totalQuest = $qq->createQueryBuilder('q')
        ->select('COUNT(q.idquest)')
        ->getQuery()
        ->getSingleScalarResult(); //traitement de requete  , 
$totalrep = $re->createQueryBuilder('q')
->select('COUNT(q.idrep)')
->getQuery()
->getSingleScalarResult();
$pourcentageReponses = 0;
if ($totalrec > 0) {
$pourcentageReponses = ($totalrep / $totalrec) * 100;
}    
$totalQuest = $qq->createQueryBuilder('q')
->select('COUNT(q.idquest)')
->getQuery()
->getSingleScalarResult();
$pourcentagequest = 0;
if ($totalQuest > 0) {
$pourcentagequest = ($totalQuizzes / $totalQuest) * 100;
} 
        return $this->render('/quiz/affiche.html.twig', [
            'questions'=>$qq->findAll(),'quizs'=>$r,'totalQuizzes' => $totalQuizzes,  'totalQuizzes' => $totalQuizzes,'totalrep' => $totalrep,  'totalrec' => $totalrec,    'pourcentageReponses' => $pourcentageReponses,  'totalquest' => $totalQuest ,'pourcentagequest' => $pourcentagequest
        ]);
    }
    public function stat(QuizRepository $quizRepository): Response
    {
        $totalQuizzes = $quizRepository->createQueryBuilder('q')
            ->select('COUNT(q.id)')
            ->getQuery()
            ->getSingleScalarResult();

        return $this->render('dashboard/index.html.twig', [
            'totalQuizzes' => $totalQuizzes,
        ]);
    }
    #[Route('/quiz/front/afficherquiz', name: 'app_afficherfront')]
    public function affichefront(QuizRepository $rep ,QuestionsRepository $reppp,Request $request){
        $q = $rep->findAll();
<<<<<<< HEAD
=======
        $note = $request->request->get('note', 0);


        // Stocker la note dans la session
        $request->getSession()->set('note', $note);
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
        return $this->render('/quiz/front/passerquiz.html.twig', [
            'quizs'=>$q, 'questions'=>$reppp->findAll(),   

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
    public function modifier(QuizRepository $quiz,Request $req,EntityManagerInterface $em,$id,ReclamationRepository $repp ,ReponseRepository $re,QuestionsRepository $qq): Response
    {
    
        $p = $quiz->find($id); //n3ml instance 
        $totalQuizzes = $quiz->createQueryBuilder('q')
        ->select('COUNT(q.idquiz)')
        ->getQuery()
        ->getSingleScalarResult();
        $totalrec = $repp->createQueryBuilder('q')
        ->select('COUNT(q.idrec)')
        ->getQuery()
        ->getSingleScalarResult();
        $totalQuest = $qq->createQueryBuilder('q')
        ->select('COUNT(q.idquest)')
        ->getQuery()
        ->getSingleScalarResult(); //traitement de requete  , 
$totalrep = $re->createQueryBuilder('q')
->select('COUNT(q.idrep)')
->getQuery()
->getSingleScalarResult();
$pourcentageReponses = 0;
if ($totalrec > 0) {
$pourcentageReponses = ($totalrep / $totalrec) * 100;
}    
$totalQuest = $qq->createQueryBuilder('q')
->select('COUNT(q.idquest)')
->getQuery()
->getSingleScalarResult();
$pourcentagequest = 0;
if ($totalQuest > 0) {
$pourcentagequest = ($totalQuizzes / $totalQuest) * 100;
} 
        $form = $this->createForm(QuizType::class,$p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
        $totalQuizzes = $quiz->createQueryBuilder('q')
        ->select('COUNT(q.idquiz)')
        ->getQuery()
        ->getSingleScalarResult();
            if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
                $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
                $em->flush(); //na3ml refresh f bd
                return $this->redirectToRoute('app_afficherquiz');
            }
        
            return $this->render('/quiz/modifier.html.twig', [
                'form' => $form->createView() ,'Quiz' => $quiz->findAll() ,  'totalQuizzes' => $totalQuizzes,  'totalQuizzes' => $totalQuizzes,'totalrep' => $totalrep,  'totalrec' => $totalrec,    'pourcentageReponses' => $pourcentageReponses,  'totalquest' => $totalQuest ,'pourcentagequest' => $pourcentagequest ]);
    }
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

}
