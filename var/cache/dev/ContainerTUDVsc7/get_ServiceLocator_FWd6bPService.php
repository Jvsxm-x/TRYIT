<?php

namespace ContainerTUDVsc7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FWd6bPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FWd6b_P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FWd6b_P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'messagery' => ['privates', 'App\\Entity\\Messageries', 'getMessageriesService', true],
        ], [
            'messagery' => 'App\\Entity\\Messageries',
        ]);
    }
}
