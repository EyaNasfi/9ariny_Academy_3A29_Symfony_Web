<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Formation;
use App\Form\CoursType;
use App\Repository\CourFormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Laminas\Code\Generator\EnumGenerator\Name;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use BaconQrCode\Common\ErrorCorrectionLevel;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use BaconQrCode\Common\ContentType;
use BaconQrCode\Common\Mode;
use BaconQrCode\Common\MaskPattern;
use BaconQrCode\Common\ReedSolomonField;
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\Image\SvgRenderer;
use BaconQrCode\Writer;
use BaconQrCode\Encoder\Encoder;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\ImageRendererInterface;















class CoursFormationController extends AbstractController
{   #[Route('/', name: "home")]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
    #[Route('/AddCourFormation', name: 'AddCourFormation', methods: ['GET', 'POST'])]
    public function AddCourFormation(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle the file upload
            $file = $form['descriptionCours']->getData();
            // Check if a file was uploaded
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
    
                // Move the file to the desired directory
                $file->move(
                    $this->getParameter('description_cours_directory'), // Define this parameter in services.yaml
                    $fileName
                );
    
                // Set the file name to the entity
                $cour->setDescriptionCours($fileName);
            }
    
            // Set the idformation based on the selected Formation
          // Set the idformation based on the selected Formation
$selectedFormationId = $form->get('idformation')->getData();
$selectedFormation = $entityManager->getRepository(Formation::class)->find($selectedFormationId);

if (!$selectedFormation) {
    throw $this->createNotFoundException('Formation not found for id ' . $selectedFormationId);
}

$cour->setIdformation($selectedFormation); // Utilisez $selectedFormation au lieu de $selectedFormationId

    
            // Persist the CourFormation entity
            $entityManager->persist($cour);
            $entityManager->flush();
    
            // Redirect to home route
            return $this->redirectToRoute("home");
        }
    
        return $this->render('Front/AjouterCourFormation.html.twig', [
            'form' => $form->createView()
        ]);
    }
    #[Route('/download-pdf/{idcour}', name: 'download_pdf')]
    public function downloadPdfAction($idcour, CourFormationRepository $CourFormationRepository): Response
    {
        // Retrieve the CourFormation entity from the repository based on the provided ID
        $cour = $CourFormationRepository->find($idcour);
    
        // Check if the CourFormation entity exists
        if (!$cour) {
            throw $this->createNotFoundException('The course with id ' . $idcour . ' does not exist.');
        }
    
        // Get the file content (assuming it's stored as a BLOB in the database)
        $fileContent = $cour->getDescriptionCours();
    
        // Generate a temporary file path to store the PDF content
        $tempFilePath = tempnam(sys_get_temp_dir(), 'pdf');
    
        // Write the PDF content to the temporary file
        file_put_contents($tempFilePath, $fileContent);
    
        // Create a BinaryFileResponse to send the PDF file to the user
        $response = new BinaryFileResponse($tempFilePath);
    
        // Set the response headers to indicate that it's a PDF file and force download
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'downloaded_file.pdf' // Set the file name here
        );
    
        // Set the content type as application/pdf
        $response->headers->set('Content-Type', 'application/pdf');
    
        // Delete the temporary file after the response is sent
        $response->deleteFileAfterSend(true);
    
        return $response;
    }
    #[Route('/deletec/{idcour}', name: 'deletec')]
    public function delete($idcour, ManagerRegistry $manager, CourFormationRepository $repo, Request $request): Response
    { 
        $em = $manager->getManager();
        
        // Utilize the identifier passed in the URL to find the category to delete
        $cours = $repo->findOneBy(['idcour' => $idcour]);
        
        // Check if the category exists
        if (!$cours) {
            // Handle the case where the category is not found
            return new Response('cours not found', Response::HTTP_NOT_FOUND);
        }
    
        // Remove the category from the database
        $em->remove($cours);
        $em->flush();
        
        return $this->redirectToRoute('list_Cours');
    }
    #[Route('/editc/{idcour}', name: 'editc', methods: ['GET', 'POST'])]
    public function editCoursAction($idcour, Request $request, EntityManagerInterface $entityManager, CourFormationRepository $repo): Response
    {
        // Find the course entity by its ID
        $cours = $repo->findOneBy(['idcour' => $idcour]);
    
        // Check if the course exists
        if (!$cours) {
            // Handle the case where the course is not found
            throw $this->createNotFoundException('The course with id ' . $idcour . ' does not exist.');
        }
    
        // Create the form using the CourFormationType form type
        $form = $this->createForm(CoursType::class, $cours);
    
        // Handle the form submission
        $form->handleRequest($request);
    
        // Check if the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the changes to the database
            $entityManager->flush();
    
            // Redirect to the list of courses
            return $this->redirectToRoute('list_Cours');
        }
    
        // Render the edit form template with the form and course entity
        return $this->render('Front/editCourFormation.html.twig', [
            'form' => $form->createView(),
            'cours' => $cours,
        ]);
    }
    #[Route('/afficheCours', name: 'list_Cours')]
    public function AffichageCours(CourFormationRepository $repCours)
    {
        return $this->render("Front/Courss.html.twig", ["Cours" => $repCours->findAll()]);
    }
    #[Route('/afficheCoursFront', name: 'afficheCoursFront')]
    public function AffichageCoursFront(CourFormationRepository $repCours)
    {
        return $this->render("Front/CoursFront.html.twig", ["Cours" => $repCours->findAll()]);
    }

    #[Route('/scan-qr-code', name: 'scan_qr_code')]
public function scanQrCodeAction(Request $request, CourFormationRepository $repo): Response
{
    // Récupérer l'ID du cours à partir du QR code
    $qrCodeId = $request->query->get('Nom_Cours');

    // Vérifier si le cours existe
    $cours = $repo->findOneBy(['Nom_Cours' => $qrCodeId]);
    if (!$cours) {
        throw $this->createNotFoundException('Le cours avec l\'ID ' . $qrCodeId . ' n\'existe pas.');
    }

    // Récupérer le nom du cours
    $nomCours = $cours->getNomCours();

    // Générer l'URL de recherche sur Google avec le nom du cours
    $searchUrl = 'https://www.google.com/search?q=' . urlencode($nomCours);

    // Rediriger l'utilisateur vers l'URL de recherche
    return $this->redirect($searchUrl);
}


}
