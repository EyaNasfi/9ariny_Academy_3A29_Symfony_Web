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
    public function handleWebhook(Request $request): Response
{
    $bot = new FbBotApp('ae93bf70961e882694d2b0bd863f8373');
    $data = json_decode($request->getContent(), true);

    $response = '';

    if (isset($data['entry'])) {
        foreach ($data['entry'] as $entry) {
            if (isset($entry['messaging'])) {
                foreach ($entry['messaging'] as $event) {
                    if (isset($event['sender']['id'], $event['message']['text'])) {
                        $senderId = $event['sender']['id'];
                        $messageText = $event['message']['text'];

                        // Process message and send response
                        $response = $this->processMessage($messageText);

                        $bot->send(new Message($senderId, $response));
                    }
                }
            }
        }
    }

    return $this->render('chatbot_test.html.twig', [
        'response' => $response,
    ]);
}

    private function processMessage($messageText): string
    {
        // Simple chatbot logic for Education domain
        switch (strtolower($messageText)) {
            case 'courses':
                return 'We offer a variety of courses to enhance your skills. You can check our course catalog for more information.';
            case 'certifications':
                return 'We provide certifications for various courses. Please visit our website for more details.';
            case 'admissions':
                return 'For admissions-related inquiries, please contact our admissions office.';
            case 'schedule':
                return 'You can find the schedule for upcoming classes on our website or by contacting us.';
            default:
                return 'I did not understand your message. Please try again or ask a specific question related to education.';
        }
    }
}
