<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use SendinBlue\Client\Model\GetSmsEventReport;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\EventRegistry;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function ajouter(Request $req,EntityManagerInterface $em ,UserRepository $userRepository ): Response
    {
<<<<<<< HEAD
        $user=$userRepository->findOneBy(['iduser' => 4]);    
=======
        $user=$userRepository->findOneBy(['id' => 4]);    
>>>>>>> 8a5127b73af85eafd808d9a7d90dbf04c8bb4518
    $event = new Event();
    $event->setIdUser($user);
    $form = $this->createForm(EventType::class,$event); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->persist($event); //T3awedh persist l'entité Reclamation fil entity manager.
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_event');
        }
    
        return $this->render('event/index.html.twig', [
            'form' => $form->createView()    ]);
}
#[Route('/event/afficher', name: 'app_afficherevent')]
public function affiche(EventRepository $rep ){
    $r = $rep->findAll();

    return $this->render('/event/affiche.html.twig', [
        'Events'=>$r 
    ]);
}
#[Route('/event/modifier/{id}', name: 'app_modifierevent')]
public function modifier(Request $req,$id, EventRepository $rep){
    $p =$rep->find($id); //n3ml instance 

    $form = $this->createForm(EventType::class,$p); //n3ml formulaire  b eventtyoe eli fiha champs ta3 entity
    $form->handleRequest($req); //traitement de requete  , 
    
        if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
            $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
            $em->flush(); //na3ml refresh f bd
            return $this->redirectToRoute('app_afficherevent');
        }
    
        return $this->render('/event/modifier.html.twig', [
            'form' => $form->createView() ,'event' => $rep->findAll()        ]);

}
#[Route('/event/supprimer/{id}', name: 'app_supprimerevent')]
    public function supprimer($id, EventRepository $rep){
        $p=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('app_afficherevent');
        

}
#[Route('/afficherfrontevent', name: 'app_affichereventfront')]
public function afficher(EventRepository $rep ){
    $r = $rep->findAll();

    return $this->render('/event/front/affiche.html.twig', [
        'Events'=>$r 
    ]);
}
}