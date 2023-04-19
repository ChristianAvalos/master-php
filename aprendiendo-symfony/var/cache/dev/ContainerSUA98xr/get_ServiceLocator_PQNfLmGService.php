<?php

namespace ContainerSUA98xr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PQNfLmGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pQNfLmG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pQNfLmG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AnimalController::animal' => ['privates', '.service_locator.F1mZyAg', 'get_ServiceLocator_F1mZyAgService', true],
            'App\\Controller\\AnimalController::crearAnimal' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AnimalController::delete' => ['privates', '.service_locator.F1mZyAg', 'get_ServiceLocator_F1mZyAgService', true],
            'App\\Controller\\AnimalController::index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AnimalController::save' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AnimalController::update' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AnimalController:animal' => ['privates', '.service_locator.F1mZyAg', 'get_ServiceLocator_F1mZyAgService', true],
            'App\\Controller\\AnimalController:crearAnimal' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AnimalController:delete' => ['privates', '.service_locator.F1mZyAg', 'get_ServiceLocator_F1mZyAgService', true],
            'App\\Controller\\AnimalController:index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AnimalController:save' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AnimalController:update' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AnimalController::animal' => '?',
            'App\\Controller\\AnimalController::crearAnimal' => '?',
            'App\\Controller\\AnimalController::delete' => '?',
            'App\\Controller\\AnimalController::index' => '?',
            'App\\Controller\\AnimalController::save' => '?',
            'App\\Controller\\AnimalController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AnimalController:animal' => '?',
            'App\\Controller\\AnimalController:crearAnimal' => '?',
            'App\\Controller\\AnimalController:delete' => '?',
            'App\\Controller\\AnimalController:index' => '?',
            'App\\Controller\\AnimalController:save' => '?',
            'App\\Controller\\AnimalController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}