<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao.image.imagine_svg' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Factory\\ClassFactoryAwareInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\ImagineInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\AbstractImagine.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\imagine-svg\\src\\Imagine.php';

return $this->services['contao.image.imagine_svg'] = new \Contao\ImagineSvg\Imagine();
