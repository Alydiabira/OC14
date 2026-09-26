<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use ArrayAccess;

use function property_exists;

/** @template-implements ArrayAccess<string, mixed> */
final class JoinColumnMapping implements ArrayAccess
{
    use ArrayAccessImplementation;

<<<<<<< HEAD
=======
    public bool|null $deferrable         = null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public bool|null $unique             = null;
    public bool|null $quoted             = null;
    public string|null $fieldName        = null;
    public string|null $onDelete         = null;
    public string|null $columnDefinition = null;
    public bool|null $nullable           = null;
<<<<<<< HEAD
=======
    public string|null $foreignKeyName   = null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /** @var array<string, mixed>|null */
    public array|null $options = null;

    public function __construct(
        public string $name,
        public string $referencedColumnName,
    ) {
    }

    /**
     * @param array<string, mixed> $mappingArray
<<<<<<< HEAD
     * @psalm-param array{
     *     name: string,
     *     referencedColumnName: string,
=======
     * @phpstan-param array{
     *     name: string,
     *     referencedColumnName: string|null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *     unique?: bool|null,
     *     quoted?: bool|null,
     *     fieldName?: string|null,
     *     onDelete?: string|null,
     *     columnDefinition?: string|null,
     *     nullable?: bool|null,
<<<<<<< HEAD
=======
     *     foreignKeyName?: string|null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *     options?: array<string, mixed>|null,
     * } $mappingArray
     */
    public static function fromMappingArray(array $mappingArray): self
    {
        $mapping = new self($mappingArray['name'], $mappingArray['referencedColumnName']);
        foreach ($mappingArray as $key => $value) {
            if (property_exists($mapping, $key) && $value !== null) {
                $mapping->$key = $value;
            }
        }

        return $mapping;
    }

    /** @return list<string> */
    public function __sleep(): array
    {
        $serialized = [];

<<<<<<< HEAD
        foreach (['name', 'fieldName', 'onDelete', 'columnDefinition', 'referencedColumnName', 'options'] as $stringOrArrayKey) {
=======
        foreach (
            [
                'columnDefinition',
                'fieldName',
                'foreignKeyName',
                'name',
                'onDelete',
                'options',
                'referencedColumnName',
            ] as $stringOrArrayKey
        ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($this->$stringOrArrayKey !== null) {
                $serialized[] = $stringOrArrayKey;
            }
        }

<<<<<<< HEAD
        foreach (['unique', 'quoted', 'nullable'] as $boolKey) {
=======
        foreach (['deferrable', 'unique', 'quoted', 'nullable'] as $boolKey) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($this->$boolKey !== null) {
                $serialized[] = $boolKey;
            }
        }

        return $serialized;
    }
}
