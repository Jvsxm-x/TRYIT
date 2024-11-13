<?php

namespace Container5lu7T45;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I60bMqkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i60bMqk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i60bMqk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'category' => ['privates', 'App\\Entity\\Categories', 'getCategoriesService', true],
        ], [
            'category' => 'App\\Entity\\Categories',
        ]);
    }
}
