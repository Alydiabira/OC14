<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Context\Normalizer;

use Symfony\Component\Serializer\Context\ContextBuilderInterface;
use Symfony\Component\Serializer\Context\ContextBuilderTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\UidNormalizer;

/**
 * A helper providing autocompletion for available UidNormalizer options.
 *
 * @author Mathias Arlaud <mathias.arlaud@gmail.com>
 */
final class UidNormalizerContextBuilder implements ContextBuilderInterface
{
    use ContextBuilderTrait;

    /**
     * Configures the uuid format for normalization.
     *
     * @throws InvalidArgumentException
     */
    public function withNormalizationFormat(?string $normalizationFormat): static
    {
        if (null !== $normalizationFormat && !\in_array($normalizationFormat, UidNormalizer::NORMALIZATION_FORMATS, true)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "%s" normalization format is not valid.', $normalizationFormat));
=======
            throw new InvalidArgumentException(\sprintf('The "%s" normalization format is not valid.', $normalizationFormat));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $this->with(UidNormalizer::NORMALIZATION_FORMAT_KEY, $normalizationFormat);
    }
}
