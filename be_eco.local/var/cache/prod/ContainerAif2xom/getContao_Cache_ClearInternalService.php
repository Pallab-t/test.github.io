<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.cache.clear_internal' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Cache\\ContaoCacheClearer.php';

return $this->privates['contao.cache.clear_internal'] = new \Contao\CoreBundle\Cache\ContaoCacheClearer(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
