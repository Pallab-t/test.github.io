<?php
include_once \dirname(__DIR__, 4).'\\vendor\\scheb\\two-factor-bundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage.php';

class TrustedDeviceTokenStorage_fc7b3c4 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercb2a9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6e180 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3407d = [
        
    ];

    public function hasUpdatedCookie() : bool
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'hasUpdatedCookie', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->hasUpdatedCookie();
    }

    public function getCookieValue() : ?string
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getCookieValue', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getCookieValue();
    }

    public function hasTrustedToken(string $username, string $firewall, int $version) : bool
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'hasTrustedToken', array('username' => $username, 'firewall' => $firewall, 'version' => $version), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->hasTrustedToken($username, $firewall, $version);
    }

    public function addTrustedToken(string $username, string $firewall, int $version) : void
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'addTrustedToken', array('username' => $username, 'firewall' => $firewall, 'version' => $version), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        $this->valueHoldercb2a9->addTrustedToken($username, $firewall, $version);
return;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $instance) {
            unset($instance->requestStack, $instance->tokenGenerator, $instance->cookieName, $instance->trustedTokenList, $instance->updateCookie);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage')->__invoke($instance);

        $instance->initializer6e180 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\HttpFoundation\RequestStack $requestStack, \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenEncoder $tokenGenerator, string $cookieName)
    {
        static $reflection;

        if (! $this->valueHoldercb2a9) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage');
            $this->valueHoldercb2a9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $instance) {
            unset($instance->requestStack, $instance->tokenGenerator, $instance->cookieName, $instance->trustedTokenList, $instance->updateCookie);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage')->__invoke($this);

        }

        $this->valueHoldercb2a9->__construct($requestStack, $tokenGenerator, $cookieName);
    }

    public function & __get($name)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, '__get', ['name' => $name], $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        if (isset(self::$publicProperties3407d[$name])) {
            return $this->valueHoldercb2a9->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2a9;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldercb2a9;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2a9;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercb2a9;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, '__isset', array('name' => $name), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2a9;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb2a9;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, '__unset', array('name' => $name), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb2a9;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb2a9;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, '__clone', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        $this->valueHoldercb2a9 = clone $this->valueHoldercb2a9;
    }

    public function __sleep()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, '__sleep', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return array('valueHoldercb2a9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage $instance) {
            unset($instance->requestStack, $instance->tokenGenerator, $instance->cookieName, $instance->trustedTokenList, $instance->updateCookie);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Trusted\\TrustedDeviceTokenStorage')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer6e180 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer6e180;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'initializeProxy', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb2a9;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHoldercb2a9;
    }


}