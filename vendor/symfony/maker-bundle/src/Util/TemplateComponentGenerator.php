<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Util;

<<<<<<< HEAD
=======
use Symfony\Bundle\MakerBundle\Util\ClassSource\Model\ClassData;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * @author Jesse Rushlow <jr@rushlow.dev>
 *
 * @internal
 */
final class TemplateComponentGenerator
{
<<<<<<< HEAD
    public function generateRouteForControllerMethod(string $routePath, string $routeName, array $methods = [], bool $indent = true, bool $trailingNewLine = true): string
    {
        $attribute = sprintf('%s#[Route(\'%s\', name: \'%s\'', $indent ? '    ' : null, $routePath, $routeName);
=======
    public function __construct(
        private bool $generateFinalClasses,
        private bool $generateFinalEntities,
        private string $rootNamespace,
    ) {
    }

    /**
     * @param string|null $routePath passing an empty string/null will create a route attribute without the "path" argument
     */
    public function generateRouteForControllerMethod(?string $routePath, string $routeName, array $methods = [], bool $indent = true, bool $trailingNewLine = true): string
    {
        if (!empty($routePath)) {
            $path = \sprintf('\'%s\', ', $routePath);
        }

        $attribute = \sprintf('%s#[Route(%sname: \'%s\'', $indent ? '    ' : null, $path ?? null, $routeName);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (!empty($methods)) {
            $attribute .= ', methods: [';

            foreach ($methods as $method) {
<<<<<<< HEAD
                $attribute .= sprintf('\'%s\', ', $method);
=======
                $attribute .= \sprintf('\'%s\', ', $method);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            $attribute = rtrim($attribute, ', ');

            $attribute .= ']';
        }

<<<<<<< HEAD
        $attribute .= sprintf(')]%s', $trailingNewLine ? "\n" : null);
=======
        $attribute .= \sprintf(')]%s', $trailingNewLine ? "\n" : null);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $attribute;
    }

    public function getPropertyType(ClassNameDetails $classNameDetails): ?string
    {
<<<<<<< HEAD
        return sprintf('%s ', $classNameDetails->getShortName());
=======
        return \sprintf('%s ', $classNameDetails->getShortName());
    }

    public function configureClass(ClassData $classMetadata): ClassData
    {
        $classMetadata->setRootNamespace($this->rootNamespace);

        if ($classMetadata->isEntity) {
            return $classMetadata->setIsFinal($this->generateFinalEntities);
        }

        return $classMetadata->setIsFinal($this->generateFinalClasses);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
