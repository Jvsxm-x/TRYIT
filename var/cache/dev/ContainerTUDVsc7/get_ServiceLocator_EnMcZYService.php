<?php

namespace ContainerTUDVsc7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EnMcZYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.en_mcZY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.en_mcZY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'machine' => ['privates', 'App\\Entity\\Machines', 'getMachinesService', true],
        ], [
            'machine' => 'App\\Entity\\Machines',
        ]);
    }
}
