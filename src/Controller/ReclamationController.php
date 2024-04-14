<?php

namespace App\Controller;

use App\Entity\User;
use Twilio\Rest\Client;

require_once 'C:\Users\Eya\projet\vendor\autoload.php';
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\UserRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ReclamationController extends AbstractController
{
    #[Route('/front', name: 'app_reclamation')]

    public function ajouter(Request $req,EntityManagerInterface $em , UserRepository $userRepository): Response
    {
    $user=$userRepository->findOneBy(['id' => 4]);    
    $reclamation = new Reclamation();
    $reclamation->setIdUser($user);
   // $reclamation->setIduser(2);

        $form = $this->createForm(ReclamationType::class, $reclamation); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
        $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($reclamation); //T3awedh persist l'entité Reclamation fil entity manager.
        
            $twilio = new Client($sid, $token);
        
            $message = $twilio->messages
                array(
                  "body" => "Ilya une reclamation veuillez la consulter en https://127.0.0.1:8000/reclamation/back/afficher "
                )
              );
        
        print($message->sid);
        $em->flush(); //na3ml refresh f bd
 
            return $this->redirectToRoute('app_reclamation');
        }
    
        return $this->render('/reclamation/front/index.html.twig', [
            'form' => $form->createView()        ]);
    }

    #[Route('/afficher', name: 'app_afficherreclamationfront')]
    public function affiche(ReclamationRepository $rep , UserRepository $userRepository,ReponseRepository $re){
        $user=$userRepository->find(4);   
        $reponse=$re->findAll(); 
        $r = $rep->findBy(['iduser' => $user]);
    
        return $this->render('/reclamation/front/affiche.html.twig', [
            'Reclamations'=>$r,'Reponses'=>$reponse, 'Users'=>$rep->findAll()
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
#[Route('/reclamation/back/afficher', name: 'app_afficherreclamation')]
public function afficheback(ReclamationRepository $rep,ReponseRepository $re){
    $r=$rep->findAll();
    $reponse=$re->findAll();
    return $this->render('reclamation/back/affiche.html.twig', [
        'Reclamations'=>$r,'Reponses'=>$reponse, 'Users'=>$rep->findAll()
    ]);
}
#[Route('/reclamation/back/affichetraite', name: 'app_afficherreponsetraite')]
public function affichetraite(ReponseRepository $reppp,ReclamationRepository $rep){
    $r=$rep->findAll();

    $ro=$reppp->findAll();
    return $this->render('reclamation/back/affichetraite.html.twig', [
        'Reclamations'=>$r,'Reponses'=>$ro, 'Users'=>$rep->findAll()
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