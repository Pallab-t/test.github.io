<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_http_cache.event_listener.log' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\http-cache\\src\\EventListener\\LogListener.php';

return $this->privates['fos_http_cache.event_listener.log'] = new \FOS\HttpCache\EventListener\LogListener(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
