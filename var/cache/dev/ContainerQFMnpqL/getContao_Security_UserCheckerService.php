<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.security.user_checker' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Security\\User\\UserChecker.php';

return $this->privates['contao.security.user_checker'] = new \Contao\CoreBundle\Security\User\UserChecker(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
