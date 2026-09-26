<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer;

use Symfony\Component\Serializer\Encoder\ChainDecoder;
use Symfony\Component\Serializer\Encoder\ChainEncoder;
use Symfony\Component\Serializer\Encoder\ContextAwareDecoderInterface;
use Symfony\Component\Serializer\Encoder\ContextAwareEncoderInterface;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Exception\PartialDenormalizationException;
use Symfony\Component\Serializer\Exception\UnsupportedFormatException;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Serializer serializes and deserializes data.
 *
 * objects are turned into arrays by normalizers.
 * arrays are turned into various output formats by encoders.
 *
 *     $serializer->serialize($obj, 'xml')
 *     $serializer->decode($data, 'xml')
 *     $serializer->denormalize($data, 'Class', 'xml')
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Serializer implements SerializerInterface, ContextAwareNormalizerInterface, ContextAwareDenormalizerInterface, ContextAwareEncoderInterface, ContextAwareDecoderInterface
{
    /**
     * Flag to control whether an empty array should be transformed to an
     * object (in JSON: {}) or to a list (in JSON: []).
     */
    public const EMPTY_ARRAY_AS_OBJECT = 'empty_array_as_object';

    private const SCALAR_TYPES = [
        'int' => true,
        'bool' => true,
        'float' => true,
        'string' => true,
    ];

    /**
     * @var ChainEncoder
     */
    protected $encoder;

    /**
     * @var ChainDecoder
     */
    protected $decoder;

    /**
     * @var array<string, array<string, array<bool>>>
     */
    private array $denormalizerCache = [];

    /**
     * @var array<string, array<string, array<bool>>>
     */
    private array $normalizerCache = [];

    /**
     * @param array<NormalizerInterface|DenormalizerInterface> $normalizers
     * @param array<EncoderInterface|DecoderInterface>         $encoders
<<<<<<< HEAD
=======
     * @param array<string, mixed>                             $defaultContext
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(
        private array $normalizers = [],
        array $encoders = [],
<<<<<<< HEAD
=======
        private array $defaultContext = [],
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
        foreach ($normalizers as $normalizer) {
            if ($normalizer instanceof SerializerAwareInterface) {
                $normalizer->setSerializer($this);
            }

            if ($normalizer instanceof DenormalizerAwareInterface) {
                $normalizer->setDenormalizer($this);
            }

            if ($normalizer instanceof NormalizerAwareInterface) {
                $normalizer->setNormalizer($this);
            }

            if (!($normalizer instanceof NormalizerInterface || $normalizer instanceof DenormalizerInterface)) {
<<<<<<< HEAD
                throw new InvalidArgumentException(sprintf('The class "%s" neither implements "%s" nor "%s".', get_debug_type($normalizer), NormalizerInterface::class, DenormalizerInterface::class));
=======
                throw new InvalidArgumentException(\sprintf('The class "%s" neither implements "%s" nor "%s".', get_debug_type($normalizer), NormalizerInterface::class, DenormalizerInterface::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $decoders = [];
        $realEncoders = [];
        foreach ($encoders as $encoder) {
            if ($encoder instanceof SerializerAwareInterface) {
                $encoder->setSerializer($this);
            }
            if ($encoder instanceof DecoderInterface) {
                $decoders[] = $encoder;
            }
            if ($encoder instanceof EncoderInterface) {
                $realEncoders[] = $encoder;
            }

            if (!($encoder instanceof EncoderInterface || $encoder instanceof DecoderInterface)) {
<<<<<<< HEAD
                throw new InvalidArgumentException(sprintf('The class "%s" neither implements "%s" nor "%s".', get_debug_type($encoder), EncoderInterface::class, DecoderInterface::class));
=======
                throw new InvalidArgumentException(\sprintf('The class "%s" neither implements "%s" nor "%s".', get_debug_type($encoder), EncoderInterface::class, DecoderInterface::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
        $this->encoder = new ChainEncoder($realEncoders);
        $this->decoder = new ChainDecoder($decoders);
    }

    final public function serialize(mixed $data, string $format, array $context = []): string
    {
        if (!$this->supportsEncoding($format, $context)) {
<<<<<<< HEAD
            throw new UnsupportedFormatException(sprintf('Serialization for the format "%s" is not supported.', $format));
=======
            throw new UnsupportedFormatException(\sprintf('Serialization for the format "%s" is not supported.', $format));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($this->encoder->needsNormalization($format, $context)) {
            $data = $this->normalize($data, $format, $context);
        }

        return $this->encode($data, $format, $context);
    }

    final public function deserialize(mixed $data, string $type, string $format, array $context = []): mixed
    {
        if (!$this->supportsDecoding($format, $context)) {
<<<<<<< HEAD
            throw new UnsupportedFormatException(sprintf('Deserialization for the format "%s" is not supported.', $format));
=======
            throw new UnsupportedFormatException(\sprintf('Deserialization for the format "%s" is not supported.', $format));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $data = $this->decode($data, $format, $context);

        return $this->denormalize($data, $type, $format, $context);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        // If a normalizer supports the given data, use it
        if ($normalizer = $this->getNormalizer($data, $format, $context)) {
            return $normalizer->normalize($data, $format, $context);
        }

        if (null === $data || \is_scalar($data)) {
            return $data;
        }

<<<<<<< HEAD
        if (\is_array($data) && !$data && ($context[self::EMPTY_ARRAY_AS_OBJECT] ?? false)) {
=======
        if (\is_array($data) && !$data && ($context[self::EMPTY_ARRAY_AS_OBJECT] ?? $this->defaultContext[self::EMPTY_ARRAY_AS_OBJECT] ?? false)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            return new \ArrayObject();
        }

        if (is_iterable($data)) {
<<<<<<< HEAD
            if ($data instanceof \Countable && ($context[AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS] ?? false) && !\count($data)) {
=======
            if ($data instanceof \Countable && ($context[AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS] ?? $this->defaultContext[AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS] ?? false) && !\count($data)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                return new \ArrayObject();
            }

            $normalized = [];
            foreach ($data as $key => $val) {
                $normalized[$key] = $this->normalize($val, $format, $context);
            }

            return $normalized;
        }

        if (\is_object($data)) {
            if (!$this->normalizers) {
                throw new LogicException('You must register at least one normalizer to be able to normalize objects.');
            }

<<<<<<< HEAD
            throw new NotNormalizableValueException(sprintf('Could not normalize object of type "%s", no supporting normalizer found.', get_debug_type($data)));
        }

        throw new NotNormalizableValueException('An unexpected value could not be normalized: '.(!\is_resource($data) ? var_export($data, true) : sprintf('"%s" resource', get_resource_type($data))));
=======
            throw new NotNormalizableValueException(\sprintf('Could not normalize object of type "%s", no supporting normalizer found.', get_debug_type($data)));
        }

        throw new NotNormalizableValueException('An unexpected value could not be normalized: '.(!\is_resource($data) ? var_export($data, true) : \sprintf('"%s" resource', get_resource_type($data))));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @throws NotNormalizableValueException
     * @throws PartialDenormalizationException Occurs when one or more properties of $type fails to denormalize
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($context[DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS], $context['not_normalizable_value_exceptions'])) {
            throw new LogicException('Passing a value for "not_normalizable_value_exceptions" context key is not allowed.');
        }

        $normalizer = $this->getDenormalizer($data, $type, $format, $context);

        // Check for a denormalizer first, e.g. the data is wrapped
        if (!$normalizer && isset(self::SCALAR_TYPES[$type])) {
            if (!('is_'.$type)($data)) {
<<<<<<< HEAD
                throw NotNormalizableValueException::createForUnexpectedDataType(sprintf('Data expected to be of type "%s" ("%s" given).', $type, get_debug_type($data)), $data, [$type], $context['deserialization_path'] ?? null, true);
=======
                throw NotNormalizableValueException::createForUnexpectedDataType(\sprintf('Data expected to be of type "%s" ("%s" given).', $type, get_debug_type($data)), $data, [$type], $context['deserialization_path'] ?? null, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return $data;
        }

        if (!$this->normalizers) {
            throw new LogicException('You must register at least one normalizer to be able to denormalize objects.');
        }

        if (!$normalizer) {
<<<<<<< HEAD
            throw new NotNormalizableValueException(sprintf('Could not denormalize object of type "%s", no supporting normalizer found.', $type));
        }

        if (isset($context[DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS])) {
=======
            throw new NotNormalizableValueException(\sprintf('Could not denormalize object of type "%s", no supporting normalizer found.', $type));
        }

        if ((isset($context[DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS]) || isset($this->defaultContext[DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS])) && !isset($context['not_normalizable_value_exceptions'])) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            unset($context[DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS]);
            $context['not_normalizable_value_exceptions'] = [];
            $errors = &$context['not_normalizable_value_exceptions'];
            $denormalized = $normalizer->denormalize($data, $type, $format, $context);

            if ($errors) {
                // merge errors so that one path has only one error
                $uniqueErrors = [];
                foreach ($errors as $error) {
                    if (null === $error->getPath()) {
                        $uniqueErrors[] = $error;
                        continue;
                    }

<<<<<<< HEAD
                    $uniqueErrors[$error->getPath()] = $uniqueErrors[$error->getPath()] ?? $error;
=======
                    $uniqueErrors[$error->getPath()] ??= $error;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                throw new PartialDenormalizationException($denormalized, array_values($uniqueErrors));
            }

            return $denormalized;
        }

        return $normalizer->denormalize($data, $type, $format, $context);
    }

    public function getSupportedTypes(?string $format): array
    {
        return ['*' => false];
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return null !== $this->getNormalizer($data, $format, $context);
    }

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return isset(self::SCALAR_TYPES[$type]) || null !== $this->getDenormalizer($data, $type, $format, $context);
    }

    /**
     * Returns a matching normalizer.
     *
     * @param mixed       $data    Data to get the serializer for
     * @param string|null $format  Format name, present to give the option to normalizers to act differently based on formats
     * @param array       $context Options available to the normalizer
     */
    private function getNormalizer(mixed $data, ?string $format, array $context): ?NormalizerInterface
    {
        if (\is_object($data)) {
            $type = $data::class;
            $genericType = 'object';
        } else {
            $type = 'native-'.\gettype($data);
            $genericType = '*';
        }

<<<<<<< HEAD
        if (!isset($this->normalizerCache[$format][$type])) {
            $this->normalizerCache[$format][$type] = [];
=======
        if (!isset($this->normalizerCache[$format ?? ''][$type])) {
            $this->normalizerCache[$format ?? ''][$type] = [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            foreach ($this->normalizers as $k => $normalizer) {
                if (!$normalizer instanceof NormalizerInterface) {
                    continue;
                }

                if (!method_exists($normalizer, 'getSupportedTypes')) {
                    trigger_deprecation('symfony/serializer', '6.3', '"%s" should implement "NormalizerInterface::getSupportedTypes(?string $format): array".', $normalizer::class);

                    if (!$normalizer instanceof CacheableSupportsMethodInterface || !$normalizer->hasCacheableSupportsMethod()) {
<<<<<<< HEAD
                        $this->normalizerCache[$format][$type][$k] = false;
                    } elseif ($normalizer->supportsNormalization($data, $format, $context)) {
                        $this->normalizerCache[$format][$type][$k] = true;
=======
                        $this->normalizerCache[$format ?? ''][$type][$k] = false;
                    } elseif ($normalizer->supportsNormalization($data, $format, $context)) {
                        $this->normalizerCache[$format ?? ''][$type][$k] = true;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        break;
                    }

                    continue;
                }

                $supportedTypes = $normalizer->getSupportedTypes($format);

                foreach ($supportedTypes as $supportedType => $isCacheable) {
                    if (\in_array($supportedType, ['*', 'object'], true)
                        || $type !== $supportedType && ('object' !== $genericType || !is_subclass_of($type, $supportedType))
                    ) {
                        continue;
                    }

                    if (null === $isCacheable) {
                        unset($supportedTypes['*'], $supportedTypes['object']);
<<<<<<< HEAD
                    } elseif ($this->normalizerCache[$format][$type][$k] = $isCacheable && $normalizer->supportsNormalization($data, $format, $context)) {
=======
                    } elseif ($this->normalizerCache[$format ?? ''][$type][$k] = $isCacheable && $normalizer->supportsNormalization($data, $format, $context)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        break 2;
                    }

                    break;
                }

                if (null === $isCacheable = $supportedTypes[\array_key_exists($genericType, $supportedTypes) ? $genericType : '*'] ?? null) {
                    continue;
                }

<<<<<<< HEAD
                if ($this->normalizerCache[$format][$type][$k] ??= $isCacheable && $normalizer->supportsNormalization($data, $format, $context)) {
=======
                if ($this->normalizerCache[$format ?? ''][$type][$k] ??= $isCacheable && $normalizer->supportsNormalization($data, $format, $context)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    break;
                }
            }
        }

<<<<<<< HEAD
        foreach ($this->normalizerCache[$format][$type] as $k => $cached) {
=======
        foreach ($this->normalizerCache[$format ?? ''][$type] as $k => $cached) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $normalizer = $this->normalizers[$k];
            if ($cached || $normalizer->supportsNormalization($data, $format, $context)) {
                return $normalizer;
            }
        }

        return null;
    }

    /**
     * Returns a matching denormalizer.
     *
     * @param mixed       $data    Data to restore
     * @param string      $class   The expected class to instantiate
     * @param string|null $format  Format name, present to give the option to normalizers to act differently based on formats
     * @param array       $context Options available to the denormalizer
     */
    private function getDenormalizer(mixed $data, string $class, ?string $format, array $context): ?DenormalizerInterface
    {
<<<<<<< HEAD
        if (!isset($this->denormalizerCache[$format][$class])) {
            $this->denormalizerCache[$format][$class] = [];
=======
        if (!isset($this->denormalizerCache[$format ?? ''][$class])) {
            $this->denormalizerCache[$format ?? ''][$class] = [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $genericType = class_exists($class) || interface_exists($class, false) ? 'object' : '*';

            foreach ($this->normalizers as $k => $normalizer) {
                if (!$normalizer instanceof DenormalizerInterface) {
                    continue;
                }

                if (!method_exists($normalizer, 'getSupportedTypes')) {
                    trigger_deprecation('symfony/serializer', '6.3', '"%s" should implement "DenormalizerInterface::getSupportedTypes(?string $format): array".', $normalizer::class);

                    if (!$normalizer instanceof CacheableSupportsMethodInterface || !$normalizer->hasCacheableSupportsMethod()) {
<<<<<<< HEAD
                        $this->denormalizerCache[$format][$class][$k] = false;
                    } elseif ($normalizer->supportsDenormalization(null, $class, $format, $context)) {
                        $this->denormalizerCache[$format][$class][$k] = true;
=======
                        $this->denormalizerCache[$format ?? ''][$class][$k] = false;
                    } elseif ($normalizer->supportsDenormalization(null, $class, $format, $context)) {
                        $this->denormalizerCache[$format ?? ''][$class][$k] = true;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        break;
                    }

                    continue;
                }

                $supportedTypes = $normalizer->getSupportedTypes($format);

                $doesClassRepresentCollection = str_ends_with($class, '[]');

                foreach ($supportedTypes as $supportedType => $isCacheable) {
                    if (\in_array($supportedType, ['*', 'object'], true)
                        || $class !== $supportedType && ('object' !== $genericType || !is_subclass_of($class, $supportedType))
                        && !($doesClassRepresentCollection && str_ends_with($supportedType, '[]') && is_subclass_of(strstr($class, '[]', true), strstr($supportedType, '[]', true)))
                    ) {
                        continue;
                    }

                    if (null === $isCacheable) {
                        unset($supportedTypes['*'], $supportedTypes['object']);
<<<<<<< HEAD
                    } elseif ($this->denormalizerCache[$format][$class][$k] = $isCacheable && $normalizer->supportsDenormalization(null, $class, $format, $context)) {
=======
                    } elseif ($this->denormalizerCache[$format ?? ''][$class][$k] = $isCacheable && $normalizer->supportsDenormalization(null, $class, $format, $context)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        break 2;
                    }

                    break;
                }

                if (null === $isCacheable = $supportedTypes[\array_key_exists($genericType, $supportedTypes) ? $genericType : '*'] ?? null) {
                    continue;
                }

<<<<<<< HEAD
                if ($this->denormalizerCache[$format][$class][$k] ??= $isCacheable && $normalizer->supportsDenormalization(null, $class, $format, $context)) {
=======
                if ($this->denormalizerCache[$format ?? ''][$class][$k] ??= $isCacheable && $normalizer->supportsDenormalization(null, $class, $format, $context)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    break;
                }
            }
        }

<<<<<<< HEAD
        foreach ($this->denormalizerCache[$format][$class] as $k => $cached) {
=======
        foreach ($this->denormalizerCache[$format ?? ''][$class] as $k => $cached) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $normalizer = $this->normalizers[$k];
            if ($cached || $normalizer->supportsDenormalization($data, $class, $format, $context)) {
                return $normalizer;
            }
        }

        return null;
    }

    final public function encode(mixed $data, string $format, array $context = []): string
    {
        return $this->encoder->encode($data, $format, $context);
    }

    final public function decode(string $data, string $format, array $context = []): mixed
    {
        return $this->decoder->decode($data, $format, $context);
    }

    public function supportsEncoding(string $format, array $context = []): bool
    {
        return $this->encoder->supportsEncoding($format, $context);
    }

    public function supportsDecoding(string $format, array $context = []): bool
    {
        return $this->decoder->supportsDecoding($format, $context);
    }
}
