<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.routing.url_generator' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Routing\\UrlGenerator.php';

return $this->services['contao.routing.url_generator'] = new \Contao\CoreBundle\Routing\UrlGenerator(($this->services['router'] ?? $this->getRouterService()), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), false);
