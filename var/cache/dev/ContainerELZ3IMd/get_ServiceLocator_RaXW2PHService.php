<?php

namespace ContainerELZ3IMd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RaXW2PHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.raXW2PH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.raXW2PH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'carPartRepository' => ['privates', 'App\\Repository\\CarPartRepository', 'getCarPartRepositoryService', true],
        ], [
            'carPartRepository' => 'App\\Repository\\CarPartRepository',
        ]);
    }
}