<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.error_listener' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\EventListener\\ErrorListener.php';

$a = new \Symfony\Bridge\Monolog\Logger('console');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushProcessor(($this->privates['contao.monolog.processor'] ?? $this->getContao_Monolog_ProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
$a->pushHandler(($this->privates['contao.monolog.handler'] ?? $this->getContao_Monolog_HandlerService()));
\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);