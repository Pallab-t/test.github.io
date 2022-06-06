<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.image.image_factory' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Image\\ImageFactoryInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Image\\ImageFactory.php';
include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Factory\\ClassFactoryAwareInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\ImagineInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\AbstractImagine.php';
include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Gd\\Imagine.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\imagine-svg\\src\\Imagine.php';

return $this->services['contao.image.image_factory'] = new \Contao\CoreBundle\Image\ImageFactory(($this->services['contao.image.resizer'] ?? $this->load('getContao_Image_ResizerService.php')), ($this->services['contao.image.imagine'] ?? ($this->services['contao.image.imagine'] = new \Imagine\Gd\Imagine())), ($this->services['contao.image.imagine_svg'] ?? ($this->services['contao.image.imagine_svg'] = new \Contao\ImagineSvg\Imagine())), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()), false, $this->parameters['contao.image.imagine_options'], $this->parameters['contao.image.valid_extensions'], (\dirname(__DIR__, 4).'/files'), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));