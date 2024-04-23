<?php

namespace ContainerQY2NfaX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ujb9U5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ujb9U_5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ujb9U_5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'rep' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
        ], [
            'em' => '?',
            'rep' => 'App\\Repository\\QuizRepository',
        ]);
    }
}
