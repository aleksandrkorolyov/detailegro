<?php

namespace ContainerELZ3IMd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zh6TZt9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zh6TZt9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zh6TZt9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'carPart' => ['privates', '.errored..service_locator.zh6TZt9.App\\Entity\\CarPart', NULL, 'Cannot autowire service ".service_locator.zh6TZt9": it needs an instance of "App\\Entity\\CarPart" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'carPart' => 'App\\Entity\\CarPart',
            'entityManager' => '?',
        ]);
    }
}
