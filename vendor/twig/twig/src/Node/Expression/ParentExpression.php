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

/**
 * Represents a parent node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParentExpression extends AbstractExpression
{
<<<<<<< HEAD
    public function __construct(string $name, int $lineno, ?string $tag = null)
    {
        parent::__construct([], ['output' => false, 'name' => $name], $lineno, $tag);
=======
    public function __construct(string $name, int $lineno)
    {
        parent::__construct([], ['output' => false, 'name' => $name], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        if ($this->getAttribute('output')) {
            $compiler
                ->addDebugInfo($this)
                ->write('yield from $this->yieldParentBlock(')
                ->string($this->getAttribute('name'))
                ->raw(", \$context, \$blocks);\n")
            ;
        } else {
            $compiler
                ->raw('$this->renderParentBlock(')
                ->string($this->getAttribute('name'))
                ->raw(', $context, $blocks)')
            ;
        }
    }
}
