<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Contao\CoreBundle\Command\CronCommand' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Command\\CronCommand.php';

return $this->services['console.command.public_alias.Contao\\CoreBundle\\Command\\CronCommand'] = new \Contao\CoreBundle\Command\CronCommand(($this->services['Contao\\CoreBundle\\Cron\\Cron'] ?? $this->load('getCronService.php')));
