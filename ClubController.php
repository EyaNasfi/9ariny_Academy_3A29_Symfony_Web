<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Security\EmailVerifier;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class ClubController extends AbstractController
{
             
            private MailerInterface $mailer;
        
            public function __construct( MailerInterface $mailer)
           {
                
                $this->mailer = $mailer;
}
    #[Route('/club', name: 'app_club')]

    public function ajouter(Request $req,EntityManagerInterface $em ,UserRepository $userRepository ): Response
    {

        $user=$userRepository->findOneBy(['id' => 4]);    
    $club = new Club();
    $club->setIdUser($user);
    $form = $this->createForm(ClubType::class,$club); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($club); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
           
        
         $email = (new Email())
             ->from(new Address('mohamedamine.belhajmassoud@esprit.tn', 'test  Bot'))   //  mail mta3 el  mailtrap
             ->to($user->getEmail())   // l chkoun bch tab3Ath
             ->subject('Affectation club ')    //   titre mta3 mail 
             ->text('votre club est ajouter avec succées  ');
             $this->mailer->send($email);
             return $this->redirectToRoute('app_club');
   
           
                
       }
    
        return $this->render('club/index.html.twig', [
            'form' => $form->createView()    ]);
}
#[Route('/club/afficher', name: 'app_afficherclub')]
public function affiche(ClubRepository $rep ){
    $r = $rep->findAll();

    return $this->render('/club/affiche.html.twig', [
        'clubs'=>$r 
    ]);
}
#[Route('/club/modifier/{id}', name: 'app_modifierclub')]
public function modifier(Request $req,$id, ClubRepository $rep){
    $p =$rep->find($id); //n3ml instance 

    $form = $this->createForm(ClubType::class,$p); //n3ml formulaire  b eventtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_afficherclub');
        }
    
        return $this->render('/club/modifier.html.twig', [
            'form' => $form->createView() ,'clubs' => $rep->findAll()        ]);

}
#[Route('/club/supprimer/{id}', name: 'app_supprimerclub')]
    public function supprimer($id, ClubRepository $rep){
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherclub');
        

}
#[Route('/front/club/afficher', name: 'app_afficherclubfront')]
public function affichefront(ClubRepository $rep ){
    $r = $rep->findAll();

    return $this->render('/club/front/afficherfront.html.twig', [
        'clubs'=>$r 
    ]);
}
}
