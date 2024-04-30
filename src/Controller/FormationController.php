<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Rating;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Countable;
use Symfony\Component\HttpFoundation\JsonResponse;



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

    #[Route('/searchByNomFormation', name: 'searchByNomFormation')]
    public function searchByNomFormation(Request $request, FormationRepository $formationRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $formations = $formationRepository->createQueryBuilder('f')
            ->where('f.nomDeFormation LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();
    
        return $this->render('Front/backtemplate.html.twig', [
            'Formation' => $formations,
            'tri' => null, // Add the 'tri' variable to the context with a default value
        ]);
    }
    
    
    #[Route('/triFormation/{critere}', name: 'triFormation')]

public function triFormation(FormationRepository $formationRepository, $critere): Response
{
    $queryBuilder = $formationRepository->createQueryBuilder('f');

    if ($critere === 'nom') {
        $queryBuilder->orderBy('f.nomDeFormation', 'ASC');
    } elseif ($critere === 'dateDeb') {
        $queryBuilder->orderBy('f.dateDeb', 'ASC');
    }

    $formations = $queryBuilder->getQuery()->getResult();

    return $this->render('Front/backtemplate.html.twig', [
        'Formation' => $formations,
        'tri' => $critere, // Passer la variable 'tri' au template
    ]);
}
#[Route('/statistiques', name: 'statistiques')]
public function statistiques(FormationRepository $formationRepository, SerializerInterface $serializer): Response
{
    // Récupérer le nombre de formations par catégorie
    $formationsParCategorie = $formationRepository->countFormationsByCategory();

    // Convertir les données en format adapté pour Chart.js
    $categories = [];
    $nombreFormations = [];
    foreach ($formationsParCategorie as $categorie) {
        $categories[] = $categorie['categorie']; // Access the category name
        $nombreFormations[] = $categorie['nombre']; // Access the count of formations
    }

    // Convertir les données en format JSON pour l'utilisation dans le template
    $data = [
        'nomsFormations' => $categories,
        'nombreFormations' => $nombreFormations,
    ];
    $jsonData = $serializer->serialize($data, 'json');

    // Afficher le template avec les données JSON
    return $this->render('Front/stats.html.twig', [
        'jsonData' => $jsonData,
    ]);
}
#[Route('/Frontt', name: "Frontt")]
public function indexx(FormationRepository $formationRepository): Response
{
    $formations = $formationRepository->findAll();
    $totalFormations = count($formations);
    $totalCost = array_reduce($formations, function ($acc, $formation) {
        return $acc + (int)$formation->getcout();
    }, 0);

    return $this->render('Front/stats.html.twig', [
        'formations' => $formations,
        'totalFormations' => $totalFormations,
        'totalCost' => $totalCost,
    ]);
}



}











    
    

 