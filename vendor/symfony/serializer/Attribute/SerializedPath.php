<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Attribute;

use Symfony\Component\PropertyAccess\Exception\InvalidPropertyPathException;
use Symfony\Component\PropertyAccess\PropertyPath;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;

/**
 * Annotation class for @SerializedPath().
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"PROPERTY", "METHOD"})
 *
 * @author Tobias Bönner <tobi@boenner.family>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
class SerializedPath
{
    private PropertyPath $serializedPath;

    public function __construct(string $serializedPath)
    {
        try {
            $this->serializedPath = new PropertyPath($serializedPath);
        } catch (InvalidPropertyPathException $pathException) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Parameter given to "%s" must be a valid property path.', self::class));
=======
            throw new InvalidArgumentException(\sprintf('Parameter given to "%s" must be a valid property path.', self::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function getSerializedPath(): PropertyPath
    {
        return $this->serializedPath;
    }
}

if (!class_exists(\Symfony\Component\Serializer\Annotation\SerializedPath::class, false)) {
    class_alias(SerializedPath::class, \Symfony\Component\Serializer\Annotation\SerializedPath::class);
}
