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
 * Annotation class for @DiscriminatorMap().
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"CLASS"})
 *
 * @author Samuel Roze <samuel.roze@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class DiscriminatorMap
{
    public function __construct(
        private readonly string $typeProperty,
        private readonly array $mapping,
    ) {
        if (empty($typeProperty)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Parameter "typeProperty" given to "%s" cannot be empty.', static::class));
        }

        if (empty($mapping)) {
            throw new InvalidArgumentException(sprintf('Parameter "mapping" given to "%s" cannot be empty.', static::class));
=======
            throw new InvalidArgumentException(\sprintf('Parameter "typeProperty" given to "%s" cannot be empty.', static::class));
        }

        if (empty($mapping)) {
            throw new InvalidArgumentException(\sprintf('Parameter "mapping" given to "%s" cannot be empty.', static::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function getTypeProperty(): string
    {
        return $this->typeProperty;
    }

    public function getMapping(): array
    {
        return $this->mapping;
    }
}

if (!class_exists(\Symfony\Component\Serializer\Annotation\DiscriminatorMap::class, false)) {
    class_alias(DiscriminatorMap::class, \Symfony\Component\Serializer\Annotation\DiscriminatorMap::class);
}
