<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.security.entry_point' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Security\\Authentication\\AuthenticationEntryPoint.php';

return $this->privates['contao.security.entry_point'] = new \Contao\CoreBundle\Security\Authentication\AuthenticationEntryPoint(($this->services['router'] ?? $this->getRouterService()), ($this->services['uri_signer'] ?? ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')))), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['contao.routing.scope_matcher'] ?? $this->getContao_Routing_ScopeMatcherService()));