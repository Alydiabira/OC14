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

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;

/**
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class BlockReferenceNode extends Node implements NodeOutputInterface
{
<<<<<<< HEAD
    public function __construct(string $name, int $lineno, ?string $tag = null)
    {
        parent::__construct([], ['name' => $name], $lineno, $tag);
=======
    public function __construct(string $name, int $lineno)
    {
        parent::__construct([], ['name' => $name], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this)
<<<<<<< HEAD
            ->write(sprintf("yield from \$this->unwrap()->yieldBlock('%s', \$context, \$blocks);\n", $this->getAttribute('name')))
=======
            ->write(\sprintf("yield from \$this->unwrap()->yieldBlock('%s', \$context, \$blocks);\n", $this->getAttribute('name')))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ;
    }
}
