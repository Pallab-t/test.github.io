<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao_calendar.listener.preview_url_convert' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\calendar-bundle\\src\\EventListener\\PreviewUrlConvertListener.php';

return $this->privates['contao_calendar.listener.preview_url_convert'] = new \Contao\CalendarBundle\EventListener\PreviewUrlConvertListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
