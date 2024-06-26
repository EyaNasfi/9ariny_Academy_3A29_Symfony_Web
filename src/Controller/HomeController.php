<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Snappy\Pdf;
use App\Entity\Quiz;
use App\Entity\User;
use App\Form\UserType;
use App\Form\InscriptionType;
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[Route('/home', name: 'app_home')]
    public function home(ReponseRepository $rep,ReclamationRepository $r): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController','Reponses'=>$rep->findAll(),'Reclamations'=>$r->findAll()
        ]);
    }
        #[Route('/certif', name: 'app_certif')]
    public function certif(QuizRepository $rep,Request $request): Response
    {
        $q = $rep->findAll();
        $score = $request->query->get('score');
        return $this->render('certif.html.twig', [
            'controller_name' => 'HomeController',
            'quizs'=>$q,'score' => $score,]
        );
        
    }
    #[Route('/certif/pdf', name: 'app_certif_pdf')]
public function certifPdf(QuizRepository $rep, Request $request): Response
{
    // Récupérer les données nécessaires
    $q = $rep->findAll();
    $score = $request->query->get('score');

    // Créer une instance de Dompdf
    $dompdf = new Dompdf();

    // Générer le PDF à partir d'un HTML minimal
    $html = '<html><body>' . $this->renderView('certif.html.twig', [
        'quizs' => $q,
        'score' => $score,
    ]) . '</body></html>';
        $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Retourner le PDF en tant que réponse
    $response = new Response($dompdf->output());
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', 'inline; filename="certificat.pdf"');

    return $response;
}
    #[Route('/pdf', name: 'app_pdf')]
    public function pdf(): Response
    {
        return $this->render('/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf', [
            'controller_name' => 'pdfController',
        ]);
        
    }
    #[Route('/backhome', name: 'app_backhome')]
    public function backhome(): Response
    {
        return $this->render('backhome.html.twig', [
        ]);
    }
    #[Route('/map', name: 'app_map')]
    public function map(): Response
    {
        return $this->render('map.html.twig', [
            'controller_name' => 'MapController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig', [
            'controller_name' => 'contactController',
        ]);
    }
    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('team.html.twig', [
            'controller_name' => 'teamController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about.html.twig', [
            'controller_name' => 'aboutController',
        ]);
    }
   
}
