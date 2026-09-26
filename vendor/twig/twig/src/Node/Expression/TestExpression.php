<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression;

<<<<<<< HEAD
use Twig\Compiler;
use Twig\Node\Node;

class TestExpression extends CallExpression
{
    public function __construct(Node $node, string $name, ?Node $arguments, int $lineno)
    {
=======
use Twig\Attribute\FirstClassTwigCallableReady;
use Twig\Compiler;
use Twig\Node\CoercesChildrenToStringInterface;
use Twig\Node\NameDeprecation;
use Twig\Node\Node;
use Twig\TwigTest;

class TestExpression extends CallExpression implements ReturnBoolInterface, CoercesChildrenToStringInterface
{
    #[FirstClassTwigCallableReady]
    /**
     * @param AbstractExpression $node
     */
    public function __construct(Node $node, string|TwigTest $test, ?Node $arguments, int $lineno)
    {
        if (!$node instanceof AbstractExpression) {
            trigger_deprecation('twig/twig', '3.15', 'Not passing a "%s" instance to the "node" argument of "%s" is deprecated ("%s" given).', AbstractExpression::class, static::class, $node::class);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $nodes = ['node' => $node];
        if (null !== $arguments) {
            $nodes['arguments'] = $arguments;
        }

<<<<<<< HEAD
        parent::__construct($nodes, ['name' => $name], $lineno);
=======
        if ($test instanceof TwigTest) {
            $name = $test->getName();
        } else {
            $name = $test;
            trigger_deprecation('twig/twig', '3.12', 'Not passing an instance of "TwigTest" when creating a "%s" test of type "%s" is deprecated.', $name, static::class);
        }

        parent::__construct($nodes, ['name' => $name, 'type' => 'test'], $lineno);

        if ($test instanceof TwigTest) {
            $this->setAttribute('twig_callable', $test);
        }

        $this->deprecateAttribute('arguments', new NameDeprecation('twig/twig', '3.12'));
        $this->deprecateAttribute('callable', new NameDeprecation('twig/twig', '3.12'));
        $this->deprecateAttribute('is_variadic', new NameDeprecation('twig/twig', '3.12'));
        $this->deprecateAttribute('dynamic_name', new NameDeprecation('twig/twig', '3.12'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $name = $this->getAttribute('name');
<<<<<<< HEAD
        $test = $compiler->getEnvironment()->getTest($name);

        $this->setAttribute('name', $name);
        $this->setAttribute('type', 'test');
        $this->setAttribute('arguments', $test->getArguments());
        $this->setAttribute('callable', $test->getCallable());
        $this->setAttribute('is_variadic', $test->isVariadic());

        $this->compileCallable($compiler);
    }
=======
        if ($this->hasAttribute('twig_callable')) {
            $name = $this->getAttribute('twig_callable')->getName();
            if ($name !== $this->getAttribute('name')) {
                trigger_deprecation('twig/twig', '3.12', 'Changing the value of a "test" node in a NodeVisitor class is not supported anymore.');
                $this->removeAttribute('twig_callable');
            }
        }

        if (!$this->hasAttribute('twig_callable')) {
            $this->setAttribute('twig_callable', $compiler->getEnvironment()->getTest($this->getAttribute('name')));
        }

        $this->compileCallable($compiler);
    }

    public function getStringCoercedChildNames(): array
    {
        $names = [];

        // the `empty` test triggers an implicit string coercion through `CoreExtension::testEmpty()`
        if ('empty' === $this->getAttribute('name')) {
            $names[] = 'node';
        }

        // a test may coerce its arguments to string (the host PHP code is opaque to Twig)
        if ($this->hasNode('arguments')) {
            $names[] = 'arguments';
        }

        return $names;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
