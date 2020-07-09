<?php

namespace ContainerRDK6Mbd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CXGvmloService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cXGvmlo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cXGvmlo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'etudiant' => ['privates', '.errored..service_locator.cXGvmlo.App\\Entity\\Etudiant', NULL, 'Cannot autowire service ".service_locator.cXGvmlo": it references class "App\\Entity\\Etudiant" but no such service exists.'],
            'etudiantRepository' => ['privates', 'App\\Repository\\EtudiantRepository', 'getEtudiantRepositoryService', true],
        ], [
            'em' => '?',
            'etudiant' => 'App\\Entity\\Etudiant',
            'etudiantRepository' => 'App\\Repository\\EtudiantRepository',
        ]);
    }
}
