<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.switch_user' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\EventListener\\SwitchUserListener.php';

return $this->privates['contao.listener.switch_user'] = new \Contao\CoreBundle\EventListener\SwitchUserListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
