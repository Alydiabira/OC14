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

use Symfony\Component\Serializer\Exception\InvalidArgumentException;

/**
 * Annotation class for @SerializedName().
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"PROPERTY", "METHOD"})
 *
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
class SerializedName
{
    public function __construct(private readonly string $serializedName)
    {
        if ('' === $serializedName) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Parameter given to "%s" must be a non-empty string.', self::class));
=======
            throw new InvalidArgumentException(\sprintf('Parameter given to "%s" must be a non-empty string.', self::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function getSerializedName(): string
    {
        return $this->serializedName;
    }
}

if (!class_exists(\Symfony\Component\Serializer\Annotation\SerializedName::class, false)) {
    class_alias(SerializedName::class, \Symfony\Component\Serializer\Annotation\SerializedName::class);
}
