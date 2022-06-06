<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'ausi/slug-generator' => 'v1.1.0@59b641dfa764658e1fbf37f75312e702817cd319',
  'bacon/bacon-qr-code' => '2.0.0@eaac909da3ccc32b748a65b127acd8918f58d9b0',
  'beberlei/assert' => 'v3.2.7@d63a6943fc4fd1a2aedb65994e3548715105abcf',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'composer/ca-bundle' => '1.2.7@95c63ab2117a72f48f5a55da9740a3273d45b7fd',
  'composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47',
  'contao-components/ace' => '1.4.7@af8d568e361976205d89920245dfd6b7b7bf1e26',
  'contao-components/chosen' => '1.2.4@bdbfa73ab0c1e2a88992b9ba6fab39b698be005a',
  'contao-components/colorbox' => '1.6.6@80c3b1b5adff4add0a7a54db93ad0bf15ae6bd9d',
  'contao-components/colorpicker' => '1.5.1@b9545f1fa3e4f0f4f577caf7fc743c0530157122',
  'contao-components/contao' => '9.1.0@3a003eca5b9d9dfdfc10f5b0ae965d3bdddd39df',
  'contao-components/datepicker' => '2.3.1@6551767a7283383d893989767d3182fb88049ab6',
  'contao-components/dropzone' => '5.5.0@0ba3edca1896f5523bd7bf3ad3cdf82f9d11a01e',
  'contao-components/highlight' => '9.16.1@3c21b86af5c3fa197d8f6f64e28c490c5b141b23',
  'contao-components/installer' => '1.4.0@c5df35d6f2263bc1a7e4dce6ff07eaf58ef49a90',
  'contao-components/jquery' => '3.4.1@759eb4a2473a419680be92743498af5273f44f8d',
  'contao-components/jquery-ui' => '1.12.1.1@1fabbe27469a6b44130c1ad38bd1aa0a2a3720a1',
  'contao-components/mediabox' => '1.5.5@8f56fdbcfe7156e90a7f43e4976e09f61bdb1082',
  'contao-components/mootools' => '1.6.0.6@cd812036f79b2d55dd0feddd7b96c180c1f04bab',
  'contao-components/simplemodal' => '2.1.1@3f3d4d7005ec3d670c791993ab7bb2c78e7b7849',
  'contao-components/swipe' => '2.2.0@1c2acad8b32681ba829d66e99da340666f69b9d9',
  'contao-components/tablesort' => '4.0.1@faabcfab17e388b767c8f5a18987c44429692a9d',
  'contao-components/tablesorter' => '2.31.3@2b3f64c2ababdfe291e3248b26bbef5f4821f868',
  'contao-components/tinymce4' => '4.9.6@fce675ef3464a8fa06fcf4667e3d341e67af48c9',
  'contao/calendar-bundle' => '4.9.3@ed036fecf05fbb9422a9e395bffcd0fb1191ba8c',
  'contao/comments-bundle' => '4.9.3@5b20114568f74ebdbb65dbdc09117d85d04fdb97',
  'contao/conflicts' => 'dev-master@ba331b1c750a75c285bf08d696bd0947874b40a6',
  'contao/core-bundle' => '4.9.3@6379ebfc0e26e302774c067c01e21ab8eee9362d',
  'contao/faq-bundle' => '4.9.3@e3807fdf75e03a6c832df9889a20a8e34c84cf1d',
  'contao/image' => '1.0.1@9cd4150e52321f32aad1702128bca4c74bde2250',
  'contao/imagine-svg' => '0.2.3@eade901eeeada36f51852ca19c289d972f2242f5',
  'contao/installation-bundle' => '4.9.3@2cde65ce72cc7cc376529816d6bfc547ac1b8e7d',
  'contao/listing-bundle' => '4.9.3@8dc2f30a2d3df70a54d86809c86645660bef33e6',
  'contao/manager-bundle' => '4.9.3@d55b3c5645950a2380c914b39bae851bae18ddff',
  'contao/manager-plugin' => '2.8.1@ad489738c9d5e3079286e5e582efffb4bcb8c265',
  'contao/news-bundle' => '4.9.3@d5dac23ce3f34d315bfb93f4bf2d52f7123a84a3',
  'contao/newsletter-bundle' => '4.9.3@cf9c0fa62e71767aa69223c473f958098c5560e2',
  'dasprid/enum' => '1.0.0@631ef6e638e9494b0310837fa531bedd908fc22b',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.2@6902fafacb43333d9dc3d949c0a06048a31549ac',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '1.12.10@2ee4c25a847e744e93d7fc2895e059ad9ef7d10c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'friendsofsymfony/http-cache' => '2.9.2@e6e9218b0185c21754b8a33036c103abfa27f061',
  'friendsofsymfony/http-cache-bundle' => '2.8.0@490edbb8e86ce71f63afb96a2b3a2751a9ec11b1',
  'imagine/imagine' => '1.2.3@cb2361e5bb4410b681462d8e4f912bc5dabf84ab',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'knplabs/knp-menu' => '2.6.0@b6aade272c345b6fbd07fce5929a761cba0909b8',
  'knplabs/knp-menu-bundle' => 'v2.3.0@78b0cebf8e1490f12ba6555511282954de83f627',
  'knplabs/knp-time-bundle' => 'v1.11.0@8f3983f8b53e9c350f7dd476461bd7f5b32dfc89',
  'lcobucci/jwt' => '3.3.2@56f10808089e38623345e28af2f2d5e4eb579455',
  'league/uri-components' => '1.8.2@d0412fd730a54a8284009664188cf239070eae64',
  'league/uri-hostname-parser' => '1.1.1@7a6be3d06d0ed08dcb51f666aa60f3b66cd51325',
  'league/uri-interfaces' => '1.1.1@081760c53a4ce76c9935a755a21353610f5495f6',
  'league/uri-parser' => '1.4.1@671548427e4c932352d9b9279fdfa345bf63fa00',
  'league/uri-schemes' => '1.2.1@f821a444785724bcc9bc244b1173b9d6ca4d71e6',
  'lexik/maintenance-bundle' => 'v2.1.5@3a3e916776934a95834235e4a1d71e4595d515f5',
  'matthiasmullie/minify' => '1.3.63@9ba1b459828adc13430f4dd6c49dae4950dc4117',
  'matthiasmullie/path-converter' => '1.1.3@e7d13b2c7e2f2268e1424aaed02085518afa02d9',
  'michelf/php-markdown' => '1.9.0@c83178d49e372ca967d1a8c77ae4e051b3a3c75c',
  'monolog/monolog' => '1.25.4@3022efff205e2448b560c833c6fbbf91c3139168',
  'nelmio/cors-bundle' => '1.5.6@10a24c10f242440211ed31075e74f81661c690d9',
  'nelmio/security-bundle' => 'v2.9.1@89ac385b28496691bfa7eef24d60aec9f20021a1',
  'nyholm/psr7' => '1.3.0@c17f4f73985f62054a331cbc4ffdf9868c4ef256',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'paragonie/constant_time_encoding' => 'v2.3.0@47a1cedd2e4d52688eb8c96469c05ebc8fd28fa2',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'patchwork/utf8' => 'v1.3.2@d296e0026e7ce10b2a9fe594feca9628ef00e9e8',
  'php-http/client-common' => '2.1.0@a8b29678d61556f45d6236b1667db16d998ceec5',
  'php-http/discovery' => '1.7.4@82dbef649ccffd8e4f22e1953c3a5265992b83c0',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpspec/php-diff' => 'v1.1.0@0464787bfa7cd13576c5a1e318709768798bec6a',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'scheb/two-factor-bundle' => 'v4.18.0@37ec5f078ce565aa408d1279060353de6ad8cd3b',
  'scssphp/scssphp' => '1.1.0@4363ddce8d750f055c436833dd77d83517946532',
  'sensiolabs/ansi-to-html' => 'v1.2.0@03c69ea03b4ede6c45304fe0efdbb655753410fa',
  'simplepie/simplepie' => '1.5.5@ae49e2201b6da9c808e5dac437aca356a11831b4',
  'spomky-labs/otphp' => 'v9.1.4@48d463cf909320399fe08eab2e1cd18d899d5068',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony-cmf/routing' => '2.3.2@e073c3b6db0e9a5f4c8d7a7bb8a092cd5e191fba',
  'symfony-cmf/routing-bundle' => '2.4.0@6d5c6fedb0ab74543479b24c8c3b14ab049810ff',
  'symfony/asset' => 'v4.4.9@d8a755baa015b8949a105b8288eeb0714d9b1b5f',
  'symfony/cache' => 'v4.4.9@aaf9cf1923794c950976bbcc35eb19a26aad95e8',
  'symfony/cache-contracts' => 'v2.1.2@87c92f62c494626598e9148208aaa6d1716b8e3c',
  'symfony/config' => 'v4.4.9@395f6e09e1dc6ac9c1a5eea3b7f44f7a820a5504',
  'symfony/console' => 'v4.4.9@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/debug' => 'v4.4.9@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/debug-bundle' => 'v4.4.9@12a020d14b4f6f3a5cfb46cd83836b78be036210',
  'symfony/dependency-injection' => 'v4.4.9@6a2cecd7011aec38b5fb2270abf0de120e7679b1',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/doctrine-bridge' => 'v4.4.9@cfa26d8cc2a5e799f436fefd00ed81e3dd591e03',
  'symfony/dom-crawler' => 'v4.4.9@c18354d5a0bb84c945f6257c51b971d52f10c614',
  'symfony/dotenv' => 'v4.4.9@24d734ab97c7fb8b4fa10c64ee0c344f2badfcf0',
  'symfony/error-handler' => 'v4.4.9@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.9@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.9@89f0e2c82d8c12975180f993383decbb810ad73e',
  'symfony/filesystem' => 'v4.4.9@b27f491309db5757816db672b256ea2e03677d30',
  'symfony/finder' => 'v4.4.9@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/framework-bundle' => 'v4.4.9@d4883d91302ea94c517fcf91fcaef079487ca3e0',
  'symfony/http-client' => 'v4.4.9@d850d6ee955aaa18f05e6df9a11c393c42d45fe0',
  'symfony/http-client-contracts' => 'v2.1.2@f8bed25edc964d015bcd87f1fec5734963931910',
  'symfony/http-foundation' => 'v4.4.9@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.9@54526b598d7fc86a67850488b194a88a79ab8467',
  'symfony/inflector' => 'v5.1.0@fddb4262dd136b34db993a2a3488713df91e4856',
  'symfony/lock' => 'v4.4.9@55b1ae7bcb7f1b126c5d2b492d6f52342bec1951',
  'symfony/mime' => 'v5.1.0@56261f89385f9d13cf843a5101ac72131190bc91',
  'symfony/monolog-bridge' => 'v4.4.9@beb70975af56acdd67f3add01970165954d577c5',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v5.1.0@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.17.0@c4de7601eefbf25f9d47190abe07f79fe0a27424',
  'symfony/polyfill-intl-grapheme' => 'v1.17.0@e094b0770f7833fdf257e6ba4775be4e258230b2',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-intl-normalizer' => 'v1.17.0@1357b1d168eb7f68ad6a134838e46b0b159444a9',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/process' => 'v4.4.9@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/property-access' => 'v5.1.0@776bf85b9ed5a9ba99496d5e5457a50de63cd997',
  'symfony/property-info' => 'v5.1.0@b644923132bdd92c2664f0c7955f77a9a2b8e919',
  'symfony/proxy-manager-bridge' => 'v4.4.9@3f42656c548a373b9ffa212fb16f11e6cda2e0c6',
  'symfony/routing' => 'v4.4.9@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/security-bundle' => 'v4.4.9@6c1e30e2755928313e5eb55af20f615ed9fec2a2',
  'symfony/security-core' => 'v4.4.9@16ab88e5692e3fc32ae4ad550a55fbced516203b',
  'symfony/security-csrf' => 'v5.1.0@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v4.4.9@699162c3a9fcceb5ec8bce35a3dc2fcb79c6751e',
  'symfony/security-http' => 'v4.4.9@4aab90c5797a4f2ee9d5cd91f5e884d1e21f431a',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v4.4.9@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/string' => 'v5.1.0@90c2a5103f07feb19069379f3abdcdbacc7753a9',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/templating' => 'v5.1.0@d3f0347e70029067ab690bfa9ff121c1c929ee4e',
  'symfony/translation' => 'v4.4.9@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/twig-bridge' => 'v4.4.9@13a9659ebceea38814ef8fde6399e36760ea08ad',
  'symfony/twig-bundle' => 'v4.4.9@c83e606bdc54504a1b2bcd8807b5dd139187b4a4',
  'symfony/var-dumper' => 'v4.4.9@56b3aa5eab0ac6720dcd559fd1d590ce301594ac',
  'symfony/var-exporter' => 'v5.1.0@76cf21551652b14d80abf13243159fbdf4bbef22',
  'symfony/web-profiler-bundle' => 'v4.4.9@5e7ed9eb31c1f083e6e70a1dcb41643ef7bcd60b',
  'symfony/yaml' => 'v4.4.9@c2d2cc66e892322cfcc03f8f12f8340dbd7a3f8a',
  'terminal42/escargot' => '0.5.9@111eaa32f8ac069e6dab22f9f2024052778a6b1b',
  'terminal42/service-annotation-bundle' => '1.0.0@c4b43132ae8edb0c0ec06e8fc1702f1578518489',
  'toflar/psr6-symfony-http-cache-store' => '2.3.1@b6ef1981efa3beafa5d960665f1d31cff17497f8',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'ua-parser/uap-php' => 'v3.9.8@fde0bd76ebd21cebfabc90a3a0d927754cb4f739',
  'webignition/disallowed-character-terminated-string' => '2.0@1c35b8bacbb2e76837c0aa8538dc2468a1f10e6e',
  'webignition/robots-txt-file' => '3.0@51bd7b1045348d94177cf6b21415385bf0923fa6',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'wikimedia/less.php' => '1.8.2@e238ad228d74b6ffd38209c799b34e9826909266',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}