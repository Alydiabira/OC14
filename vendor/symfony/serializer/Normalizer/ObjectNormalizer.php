<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Normalizer;

<<<<<<< HEAD
=======
use Symfony\Component\PropertyAccess\Exception\InvalidArgumentException as PropertyAccessInvalidArgumentException;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyWriteInfo;
<<<<<<< HEAD
use Symfony\Component\Serializer\Annotation\Ignore;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Mapping\AttributeMetadata;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorResolverInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
=======
use Symfony\Component\Serializer\Attribute\Ignore;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorResolverInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\Mapping\Loader\AccessorCollisionResolverTrait;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

/**
 * Converts between objects and arrays using the PropertyAccess component.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final since Symfony 6.3
 */
class ObjectNormalizer extends AbstractObjectNormalizer
{
<<<<<<< HEAD
    private static $reflectionCache = [];

    protected $propertyAccessor;
    protected $propertyInfoExtractor;
=======
    use AccessorCollisionResolverTrait;

    private static $reflectionCache = [];
    private static $isReadableCache = [];
    private static $isWritableCache = [];

    protected $propertyAccessor;
    protected $propertyInfoExtractor;
    private $writeInfoExtractor;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    private readonly \Closure $objectClassResolver;

    public function __construct(?ClassMetadataFactoryInterface $classMetadataFactory = null, ?NameConverterInterface $nameConverter = null, ?PropertyAccessorInterface $propertyAccessor = null, ?PropertyTypeExtractorInterface $propertyTypeExtractor = null, ?ClassDiscriminatorResolverInterface $classDiscriminatorResolver = null, ?callable $objectClassResolver = null, array $defaultContext = [], ?PropertyInfoExtractorInterface $propertyInfoExtractor = null)
    {
        if (!class_exists(PropertyAccess::class)) {
            throw new LogicException('The ObjectNormalizer class requires the "PropertyAccess" component. Try running "composer require symfony/property-access".');
        }

        parent::__construct($classMetadataFactory, $nameConverter, $propertyTypeExtractor, $classDiscriminatorResolver, $objectClassResolver, $defaultContext);

        $this->propertyAccessor = $propertyAccessor ?: PropertyAccess::createPropertyAccessor();

        $this->objectClassResolver = ($objectClassResolver ?? static fn ($class) => \is_object($class) ? $class::class : $class)(...);
        $this->propertyInfoExtractor = $propertyInfoExtractor ?: new ReflectionExtractor();
<<<<<<< HEAD
=======
        $this->writeInfoExtractor = new ReflectionExtractor();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getSupportedTypes(?string $format): array
    {
        return ['object' => __CLASS__ === static::class || $this->hasCacheableSupportsMethod()];
    }

    /**
     * @deprecated since Symfony 6.3, use "getSupportedTypes()" instead
     */
    public function hasCacheableSupportsMethod(): bool
    {
        trigger_deprecation('symfony/serializer', '6.3', 'The "%s()" method is deprecated, implement "%s::getSupportedTypes()" instead.', __METHOD__, get_debug_type($this));

        return __CLASS__ === static::class;
    }

    protected function extractAttributes(object $object, ?string $format = null, array $context = []): array
    {
        if (\stdClass::class === $object::class) {
            return array_keys((array) $object);
        }

        // If not using groups, detect manually
        $attributes = [];

        // methods
        $class = ($this->objectClassResolver)($object);
        $reflClass = new \ReflectionClass($class);

        foreach ($reflClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflMethod) {
<<<<<<< HEAD
            if (
                0 !== $reflMethod->getNumberOfRequiredParameters()
                || $reflMethod->isStatic()
                || $reflMethod->isConstructor()
                || $reflMethod->isDestructor()
            ) {
                continue;
            }

            $name = $reflMethod->name;
            $attributeName = null;

            if (str_starts_with($name, 'get') || str_starts_with($name, 'has') || str_starts_with($name, 'can')) {
                // getters, hassers and canners
                $attributeName = substr($name, 3);

                if (!$reflClass->hasProperty($attributeName)) {
                    $attributeName = lcfirst($attributeName);
                }
            } elseif (str_starts_with($name, 'is')) {
                // issers
                $attributeName = substr($name, 2);

                if (!$reflClass->hasProperty($attributeName)) {
                    $attributeName = lcfirst($attributeName);
                }
=======
            $name = $reflMethod->name;
            $attributeName = $this->getAttributeNameFromAccessor($reflClass, $reflMethod, false);

            if ($this->hasPropertyForAccessor($reflMethod->getDeclaringClass(), $name) && (null === $attributeName || $this->hasAttributeNameCollision($reflClass, $attributeName, $name))) {
                $attributeName = $name;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if (null !== $attributeName && $this->isAllowedAttribute($object, $attributeName, $format, $context)) {
                $attributes[$attributeName] = true;
            }
        }

        // properties
        foreach ($reflClass->getProperties() as $reflProperty) {
            if (!$reflProperty->isPublic()) {
                continue;
            }

            if ($reflProperty->isStatic() || !$this->isAllowedAttribute($object, $reflProperty->name, $format, $context)) {
                continue;
            }

            $attributes[$reflProperty->name] = true;
        }

        return array_keys($attributes);
    }

    protected function getAttributeValue(object $object, string $attribute, ?string $format = null, array $context = []): mixed
    {
        $mapping = $this->classDiscriminatorResolver?->getMappingForMappedObject($object);

        return $attribute === $mapping?->getTypeProperty()
            ? $mapping
            : $this->propertyAccessor->getValue($object, $attribute);
    }

    /**
     * @return void
     */
    protected function setAttributeValue(object $object, string $attribute, mixed $value, ?string $format = null, array $context = [])
    {
        try {
            $this->propertyAccessor->setValue($object, $attribute, $value);
        } catch (NoSuchPropertyException) {
            // Properties not found are ignored
<<<<<<< HEAD
        }
    }

    protected function getAllowedAttributes(string|object $classOrObject, array $context, bool $attributesAsString = false): array|bool
    {
        if (false === $allowedAttributes = parent::getAllowedAttributes($classOrObject, $context, $attributesAsString)) {
            return false;
        }

        if (null !== $this->classDiscriminatorResolver) {
            $class = \is_object($classOrObject) ? $classOrObject::class : $classOrObject;
            if (null !== $discriminatorMapping = $this->classDiscriminatorResolver->getMappingForMappedObject($classOrObject)) {
                $allowedAttributes[] = $attributesAsString ? $discriminatorMapping->getTypeProperty() : new AttributeMetadata($discriminatorMapping->getTypeProperty());
            }

            if (null !== $discriminatorMapping = $this->classDiscriminatorResolver->getMappingForClass($class)) {
                $attributes = [];
                foreach ($discriminatorMapping->getTypesMapping() as $mappedClass) {
                    $attributes[] = parent::getAllowedAttributes($mappedClass, $context, $attributesAsString);
                }
                $allowedAttributes = array_merge($allowedAttributes, ...$attributes);
            }
        }

        return $allowedAttributes;
    }

=======
        } catch (PropertyAccessInvalidArgumentException $e) {
            throw NotNormalizableValueException::createForUnexpectedDataType(\sprintf('Failed to denormalize attribute "%s" value for class "%s": %s', $attribute, $object::class, $e->getMessage()), $value, ['unknown'], $context['deserialization_path'] ?? null, false, $e->getCode(), $e);
        }
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected function isAllowedAttribute($classOrObject, string $attribute, ?string $format = null, array $context = [])
    {
        if (!parent::isAllowedAttribute($classOrObject, $attribute, $format, $context)) {
            return false;
        }
<<<<<<< HEAD
        $class = \is_object($classOrObject) ? \get_class($classOrObject) : $classOrObject;

        if ($context['_read_attributes'] ?? true) {
            return $this->propertyInfoExtractor->isReadable($class, $attribute) || $this->hasAttributeAccessorMethod($class, $attribute);
        }

        return $this->propertyInfoExtractor->isWritable($class, $attribute)
            || ($writeInfo = $this->propertyInfoExtractor->getWriteInfo($class, $attribute)) && PropertyWriteInfo::TYPE_NONE !== $writeInfo->getType();
=======

        $class = \is_object($classOrObject) ? $classOrObject::class : $classOrObject;

        if ($this->isDiscriminatorTypeProperty($classOrObject, $attribute)) {
            return true;
        }

        if ($context['_read_attributes'] ?? true) {
            $context = array_intersect_key($context, ['enable_getter_setter_extraction' => true, 'enable_magic_methods_extraction' => true]);
            $cacheKey = $class.$attribute.hash('xxh128', serialize($context));

            return self::$isReadableCache[$cacheKey] ??= $this->propertyInfoExtractor->isReadable($class, $attribute, $context) || $this->hasAttributeAccessorMethod($class, $attribute) || (\is_object($classOrObject) && $this->propertyAccessor->isReadable($classOrObject, $attribute));
        }

        $context = array_intersect_key($context, ['enable_getter_setter_extraction' => true, 'enable_magic_methods_extraction' => true, 'enable_constructor_extraction' => true, 'enable_adder_remover_extraction' => true]);
        $cacheKey = $class.$attribute.hash('xxh128', serialize($context));

        if (isset(self::$isWritableCache[$cacheKey])) {
            return self::$isWritableCache[$cacheKey];
        }

        if (str_contains($attribute, '.') || str_contains($attribute, '[') || $this->propertyInfoExtractor->isWritable($class, $attribute, $context)) {
            return self::$isWritableCache[$cacheKey] = true;
        }

        $writeType = $this->writeInfoExtractor->getWriteInfo($class, $attribute, $context)?->getType();

        return self::$isWritableCache[$cacheKey] = !\in_array($writeType, [null, PropertyWriteInfo::TYPE_NONE], true)
            && (PropertyWriteInfo::TYPE_PROPERTY !== $writeType || !property_exists($class, $attribute));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function hasAttributeAccessorMethod(string $class, string $attribute): bool
    {
<<<<<<< HEAD
        if (!isset(self::$reflectionCache[$class])) {
            self::$reflectionCache[$class] = new \ReflectionClass($class);
        }

        $reflection = self::$reflectionCache[$class];
=======
        $reflection = self::$reflectionCache[$class] ??= new \ReflectionClass($class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (!$reflection->hasMethod($attribute)) {
            return false;
        }

        $method = $reflection->getMethod($attribute);

        return !$method->isStatic()
            && !$method->getAttributes(Ignore::class)
<<<<<<< HEAD
            && !$method->getNumberOfRequiredParameters();
=======
            && !$method->getNumberOfRequiredParameters()
            && !\in_array((string) $method->getReturnType(), ['void', 'never'], true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
