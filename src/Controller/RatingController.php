<?php
// src/Controller/RatingController.php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\Formation;
use Google\Service\Adsense\Alert;
use Google\Service\CloudNaturalLanguage\Document;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class RatingController extends AbstractController
{
  
#[Route('/rate', name: 'rate_formation', methods: ['GET', 'POST'])]
public function addRating(Request $request): Response
{
    $data = json_decode($request->getContent(), true);

    if (isset($data['formation_id']) && isset($data['rating'])) {
        $entityManager = $this->getDoctrine()->getManager();

        // Récupérer la formation correspondant à l'ID
        $formation = $entityManager->getRepository(Formation::class)->find($data['formation_id']);
        if ($formation) {
            // Créer une nouvelle instance de Rating
            $rating = new Rating();
            $rating->setFormation($formation);
            $rating->setRating($data['rating']);

            // Enregistrer le rating dans la base de données
            $entityManager->persist($rating);
            $entityManager->flush();

            return new JsonResponse(['message' => 'Rating added successfully'], Response::HTTP_CREATED);
        } else {
            return new JsonResponse(['message' => 'Formation not found'], Response::HTTP_NOT_FOUND);
        }
    } else {
        return new JsonResponse(['message' => 'Invalid data'], Response::HTTP_BAD_REQUEST);
    }
} 

}
