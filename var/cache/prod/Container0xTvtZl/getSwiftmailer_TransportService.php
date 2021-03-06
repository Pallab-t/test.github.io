<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.transport' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\swiftmailer-bundle\\DependencyInjection\\SwiftmailerTransportFactory.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventDispatcher.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SimpleEventDispatcher.php';

return $this->services['swiftmailer.transport'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp', 'url' => $this->getEnv('MAILER_URL'), 'username' => NULL, 'password' => NULL, 'host' => 'localhost', 'port' => NULL, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => NULL, 'command' => '/usr/sbin/sendmail -bs'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Swift_Events_SimpleEventDispatcher());
