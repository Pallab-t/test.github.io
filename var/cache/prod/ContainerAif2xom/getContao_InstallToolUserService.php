<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.install_tool_user' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\InstallToolUser.php';

return $this->services['contao.install_tool_user'] = new \Contao\InstallationBundle\InstallToolUser(($this->services['session'] ?? $this->getSessionService()));