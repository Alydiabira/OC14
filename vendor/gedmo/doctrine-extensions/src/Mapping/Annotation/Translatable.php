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
 * Translatable annotation for Translatable behavioral extension
 *
 * @Annotation
 *
 * @NamedArgumentConstructor
 *
 * @Target("PROPERTY")
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
final class Translatable implements GedmoAnnotation
{
    use ForwardCompatibilityTrait;

    /** @var bool|null */
    public $fallback;

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [], ?bool $fallback = null)
    {
        if ([] !== $data) {
<<<<<<< HEAD
            @trigger_error(sprintf(
                'Passing an array as first argument to "%s()" is deprecated. Use named arguments instead.',
                __METHOD__
            ), E_USER_DEPRECATED);
=======
            Deprecation::trigger(
                'gedmo/doctrine-extensions',
                'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2253',
                'Passing an array as first argument to "%s()" is deprecated. Use named arguments instead.',
                __METHOD__
            );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $args = func_get_args();

            $this->fallback = $this->getAttributeValue($data, 'fallback', $args, 1, $fallback);

            return;
        }

        $this->fallback = $fallback;
    }
}
