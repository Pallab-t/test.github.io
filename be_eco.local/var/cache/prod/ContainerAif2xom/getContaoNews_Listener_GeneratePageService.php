<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao_news.listener.generate_page' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\news-bundle\\src\\EventListener\\GeneratePageListener.php';

return $this->services['contao_news.listener.generate_page'] = new \Contao\NewsBundle\EventListener\GeneratePageListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
