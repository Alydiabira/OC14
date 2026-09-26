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
use Gedmo\Sluggable\Handler\SlugHandlerInterface;

/**
 * SlugHandler annotation for Sluggable behavioral extension
 *
 * @Annotation
 *
 * @NamedArgumentConstructor
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::IS_REPEATABLE)]
final class SlugHandler implements GedmoAnnotation
{
    use ForwardCompatibilityTrait;

    /**
     * @phpstan-var string|class-string<SlugHandlerInterface>
     */
    public string $class = '';

    /**
     * @var array<SlugHandlerOption>|array<string, mixed>
     */
    public array $options = [];

    /**
     * @param array<string, mixed> $data
     *
     * @phpstan-param string|class-string<SlugHandlerInterface>     $class
     * @phpstan-param array<SlugHandlerOption>|array<string, mixed> $options
     */
    public function __construct(
        array $data = [],
        string $class = '',
        array $options = []
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
                'https://github.com/doctrine-extensions/DoctrineExtensions/pull/2379',
                'Passing an array as first argument to "%s()" is deprecated. Use named arguments instead.',
                __METHOD__
            );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $args = func_get_args();

            $this->class = $this->getAttributeValue($data, 'class', $args, 1, $class);
            $this->options = $this->getAttributeValue($data, 'options', $args, 2, $options);

            return;
        }

        $this->class = $class;
        $this->options = $options;
    }
}
