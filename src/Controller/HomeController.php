<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Snappy\Pdf;
use App\Entity\Quiz;
use App\Form\InscriptionType;
use App\Repository\QuizRepository;
use App\Repository\ReponseRepository;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;
use App\Form\ChangePasswordType;
use App\Form\UserAdminType;
use App\Form\UserType;
use App\Form\UserWithoutPasswordType;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Mime\MimeTypes;
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
        $user = $this->getUser();
        $q = $rep->findAll();
        $score = $request->query->get('score');
        return $this->render('certif.html.twig', [
            'controller_name' => 'HomeController',
            'quizs'=>$q,'score' => $score,
            'usern'=>$user]
        );
        
    }
    #[Route('/certif/pdf', name: 'app_certif_pdf')]
public function certifPdf(QuizRepository $rep, Request $request): Response
{
    $user = $this->getUser();

    // Récupérer les données nécessaires
    $q = $rep->findAll();
    $score = $request->query->get('score');

    // Créer une instance de Dompdf
    $dompdf = new Dompdf();

    // Générer le PDF à partir d'un HTML minimal
    $html = '<html><body>' . $this->renderView('certif.html.twig', [
        'quizs' => $q,
        'score' => $score,
        'usern' =>$user
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
        $user = $this->getUser();

        return $this->render('/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf', [
            'controller_name' => 'pdfController',            'usern'=>$user]

        );
        
    }
    #[Route('/backhome', name: 'app_backhome')]
        public function showUsersAdmin(UserRepository $userRepository): Response
        {
            // Fetch user data from the repository
            $users = $userRepository->findAll();
    
            // Prepare data for the pie chart
            $data = [];
            $statuses = [];
    
            // Count the number of users for each status
            foreach ($users as $user) {
                $status = $user->getStatus(); // Assuming 'status' is a property of the User entity
                if (!isset($statuses[$status])) {
                    $statuses[$status] = 1;
                } else {
                    $statuses[$status]++;
                }
            }
    
            // Convert the status count into chart data format
            foreach ($statuses as $status => $count) {
                $data[] = [$status, $count];
            }
    
            // Create a new PieChart instance
            $pieChart = new PieChart();
    
            // Set chart data
            $pieChart->getData()->setArrayToDataTable([
                ['Status', 'Number of Users'],
                ...$data
            ]);
    
            // Set chart options
            $pieChart->getOptions()->setTitle('User Status Distribution');
            $pieChart->getOptions()->setHeight(500);
            $pieChart->getOptions()->setWidth(900);
            $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
            $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
            $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
            $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
            $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
    
            // Render the chart template with the chart data
            return $this->render('backhome.html.twig', [
                'users' => $users,
                'piechart' => $pieChart
            ]);
    }
    #[Route('/homec', name: 'app_homec')]
    public function homec(): Response
    {
        return $this->render('homec.html.twig', [
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
