<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

if ($lazyLoad) {
    return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
        return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getDoctrine_Orm_DefaultEntityManagerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\AnnotationDriver.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultNamingStrategy.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerEntityListenerResolver.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FileCache.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FilesystemCache.php';

$a = new \Doctrine\ORM\Configuration();

$b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->load('getAnnotations_CachedReaderService.php')), [0 => (\dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Entity')]), 'Contao\\CoreBundle\\Entity');

$a->setEntityNamespaces(['ContaoCoreBundle' => 'Contao\\CoreBundle\\Entity']);
$a->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine_metadata_cache'] ?? ($this->services['doctrine_cache.providers.doctrine_metadata_cache'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDir.''.'/doctrine/metadata'), '.cache', 2))));
$a->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine_query_cache'] ?? ($this->services['doctrine_cache.providers.doctrine_query_cache'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDir.''.'/doctrine/query'), '.cache', 2))));
$a->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine_result_cache'] ?? ($this->services['doctrine_cache.providers.doctrine_result_cache'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDir.''.'/doctrine/result'), '.cache', 2))));
$a->setMetadataDriverImpl($b);
$a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(true);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
$a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
$a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Contao\\CoreBundle\\Repository\\CronJobRepository' => ['privates', 'Contao\\CoreBundle\\Repository\\CronJobRepository', 'getCronJobRepositoryService.php', true],
    'contao.repository.remember_me' => ['privates', 'contao.repository.remember_me', 'getContao_Repository_RememberMeService.php', true],
], [
    'Contao\\CoreBundle\\Repository\\CronJobRepository' => '?',
    'contao.repository.remember_me' => '?',
])));

$instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

return $instance;
