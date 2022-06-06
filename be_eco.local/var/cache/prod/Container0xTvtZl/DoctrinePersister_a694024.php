<?php

include_once\dirname(__DIR__, 4).'\\vendor\\scheb\\two-factor-bundle\\Model\\PersisterInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\scheb\\two-factor-bundle\\Model\\Persister\\DoctrinePersister.php';
class DoctrinePersister_a694024 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercb2a9 = null;
    private $initializer6e180 = null;
    private static $publicProperties3407d = [
        
    ];
    public function persist($user) : void
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'persist', array('user' => $user), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;
        $this->valueHoldercb2a9->persist($user);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $instance, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($instance);
        $instance->initializer6e180 = $initializer;
        return $instance;
    }
    public function __construct($om)
    {
        static $reflection;
        if (! $this->valueHoldercb2a9) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister');
            $this->valueHoldercb2a9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
        }
        $this->valueHoldercb2a9->__construct($om);
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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister $instance) {
            unset($instance->om);
        }, $this, 'Scheb\\TwoFactorBundle\\Model\\Persister\\DoctrinePersister')->__invoke($this);
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
