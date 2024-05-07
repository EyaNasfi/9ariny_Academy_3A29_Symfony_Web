<?php
// src/Controller/YourController.php
// src/Controller/YourController.php
namespace App\Controller;

use App\Service\YouTubeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class YourController extends AbstractController
{
    public function index(YouTubeService $youtubeService): Response
    {
        return $this->render('youtube.html.twig', [
            'youtubeService' => $youtubeService,
        ]);
    }
}

