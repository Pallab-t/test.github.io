<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.preview_url_convert' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\EventListener\\PreviewUrlConvertListener.php';

return $this->privates['contao.listener.preview_url_convert'] = new \Contao\CoreBundle\EventListener\PreviewUrlConvertListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));