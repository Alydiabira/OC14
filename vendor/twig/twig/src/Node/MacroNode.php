<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;
use Twig\Error\SyntaxError;
<<<<<<< HEAD
=======
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\Variable\LocalVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Represents a macro node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class MacroNode extends Node
{
    public const VARARGS_NAME = 'varargs';

<<<<<<< HEAD
    public function __construct(string $name, Node $body, Node $arguments, int $lineno, ?string $tag = null)
    {
        foreach ($arguments as $argumentName => $argument) {
            if (self::VARARGS_NAME === $argumentName) {
                throw new SyntaxError(sprintf('The argument "%s" in macro "%s" cannot be defined because the variable "%s" is reserved for arbitrary arguments.', self::VARARGS_NAME, $name, self::VARARGS_NAME), $argument->getTemplateLine(), $argument->getSourceContext());
            }
        }

        parent::__construct(['body' => $body, 'arguments' => $arguments], ['name' => $name], $lineno, $tag);
=======
    /**
     * @param BodyNode        $body
     * @param ArrayExpression $arguments
     */
    public function __construct(string $name, Node $body, Node $arguments, int $lineno)
    {
        if (!$body instanceof BodyNode) {
            trigger_deprecation('twig/twig', '3.12', \sprintf('Not passing a "%s" instance as the "body" argument of the "%s" constructor is deprecated ("%s" given).', BodyNode::class, static::class, $body::class));
        }

        if (!$arguments instanceof ArrayExpression) {
            trigger_deprecation('twig/twig', '3.15', \sprintf('Not passing a "%s" instance as the "arguments" argument of the "%s" constructor is deprecated ("%s" given).', ArrayExpression::class, static::class, $arguments::class));

            $args = new ArrayExpression([], $arguments->getTemplateLine());
            foreach ($arguments as $n => $default) {
                $args->addElement($default, new LocalVariable($n, $default->getTemplateLine()));
            }
            $arguments = $args;
        }

        foreach ($arguments->getKeyValuePairs() as $pair) {
            if ("\u{035C}".self::VARARGS_NAME === $pair['key']->getAttribute('name')) {
                throw new SyntaxError(\sprintf('The argument "%s" in macro "%s" cannot be defined because the variable "%s" is reserved for arbitrary arguments.', self::VARARGS_NAME, $name, self::VARARGS_NAME), $pair['value']->getTemplateLine(), $pair['value']->getSourceContext());
            }
        }

        parent::__construct(['body' => $body, 'arguments' => $arguments], ['name' => $name], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this)
<<<<<<< HEAD
            ->write(sprintf('public function macro_%s(', $this->getAttribute('name')))
        ;

        $count = \count($this->getNode('arguments'));
        $pos = 0;
        foreach ($this->getNode('arguments') as $name => $default) {
            $compiler
                ->raw('$__'.$name.'__ = ')
                ->subcompile($default)
            ;

            if (++$pos < $count) {
                $compiler->raw(', ');
            }
        }

        if ($count) {
            $compiler->raw(', ');
        }

        $compiler
            ->raw('...$__varargs__')
            ->raw(")\n")
            ->write("{\n")
            ->indent()
            ->write("\$macros = \$this->macros;\n")
            ->write("\$context = \$this->env->mergeGlobals([\n")
            ->indent()
        ;

        foreach ($this->getNode('arguments') as $name => $default) {
            $compiler
                ->write('')
                ->string($name)
                ->raw(' => $__'.$name.'__')
=======
            ->write(\sprintf('public function macro_%s(', $this->getAttribute('name')))
        ;

        /** @var ArrayExpression $arguments */
        $arguments = $this->getNode('arguments');
        foreach ($arguments->getKeyValuePairs() as $pair) {
            $name = $pair['key'];
            $default = $pair['value'];
            $compiler
                ->subcompile($name)
                ->raw(' = ')
                ->subcompile($default)
                ->raw(', ')
            ;
        }

        $compiler
            ->raw('...$varargs')
            ->raw("): string|Markup\n")
            ->write("{\n")
            ->indent()
            ->write("\$macros = \$this->macros;\n")
            ->write("\$context = [\n")
            ->indent()
        ;

        foreach ($arguments->getKeyValuePairs() as $pair) {
            $name = $pair['key'];
            $var = $name->getAttribute('name');
            if (str_starts_with($var, "\u{035C}")) {
                $var = substr($var, \strlen("\u{035C}"));
            }
            $compiler
                ->write('')
                ->string($var)
                ->raw(' => ')
                ->subcompile($name)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                ->raw(",\n")
            ;
        }

<<<<<<< HEAD
        $node = new CaptureNode($this->getNode('body'), $this->getNode('body')->lineno, $this->getNode('body')->tag);
=======
        $node = new CaptureNode($this->getNode('body'), $this->getNode('body')->lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $compiler
            ->write('')
            ->string(self::VARARGS_NAME)
            ->raw(' => ')
<<<<<<< HEAD
            ->raw("\$__varargs__,\n")
            ->outdent()
            ->write("]);\n\n")
=======
            ->raw("\$varargs,\n")
            ->outdent()
            ->write("] + \$this->env->getGlobals();\n\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->write("\$blocks = [];\n\n")
            ->write('return ')
            ->subcompile($node)
            ->raw("\n")
            ->outdent()
            ->write("}\n\n")
        ;
    }
}
