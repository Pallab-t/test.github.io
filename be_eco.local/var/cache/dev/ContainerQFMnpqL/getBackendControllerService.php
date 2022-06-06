<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\Controller\BackendController' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once \dirname(__DIR__, 4).'\\vendor\\terminal42\\service-annotation-bundle\\src\\ServiceAnnotationInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Controller\\AbstractController.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Controller\\BackendController.php';

$this->services['Contao\\CoreBundle\\Controller\\BackendController'] = $instance = new \Contao\CoreBundle\Controller\BackendController();

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'contao.framework' => ['services', 'contao.framework', 'getContao_FrameworkService', false],
    'contao.picker.builder' => ['services', 'contao.picker.builder', 'getContao_Picker_BuilderService.php', true],
    'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
    'fos_http_cache.http.symfony_response_tagger' => ['services', 'fos_http_cache.http.symfony_response_tagger', 'getFosHttpCache_Http_SymfonyResponseTaggerService', false],
    'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
    'router' => ['services', 'router', 'getRouterService', false],
    'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService.php', true],
    'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
    'session' => ['services', 'session', 'getSessionService', false],
    'twig' => ['services', 'twig', 'getTwigService', false],
    'uri_signer' => ['services', 'uri_signer', 'getUriSignerService', false],
], [
    'contao.framework' => '?',
    'contao.picker.builder' => '?',
    'doctrine' => '?',
    'fos_http_cache.http.symfony_response_tagger' => '?',
    'http_kernel' => '?',
    'parameter_bag' => '?',
    'request_stack' => '?',
    'router' => '?',
    'security.authorization_checker' => '?',
    'security.csrf.token_manager' => '?',
    'security.token_storage' => '?',
    'session' => '?',
    'twig' => '?',
    'uri_signer' => 'uri_signer',
]))->withContext('Contao\\CoreBundle\\Controller\\BackendController', $this));

return $instance;
