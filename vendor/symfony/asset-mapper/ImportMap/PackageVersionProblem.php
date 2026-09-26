<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AssetMapper\ImportMap;

final class PackageVersionProblem
{
    public function __construct(
        public readonly string $packageName,
        public readonly string $dependencyPackageName,
        public readonly string $requiredVersionConstraint,
<<<<<<< HEAD
        public readonly ?string $installedVersion
=======
        public readonly ?string $installedVersion,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }
}
