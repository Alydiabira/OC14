<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\Node;

<<<<<<< HEAD
=======
use Twig\Attribute\FirstClassTwigCallableReady;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Attribute\YieldReady;
use Twig\Compiler;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
final class TransDefaultDomainNode extends Node
{
    public function __construct(AbstractExpression $expr, int $lineno = 0, ?string $tag = null)
    {
<<<<<<< HEAD
        parent::__construct(['expr' => $expr], [], $lineno, $tag);
=======
        if (class_exists(FirstClassTwigCallableReady::class)) {
            parent::__construct(['expr' => $expr], [], $lineno);
        } else {
            parent::__construct(['expr' => $expr], [], $lineno, $tag);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        // noop as this node is just a marker for TranslationDefaultDomainNodeVisitor
    }
}
