<?php

namespace ContainerAtp3tLi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wk3udb8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wk3udb8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wk3udb8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'etudiantRepository' => ['privates', 'App\\Repository\\EtudiantRepository', 'getEtudiantRepositoryService', true],
        ], [
            'em' => '?',
            'etudiantRepository' => 'App\\Repository\\EtudiantRepository',
        ]);
    }
}
