<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorFormRendererInterface' shared service.

if ($lazyLoad) {
    return $this->services['Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\TwoFactorFormRendererInterface'] = $this->createProxy('DefaultTwoFactorFormRenderer_892ae3f', function () {
        return \DefaultTwoFactorFormRenderer_892ae3f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getTwoFactorFormRendererInterfaceService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'\\vendor\\scheb\\two-factor-bundle\\Security\\TwoFactor\\Provider\\TwoFactorFormRendererInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\scheb\\two-factor-bundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer.php';

return new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer(($this->services['twig'] ?? $this->getTwigService()), '@SchebTwoFactor/Authentication/form.html.twig');