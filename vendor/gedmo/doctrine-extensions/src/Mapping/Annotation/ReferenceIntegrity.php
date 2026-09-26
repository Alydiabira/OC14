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
 * ReferenceIntegrity annotation for ReferenceIntegrity behavioral extension
 *
 * @Annotation
 *
 * @NamedArgumentConstructor
 *
 * @Target("PROPERTY")
 *
 * @author Evert Harmeling <evert.harmeling@freshheads.com>
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
final class ReferenceIntegrity implements GedmoAnnotation
{
    use ForwardCompatibilityTrait;

    /** @var string|null */
    public $value;

    /**
     * @param string|array<string, mixed>|null $data
     */
    public function __construct($data = [], ?string $value = null)
    {
        if (is_string($data)) {
            $value = $data;
        } elseif ([] !== $data) {
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

            $this->value = $this->getAttributeValue($data, 'value', $args, 1, $value);

            return;
        }

        $this->value = $value;
    }
}
