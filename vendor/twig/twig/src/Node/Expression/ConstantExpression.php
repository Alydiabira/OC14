<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression;

use Twig\Compiler;

<<<<<<< HEAD
class ConstantExpression extends AbstractExpression
{
=======
/**
 * @final
 */
class ConstantExpression extends AbstractExpression implements SupportDefinedTestInterface, ReturnPrimitiveTypeInterface
{
    use SupportDefinedTestTrait;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct($value, int $lineno)
    {
        parent::__construct([], ['value' => $value], $lineno);
    }

    public function compile(Compiler $compiler): void
    {
<<<<<<< HEAD
        $compiler->repr($this->getAttribute('value'));
=======
        $compiler->repr($this->definedTest ? true : $this->getAttribute('value'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
