<?php

namespace Container5lu7T45;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.UiigTST.Symfony\Component\Security\Core\User\UserInterface' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.UiigTST": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. You should maybe alias this interface to one of these existing services: "App\\Entity\\Adherants", "App\\Entity\\Administrators", "App\\Entity\\Coachs", "App\\Entity\\Users".');
    }
}
