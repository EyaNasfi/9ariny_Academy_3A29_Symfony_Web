<?php

namespace App\Controller;

use App\Entity\User;
use Twilio\Rest\Client;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Services\MailerService;
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\Mailer;
use App\Repository\ReponseRepository;
use App\Repository\QuestionsRepository;
use Symfony\Component\Mailer\Transport;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ReclamationController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[Route('/front', name: 'app_reclamation')]

    public function ajouter(Request $req,EntityManagerInterface $em , UserRepository $userRepository,ReclamationRepository $r,ReponseRepository $re): Response
    {
    $user=$userRepository->findOneBy(['iduser' => 4]);    
    $reclamation = new Reclamation();
    $reclamation->setIdUser($user);
   // $reclamation->setIduser(2);

        $form = $this->createForm(ReclamationType::class, $reclamation); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
        $totalrec = $r->createQueryBuilder('q')
        ->select('COUNT(q.idrec)')
        ->getQuery()
        ->getSingleScalarResult();
        $totalrep = $re->createQueryBuilder('q')
        ->select('COUNT(q.idrep)')
        ->getQuery()
        ->getSingleScalarResult();
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($reclamation); //T3awedh persist l'entité Reclamation fil entity manager.
            $sid    = "ACab83a00aa24c2945460363efc3c77fed";
         $token  = "ef4709f9deb9baa5f41868c223744617";
          $twilio = new Client($sid, $token);
           $message = $twilio->messages
                            ->create("+21621782711", // to
                                     [
                                         "body" => "Ilya une reclamation veuillez la consulter",
                                         "from" => "+14243560944"
                                     ]
                            );
          
          print($message->sid);
        $em->flush(); //na3ml refresh f bd
 
            return $this->redirectToRoute('app_reclamation');
        }
    
        return $this->render('/reclamation/front/index.html.twig', [
            'form' => $form->createView()       ]);
    }

    #[Route('/afficher', name: 'app_afficherreclamationfront')]
    public function affiche(ReclamationRepository $rep , UserRepository $userRepository,ReponseRepository $re){
        $user=$userRepository->find(4);   
        $reponse=$re->findAll(); 
        $r = $rep->findBy(['iduser' => $user]);
    
        return $this->render('/reclamation/front/affiche.html.twig', [
            'Reclamations'=>$r,'Reponses'=>$reponse, 'Users'=>$rep->findAll(),
        ]);
    }
    #[Route('/reclamation/supprimer/{id}', name: 'app_supprimerreclamation')]
    public function supprimer($id, ReclamationRepository $rep){
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherreclamation');
        

}
#[Route('/reclamation/modifier/{id}', name: 'app_modifierreclamation')]
public function modifier(Request $req,$id, ReclamationRepository $rep){
    $p = $rep->find($id); //n3ml instance 
        $form = $this->createForm(ReclamationType::class, $p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->flush(); //na3ml refresh f bd
    
            return $this->redirectToRoute('app_afficherreclamationfront');
        }
        return $this->render('/reclamation/front/modifier.html.twig', [
            'f' => $form->createView() ,'Reclamations' => $rep->findAll()    
    ]);
}
#[Route('/app', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('signin.html.twig', []);
    }
#[Route('/login', name: 'app_login')]
public function login(Request $request): Response
{
    if ($request->isMethod('POST')) {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $entityManager = $this->getDoctrine()->getManager();
        $account = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($account && $password==$account->getMdp()) {
            $this->session->set('User', $account);
            return $this->redirectToRoute('app_afficherreclamation');
        } else {
            // Authentication failed, display an error message or redirect back to the login page
            return $this->redirectToRoute('app_afficherreclamation');
        }
    }
    return $this->render('signin.html.twig');
}
#[Route('/reclamation/back/afficher', name: 'app_afficherreclamation')]
public function afficheback(Request $request,ReclamationRepository $rep,ReponseRepository $re,QuestionsRepository $qq,QuizRepository $qr){
    $search = $request->query->get('search');
    $queryBuilder = $rep->createQueryBuilder('q');

    if ($search) {
        $queryBuilder
            ->where('q.idrec LIKE :search')
            ->setParameter('search', '%' . $search . '%');
    }
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
$r=$rep->findAll();
$reponse=$re->findAll();

    return $this->render('reclamation/back/affiche.html.twig', [
        'Reclamations'=>$r,'Reponses'=>$reponse, 'Users'=>$rep->findAll(),'totalQuizzes' => $totalQuizzes,'totalrep' => $totalrep,  'totalrec' => $totalrec,    'pourcentageReponses' => $pourcentageReponses,  'totalquest' => $totalQuest ,'pourcentagequest' => $pourcentagequest,        'search' => $search

    ]);
}
#[Route('/search', name: 'app_search')]

