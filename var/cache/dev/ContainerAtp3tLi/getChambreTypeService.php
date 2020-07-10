<?php

namespace ContainerAtp3tLi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChambreTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ChambreType' shared autowired service.
     *
     * @return \App\Form\ChambreType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ChambreType.php';

        return $container->privates['App\\Form\\ChambreType'] = new \App\Form\ChambreType();
    }
}
