<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.menu_provider.lazy' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Provider\\LazyProvider.php';

return $this->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['be_menu' => [0 => function () {
    return ($this->services['contao.menu.backend_menu_builder'] ?? $this->load('getContao_Menu_BackendMenuBuilderService.php'));
}, 1 => 'buildMainMenu'], 'be_header_menu' => [0 => function () {
    return ($this->services['contao.menu.backend_menu_builder'] ?? $this->load('getContao_Menu_BackendMenuBuilderService.php'));
}, 1 => 'buildHeaderMenu']]);
