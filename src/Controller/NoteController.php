<?php

namespace App\Controller;

use App\Entity\Note;
use App\Form\NoteType;
use App\Repository\NoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NoteController extends AbstractController
{
    #[Route('/note', name: 'app_note')]
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
    $qu= new Note();
    $form = $this->createForm(NoteType::class,$qu); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($request); //traitement de requete  , 
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($qu); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_note');
        }
    }
        #[Route('/affichernote/{idquiz}', name: 'app_affichernote')]
        public function affiche(NoteRepository $rep,$idquiz, Request $request){
            $r = $rep->findAll();
    
            return $this->render('/note/affiche.html.twig', [
                'Note'=>$r,'quizs'=>$rep->findAll(),'idquiz'=>$idquiz,
            ]);
        }
}
