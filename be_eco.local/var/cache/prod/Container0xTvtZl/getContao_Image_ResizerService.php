<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.image.resizer' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\image\\src\\ResizerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\image\\src\\Resizer.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\image\\src\\DeferredResizerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\image\\src\\DeferredResizer.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Framework\\FrameworkAwareInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Framework\\FrameworkAwareTrait.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Image\\LegacyResizer.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\image\\src\\ResizeCalculator.php';

$this->services['contao.image.resizer'] = $instance = new \Contao\CoreBundle\Image\LegacyResizer((\dirname(__DIR__, 4).'/assets/images'), ($this->privates['contao.image.resize_calculator'] ?? ($this->privates['contao.image.resize_calculator'] = new \Contao\Image\ResizeCalculator())), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['contao.image.deferred_image_storage'] ?? $this->load('getContao_Image_DeferredImageStorageService.php')));

$instance->setFramework(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));

return $instance;
