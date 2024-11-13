<?php

namespace Container5lu7T45;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JaMNJjhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jaMNJjh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jaMNJjh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userCoachRepo' => ['privates', 'App\\Repository\\UserCoachRepository', 'getUserCoachRepositoryService', true],
        ], [
            'userCoachRepo' => 'App\\Repository\\UserCoachRepository',
        ]);
    }
}
