<?php
// src/Controller/ChatbotController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use pimax\FbBotApp;
use pimax\Messages\Message;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    #[Route('/webhook', name: 'webhook', methods: ['GET', 'POST'])]
    public function index2(): Response
    {
        return $this->render('chatbot_test.html.twig');
    }
}
