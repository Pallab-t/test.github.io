<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Contao\CoreBundle\Controller\FaviconController' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Controller\\FaviconController.php';

return $this->services['Contao\\CoreBundle\\Controller\\FaviconController'] = new \Contao\CoreBundle\Controller\FaviconController(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), ($this->services['fos_http_cache.http.symfony_response_tagger'] ?? $this->getFosHttpCache_Http_SymfonyResponseTaggerService()));
