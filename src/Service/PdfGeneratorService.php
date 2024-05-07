<?php
// src/Service/PdfGeneratorService.php

namespace App\Service;

use Dompdf\Dompdf;
use App\Entity\Remise;

class PdfGeneratorService
{
    private $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf();
    }

    public function generateRemisePdf(Remise $remise): string
    {
        $html = $this->renderRemiseHtml($remise);
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();

        return $this->dompdf->output();
    }

    private function renderRemiseHtml(Remise $remise): string
    {
        $imagePath = 'public/images/logo.png'; 

    $html = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remise Details</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            h1 {
                color: #333;
                font-size: 24px;
                margin-bottom: 20px;
            }

            p {
                margin-bottom: 10px;
            }

            .remise-details {
                margin-top: 30px;
                border-collapse: collapse;
                width: 100%;
            }

            .remise-details th,
            .remise-details td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .remise-details th {
                background-color: #f2f2f2;
                font-weight: bold;
            }

            .logo {
                max-width: 100px; /* Adjust size as needed */
            }
        </style>
    </head>
    <body>
        <h1>Remise Details</h1>

        <img src="{$imagePath}" alt="Logo" class="logo">

        <p><strong>Montant:</strong> Votre remise a été bien enregistré</p>

        <table class="remise-details">
            <thead>
                <tr>
                    <th>Montant</th>
                    <th>Pourcentage</th>
                    <th>montant  après pourcentage</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>{$remise->getMontant()}</td>
                    <td>{$remise->getPourcentage()}</td>
                    <td>{$remise->getMontantaprespourcentage()}</td>
                </tr>
                
            </tbody>
        </table>
    </body>
    </html>
    HTML;
        return $html;
    }
}
