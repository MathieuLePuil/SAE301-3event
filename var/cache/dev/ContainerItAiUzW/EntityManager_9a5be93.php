<?php

namespace ContainerItAiUzW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc7575 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4b31a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2802e = [
        
    ];

    public function getConnection()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getConnection', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getMetadataFactory', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getExpressionBuilder', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'beginTransaction', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getCache', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'transactional', array('func' => $func), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'commit', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->commit();
    }

    public function rollback()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'rollback', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getClassMetadata', array('className' => $className), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'createQuery', array('dql' => $dql), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'createNamedQuery', array('name' => $name), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'createQueryBuilder', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'flush', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'clear', array('entityName' => $entityName), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->clear($entityName);
    }

    public function close()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'close', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->close();
    }

    public function persist($entity)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'persist', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'remove', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'refresh', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'detach', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'merge', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'contains', array('entity' => $entity), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getEventManager', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getConfiguration', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'isOpen', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getUnitOfWork', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getProxyFactory', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'initializeObject', array('obj' => $obj), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'getFilters', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'isFiltersStateClean', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'hasFilters', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return $this->valueHolderc7575->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4b31a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc7575) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc7575 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc7575->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, '__get', ['name' => $name], $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        if (isset(self::$publicProperties2802e[$name])) {
            return $this->valueHolderc7575->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7575;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7575;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7575;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7575;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, '__isset', array('name' => $name), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7575;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc7575;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, '__unset', array('name' => $name), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7575;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc7575;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, '__clone', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        $this->valueHolderc7575 = clone $this->valueHolderc7575;
    }

    public function __sleep()
    {
        $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, '__sleep', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;

        return array('valueHolderc7575');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4b31a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4b31a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4b31a && ($this->initializer4b31a->__invoke($valueHolderc7575, $this, 'initializeProxy', array(), $this->initializer4b31a) || 1) && $this->valueHolderc7575 = $valueHolderc7575;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7575;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7575;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
