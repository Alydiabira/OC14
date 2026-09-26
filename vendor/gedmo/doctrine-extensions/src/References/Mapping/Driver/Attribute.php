<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\References\Mapping\Driver;

<<<<<<< HEAD
use Gedmo\Mapping\Driver\AttributeDriverInterface;

/**
 * This is an attribute mapping driver for References
 * behavioral extension.
 *
 * @internal
 */
final class Attribute extends Annotation implements AttributeDriverInterface
{
=======
use Gedmo\Mapping\Annotation\Reference;
use Gedmo\Mapping\Annotation\ReferenceMany;
use Gedmo\Mapping\Annotation\ReferenceManyEmbed;
use Gedmo\Mapping\Annotation\ReferenceOne;
use Gedmo\Mapping\Driver\AbstractAnnotationDriver;

/**
 * Mapping driver for the references extension which reads extended metadata from attributes on a class with references.
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 *
 * @internal
 */
class Attribute extends AbstractAnnotationDriver
{
    /**
     * Mapping object declaring a field as having a reference to one object.
     */
    public const REFERENCE_ONE = ReferenceOne::class;

    /**
     * Mapping object declaring a field as having a reference to many objects.
     */
    public const REFERENCE_MANY = ReferenceMany::class;

    /**
     * Mapping object declaring a field as having a reference to an embedded collection of many objects.
     */
    public const REFERENCE_MANY_EMBED = ReferenceManyEmbed::class;

    /**
     * @var array<string, self::REFERENCE_ONE|self::REFERENCE_MANY|self::REFERENCE_MANY_EMBED>
     */
    private const ANNOTATIONS = [
        'referenceOne' => self::REFERENCE_ONE,
        'referenceMany' => self::REFERENCE_MANY,
        'referenceManyEmbed' => self::REFERENCE_MANY_EMBED,
    ];

    public function readExtendedMetadata($meta, array &$config)
    {
        $class = $meta->getReflectionClass();

        foreach (self::ANNOTATIONS as $key => $annotation) {
            $config[$key] = [];

            foreach ($class->getProperties() as $property) {
                if ($meta->isMappedSuperclass && !$property->isPrivate()
                    || $meta->isInheritedField($property->name)
                    || isset($meta->associationMappings[$property->name]['inherited'])
                ) {
                    continue;
                }

                if ($reference = $this->reader->getPropertyAnnotation($property, $annotation)) {
                    \assert($reference instanceof Reference);

                    $config[$key][$property->getName()] = [
                        'field' => $property->getName(),
                        'type' => $reference->type,
                        'class' => $reference->class,
                        'identifier' => $reference->identifier,
                        'mappedBy' => $reference->mappedBy,
                        'inversedBy' => $reference->inversedBy,
                    ];
                }
            }
        }

        return $config;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
