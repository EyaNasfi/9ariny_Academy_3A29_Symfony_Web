<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
    public function boot()
{
    parent::boot();

    // Charger un fichier d'autoload
    require_once $this->getProjectDir().'/vendor/autoload.php';

    // Autres opérations au démarrage de l'application
}

}
