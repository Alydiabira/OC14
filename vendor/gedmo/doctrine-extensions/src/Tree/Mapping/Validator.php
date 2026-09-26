<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tree\Mapping;

<<<<<<< HEAD
=======
use Doctrine\ORM\Mapping\FieldMapping;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Persistence\Mapping\ClassMetadata;
use Gedmo\Exception\InvalidMappingException;

/**
 * This is a validator for all mapping drivers for Tree
 * behavioral extension, containing methods to validate
 * mapping information
 *
 * @author Gustavo Falco <comfortablynumb84@gmail.com>
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @author <rocco@roccosportal.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class Validator
{
    /**
     * List of types which are valid for tree fields
     *
     * @var string[]
     */
    private const VALID_TYPES = [
        'integer',
        'smallint',
        'bigint',
        'int',
    ];

    /**
     * List of types which are valid for the path (materialized path strategy)
     *
     * @var string[]
     */
    private array $validPathTypes = [
        'string',
        'text',
    ];

    /**
     * List of types which are valid for the path source (materialized path strategy)
     *
     * @var string[]
     */
    private array $validPathSourceTypes = [
        'id',
        'integer',
        'smallint',
        'bigint',
        'string',
        'int',
        'float',
<<<<<<< HEAD
=======
        'uuid',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ];

    /**
     * List of types which are valid for the path hash (materialized path strategy)
     *
     * @var string[]
     */
    private array $validPathHashTypes = [
        'string',
    ];

    /**
     * List of types which are valid for the path source (materialized path strategy)
     *
     * @var string[]
     */
    private array $validRootTypes = [
        'integer',
        'smallint',
        'bigint',
        'int',
        'string',
        'guid',
    ];

    /**
     * Checks if $field type is valid
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    public function isValidField($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && in_array($mapping['type'], self::VALID_TYPES, true);
=======
        return $mapping && in_array($this->getMappingType($mapping), self::VALID_TYPES, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if $field type is valid for Path field
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    public function isValidFieldForPath($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && in_array($mapping['type'], $this->validPathTypes, true);
=======
        return $mapping && in_array($this->getMappingType($mapping), $this->validPathTypes, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if $field type is valid for PathSource field
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    public function isValidFieldForPathSource($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && in_array($mapping['type'], $this->validPathSourceTypes, true);
=======
        return $mapping && in_array($this->getMappingType($mapping), $this->validPathSourceTypes, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if $field type is valid for PathHash field
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    public function isValidFieldForPathHash($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && in_array($mapping['type'], $this->validPathHashTypes, true);
=======
        return $mapping && in_array($this->getMappingType($mapping), $this->validPathHashTypes, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if $field type is valid for LockTime field
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    public function isValidFieldForLockTime($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && ('date' === $mapping['type'] || 'datetime' === $mapping['type'] || 'timestamp' === $mapping['type']);
=======
        return $mapping && ('date' === $this->getMappingType($mapping) || 'datetime' === $this->getMappingType($mapping) || 'timestamp' === $this->getMappingType($mapping));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Checks if $field type is valid for Root field
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return bool
     */
    public function isValidFieldForRoot($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

<<<<<<< HEAD
        return $mapping && in_array($mapping['type'], $this->validRootTypes, true);
=======
        return $mapping && in_array($this->getMappingType($mapping), $this->validRootTypes, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Validates metadata for nested type tree
     *
<<<<<<< HEAD
     * @param ClassMetadata        $meta
     * @param array<string, mixed> $config
=======
     * @param ClassMetadata<object> $meta
     * @param array<string, mixed>  $config
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws InvalidMappingException
     *
     * @return void
     */
    public function validateNestedTreeMetadata($meta, array $config)
    {
        $missingFields = [];
        if (!isset($config['parent'])) {
            $missingFields[] = 'ancestor';
        }
        if (!isset($config['left'])) {
            $missingFields[] = 'left';
        }
        if (!isset($config['right'])) {
            $missingFields[] = 'right';
        }
        if ($missingFields) {
            throw new InvalidMappingException('Missing properties: '.implode(', ', $missingFields)." in class - {$meta->getName()}");
        }
    }

    /**
     * Validates metadata for closure type tree
     *
<<<<<<< HEAD
     * @param ClassMetadata        $meta
     * @param array<string, mixed> $config
=======
     * @param ClassMetadata<object> $meta
     * @param array<string, mixed>  $config
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws InvalidMappingException
     *
     * @return void
     */
    public function validateClosureTreeMetadata($meta, array $config)
    {
        $missingFields = [];
        if (!isset($config['parent'])) {
            $missingFields[] = 'ancestor';
        }
        if (!isset($config['closure'])) {
            $missingFields[] = 'closure class';
        }
        if ($missingFields) {
            throw new InvalidMappingException('Missing properties: '.implode(', ', $missingFields)." in class - {$meta->getName()}");
        }
    }

    /**
     * Validates metadata for materialized path type tree
     *
<<<<<<< HEAD
     * @param ClassMetadata        $meta
     * @param array<string, mixed> $config
=======
     * @param ClassMetadata<object> $meta
     * @param array<string, mixed>  $config
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws InvalidMappingException
     *
     * @return void
     */
    public function validateMaterializedPathTreeMetadata($meta, array $config)
    {
        $missingFields = [];
        if (!isset($config['parent'])) {
            $missingFields[] = 'ancestor';
        }
        if (!isset($config['path'])) {
            $missingFields[] = 'path';
        }
        if (!isset($config['path_source'])) {
            $missingFields[] = 'path_source';
        }
        if ($missingFields) {
            throw new InvalidMappingException('Missing properties: '.implode(', ', $missingFields)." in class - {$meta->getName()}");
        }
    }
<<<<<<< HEAD
=======

    /**
     * @param FieldMapping|array<string, scalar> $mapping
     */
    private function getMappingType($mapping): string
    {
        if ($mapping instanceof FieldMapping) {
            return $mapping->type;
        }

        return $mapping['type'];
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
