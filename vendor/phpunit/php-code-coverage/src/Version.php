<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use function dirname;
use SebastianBergmann\Version as VersionId;

final class Version
{
    /**
     * @var string
     */
    private static $version;

    public static function id(): string
    {
        if (self::$version === null) {
<<<<<<< HEAD
            self::$version = (new VersionId('9.2.31', dirname(__DIR__)))->getVersion();
=======
            self::$version = (new VersionId('9.2.32', dirname(__DIR__)))->getVersion();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return self::$version;
    }
}
