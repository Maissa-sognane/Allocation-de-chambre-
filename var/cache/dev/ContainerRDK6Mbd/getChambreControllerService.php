<?php

namespace ContainerRDK6Mbd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChambreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ChambreController' shared autowired service.
     *
     * @return \App\Controller\ChambreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ChambreController.php';

        $container->services['App\\Controller\\ChambreController'] = $instance = new \App\Controller\ChambreController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ChambreController', $container));

        return $instance;
    }
}
