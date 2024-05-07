<?php
namespace App\Controller;

use App\Entity\Remise;
use App\Form\RemiseType;
use App\Repository\RemiseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PdfGeneratorService;
#[Route('/remise')]
class RemiseController extends AbstractController
{
    #[Route('/', name: 'app_remise_index', methods: ['GET'])]
    public function index(RemiseRepository $remiseRepository): Response
    {
        
        $remises = $remiseRepository->findAll();

        return $this->render('remise/index.html.twig', [
            'remises' => $remises,
        ]);
    }

    #[Route('/remise/new', name: 'remise_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PdfGeneratorService $pdfGenerator): Response
    {
        $remise = new Remise();
        $form = $this->createForm(RemiseType::class, $remise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($remise);
            $entityManager->flush();

            // Generate and download PDF
            $pdfContent = $pdfGenerator->generateRemisePdf($remise);

            return new Response(
                $pdfContent,
                200,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'attachment; filename="remise_details.pdf"',
                ]
            );
        }

        return $this->render('remise/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/remise/{id}', name: 'app_remise_show', methods: ['GET'])]
    public function show($id, RemiseRepository $remiseRepository): Response
    {
        $remise = $remiseRepository->find($id);
    
        if (!$remise) {
            throw $this->createNotFoundException('Remise not found');
        }
    
        return $this->render('remise/show.html.twig', [
            'remise' => $remise,
        ]);
    }
     

    #[Route('/remise/{id}/edit', name: 'app_remise_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, $id, RemiseRepository $remiseRepository, EntityManagerInterface $entityManager): Response
{
    $remise = $remiseRepository->find($id);

    if (!$remise) {
        throw $this->createNotFoundException('Remise not found');
    }

    $form = $this->createForm(RemiseType::class, $remise);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_remise_index');
    }

    return $this->render('remise/edit.html.twig', [
        'form' => $form->createView(),
        'remise' => $remise, 
    ]);
}


    #[Route('/{id}', name: 'app_remise_delete', methods: ['POST'])]
    public function delete(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $remise = $entityManager->getRepository(Remise::class)->find($id);

        if (!$remise) {
            throw $this->createNotFoundException('Remise not found');
        }

        $entityManager->remove($remise);
        $entityManager->flush();

        return $this->redirectToRoute('app_remise_index');
    }
}
