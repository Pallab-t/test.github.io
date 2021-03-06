<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

require dirname(__DIR__, 3).'\\vendor/autoload.php';
require __DIR__.'/Container0xTvtZl/appContao_ManagerBundle_HttpKernel_ContaoKernelProdContainer.php';

$classes = [];
$classes[] = 'Knp\Bundle\MenuBundle\KnpMenuBundle';
$classes[] = 'Knp\Bundle\TimeBundle\KnpTimeBundle';
$classes[] = 'Scheb\TwoFactorBundle\SchebTwoFactorBundle';
$classes[] = 'Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle';
$classes[] = 'Terminal42\ServiceAnnotationBundle\Terminal42ServiceAnnotationBundle';
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle';
$classes[] = 'Lexik\Bundle\MaintenanceBundle\LexikMaintenanceBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'Nelmio\SecurityBundle\NelmioSecurityBundle';
$classes[] = 'FOS\HttpCacheBundle\FOSHttpCacheBundle';
$classes[] = 'Contao\CoreBundle\ContaoCoreBundle';
$classes[] = 'Contao\CalendarBundle\ContaoCalendarBundle';
$classes[] = 'Contao\CommentsBundle\ContaoCommentsBundle';
$classes[] = 'Contao\FaqBundle\ContaoFaqBundle';
$classes[] = 'Contao\ListingBundle\ContaoListingBundle';
$classes[] = 'Contao\InstallationBundle\ContaoInstallationBundle';
$classes[] = 'Contao\NewsBundle\ContaoNewsBundle';
$classes[] = 'Contao\NewsletterBundle\ContaoNewsletterBundle';
$classes[] = 'Contao\ManagerBundle\ContaoManagerBundle';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Contao\CoreBundle\Controller\BackendController';
$classes[] = 'Contao\CoreBundle\Controller\BackendCsvImportController';
$classes[] = 'Contao\CoreBundle\Controller\BackendPreviewController';
$classes[] = 'Contao\CoreBundle\Controller\BackendPreviewSwitchController';
$classes[] = 'Contao\CoreBundle\Controller\FaviconController';
$classes[] = 'Contao\CoreBundle\Controller\FrontendController';
$classes[] = 'Contao\CoreBundle\Controller\FrontendModule\TwoFactorController';
$classes[] = 'Contao\CoreBundle\Controller\ImagesController';
$classes[] = 'Contao\CoreBundle\Controller\InsertTagsController';
$classes[] = 'Contao\CoreBundle\Controller\RobotsTxtController';
$classes[] = 'Contao\CoreBundle\Cron\Cron';
$classes[] = 'Contao\CoreBundle\Cron\CronJob';
$classes[] = 'Contao\CoreBundle\Cron\LegacyCron';
$classes[] = 'Contao\CoreBundle\Migration\MigrationCollection';
$classes[] = 'Contao\CoreBundle\Migration\Version409\CeAccessMigration';
$classes[] = 'Contao\InstallationBundle\Database\Version330Update';
$classes[] = 'Contao\InstallationBundle\Database\Version350Update';
$classes[] = 'Contao\InstallationBundle\Database\Version400Update';
$classes[] = 'Contao\InstallationBundle\Database\Version410Update';
$classes[] = 'Contao\InstallationBundle\Database\Version430Update';
$classes[] = 'Contao\InstallationBundle\Database\Version440Update';
$classes[] = 'Contao\InstallationBundle\Database\Version447Update';
$classes[] = 'Contao\InstallationBundle\Database\Version450Update';
$classes[] = 'Contao\InstallationBundle\Database\Version460Update';
$classes[] = 'Contao\InstallationBundle\Database\Version470Update';
$classes[] = 'Contao\InstallationBundle\Database\Version480Update';
$classes[] = 'Contao\CoreBundle\Repository\CronJobRepository';
$classes[] = 'Contao\CoreBundle\Security\TwoFactor\BackupCodeManager';
$classes[] = 'Contao\ManagerBundle\Controller\DebugController';
$classes[] = 'Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister';
$classes[] = 'Scheb\TwoFactorBundle\Model\Persister\DoctrinePersisterFactory';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AboutCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand';
$classes[] = 'Contao\CoreBundle\Command\CronCommand';
$classes[] = 'Contao\CoreBundle\Command\MigrateCommand';
$classes[] = 'Lexik\Bundle\MaintenanceBundle\Command\DriverLockCommand';
$classes[] = 'Lexik\Bundle\MaintenanceBundle\Command\DriverUnlockCommand';
$classes[] = 'Contao\CoreBundle\Command\AutomatorCommand';
$classes[] = 'Contao\CoreBundle\Command\CrawlCommand';
$classes[] = 'Contao\CoreBundle\Command\DebugDcaCommand';
$classes[] = 'Contao\CoreBundle\Command\FilesyncCommand';
$classes[] = 'Contao\ManagerBundle\Command\InstallWebDirCommand';
$classes[] = 'Contao\InstallationBundle\Command\LockCommand';
$classes[] = 'Contao\CoreBundle\Command\ResizeImagesCommand';
$classes[] = 'Contao\InstallationBundle\Command\UnlockCommand';
$classes[] = 'Contao\CoreBundle\Command\UserPasswordCommand';
$classes[] = 'Contao\CoreBundle\Command\VersionCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand';
$classes[] = 'Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand';
$classes[] = 'Symfony\Component\Translation\Writer\TranslationWriter';
$classes[] = 'Symfony\Component\Translation\Dumper\PhpFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\XliffFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\PoFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\MoFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\YamlFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\QtFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\CsvFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\IniFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\JsonFileDumper';
$classes[] = 'Symfony\Component\Translation\Dumper\IcuResFileDumper';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand';
$classes[] = 'Symfony\Component\Console\CommandLoader\ContainerCommandLoader';
$classes[] = 'Symfony\Component\Console\EventListener\ErrorListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Contao\CoreBundle\Asset\ContaoContext';
$classes[] = 'Contao\CoreBundle\Cache\ContaoCacheClearer';
$classes[] = 'Contao\CoreBundle\Cache\ContaoCacheWarmer';
$classes[] = 'Contao\ManagerBundle\Command\DebugPluginsCommand';
$classes[] = 'Contao\CoreBundle\Command\DebugFragmentsCommand';
$classes[] = 'Contao\CoreBundle\Command\InstallCommand';
$classes[] = 'Contao\CoreBundle\Command\SymlinksCommand';
$classes[] = 'Contao\CoreBundle\Crawl\Escargot\Factory';
$classes[] = 'Contao\CoreBundle\Crawl\Escargot\Subscriber\BrokenLinkCheckerSubscriber';
$classes[] = 'Contao\CoreBundle\Crawl\Escargot\Subscriber\SearchIndexSubscriber';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Contao\CoreBundle\Csrf\MemoryTokenStorage';
$classes[] = 'Contao\CoreBundle\Doctrine\Schema\DcaSchemaProvider';
$classes[] = 'Contao\CoreBundle\Fragment\FragmentConfig';
$classes[] = 'Contao\CoreBundle\Fragment\FragmentRegistry';
$classes[] = 'Contao\CoreBundle\Fragment\ForwardFragmentRenderer';
$classes[] = 'Contao\CoreBundle\Framework\ContaoFramework';
$classes[] = 'Contao\Image\DeferredImageStorageFilesystem';
$classes[] = 'Contao\CoreBundle\Image\ImageFactory';
$classes[] = 'Contao\CoreBundle\Image\ImageSizes';
$classes[] = 'Imagine\Gd\Imagine';
$classes[] = 'Contao\ImagineSvg\Imagine';
$classes[] = 'Contao\CoreBundle\Image\PictureFactory';
$classes[] = 'Contao\Image\PictureGenerator';
$classes[] = 'Contao\Image\ResizeCalculator';
$classes[] = 'Contao\CoreBundle\Image\LegacyResizer';
$classes[] = 'Contao\InstallationBundle\InstallTool';
$classes[] = 'Contao\InstallationBundle\InstallToolUser';
$classes[] = 'Contao\InstallationBundle\Database\Installer';
$classes[] = 'Contao\CoreBundle\EventListener\GlobalsMapListener';
$classes[] = 'Contao\CoreBundle\EventListener\BackendLocaleListener';
$classes[] = 'Contao\CoreBundle\EventListener\BypassMaintenanceListener';
$classes[] = 'Contao\CoreBundle\EventListener\ClearSessionDataListener';
$classes[] = 'Contao\CoreBundle\EventListener\CommandSchedulerListener';
$classes[] = 'Contao\CoreBundle\EventListener\CsrfTokenCookieSubscriber';
$classes[] = 'Contao\CoreBundle\EventListener\DataContainerCallbackListener';
$classes[] = 'Contao\CoreBundle\EventListener\DoctrineSchemaListener';
$classes[] = 'Contao\CoreBundle\EventListener\ExceptionConverterListener';
$classes[] = 'Contao\InstallationBundle\EventListener\InitializeApplicationListener';
$classes[] = 'Contao\CoreBundle\EventListener\InitializeControllerListener';
$classes[] = 'Contao\CoreBundle\EventListener\InsecureInstallationListener';
$classes[] = 'Contao\CoreBundle\EventListener\InsertTags\AssetListener';
$classes[] = 'Contao\CoreBundle\EventListener\InsertTags\TranslationListener';
$classes[] = 'Contao\CoreBundle\EventListener\LocaleSubscriber';
$classes[] = 'Contao\CoreBundle\EventListener\MakeResponsePrivateListener';
$classes[] = 'Contao\CoreBundle\EventListener\Menu\BackendLogoutListener';
$classes[] = 'Contao\CoreBundle\EventListener\Menu\BackendMenuListener';
$classes[] = 'Contao\CoreBundle\EventListener\Menu\BackendPreviewListener';
$classes[] = 'Contao\CoreBundle\EventListener\MergeHttpHeadersListener';
$classes[] = 'Contao\CoreBundle\EventListener\PrettyErrorScreenListener';
$classes[] = 'Contao\CoreBundle\EventListener\PreviewAuthenticationListener';
$classes[] = 'Contao\CoreBundle\EventListener\PreviewToolbarListener';
$classes[] = 'Contao\CoreBundle\EventListener\PreviewUrlConvertListener';
$classes[] = 'Contao\CoreBundle\EventListener\RefererIdListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Contao\CoreBundle\EventListener\RequestTokenListener';
$classes[] = 'Contao\CoreBundle\EventListener\ResponseExceptionListener';
$classes[] = 'Contao\CoreBundle\EventListener\RobotsTxtListener';
$classes[] = 'Contao\CoreBundle\EventListener\SearchIndexListener';
$classes[] = 'Contao\CoreBundle\EventListener\StoreRefererListener';
$classes[] = 'Contao\CoreBundle\EventListener\SubrequestCacheSubscriber';
$classes[] = 'Contao\CoreBundle\EventListener\SwitchUserListener';
$classes[] = 'Contao\CoreBundle\EventListener\TwoFactorFrontendListener';
$classes[] = 'Contao\CoreBundle\EventListener\UserSessionListener';
$classes[] = 'Contao\CoreBundle\Menu\BackendMenuBuilder';
$classes[] = 'Knp\Menu\Renderer\ListRenderer';
$classes[] = 'Knp\Menu\Matcher\Matcher';
$classes[] = 'Contao\CoreBundle\HttpKernel\ModelArgumentResolver';
$classes[] = 'Contao\CoreBundle\Monolog\ContaoTableHandler';
$classes[] = 'Contao\CoreBundle\Monolog\ContaoTableProcessor';
$classes[] = 'Contao\CoreBundle\OptIn\OptIn';
$classes[] = 'Contao\CoreBundle\Picker\PickerBuilder';
$classes[] = 'Contao\CoreBundle\Picker\PagePickerProvider';
$classes[] = 'Contao\CoreBundle\Picker\FilePickerProvider';
$classes[] = 'Contao\NewsBundle\Picker\NewsPickerProvider';
$classes[] = 'Contao\CalendarBundle\Picker\EventPickerProvider';
$classes[] = 'Contao\FaqBundle\Picker\FaqPickerProvider';
$classes[] = 'Contao\CoreBundle\Picker\ArticlePickerProvider';
$classes[] = 'Contao\CoreBundle\Picker\TablePickerProvider';
$classes[] = 'Contao\CoreBundle\Repository\RememberMeRepository';
$classes[] = 'Contao\CoreBundle\Config\ResourceFinder';
$classes[] = 'Symfony\Component\Config\FileLocator';
$classes[] = 'Contao\CoreBundle\Routing\Matcher\DomainFilter';
$classes[] = 'Contao\CoreBundle\Routing\Matcher\UrlMatcher';
$classes[] = 'Contao\CoreBundle\Routing\FrontendLoader';
$classes[] = 'Contao\CoreBundle\Routing\LegacyRouteProvider';
$classes[] = 'Contao\CoreBundle\Routing\RouteProvider';
$classes[] = 'Contao\CoreBundle\Routing\Matcher\LegacyMatcher';
$classes[] = 'Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher';
$classes[] = 'Contao\CoreBundle\Routing\Matcher\LanguageFilter';
$classes[] = 'Contao\CoreBundle\Routing\Matcher\PublishedFilter';
$classes[] = 'Contao\CoreBundle\Routing\ScopeMatcher';
$classes[] = 'Contao\CoreBundle\Routing\UrlGenerator';
$classes[] = 'Contao\CoreBundle\Search\Indexer\DelegatingIndexer';
$classes[] = 'Contao\CoreBundle\Search\Indexer\DefaultIndexer';
$classes[] = 'Contao\CoreBundle\Security\Authentication\AuthenticationFailureHandler';
$classes[] = 'Contao\CoreBundle\Security\Authentication\ContaoLoginAuthenticationListener';
$classes[] = 'Scheb\TwoFactorBundle\Security\Authentication\Provider\AuthenticationProviderDecorator';
$classes[] = 'Contao\CoreBundle\Security\Authentication\Provider\AuthenticationProvider';
$classes[] = 'Scheb\TwoFactorBundle\Security\Authentication\Provider\TwoFactorAuthenticationProvider';
$classes[] = 'Contao\CoreBundle\Security\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Contao\CoreBundle\Security\Voter\BackendAccessVoter';
$classes[] = 'Contao\CoreBundle\Security\User\ContaoUserProvider';
$classes[] = 'Contao\CoreBundle\Security\Authentication\AuthenticationEntryPoint';
$classes[] = 'Contao\CoreBundle\Security\Authentication\FrontendPreviewAuthenticator';
$classes[] = 'Contao\CoreBundle\Security\Logout\LogoutHandler';
$classes[] = 'Contao\CoreBundle\Security\Logout\LogoutSuccessHandler';
$classes[] = 'Contao\CoreBundle\Security\Authentication\Token\TokenChecker';
$classes[] = 'Contao\CoreBundle\Security\TwoFactor\Authenticator';
$classes[] = 'Contao\CoreBundle\Security\TwoFactor\Provider';
$classes[] = 'Contao\CoreBundle\Security\TwoFactor\TrustedDeviceManager';
$classes[] = 'Contao\CoreBundle\Security\User\UserChecker';
$classes[] = 'Contao\CoreBundle\Slug\Slug';
$classes[] = 'Ausi\SlugGenerator\SlugGenerator';
$classes[] = 'Contao\CoreBundle\Slug\ValidCharacters';
$classes[] = 'Contao\CalendarBundle\EventListener\GeneratePageListener';
$classes[] = 'Contao\CalendarBundle\EventListener\InsertTagsListener';
$classes[] = 'Contao\CalendarBundle\EventListener\PreviewUrlConvertListener';
$classes[] = 'Contao\CalendarBundle\EventListener\PreviewUrlCreateListener';
$classes[] = 'Contao\FaqBundle\EventListener\InsertTagsListener';
$classes[] = 'Contao\ManagerBundle\Cache\BundleCacheClearer';
$classes[] = 'Contao\ManagerBundle\EventListener\BackendMenuListener';
$classes[] = 'Contao\ManagerBundle\EventListener\InitializeApplicationListener';
$classes[] = 'Contao\ManagerBundle\EventListener\InstallCommandListener';
$classes[] = 'Contao\ManagerBundle\Routing\RouteLoader';
$classes[] = 'Contao\NewsBundle\EventListener\GeneratePageListener';
$classes[] = 'Contao\NewsBundle\EventListener\InsertTagsListener';
$classes[] = 'Contao\NewsBundle\EventListener\PreviewUrlConvertListener';
$classes[] = 'Contao\NewsBundle\EventListener\PreviewUrlCreateListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\DefaultNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand';
$classes[] = 'Doctrine\Common\Cache\FilesystemCache';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\HttpCache\Esi';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SurrogateListener';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'FOS\HttpCacheBundle\CacheManager';
$classes[] = 'FOS\HttpCacheBundle\Command\InvalidatePathCommand';
$classes[] = 'FOS\HttpCacheBundle\Command\InvalidateRegexCommand';
$classes[] = 'FOS\HttpCacheBundle\Command\InvalidateTagCommand';
$classes[] = 'FOS\HttpCacheBundle\Command\RefreshPathCommand';
$classes[] = 'FOS\HttpCacheBundle\EventListener\InvalidationListener';
$classes[] = 'FOS\HttpCache\EventListener\LogListener';
$classes[] = 'FOS\HttpCacheBundle\EventListener\TagListener';
$classes[] = 'FOS\HttpCacheBundle\Http\RuleMatcher';
$classes[] = 'FOS\HttpCacheBundle\Http\RequestMatcher\CacheableRequestMatcher';
$classes[] = 'FOS\HttpCacheBundle\Http\ResponseMatcher\CacheableResponseMatcher';
$classes[] = 'FOS\HttpCacheBundle\Http\SymfonyResponseTagger';
$classes[] = 'FOS\HttpCache\TagHeaderFormatter\MaxHeaderValueLengthFormatter';
$classes[] = 'FOS\HttpCache\TagHeaderFormatter\CommaSeparatedTagHeaderFormatter';
$classes[] = 'FOS\HttpCache\ProxyClient\Symfony';
$classes[] = 'FOS\HttpCache\SymfonyCache\KernelDispatcher';
$classes[] = 'FOS\HttpCacheBundle\Http\RequestMatcher\UnsafeRequestMatcher';
$classes[] = 'FOS\HttpCacheBundle\Http\ResponseMatcher\NonErrorResponseMatcher';
$classes[] = 'Contao\CoreBundle\Fragment\FragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\FragmentListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Contao\CoreBundle\HttpKernel\ControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Knp\Menu\MenuFactory';
$classes[] = 'Knp\Menu\Integration\Symfony\RoutingExtension';
$classes[] = 'Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider';
$classes[] = 'Knp\Menu\Provider\LazyProvider';
$classes[] = 'Knp\Menu\Renderer\TwigRenderer';
$classes[] = 'Knp\Menu\Matcher\Voter\RouteVoter';
$classes[] = 'Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory';
$classes[] = 'Lexik\Bundle\MaintenanceBundle\Drivers\DatabaseDriver';
$classes[] = 'Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Handler\RotatingFileHandler';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Contao\CoreBundle\Cors\WebsiteRootsConfigProvider';
$classes[] = 'Nelmio\SecurityBundle\EventListener\ClickjackingListener';
$classes[] = 'Nelmio\SecurityBundle\EventListener\ContentTypeListener';
$classes[] = 'Nelmio\SecurityBundle\EventListener\ContentSecurityPolicyListener';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\DirectiveSet';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\PolicyManager';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\NonceGenerator';
$classes[] = 'Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\Logger';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\LogFormatter';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\Filter';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\DomainsNoiseDetector';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\DomainsRegexNoiseDetector';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\SchemesNoiseDetector';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\InjectedScriptsNoiseDetector';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\BrowserBugsNoiseDetector';
$classes[] = 'Nelmio\SecurityBundle\EventListener\ReferrerPolicyListener';
$classes[] = 'Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer';
$classes[] = 'Nelmio\SecurityBundle\UserAgent\UAFamilyParser\UAFamilyParser';
$classes[] = 'UAParser\Parser';
$classes[] = 'Nelmio\SecurityBundle\EventListener\XssProtectionListener';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Cmf\Component\Routing\ChainRouter';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Cmf\Component\Routing\DynamicRouter';
$classes[] = 'Symfony\Cmf\Component\Routing\ProviderBasedGenerator';
$classes[] = 'Contao\CoreBundle\Routing\Enhancer\InputEnhancer';
$classes[] = 'Contao\CoreBundle\Routing\Route404Provider';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer';
$classes[] = 'Contao\CoreBundle\Routing\ImagesLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticatedTokenHandler';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextFactory';
$classes[] = 'Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactory';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext';
$classes[] = 'Scheb\TwoFactorBundle\Controller\FormController';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist\DefaultIpWhitelistProvider';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TwoFactorProviderHandler';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderPreparationRecorder';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderRegistry';
$classes[] = 'Scheb\TwoFactorBundle\Security\Authorization\Voter\TwoFactorInProgressVoter';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\NullTrustedDeviceManager';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenEncoder';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\RememberMeListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider';
$classes[] = 'Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderPreparationListener';
$classes[] = 'Scheb\TwoFactorBundle\Security\Authentication\RememberMe\RememberMeServicesDecorator';
$classes[] = 'Contao\CoreBundle\Security\Authentication\RememberMe\ExpiringTokenBasedRememberMeServices';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\Firewall\SwitchUserListener';
$classes[] = 'Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Contao\ManagerBundle\Security\Logout\LogoutHandler';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler';
$classes[] = 'Symfony\Component\Security\Http\Logout\SessionLogoutHandler';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Contao\CoreBundle\Session\Attribute\ArrayAttributeBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener';
$classes[] = 'Swift_Mailer';
$classes[] = 'Swift_Transport';
$classes[] = 'Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory';
$classes[] = 'Swift_Events_SimpleEventDispatcher';
$classes[] = 'Symfony\Component\Translation\Extractor\ChainExtractor';
$classes[] = 'Symfony\Component\Translation\Extractor\PhpExtractor';
$classes[] = 'Symfony\Bridge\Twig\Translation\TwigExtractor';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\Reader\TranslationReader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer';
$classes[] = 'Contao\CoreBundle\Translation\Translator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Knp\Menu\Twig\MenuExtension';
$classes[] = 'Knp\Menu\Twig\Helper';
$classes[] = 'Knp\Menu\Renderer\PsrProvider';
$classes[] = 'Knp\Menu\Provider\ChainProvider';
$classes[] = 'Knp\Menu\Util\MenuManipulator';
$classes[] = 'Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension';
$classes[] = 'Knp\Bundle\TimeBundle\Templating\Helper\TimeHelper';
$classes[] = 'Knp\Bundle\TimeBundle\DateTimeFormatter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Nelmio\SecurityBundle\Twig\NelmioCSPTwigExtension';
$classes[] = 'FOS\HttpCacheBundle\Twig\CacheTagExtension';
$classes[] = 'Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension';
$classes[] = 'SensioLabs\AnsiConverter\Bridge\Twig\AnsiExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Command\DebugCommand';
$classes[] = 'Symfony\Bundle\TwigBundle\Command\LintCommand';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer';
$classes[] = 'Contao\ManagerBundle\Twig\FileExtensionFilterIterator';
$classes[] = 'Symfony\Bundle\TwigBundle\TemplateIterator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);
