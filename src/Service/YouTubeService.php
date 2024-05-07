<?php
namespace App\Service;

use GuzzleHttp\Client;

class YouTubeService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.googleapis.com/youtube/v3/',
        ]);
    }

    public function searchVideos(string $query, string $apiKey)
    {
        $response = $this->client->get('search', [
            'query' => [
                'part' => 'snippet',
                'q' => $query,
                'type' => 'video',
                'key' => $apiKey,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}