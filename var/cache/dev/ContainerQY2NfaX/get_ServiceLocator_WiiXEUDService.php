<?php

namespace ContainerQY2NfaX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WiiXEUDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WiiXEUD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WiiXEUD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rep' => ['privates', 'App\\Repository\\ClubRepository', 'getClubRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\ClubRepository',
        ]);
    }
}
