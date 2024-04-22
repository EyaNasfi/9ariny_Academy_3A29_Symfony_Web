<?php

namespace ContainerImuhCiR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E8pcLVkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E8pcLVk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E8pcLVk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\FormationRepository',
        ]);
    }
}
