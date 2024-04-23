<?php

namespace Container9Skv7bx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GeiNUdnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GeiNUdn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GeiNUdn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            're' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
            'rep' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            're' => 'App\\Repository\\ReponseRepository',
            'rep' => 'App\\Repository\\ReclamationRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}