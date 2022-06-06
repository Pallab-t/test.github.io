<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger.security' shared service.

$this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

$instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$instance->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
$instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
$instance->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));
\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

return $instance;
