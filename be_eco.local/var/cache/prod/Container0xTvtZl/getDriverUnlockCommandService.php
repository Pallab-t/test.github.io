<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Lexik\Bundle\MaintenanceBundle\Command\DriverUnlockCommand' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\lexik\\maintenance-bundle\\Command\\DriverUnlockCommand.php';

return $this->services['console.command.public_alias.Lexik\\Bundle\\MaintenanceBundle\\Command\\DriverUnlockCommand'] = new \Lexik\Bundle\MaintenanceBundle\Command\DriverUnlockCommand();
