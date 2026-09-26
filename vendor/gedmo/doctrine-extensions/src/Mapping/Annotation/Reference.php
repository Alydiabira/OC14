<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Mapping\Annotation;

use Doctrine\Common\Annotations\Annotation;
<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Gedmo\Mapping\Annotation\Annotation as GedmoAnnotation;

/**
 * Reference annotation for ORM -> ODM references extension
 * to be user like "@ReferenceMany(type="entity", class="MyEntity", identifier="entity_id")"
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * @Annotation
 */
abstract class Reference implements GedmoAnnotation
{
    use ForwardCompatibilityTrait;

    /**
     * @var string|null
     *
     * @phpstan-var 'entity'|'document'|null
     */
    public $type;

    /**
     * @var string|null
     *
     * @phpstan-var class-string|null
     */
    public $class;

    /**
     * @var string|null
     */
    public $identifier;

    /**
     * @var string|null
     */
    public $mappedBy;

    /**
     * @var string|null
     */
    public $inversedBy;

    /**
     * @param array<string, mixed> $data
     *
     * @phpstan-param class-string|null $class
     */
    public function __construct(
        array $data = [],
        ?string $type = null,
        ?string $class = null,
        ?string $identifier = null,
        ?string $mappedBy = null,
        ?string $inversedBy = null
    ) {
        if ([] !== $data) {
<<<<<<< HEAD
            @trigger_error(sprintf(
                'Passing an array as first argument to "%s()" is deprecated. Use named arguments instead.',
                __METHOD__
            ), E_USER_DEPRECATED);
=======
            Deprecation::trigger(
                'gedmo/doctrine-extensions',
                'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2389',
                'Passing an array as first argument to "%s()" is deprecated. Use named arguments instead.',
                __METHOD__
            );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $args = func_get_args();

            $this->type = $this->getAttributeValue($data, 'type', $args, 1, $type);
            $this->class = $this->getAttributeValue($data, 'class', $args, 2, $class);
            $this->identifier = $this->getAttributeValue($data, 'identifier', $args, 3, $identifier);
            $this->mappedBy = $this->getAttributeValue($data, 'mappedBy', $args, 4, $mappedBy);
            $this->inversedBy = $this->getAttributeValue($data, 'inversedBy', $args, 5, $inversedBy);

            return;
        }

        $this->type = $type;
        $this->class = $class;
        $this->identifier = $identifier;
        $this->mappedBy = $mappedBy;
        $this->inversedBy = $inversedBy;
    }
}
