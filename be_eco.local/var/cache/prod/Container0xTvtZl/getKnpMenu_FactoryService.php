<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'knp_menu.factory' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\FactoryInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\MenuFactory.php';
include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Factory\\ExtensionInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Integration\\Symfony\\RoutingExtension.php';

$this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

$instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(($this->services['router'] ?? $this->getRouterService())), 0);

return $instance;
