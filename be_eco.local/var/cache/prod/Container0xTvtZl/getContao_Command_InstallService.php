<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.command.install' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Command\\InstallCommand.php';

return $this->services['contao.command.install'] = new \Contao\CoreBundle\Command\InstallCommand(\dirname(__DIR__, 4), 'files', (\dirname(__DIR__, 4).'/assets/images'));
