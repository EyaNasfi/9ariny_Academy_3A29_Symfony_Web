<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\SalleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/salle')]
class SalleController extends AbstractController
{   
    #[Route('/front', name: 'app_salle_front', methods: ['GET'])]
    public function front(Request $request, SalleRepository $salleRepository): Response
    {
        $searchTerm = trim($request->query->get('search', ''));
        $salles = $searchTerm ? $salleRepository->findByMatiere($searchTerm) : $salleRepository->findAll();

        return $this->render('salle/back/affiche.html.twig', [
            'salles' => $salles,
            'searchTerm' => $searchTerm,
        ]);
    }
    #[Route('/', name: 'app_salle_index', methods: ['GET'])]
    public function index(Request $request, SalleRepository $salleRepository): Response
    {
        $searchTerm = trim($request->query->get('search', ''));
        $salles = $searchTerm ? $salleRepository->findByMatiere($searchTerm) : $salleRepository->findAll();

        return $this->render('salle/index.html.twig', [
            'salles' => $salles,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/new', name: 'app_salle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $salle = new Salle();
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($salle);
            $entityManager->flush();

            flash()->addSuccess("Salle Ajouter");
            return $this->redirectToRoute('app_salle_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('salle/new.html.twig', [
            'salle' => $salle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salle_show', methods: ['GET'])]
    public function show(SalleRepository $rep ,$id): Response
    {            $p=$rep->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($p);
            $em->flush();
            return $this->redirectToRoute('app_salle_front');
    }

    #[Route('/{id}/edit', name: 'app_salle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $req, $id, SalleRepository $rep): Response
    {
            $p = $rep->find($id); //n3ml instance 
        
            $form = $this->createForm(SalleType::class,$p); //n3ml formulaire  b reclamationtyoe eli fiha champs ta3 entity
            $form->handleRequest($req); //traitement de requete  , 
            
                if ($form->isSubmitted() && $form->isValid()) { //kn form valide 
                    $em = $this->getDoctrine()->getManager(); //nakhedh entity manager eli ta3ml persist l'entite f bd
                    $em->flush(); //na3ml refresh f bd
                    
                    flash()->addSuccess("Salle Modifié");
                
                    return $this->redirectToRoute('app_salle_front', [], Response::HTTP_SEE_OTHER);}
            
             

        return $this->renderForm('salle/edit.html.twig', [
            'salle' => $rep->findAll(),
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salle_delete', methods: ['POST'])]
    public function delete(Request $request, Salle $salle, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salle->getId(), $request->request->get('_token'))) {
            $entityManager->remove($salle);
            $entityManager->flush();
            flash()->addSuccess("Salle deleted");
        }

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }
}
