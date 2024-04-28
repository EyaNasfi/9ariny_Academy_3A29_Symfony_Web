<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SurveyController extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/survey/{id}', name: 'show_survey')]
    public function showSurvey(?string $id = null): Response
{
    $accessToken = $this->getParameter('survey_monkey_access_token');

    try {
        $response = $this->httpClient->request('GET', "https://api.surveymonkey.com/v3/surveys/{$id}", [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception("Failed to retrieve the survey, status code: " . $response->getStatusCode());
        }

        $content = $response->getContent();
        $survey = json_decode($content, true);

        if (isset($survey['error'])) {
            throw new \Exception("Error from API: " . $survey['error']['message']);
        }

    } catch (\Exception $e) {
        return $this->render('error.html.twig', ['message' => $e->getMessage()]);
    }

    return $this->render('Front/surv.html.twig', ['survey' => $survey]);
}
}
