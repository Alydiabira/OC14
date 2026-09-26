<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use BackedEnum;
<<<<<<< HEAD
=======
use BcMath\Number;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use DateInterval;
use DateTime;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use ReflectionEnum;
use ReflectionNamedType;
use ReflectionProperty;

use function array_merge;
use function assert;
<<<<<<< HEAD
use function enum_exists;
use function is_a;

/** @psalm-type ScalarName = 'array'|'bool'|'float'|'int'|'string' */
=======
use function defined;
use function enum_exists;
use function is_a;

/** @phpstan-type ScalarName = 'array'|'bool'|'float'|'int'|'string' */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
final class DefaultTypedFieldMapper implements TypedFieldMapper
{
    /** @var array<class-string|ScalarName, class-string<Type>|string> $typedFieldMappings */
    private array $typedFieldMappings;

    private const DEFAULT_TYPED_FIELD_MAPPINGS = [
        DateInterval::class => Types::DATEINTERVAL,
        DateTime::class => Types::DATETIME_MUTABLE,
        DateTimeImmutable::class => Types::DATETIME_IMMUTABLE,
        'array' => Types::JSON,
        'bool' => Types::BOOLEAN,
        'float' => Types::FLOAT,
        'int' => Types::INTEGER,
        'string' => Types::STRING,
    ];

    /** @param array<class-string|ScalarName, class-string<Type>|string> $typedFieldMappings */
    public function __construct(array $typedFieldMappings = [])
    {
<<<<<<< HEAD
        $this->typedFieldMappings = array_merge(self::DEFAULT_TYPED_FIELD_MAPPINGS, $typedFieldMappings);
=======
        $defaultMappings = self::DEFAULT_TYPED_FIELD_MAPPINGS;
        if (defined(Types::class . '::NUMBER')) { // DBAL 4.3+
            $defaultMappings[Number::class] = Types::NUMBER;
        }

        $this->typedFieldMappings = array_merge($defaultMappings, $typedFieldMappings);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * {@inheritDoc}
     */
    public function validateAndComplete(array $mapping, ReflectionProperty $field): array
    {
        $type = $field->getType();

<<<<<<< HEAD
        if (
            ! isset($mapping['type'])
            && ($type instanceof ReflectionNamedType)
        ) {
            if (! $type->isBuiltin() && enum_exists($type->getName())) {
                $reflection = new ReflectionEnum($type->getName());
                if (! $reflection->isBacked()) {
                    throw MappingException::backedEnumTypeRequired(
                        $field->class,
                        $mapping['fieldName'],
                        $type->getName(),
                    );
                }

                assert(is_a($type->getName(), BackedEnum::class, true));
                $mapping['enumType'] = $type->getName();
                $type                = $reflection->getBackingType();

                assert($type instanceof ReflectionNamedType);
            }

            if (isset($this->typedFieldMappings[$type->getName()])) {
                $mapping['type'] = $this->typedFieldMappings[$type->getName()];
            }
=======
        if (! $type instanceof ReflectionNamedType) {
            return $mapping;
        }

        if (
            ! $type->isBuiltin()
            && enum_exists($type->getName())
            && (! isset($mapping['type']) || (
                defined('Doctrine\DBAL\Types\Types::ENUM')
                && $mapping['type'] === Types::ENUM
            ))
        ) {
            $reflection = new ReflectionEnum($type->getName());
            if (! $reflection->isBacked()) {
                throw MappingException::backedEnumTypeRequired(
                    $field->class,
                    $mapping['fieldName'],
                    $type->getName(),
                );
            }

            assert(is_a($type->getName(), BackedEnum::class, true));
            $mapping['enumType'] = $type->getName();
            $type                = $reflection->getBackingType();
        }

        if (isset($mapping['type'])) {
            return $mapping;
        }

        if (isset($this->typedFieldMappings[$type->getName()])) {
            $mapping['type'] = $this->typedFieldMappings[$type->getName()];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $mapping;
    }
}
