<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_http_cache.command.invalidate_regex' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Command\\BaseInvalidateCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\http-cache-bundle\\src\\Command\\InvalidateRegexCommand.php';

$this->privates['fos_http_cache.command.invalidate_regex'] = $instance = new \FOS\HttpCacheBundle\Command\InvalidateRegexCommand(($this->services['fos_http_cache.cache_manager'] ?? $this->getFosHttpCache_CacheManagerService()));

$instance->setName('fos:httpcache:invalidate:regex');

return $instance;
