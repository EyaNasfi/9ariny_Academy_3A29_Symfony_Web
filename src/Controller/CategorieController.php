<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Laminas\Code\Generator\EnumGenerator\Name;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class CategorieController extends AbstractController
{   
    #[Route('/AddCategorie', name: 'AddCategorie', methods: ['GET', 'POST'])]

    public function AddCategorie(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($categorie); 
            $entityManager->flush();  
            return $this->redirectToRoute("AddCategorie");
        }

        return $this->render('Front/AjouterCategorie.html.twig', [
            'form' => $form->createView()
        ]);    }

        #[Route('/Categorie', name: 'list_Categorie')]
        public function AffichageCategorie(CategorieRepository $repCategorie)
        {
            return $this->render("Front/TabCategorie.html.twig", ["Categorie" => $repCategorie->findAll()]);
        }
        #[Route('/delete/{nomCategorie?}', name: 'delete')]
        public function delete($nomCategorie, ManagerRegistry $manger, CategorieRepository $repo, Request $req)
        {
            $em = $manger->getManager();
            $categorie = $repo->findOneBy(['nomCategorie' => $nomCategorie]);
        
            if (!$categorie) {
                throw $this->createNotFoundException('Category not found');
            }
        
            $em->remove($categorie);
            $em->flush();
        
            return $this->redirectToRoute("list_Categorie");
        }
        
        #[Route('/edit/{nomCategorie?}', name: 'editC')]
        public function editAuthorAction($nomCategorie, ManagerRegistry $manager, Request $request, CategorieRepository $repo)
        {
            $em = $manager->getManager();
            $categorie = $repo->findOneBy(['nomCategorie' => $nomCategorie]);
            $form = $this->createForm(CategorieType::class, $categorie);
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                $em->flush();
                return $this->redirectToRoute('list_Categorie');
            }
            return $this->render('Front/editCategorie.html.twig', [
                'form' => $form->createView(), 'categorie' => $categorie,
            ]);
        }
        

}
 