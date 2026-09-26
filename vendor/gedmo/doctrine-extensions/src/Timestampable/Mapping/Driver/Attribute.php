<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Timestampable\Mapping\Driver;

<<<<<<< HEAD
use Gedmo\Mapping\Driver\AttributeDriverInterface;

/**
 * This is an attribute mapping driver for Timestampable
 * behavioral extension. Used for extraction of extended
 * metadata from attributes specifically for Timestampable
 * extension.
 *
=======
use Gedmo\Exception\InvalidMappingException;
use Gedmo\Mapping\Annotation\Timestampable;
use Gedmo\Mapping\Driver\AbstractAnnotationDriver;

/**
 * Mapping driver for the timestampable extension which reads extended metadata from attributes on a timestampable class.
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Kevin Mian Kraiker <kevin.mian@gmail.com>
 *
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * @internal
 */
<<<<<<< HEAD
final class Attribute extends Annotation implements AttributeDriverInterface
{
=======
class Attribute extends AbstractAnnotationDriver
{
    /**
     * Mapping object for the timestampable extension.
     */
    public const TIMESTAMPABLE = Timestampable::class;

    /**
     * List of types which are valid for timestamp
     *
     * @var string[]
     */
    protected $validTypes = [
        'date',
        'date_immutable',
        'time',
        'time_immutable',
        'datetime',
        'datetime_immutable',
        'datetimetz',
        'datetimetz_immutable',
        'timestamp',
        'vardatetime',
        'integer',
    ];

    public function readExtendedMetadata($meta, array &$config)
    {
        $class = $this->getMetaReflectionClass($meta);

        // property annotations
        foreach ($class->getProperties() as $property) {
            if ($meta->isMappedSuperclass && !$property->isPrivate()
                || $meta->isInheritedField($property->name)
                || isset($meta->associationMappings[$property->name]['inherited'])
            ) {
                continue;
            }

            if ($timestampable = $this->reader->getPropertyAnnotation($property, self::TIMESTAMPABLE)) {
                \assert($timestampable instanceof Timestampable);

                $field = $property->getName();

                if (!$meta->hasField($field)) {
                    throw new InvalidMappingException("Unable to find timestampable [{$field}] as mapped property in entity - {$meta->getName()}");
                }

                if (!$this->isValidField($meta, $field)) {
                    throw new InvalidMappingException("Field - [{$field}] type is not valid and must be 'date', 'datetime' or 'time' in class - {$meta->getName()}");
                }

                if (!in_array($timestampable->on, ['update', 'create', 'change'], true)) {
                    throw new InvalidMappingException("Field - [{$field}] trigger 'on' is not one of [update, create, change] in class - {$meta->getName()}");
                }

                if ('change' === $timestampable->on) {
                    if (!isset($timestampable->field)) {
                        throw new InvalidMappingException("Missing parameters on property - {$field}, field must be set on [change] trigger in class - {$meta->getName()}");
                    }

                    if (is_array($timestampable->field) && isset($timestampable->value)) {
                        throw new InvalidMappingException('Timestampable extension does not support multiple value changeset detection yet.');
                    }

                    $field = [
                        'field' => $field,
                        'trackedField' => $timestampable->field,
                        'value' => $timestampable->value,
                    ];
                }

                // properties are unique and mapper checks that, no risk here
                $config[$timestampable->on][] = $field;
            }
        }

        return $config;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
