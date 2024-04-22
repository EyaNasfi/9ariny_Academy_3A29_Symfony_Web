<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;



class FormationController extends AbstractController
{   #[Route('/', name: "home")]
    public function index2(): Response
    {
        return $this->render('Front/home.html.twig');
    }
    #[Route('/Front', name: "Front")]
    public function index(): Response
    {
        $formations = $this->getDoctrine()->getRepository(Formation::class)->findAll();
    
        return $this->render('Front/courses.html.twig', [
            'formations' => $formations,
        ]);
    }
    




    #[Route('/AddFormation', name: 'AddFormation', methods: ['GET', 'POST'])]

    public function AddFormation(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($formation); 
            $entityManager->flush();  
            return $this->redirectToRoute("list_Formation");
        }

        return $this->render('Front/AjouterFormation.html.twig', [
            'form' => $form->createView()
        ]);    }
        #[Route('/Formation', name: 'list_Formation')]
        public function AffichageFormation(FormationRepository $repFormation)
        {
            return $this->render("Front/backtemplate.html.twig", ["Formation" => $repFormation->findAll()]);
        }
        #[Route('/deletef/{idDeFormation}', name: 'deletef')]
    public function delete($idDeFormation, ManagerRegistry $manger, FormationRepository $repo, Request $req)
    {
        $em = $manger->getManager();
        $formation = $repo->find($idDeFormation);
        $em->remove($formation);
        $em->flush();
        return $this->render("Front/backtemplate.html.twig", ["Formation" => $repo->findAll()]);
    }

    #[Route('/editf/{idDeFormation}', name: 'editf')]
    public function editAuthorAction($idDeFormation, ManagerRegistry $manager, Request $request, FormationRepository $repo)
    {
        $em = $manager->getManager();
        $formation = $repo->find($idDeFormation);
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->flush();
            return $this->redirectToRoute('list_Formation');
        }
        return $this->render('Front/EditFormation.html.twig', [
            'form' => $form->createView(), 'formation' => $formation,
        ]);
    }


}
 