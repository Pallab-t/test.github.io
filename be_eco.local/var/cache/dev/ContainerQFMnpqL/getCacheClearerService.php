<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_clearer' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\ChainCacheClearer.php';

return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
    yield 0 => ($this->services['cache.system_clearer'] ?? $this->load('getCache_SystemClearerService.php'));
    yield 1 => ($this->privates['contao.cache.clear_internal'] ?? $this->load('getContao_Cache_ClearInternalService.php'));
    yield 2 => ($this->privates['contao_manager.cache.clear_bundle'] ?? $this->load('getContaoManager_Cache_ClearBundleService.php'));
}, 3));
