<?php

namespace Container5lu7T45;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZaIClc4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZaIClc4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZaIClc4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'adherant' => ['privates', 'App\\Entity\\Adherants', 'getAdherantsService', true],
        ], [
            'adherant' => 'App\\Entity\\Adherants',
        ]);
    }
}
