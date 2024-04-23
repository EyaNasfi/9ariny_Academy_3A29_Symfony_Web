<?php

namespace ContainerQY2NfaX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1TVSYsrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1TVSYsr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1TVSYsr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'qq' => ['privates', 'App\\Repository\\QuestionsRepository', 'getQuestionsRepositoryService', true],
            're' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
            'rep' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
            'repp' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'qq' => 'App\\Repository\\QuestionsRepository',
            're' => 'App\\Repository\\ReponseRepository',
            'rep' => 'App\\Repository\\QuizRepository',
            'repp' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
