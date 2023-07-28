<?php

namespace ContainerELZ3IMd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KNAnNqlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KNAnNql' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KNAnNql'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'car' => ['privates', '.errored..service_locator.KNAnNql.App\\Entity\\Car', NULL, 'Cannot autowire service ".service_locator.KNAnNql": it needs an instance of "App\\Entity\\Car" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'car' => 'App\\Entity\\Car',
            'entityManager' => '?',
        ]);
    }
}
