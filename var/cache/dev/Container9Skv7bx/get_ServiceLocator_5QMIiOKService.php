<?php

namespace Container9Skv7bx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5QMIiOKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5QMIiOK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5QMIiOK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rep' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\EventRepository',
        ]);
    }
}
