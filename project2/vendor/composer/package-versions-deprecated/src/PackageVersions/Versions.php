<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.1@9e07bb1ff35d35d9ec4597b79e5d05502d7d4d43',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'laminas/laminas-code' => '3.5.1@b549b70c0bb6e935d497f84f750c82653326ac77',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'ocramius/proxy-manager' => '2.10.0@f65ae0f9dcbdd9d6ad3abb721a9e09c3d7d868a4',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/cache' => 'v5.1.8@d7bc33e9f9028f49f87057e7944c076d9593f046',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.8@11baeefa4c179d6908655a7b6be728f62367c193',
  'symfony/console' => 'v5.1.8@e0b2c29c0fa6a69089209bbe8fcff4df2a313d0e',
  'symfony/dependency-injection' => 'v5.1.8@829ca6bceaf68036a123a13a979f3c89289eae78',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.9@f8824e9c5adf3040fd64254e4d453fbc1bacf30c',
  'symfony/dotenv' => 'v5.1.8@29ac2a3e538da61780a769827c716738ce7accbb',
  'symfony/error-handler' => 'v5.1.8@a154f2b12fd1ec708559ba73ed58bd1304e55718',
  'symfony/event-dispatcher' => 'v5.1.8@26f4edae48c913fc183a3da0553fe63bdfbd361a',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.1.8@df08650ea7aee2d925380069c131a66124d79177',
  'symfony/finder' => 'v5.1.8@e70eb5a69c2ff61ea135a13d2266e8914a67b3a0',
  'symfony/flex' => 'v1.9.10@7335ec033995aa34133e621627333368f260b626',
  'symfony/form' => 'v5.1.9@56847a7c9df55341b6e99ec8ba8a097e9f66be73',
  'symfony/framework-bundle' => 'v5.1.8@b5f961afc6cd1923c49cac0993c65bf5eee27d86',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.1.8@a2860ec970404b0233ab1e59e0568d3277d32b6f',
  'symfony/http-kernel' => 'v5.1.8@a13b3c4d994a4fd051f4c6800c5e33c9508091dd',
  'symfony/intl' => 'v5.1.9@eaac169bf64d307d48daef7e349729d670df6659',
  'symfony/monolog-bridge' => 'v5.1.8@0c507eddb704a3154b53f066cc0b587c4586c868',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v5.1.9@c6a02905e4ffc7a1498e8ee019db2b477cd1cc02',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v5.1.9@d979b802a230cce0e7ff0d60e643c5d74edb2daf',
  'symfony/property-info' => 'v5.1.9@5bc012adfe3d365db3cec3b050513950b19966b3',
  'symfony/routing' => 'v5.1.8@d6ceee2a37b61b41079005207bf37746d1bfe71f',
  'symfony/security-core' => 'v5.1.9@a6d771e97bf3886e3ff5bdcf93f358e81bd873b4',
  'symfony/security-csrf' => 'v5.1.9@d98a521e3c7ffa15c142e8b1e68a55fdeb58d4b7',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.9@fcda7f14c3b39d33f9c788aea9afb1b5f5c288c6',
  'symfony/string' => 'v5.1.8@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.8@874735a8c97963af2009e0eaee55b17fc0846db2',
  'symfony/twig-bundle' => 'v5.1.8@370bb30a9e8dc2b0c29791eec300b0b529bd783f',
  'symfony/validator' => 'v5.1.9@acf84937b932fe575e4e4892eecee5a6c5ca8b78',
  'symfony/var-dumper' => 'v5.1.8@4e13f3fcefb1fcaaa5efb5403581406f4e840b9a',
  'symfony/var-exporter' => 'v5.1.8@b4048bfc6248413592462c029381bdb2f7b6525f',
  'symfony/yaml' => 'v5.1.8@f284e032c3cefefb9943792132251b79a6127ca6',
  'twig/extra-bundle' => 'v3.1.1@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/maker-bundle' => 'v1.24.2@87620ef23319ebbdfc5b51dd6b6e7d12003f4564',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
