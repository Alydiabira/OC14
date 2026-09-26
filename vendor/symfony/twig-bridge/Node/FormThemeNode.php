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

use Symfony\Component\Form\FormRenderer;
<<<<<<< HEAD
=======
use Twig\Attribute\FirstClassTwigCallableReady;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Attribute\YieldReady;
use Twig\Compiler;
use Twig\Node\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
final class FormThemeNode extends Node
{
    public function __construct(Node $form, Node $resources, int $lineno, ?string $tag = null, bool $only = false)
    {
<<<<<<< HEAD
        parent::__construct(['form' => $form, 'resources' => $resources], ['only' => $only], $lineno, $tag);
=======
        if (class_exists(FirstClassTwigCallableReady::class)) {
            parent::__construct(['form' => $form, 'resources' => $resources], ['only' => $only], $lineno);
        } else {
            parent::__construct(['form' => $form, 'resources' => $resources], ['only' => $only], $lineno, $tag);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this)
            ->write('$this->env->getRuntime(')
            ->string(FormRenderer::class)
            ->raw(')->setTheme(')
            ->subcompile($this->getNode('form'))
            ->raw(', ')
            ->subcompile($this->getNode('resources'))
            ->raw(', ')
            ->raw(false === $this->getAttribute('only') ? 'true' : 'false')
            ->raw(");\n");
    }
}
