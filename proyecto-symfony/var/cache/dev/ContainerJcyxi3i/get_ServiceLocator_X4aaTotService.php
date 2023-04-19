<?php

namespace ContainerJcyxi3i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X4aaTotService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X4aaTot' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X4aaTot'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'task' => ['privates', '.errored..service_locator.X4aaTot.App\\Entity\\Task', NULL, 'Cannot autowire service ".service_locator.X4aaTot": it references class "App\\Entity\\Task" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.X4aaTot.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.X4aaTot": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'doctrine' => '?',
            'task' => 'App\\Entity\\Task',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
