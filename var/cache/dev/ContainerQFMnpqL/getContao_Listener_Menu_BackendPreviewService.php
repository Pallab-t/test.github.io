<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.menu.backend_preview' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\EventListener\\Menu\\BackendPreviewListener.php';

return $this->privates['contao.listener.menu.backend_preview'] = new \Contao\CoreBundle\EventListener\Menu\BackendPreviewListener(($this->services['security.helper'] ?? $this->getSecurity_HelperService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
