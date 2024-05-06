<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    
    #[Route('/user', name: 'app_user')]
    public function ajouter(Request $req,EntityManagerInterface $em ,UserRepository $userRepository ): Response
    {
<<<<<<< HEAD
        $user=$userRepository->findOneBy(['iduser' => 4]);    
=======
        $user=$userRepository->findOneBy(['id' => 4]);    
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    $u = new User();
    $form = $this->createForm(UserType::class,$u); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($u); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_user');
        }
    
        return $this->render('user/index.html.twig', [
            'form' => $form->createView()        ]);
    }
    #[Route('/afficheruser', name: 'app_afficheruser')]
    public function affiche(UserRepository $rep , UserRepository $userRepository){
        
        $u=$userRepository->findAll();     
        return $this->render('user/affiche.html.twig', [
            'Users'=>$u
        ]);
    }
   
    #[Route('/user/supprimer/{id}', name: 'app_supprimeruser')]
    public function supprimer($id, UserRepository $rep){
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficheruser');
        

}
#[Route('/user/modifier/{id}', name: 'app_modifieruser')]
public function modifier(Request $req,$id, UserRepository $rep){
    $p = $rep->find($id); //n3ml instance 

    $form = $this->createForm(UserType::class,$p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_afficheruser');
        }
    
        return $this->render('/user/index.html.twig', [
            'form' => $form->createView() ,'users' => $rep->findAll()        ]);

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
            return $this->redirectToRoute('app_inscription');
        }
    
        return $this->render('/register.html.twig', [
            'form' => $form->createView()        ]);
    }
}
