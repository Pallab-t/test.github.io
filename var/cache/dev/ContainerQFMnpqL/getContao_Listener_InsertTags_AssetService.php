<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.listener.insert_tags.asset' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\EventListener\\InsertTags\\AssetListener.php';

return $this->services['contao.listener.insert_tags.asset'] = new \Contao\CoreBundle\EventListener\InsertTags\AssetListener(($this->services['assets.packages'] ?? $this->getAssets_PackagesService()));
