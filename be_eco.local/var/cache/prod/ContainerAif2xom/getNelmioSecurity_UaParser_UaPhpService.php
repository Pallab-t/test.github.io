<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'nelmio_security.ua_parser.ua_php' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\nelmio\\security-bundle\\UserAgent\\UAFamilyParser\\UAFamilyParserInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\nelmio\\security-bundle\\UserAgent\\UAFamilyParser\\UAFamilyParser.php';

return $this->services['nelmio_security.ua_parser.ua_php'] = new \Nelmio\SecurityBundle\UserAgent\UAFamilyParser\UAFamilyParser(($this->privates['nelmio_security.ua_parser.ua_php.provider'] ?? $this->load('getNelmioSecurity_UaParser_UaPhp_ProviderService.php')));
