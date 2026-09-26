<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use ArrayAccess;

use function array_map;
use function in_array;

/** @template-implements ArrayAccess<string, mixed> */
final class JoinTableMapping implements ArrayAccess
{
    use ArrayAccessImplementation;

<<<<<<< HEAD
    public bool|null $quoted = null;
=======
    public bool|null $quoted                  = null;
    public string|null $foreignKeyName        = null;
    public string|null $inverseForeignKeyName = null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /** @var list<JoinColumnMapping> */
    public array $joinColumns = [];

    /** @var list<JoinColumnMapping> */
    public array $inverseJoinColumns = [];

    /** @var array<string, mixed> */
    public array $options = [];

    public string|null $schema = null;

    public function __construct(public string $name)
    {
    }

    /**
     * @param mixed[] $mappingArray
<<<<<<< HEAD
     * @psalm-param array{
=======
     * @phpstan-param array{
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *    name: string,
     *    quoted?: bool|null,
     *    joinColumns?: mixed[],
     *    inverseJoinColumns?: mixed[],
     *    schema?: string|null,
<<<<<<< HEAD
=======
     *    foreignKeyName?: string|null,
     *    inverseForeignKeyName?: string|null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *    options?: array<string, mixed>
     * } $mappingArray
     */
    public static function fromMappingArray(array $mappingArray): self
    {
        $mapping = new self($mappingArray['name']);

        foreach (['quoted', 'schema', 'options'] as $key) {
            if (isset($mappingArray[$key])) {
                $mapping->$key = $mappingArray[$key];
            }
        }

<<<<<<< HEAD
=======
        if (isset($mappingArray['foreignKeyName'])) {
            $mapping->foreignKeyName = $mappingArray['foreignKeyName'];
        }

        if (isset($mappingArray['inverseForeignKeyName'])) {
            $mapping->inverseForeignKeyName = $mappingArray['inverseForeignKeyName'];
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (isset($mappingArray['joinColumns'])) {
            foreach ($mappingArray['joinColumns'] as $column) {
                $mapping->joinColumns[] = JoinColumnMapping::fromMappingArray($column);
            }
        }

        if (isset($mappingArray['inverseJoinColumns'])) {
            foreach ($mappingArray['inverseJoinColumns'] as $column) {
                $mapping->inverseJoinColumns[] = JoinColumnMapping::fromMappingArray($column);
            }
        }

        return $mapping;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (in_array($offset, ['joinColumns', 'inverseJoinColumns'], true)) {
            $joinColumns = [];
            foreach ($value as $column) {
                $joinColumns[] = JoinColumnMapping::fromMappingArray($column);
            }

            $value = $joinColumns;
        }

        $this->$offset = $value;
    }

    /** @return mixed[] */
    public function toArray(): array
    {
<<<<<<< HEAD
        $array = (array) $this;

        $toArray                     = static fn (JoinColumnMapping $column): array => (array) $column;
=======
        $array                       = (array) $this;
        $toArray                     = static function (JoinColumnMapping $column) {
            $array = (array) $column;

            unset($array['nullable']);

            return $array;
        };
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $array['joinColumns']        = array_map($toArray, $array['joinColumns']);
        $array['inverseJoinColumns'] = array_map($toArray, $array['inverseJoinColumns']);

        return $array;
    }

    /** @return list<string> */
    public function __sleep(): array
    {
        $serialized = [];

<<<<<<< HEAD
        foreach (['joinColumns', 'inverseJoinColumns', 'name', 'schema', 'options'] as $stringOrArrayKey) {
=======
        foreach (['joinColumns', 'inverseJoinColumns', 'name', 'schema', 'options', 'foreignKeyName', 'inverseForeignKeyName'] as $stringOrArrayKey) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($this->$stringOrArrayKey !== null) {
                $serialized[] = $stringOrArrayKey;
            }
        }

        foreach (['quoted'] as $boolKey) {
            if ($this->$boolKey) {
                $serialized[] = $boolKey;
            }
        }

        return $serialized;
    }
}
