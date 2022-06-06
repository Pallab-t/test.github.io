<?php
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getConnection()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getConnection', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getMetadataFactory', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getExpressionBuilder', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'beginTransaction', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getCache', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'transactional', array('func' => $func), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->transactional($func);
    }

    public function commit()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'commit', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->commit();
    }

    public function rollback()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'rollback', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getClassMetadata', array('className' => $className), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'createQuery', array('dql' => $dql), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'createNamedQuery', array('name' => $name), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'createQueryBuilder', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'flush', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'clear', array('entityName' => $entityName), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->clear($entityName);
    }

    public function close()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'close', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->close();
    }

    public function persist($entity)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'persist', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'remove', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'refresh', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'detach', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'merge', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'contains', array('entity' => $entity), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getEventManager', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getConfiguration', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'isOpen', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getUnitOfWork', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getProxyFactory', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'initializeObject', array('obj' => $obj), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'getFilters', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'isFiltersStateClean', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6e180 && ($this->initializer6e180->__invoke($valueHoldercb2a9, $this, 'hasFilters', array(), $this->initializer6e180) || 1) && $this->valueHoldercb2a9 = $valueHoldercb2a9;

        return $this->valueHoldercb2a9->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer6e180 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercb2a9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercb2a9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercb2a9->__construct($conn, $config, $eventManager);
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
