<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.resource_locator' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';

return $this->services['contao.resource_locator'] = new \Symfony\Component\Config\FileLocator($this->parameters['contao.resources_paths']);
