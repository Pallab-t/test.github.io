<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.command_scheduler' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\EventListener\\CommandSchedulerListener.php';

return $this->privates['contao.listener.command_scheduler'] = new \Contao\CoreBundle\EventListener\CommandSchedulerListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['Contao\\CoreBundle\\Cron\\Cron'] ?? $this->load('getCronService.php')), '/_fragment');