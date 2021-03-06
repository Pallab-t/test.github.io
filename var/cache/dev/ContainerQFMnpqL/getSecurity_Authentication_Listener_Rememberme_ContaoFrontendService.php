<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.rememberme.contao_frontend' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\RememberMeListener.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

return $this->privates['security.authentication.listener.rememberme.contao_frontend'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.rememberme.services.simplehash.contao_frontend.two_factor_decorator'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_ContaoFrontend_TwoFactorDecoratorService.php')), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), true, ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
