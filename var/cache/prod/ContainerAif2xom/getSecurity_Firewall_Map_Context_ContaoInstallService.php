<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.contao_install' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

return $this->privates['security.firewall.map.context.contao_install'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    return new \EmptyIterator();
}, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('contao_install', 'security.user_checker', '.security.request_matcher.2lQKaAK', false, false, '', '', '', '', '', [], NULL));