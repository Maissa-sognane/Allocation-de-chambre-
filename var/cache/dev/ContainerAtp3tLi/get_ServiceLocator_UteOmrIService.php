<?php

namespace ContainerAtp3tLi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UteOmrIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uteOmrI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uteOmrI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ChambreController::MessageDelete' => ['privates', '.service_locator.84fFt1X', 'get_ServiceLocator_84fFt1XService', true],
            'App\\Controller\\ChambreController::create' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Controller\\ChambreController::delete' => ['privates', '.service_locator.84fFt1X', 'get_ServiceLocator_84fFt1XService', true],
            'App\\Controller\\ChambreController::index' => ['privates', '.service_locator.cw7jBpu', 'get_ServiceLocator_Cw7jBpuService', true],
            'App\\Controller\\ChambreController::update' => ['privates', '.service_locator.84fFt1X', 'get_ServiceLocator_84fFt1XService', true],
            'App\\Controller\\EtudiantController::create' => ['privates', '.service_locator.wk3udb8', 'get_ServiceLocator_Wk3udb8Service', true],
            'App\\Controller\\EtudiantController::delete' => ['privates', '.service_locator.PpDot2H', 'get_ServiceLocator_PpDot2HService', true],
            'App\\Controller\\EtudiantController::index' => ['privates', '.service_locator.unHTEds', 'get_ServiceLocator_UnHTEdsService', true],
            'App\\Controller\\EtudiantController::messageDelete' => ['privates', '.service_locator.PpDot2H', 'get_ServiceLocator_PpDot2HService', true],
            'App\\Controller\\EtudiantController::update' => ['privates', '.service_locator.cXGvmlo', 'get_ServiceLocator_CXGvmloService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ChambreController:MessageDelete' => ['privates', '.service_locator.84fFt1X', 'get_ServiceLocator_84fFt1XService', true],
            'App\\Controller\\ChambreController:create' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Controller\\ChambreController:delete' => ['privates', '.service_locator.84fFt1X', 'get_ServiceLocator_84fFt1XService', true],
            'App\\Controller\\ChambreController:index' => ['privates', '.service_locator.cw7jBpu', 'get_ServiceLocator_Cw7jBpuService', true],
            'App\\Controller\\ChambreController:update' => ['privates', '.service_locator.84fFt1X', 'get_ServiceLocator_84fFt1XService', true],
            'App\\Controller\\EtudiantController:create' => ['privates', '.service_locator.wk3udb8', 'get_ServiceLocator_Wk3udb8Service', true],
            'App\\Controller\\EtudiantController:delete' => ['privates', '.service_locator.PpDot2H', 'get_ServiceLocator_PpDot2HService', true],
            'App\\Controller\\EtudiantController:index' => ['privates', '.service_locator.unHTEds', 'get_ServiceLocator_UnHTEdsService', true],
            'App\\Controller\\EtudiantController:messageDelete' => ['privates', '.service_locator.PpDot2H', 'get_ServiceLocator_PpDot2HService', true],
            'App\\Controller\\EtudiantController:update' => ['privates', '.service_locator.cXGvmlo', 'get_ServiceLocator_CXGvmloService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ChambreController::MessageDelete' => '?',
            'App\\Controller\\ChambreController::create' => '?',
            'App\\Controller\\ChambreController::delete' => '?',
            'App\\Controller\\ChambreController::index' => '?',
            'App\\Controller\\ChambreController::update' => '?',
            'App\\Controller\\EtudiantController::create' => '?',
            'App\\Controller\\EtudiantController::delete' => '?',
            'App\\Controller\\EtudiantController::index' => '?',
            'App\\Controller\\EtudiantController::messageDelete' => '?',
            'App\\Controller\\EtudiantController::update' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ChambreController:MessageDelete' => '?',
            'App\\Controller\\ChambreController:create' => '?',
            'App\\Controller\\ChambreController:delete' => '?',
            'App\\Controller\\ChambreController:index' => '?',
            'App\\Controller\\ChambreController:update' => '?',
            'App\\Controller\\EtudiantController:create' => '?',
            'App\\Controller\\EtudiantController:delete' => '?',
            'App\\Controller\\EtudiantController:index' => '?',
            'App\\Controller\\EtudiantController:messageDelete' => '?',
            'App\\Controller\\EtudiantController:update' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
