<?php
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormationRepository;

class ChartController extends AbstractController
{
    #[Route('/statistiques1')]
public function statistiquesParCategorie(FormationRepository $formationRepository): Response
{
    // Récupérer le nombre de formations par catégorie
    $formationsParCategorie = $formationRepository->countFormationsByCategory();

    // Créer un tableau de données pour le graphique
    $data = [['Catégorie', 'Nombre de formations']];
    foreach ($formationsParCategorie as $categorie => $nombre) {
        $data[] = [$categorie, $nombre];
    }

    // Créer un objet PieChart
    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable($data);
    $pieChart->getOptions()->setTitle('Répartition des formations par catégorie');
    $pieChart->getOptions()->setHeight(400);
    $pieChart->getOptions()->setWidth(600);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#e7711c');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('Front/stats.html.twig', [
        'pieChart' => $pieChart,
    ]);
}
}
