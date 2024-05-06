<?php

namespace App\Controller;
use Mailin;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Entity\Reclamation;
use App\Services\MailjetService;
use Symfony\Component\Mime\Email;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReponseController extends AbstractController
{

    #[Route('/reponse', name: 'app_reponse')]
    public function index(): Response
    {
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
        ]);
    }
    #[Route('/reponse/{id}', name: 'app_ajouterreponsee')]
///prblm form fi request
    public function ajouter(Request $req,EntityManagerInterface $em ,$id): Response
    {
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

    $re = new Reponse();
    $re->setIdrec($reclamation);

   // $reclamation->setIduser(2);
    $form = $this->createForm(ReponseType::class,$re); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($re); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            
            return $this->redirectToRoute('app_afficherreponse');
        }
    
        return $this->render('reponse/back/index.html.twig', [
            'form' => $form->createView()        ]);
    }
    #[Route('/reclamation/back/afficher', name: 'app_afficherreponse')]
    public function affiche(ReponseRepository $rep){
        $ro=$rep->findAll();
        return $this->render('reclamation/back/affiche.html.twig', [
            'Reponses'=>$ro, 'Reclamations'=>$rep->findAll()
        ]);
    }

    #[Route('/reponse/supprimer/{id}', name: 'app_supprimerreponse')]
    public function supprimer(ReponseRepository $rep, $id,ReclamationRepository $re): Response
    {
        
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherreponsetraite');
    }
    #[Route('/reponse/modifier/{id}', name: 'app_modifierreponse')]
    public function modifier(Request $req,ReponseRepository $rep, $id): Response
    {
        $p = $rep->find($id); //n3ml instance 
        $form = $this->createForm(ReponseType::class, $p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_afficherreponsetraite');
        }
        return $this->render('/reponse/back/index.html.twig', [
            'form' => $form->createView()        ]);
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