public function search(Request $request, ReclamationRepository $rep, ReponseRepository $re, QuestionsRepository $qq, QuizRepository $qr): Response
{
    $search = $request->query->get('q');
    $queryBuilder = $rep->createQueryBuilder('q');

    if ($search) {
        $queryBuilder
            ->where('q.titre LIKE :search')
            ->setParameter('search', '%' . $search . '%');
    }

    $totalQuest = $qq->createQueryBuilder('q')
        ->select('COUNT(q.idquest)')
        ->getQuery()
        ->getSingleScalarResult();

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

    $pourcentagequest = 0;
    if ($totalQuest > 0) {
        $pourcentagequest = ($totalQuizzes / $totalQuest) * 100;
    }

    $r = $queryBuilder->getQuery()->getResult();
    $reponse = $re->findAll();

    return $this->render('reclamation/back/affiche.html.twig', [
        'Reclamations' => $r,
        'Reponses' => $reponse,
        'Users' => $rep->findAll(),
        'totalQuizzes' => $totalQuizzes,
        'totalrep' => $totalrep,
        'totalrec' => $totalrec,
        'pourcentageReponses' => $pourcentageReponses,
        'totalquest' => $totalQuest,
        'pourcentagequest' => $pourcentagequest,
        'search' => $search
        
    ]);
}
#[Route('/searchh', name: 'app_searchh')]

public function searchh(Request $request, ReclamationRepository $rep, ReponseRepository $re, QuestionsRepository $qq, QuizRepository $qr): Response
{
    $searchh = $request->query->get('q');
    $queryBuilder = $rep->createQueryBuilder('q');

    if ($searchh) {
        $queryBuilder
            ->where('q.titre LIKE :searchh')
            ->setParameter('searchh', '%' . $searchh . '%');
    }

    $totalQuest = $qq->createQueryBuilder('q')
        ->select('COUNT(q.idquest)')
        ->getQuery()
        ->getSingleScalarResult();

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

    $pourcentagequest = 0;
    if ($totalQuest > 0) {
        $pourcentagequest = ($totalQuizzes / $totalQuest) * 100;
    }

    $r = $queryBuilder->getQuery()->getResult();
    $reponse = $re->findAll();

    return $this->render('reclamation/back/affichetraite.html.twig', [
        'Reclamations' => $r,
        'Reponses' => $reponse,
        'Users' => $rep->findAll(),
        'totalQuizzes' => $totalQuizzes,
        'totalrep' => $totalrep,
        'totalrec' => $totalrec,
        'pourcentageReponses' => $pourcentageReponses,
        'totalquest' => $totalQuest,
        'pourcentagequest' => $pourcentagequest,
        'searchh' => $searchh
        
    ]);
}

#[Route('/reclamation/back/affichetraite', name: 'app_afficherreponsetraite')]
public function affichetraite(Request $request ,ReponseRepository $reppp,ReclamationRepository $rep,QuestionsRepository $qq,QuizRepository $qr){
    $r=$rep->findAll();
    $ro=$reppp->findAll();
    $searchh = $request->query->get('q');
    $queryBuilder = $rep->createQueryBuilder('q');

    if ($searchh) {
        $queryBuilder
            ->where('q.titre LIKE :searchh')
            ->setParameter('searchh', '%' . $searchh . '%');
    }

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
$totalrep = $reppp->createQueryBuilder('q')
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
    return $this->render('reclamation/back/affichetraite.html.twig', [
        'Reclamations'=>$r,'Reponses'=>$ro, 'Users'=>$rep->findAll(),'totalrep' => $totalrep,  'totalrec' => $totalrec,'totalQuizzes' => $totalQuizzes,'totalrep' => $totalrep,  'totalrec' => $totalrec,    'pourcentageReponses' => $pourcentageReponses,  'totalquest' => $totalQuest ,'pourcentagequest' => $pourcentagequest
   ,        'searchh' => $searchh
]);
}
#[Route('/reclamation/back/supprimer/{id}', name: 'app_supprimerreclamation')]
    public function supprimerback($id, ReclamationRepository $rep){
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherreclamationfront');
        

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
 #[Route('/forgot-password', name: 'forgot_password')]
    public function forgotPassword(Request $request): Response
    {
       
            $mailerDsn = 'gmail://firas.guesmi93806411@gmail.com:kyld%20wmzb%20finx%20dmns@default';
        
            $transport = Transport::fromDsn($mailerDsn);
        
            $mailer = new Mailer($transport);
            $mailerService = new MailerService($mailer);        
            $message = "message";
            
            $mailerService->sendEmail($message);  

            
           
            return $this->redirectToRoute('password_reset_page');
 
    }

}