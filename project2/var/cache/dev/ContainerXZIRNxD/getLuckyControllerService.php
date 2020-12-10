<?php

namespace ContainerXZIRNxD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLuckyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LuckyController' shared autowired service.
     *
     * @return \App\Controller\LuckyController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LuckyController'] = $instance = new \App\Controller\LuckyController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'session' => ['services', 'session', 'getSessionService', true],
            'twig' => ['services', 'twig', 'getTwigService', true],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.csrf.token_manager' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\LuckyController', $container));

        return $instance;
    }
}