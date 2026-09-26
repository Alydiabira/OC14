<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\KernelEvents;
<<<<<<< HEAD
=======
use Symfony\Component\Serializer\Exception\InvalidArgumentException as SerializerInvalidArgumentException;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\Exception\PartialDenormalizationException;
use Symfony\Component\Serializer\Exception\UnsupportedFormatException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Exception\ValidationFailedException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 *
 * @final
 */
class RequestPayloadValueResolver implements ValueResolverInterface, EventSubscriberInterface
{
    /**
<<<<<<< HEAD
     * @see \Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT
     * @see DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS
     */
    private const CONTEXT_DENORMALIZE = [
        'disable_type_enforcement' => true,
=======
     * @see DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS
     */
    private const CONTEXT_DENORMALIZE = [
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'collect_denormalization_errors' => true,
    ];

    /**
     * @see DenormalizerInterface::COLLECT_DENORMALIZATION_ERRORS
     */
    private const CONTEXT_DESERIALIZE = [
        'collect_denormalization_errors' => true,
    ];

    public function __construct(
        private readonly SerializerInterface&DenormalizerInterface $serializer,
        private readonly ?ValidatorInterface $validator = null,
        private readonly ?TranslatorInterface $translator = null,
    ) {
    }

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $attribute = $argument->getAttributesOfType(MapQueryString::class, ArgumentMetadata::IS_INSTANCEOF)[0]
            ?? $argument->getAttributesOfType(MapRequestPayload::class, ArgumentMetadata::IS_INSTANCEOF)[0]
            ?? null;

        if (!$attribute) {
            return [];
        }

        if ($argument->isVariadic()) {
<<<<<<< HEAD
            throw new \LogicException(sprintf('Mapping variadic argument "$%s" is not supported.', $argument->getName()));
=======
            throw new \LogicException(\sprintf('Mapping variadic argument "$%s" is not supported.', $argument->getName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $attribute->metadata = $argument;

        return [$attribute];
    }

    public function onKernelControllerArguments(ControllerArgumentsEvent $event): void
    {
        $arguments = $event->getArguments();

        foreach ($arguments as $i => $argument) {
            if ($argument instanceof MapQueryString) {
                $payloadMapper = 'mapQueryString';
                $validationFailedCode = $argument->validationFailedStatusCode;
            } elseif ($argument instanceof MapRequestPayload) {
                $payloadMapper = 'mapRequestPayload';
                $validationFailedCode = $argument->validationFailedStatusCode;
            } else {
                continue;
            }
            $request = $event->getRequest();

            if (!$type = $argument->metadata->getType()) {
<<<<<<< HEAD
                throw new \LogicException(sprintf('Could not resolve the "$%s" controller argument: argument should be typed.', $argument->metadata->getName()));
=======
                throw new \LogicException(\sprintf('Could not resolve the "$%s" controller argument: argument should be typed.', $argument->metadata->getName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if ($this->validator) {
                $violations = new ConstraintViolationList();
                try {
                    $payload = $this->$payloadMapper($request, $type, $argument);
                } catch (PartialDenormalizationException $e) {
<<<<<<< HEAD
                    $trans = $this->translator ? $this->translator->trans(...) : fn ($m, $p) => strtr($m, $p);
=======
                    $trans = $this->translator ? $this->translator->trans(...) : static fn ($m, $p) => strtr($m, $p);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    foreach ($e->getErrors() as $error) {
                        $parameters = [];
                        $template = 'This value was of an unexpected type.';
                        if ($expectedTypes = $error->getExpectedTypes()) {
                            $template = 'This value should be of type {{ type }}.';
                            $parameters['{{ type }}'] = implode('|', $expectedTypes);
                        }
                        if ($error->canUseMessageForUser()) {
                            $parameters['hint'] = $error->getMessage();
                        }
                        $message = $trans($template, $parameters, 'validators');
                        $violations->add(new ConstraintViolation($message, $template, $parameters, null, $error->getPath(), null));
                    }
                    $payload = $e->getData();
<<<<<<< HEAD
=======
                } catch (SerializerInvalidArgumentException $e) {
                    $violations->add(new ConstraintViolation($e->getMessage(), $e->getMessage(), [], null, '', null));
                    $payload = null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                if (null !== $payload && !\count($violations)) {
                    $violations->addAll($this->validator->validate($payload, null, $argument->validationGroups ?? null));
                }

                if (\count($violations)) {
                    throw new HttpException($validationFailedCode, implode("\n", array_map(static fn ($e) => $e->getMessage(), iterator_to_array($violations))), new ValidationFailedException($payload, $violations));
                }
            } else {
                try {
                    $payload = $this->$payloadMapper($request, $type, $argument);
                } catch (PartialDenormalizationException $e) {
                    throw new HttpException($validationFailedCode, implode("\n", array_map(static fn ($e) => $e->getMessage(), $e->getErrors())), $e);
<<<<<<< HEAD
=======
                } catch (SerializerInvalidArgumentException $e) {
                    throw new HttpException($validationFailedCode, $e->getMessage(), $e);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }

            if (null === $payload) {
                $payload = match (true) {
                    $argument->metadata->hasDefaultValue() => $argument->metadata->getDefaultValue(),
                    $argument->metadata->isNullable() => null,
<<<<<<< HEAD
                    default => throw new HttpException($validationFailedCode)
=======
                    default => throw new HttpException($validationFailedCode),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };
            }

            $arguments[$i] = $payload;
        }

        $event->setArguments($arguments);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onKernelControllerArguments',
        ];
    }

    private function mapQueryString(Request $request, string $type, MapQueryString $attribute): ?object
    {
        if (!$data = $request->query->all()) {
            return null;
        }

<<<<<<< HEAD
        return $this->serializer->denormalize($data, $type, null, $attribute->serializationContext + self::CONTEXT_DENORMALIZE);
=======
        return $this->serializer->denormalize($data, $type, 'csv', $attribute->serializationContext + self::CONTEXT_DENORMALIZE);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function mapRequestPayload(Request $request, string $type, MapRequestPayload $attribute): ?object
    {
<<<<<<< HEAD
=======
        if ('' === $data = $request->request->all() ?: $request->getContent()) {
            return null;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (null === $format = $request->getContentTypeFormat()) {
            throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, 'Unsupported format.');
        }

        if ($attribute->acceptFormat && !\in_array($format, (array) $attribute->acceptFormat, true)) {
<<<<<<< HEAD
            throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, sprintf('Unsupported format, expects "%s", but "%s" given.', implode('", "', (array) $attribute->acceptFormat), $format));
        }

        if ($data = $request->request->all()) {
            return $this->serializer->denormalize($data, $type, null, $attribute->serializationContext + self::CONTEXT_DENORMALIZE);
        }

        if ('' === $data = $request->getContent()) {
            return null;
=======
            throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, \sprintf('Unsupported format, expects "%s", but "%s" given.', implode('", "', (array) $attribute->acceptFormat), $format));
        }

        if (\is_array($data)) {
            return $this->serializer->denormalize($data, $type, self::hasNonStringScalar($data) ? $format : 'csv', $attribute->serializationContext + self::CONTEXT_DENORMALIZE);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ('form' === $format) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Request payload contains invalid "form" data.');
        }

        try {
            return $this->serializer->deserialize($data, $type, $format, self::CONTEXT_DESERIALIZE + $attribute->serializationContext);
        } catch (UnsupportedFormatException $e) {
<<<<<<< HEAD
            throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, sprintf('Unsupported format: "%s".', $format), $e);
        } catch (NotEncodableValueException $e) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, sprintf('Request payload contains invalid "%s" data.', $format), $e);
        }
    }
=======
            throw new HttpException(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, \sprintf('Unsupported format: "%s".', $format), $e);
        } catch (NotEncodableValueException $e) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, \sprintf('Request payload contains invalid "%s" data.', $format), $e);
        }
    }

    private static function hasNonStringScalar(array $data): bool
    {
        $stack = [$data];

        while ($stack) {
            foreach (array_pop($stack) as $v) {
                if (\is_array($v)) {
                    $stack[] = $v;
                } elseif (!\is_string($v)) {
                    return true;
                }
            }
        }

        return false;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
