<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\NodeVisitor;

use Twig\Environment;
use Twig\Node\CheckSecurityCallNode;
use Twig\Node\CheckSecurityNode;
use Twig\Node\CheckToStringNode;
<<<<<<< HEAD
use Twig\Node\Expression\Binary\ConcatBinary;
=======
use Twig\Node\CoercesChildrenToStringInterface;
use Twig\Node\Expression\ArrayExpression;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Expression\Binary\RangeBinary;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Expression\FunctionExpression;
use Twig\Node\Expression\GetAttrExpression;
<<<<<<< HEAD
use Twig\Node\Expression\NameExpression;
use Twig\Node\ModuleNode;
use Twig\Node\Node;
use Twig\Node\PrintNode;
use Twig\Node\SetNode;
=======
use Twig\Node\Expression\OperatorEscapeInterface;
use Twig\Node\Expression\TestExpression;
use Twig\Node\Expression\Unary\SpreadUnary;
use Twig\Node\Expression\Variable\ContextVariable;
use Twig\Node\ModuleNode;
use Twig\Node\Node;
use Twig\Node\Nodes;
use Twig\TokenParser\TokenParserInterface;
use Twig\TwigCallableInterface;
use Twig\Util\CallableParameters;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class SandboxNodeVisitor implements NodeVisitorInterface
{
    private $inAModule = false;
    /** @var array<string, int> */
    private $tags;
    /** @var array<string, int> */
    private $filters;
    /** @var array<string, int> */
    private $functions;
<<<<<<< HEAD
    private $needsToStringWrap = false;
=======
    /** @var array<string, int> */
    private $tests;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function enterNode(Node $node, Environment $env): Node
    {
        if ($node instanceof ModuleNode) {
            $this->inAModule = true;
            $this->tags = [];
            $this->filters = [];
            $this->functions = [];
<<<<<<< HEAD

            return $node;
        } elseif ($this->inAModule) {
            // look for tags
            if ($node->getNodeTag() && !isset($this->tags[$node->getNodeTag()])) {
=======
            $this->tests = [];
        } elseif ($this->inAModule) {
            // look for tags
            if ($node->getNodeTag() && !isset($this->tags[$node->getNodeTag()]) && !$this->isTagAlwaysAllowedInSandbox($env, $node->getNodeTag())) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $this->tags[$node->getNodeTag()] = $node->getTemplateLine();
            }

            // look for filters
<<<<<<< HEAD
            if ($node instanceof FilterExpression && !isset($this->filters[$node->getNode('filter')->getAttribute('value')])) {
                $this->filters[$node->getNode('filter')->getAttribute('value')] = $node->getTemplateLine();
            }

            // look for functions
            if ($node instanceof FunctionExpression && !isset($this->functions[$node->getAttribute('name')])) {
                $this->functions[$node->getAttribute('name')] = $node->getTemplateLine();
            }

            // the .. operator is equivalent to the range() function
            if ($node instanceof RangeBinary && !isset($this->functions['range'])) {
                $this->functions['range'] = $node->getTemplateLine();
            }

            if ($node instanceof PrintNode) {
                $this->needsToStringWrap = true;
                $this->wrapNode($node, 'expr');
            }

            if ($node instanceof SetNode && !$node->getAttribute('capture')) {
                $this->needsToStringWrap = true;
            }

            // wrap outer nodes that can implicitly call __toString()
            if ($this->needsToStringWrap) {
                if ($node instanceof ConcatBinary) {
                    $this->wrapNode($node, 'left');
                    $this->wrapNode($node, 'right');
                }
                if ($node instanceof FilterExpression) {
                    $this->wrapNode($node, 'node');
                    $this->wrapArrayNode($node, 'arguments');
                }
                if ($node instanceof FunctionExpression) {
                    $this->wrapArrayNode($node, 'arguments');
                }
=======
            if ($node instanceof FilterExpression && !isset($this->filters[$name = $node->getAttribute('name')]) && !$this->isFilterAlwaysAllowedInSandbox($env, $node)) {
                $this->filters[$name] = $node->getTemplateLine();
            }

            // look for functions
            if ($node instanceof FunctionExpression && !isset($this->functions[$name = $node->getAttribute('name')]) && !$this->isFunctionAlwaysAllowedInSandbox($env, $node)) {
                $this->functions[$name] = $node->getTemplateLine();
            }

            // look for tests
            if ($node instanceof TestExpression && !isset($this->tests[$name = $node->getAttribute('name')]) && !$this->isTestAlwaysAllowedInSandbox($env, $node)) {
                $this->tests[$name] = $node->getTemplateLine();
            }

            // look for functions whose parser callable replaced the FunctionExpression
            // with a specialized node (e.g. `parent`, `block`, `attribute`); the
            // original function name was stashed by FunctionExpressionParser.
            if ($node->hasAttribute('sandboxed_function_name')) {
                $name = $node->getAttribute('sandboxed_function_name');
                if (!isset($this->functions[$name]) && !$this->isSandboxedFunctionAlwaysAllowedInSandbox($env, $node, $name)) {
                    $this->functions[$name] = $node->getTemplateLine();
                }
            }

            // the .. operator is equivalent to the range() function
            if ($node instanceof RangeBinary && !isset($this->functions['range']) && !$this->isFunctionNameAlwaysAllowedInSandbox($env, 'range')) {
                $this->functions['range'] = $node->getTemplateLine();
            }
        }

        // wrap children that the node itself will string-coerce at runtime;
        // applies to ModuleNode (`parent` slot for {% extends %}) too
        if ($this->inAModule && $node instanceof CoercesChildrenToStringInterface) {
            $params = CallableParameters::fromNode($node, $env);
            foreach ($node->getStringCoercedChildNames() as $childName) {
                // For Filter/Function/Test calls, consult the PHP callable
                // signature: skip wrapping arguments whose param type cannot
                // implicitly string-coerce (e.g. `int`, a `final` value object).
                if (null !== $params && 'arguments' === $childName) {
                    $this->wrapArguments($node, $params);

                    continue;
                }
                if (null !== $params && 'node' === $childName && $node instanceof FilterExpression) {
                    // The filter's input value maps to the first PHP parameter.
                    if (isset($params[0]) && CallableParameters::isStringCoercionSafe($params[0]->getType(), $params[0]->getDeclaringClass())) {
                        continue;
                    }
                }
                $this->wrapNode($node, $childName);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        return $node;
    }

    public function leaveNode(Node $node, Environment $env): ?Node
    {
        if ($node instanceof ModuleNode) {
            $this->inAModule = false;

<<<<<<< HEAD
            $node->setNode('constructor_end', new Node([new CheckSecurityCallNode(), $node->getNode('constructor_end')]));
            $node->setNode('class_end', new Node([new CheckSecurityNode($this->filters, $this->tags, $this->functions), $node->getNode('class_end')]));
        } elseif ($this->inAModule) {
            if ($node instanceof PrintNode || $node instanceof SetNode) {
                $this->needsToStringWrap = false;
            }
=======
            $node->setNode('constructor_end', new Nodes([new CheckSecurityCallNode(), $node->getNode('constructor_end')]));
            $node->setNode('class_end', new Nodes([new CheckSecurityNode($this->filters, $this->tags, $this->functions, $this->tests), $node->getNode('class_end')]));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $node;
    }

<<<<<<< HEAD
    private function wrapNode(Node $node, string $name): void
    {
        $expr = $node->getNode($name);
        if ($expr instanceof NameExpression || $expr instanceof GetAttrExpression) {
=======
    /**
     * Wraps each entry in the `arguments` slot only when the corresponding
     * PHP parameter type can implicitly string-coerce.
     *
     * @param list<\ReflectionParameter> $params parameters relative to the
     *                                           first template argument (for
     *                                           filters and tests: starting
     *                                           after the `node`/input
     *                                           parameter)
     */
    private function wrapArguments(Node $node, array $params): void
    {
        $arguments = $node->getNode('arguments');
        if (!$arguments instanceof Nodes && !$arguments instanceof ArrayExpression) {
            $this->wrapNode($node, 'arguments');

            return;
        }

        // Filters and tests pass their input value (`node`) as the first PHP
        // param, so their template arguments start at offset 1.
        $positional = \array_slice($params, $node->hasNode('node') ? 1 : 0);
        $variadic = null;
        $byName = [];
        foreach ($positional as $p) {
            if ($p->isVariadic()) {
                $variadic = $p;
                break;
            }
            $byName[$this->normalizeName($p->getName())] ??= $p;
        }

        $positionalIdx = 0;
        foreach ($arguments as $key => $_) {
            if (\is_int($key)) {
                $param = $positional[$positionalIdx] ?? $variadic;
                if (null !== $param && !$param->isVariadic()) {
                    ++$positionalIdx;
                }
            } else {
                $param = $byName[$this->normalizeName($key)] ?? $variadic;
            }

            if (null !== $param && CallableParameters::isStringCoercionSafe($param->getType(), $param->getDeclaringClass())) {
                continue;
            }
            $this->wrapNode($arguments, (string) $key);
        }
    }

    private function normalizeName(string $name): string
    {
        return strtolower(str_replace('_', '', $name));
    }

    private function wrapNode(Node $node, string $name): void
    {
        $expr = $node->getNode($name);
        // `_self` is internal: it compiles to `$this->getTemplateName()` and is always a string
        if ($expr instanceof ContextVariable && '_self' === $expr->getAttribute('name')) {
            return;
        }
        if (($expr instanceof ContextVariable || $expr instanceof GetAttrExpression) && !$expr->isGenerator()) {
            $node->setNode($name, new CheckToStringNode($expr));
        } elseif ($expr instanceof SpreadUnary) {
            $expr->setNode('node', new CheckToStringNode($expr->getNode('node'), true));
        } elseif ($expr instanceof ArrayExpression || $expr instanceof Nodes) {
            foreach ($expr as $name => $_) {
                $this->wrapNode($expr, $name);
            }
        } elseif ($expr instanceof OperatorEscapeInterface) {
            foreach ($expr->getOperandNamesToEscape() as $operandName) {
                $this->wrapNode($expr, $operandName);
            }
        } elseif ($expr instanceof FilterExpression || $expr instanceof FunctionExpression) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $node->setNode($name, new CheckToStringNode($expr));
        }
    }

<<<<<<< HEAD
    private function wrapArrayNode(Node $node, string $name): void
    {
        $args = $node->getNode($name);
        foreach ($args as $name => $_) {
            $this->wrapNode($args, $name);
        }
=======
    private function isTagAlwaysAllowedInSandbox(Environment $env, string $name): bool
    {
        if (null === $parser = $env->getTokenParser($name)) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($parser);
    }

    private function isFilterAlwaysAllowedInSandbox(Environment $env, FilterExpression $node): bool
    {
        if ($node->hasAttribute('twig_callable')) {
            $filter = $node->getAttribute('twig_callable');
        } elseif (null === $filter = $env->getFilter($node->getAttribute('name'))) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($filter);
    }

    private function isFunctionAlwaysAllowedInSandbox(Environment $env, FunctionExpression $node): bool
    {
        if ($node->hasAttribute('twig_callable')) {
            $function = $node->getAttribute('twig_callable');
        } elseif (null === $function = $env->getFunction($node->getAttribute('name'))) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($function);
    }

    private function isTestAlwaysAllowedInSandbox(Environment $env, TestExpression $node): bool
    {
        if ($node->hasAttribute('twig_callable')) {
            $test = $node->getAttribute('twig_callable');
        } elseif (null === $test = $env->getTest($node->getAttribute('name'))) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($test);
    }

    private function isSandboxedFunctionAlwaysAllowedInSandbox(Environment $env, Node $node, string $name): bool
    {
        if ($node->hasAttribute('sandboxed_function')) {
            $function = $node->getAttribute('sandboxed_function');
        } elseif (null === $function = $env->getFunction($name)) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($function);
    }

    private function isFunctionNameAlwaysAllowedInSandbox(Environment $env, string $name): bool
    {
        if (null === $function = $env->getFunction($name)) {
            return false;
        }

        return self::isAlwaysAllowedInSandbox($function);
    }

    /**
     * @param TwigCallableInterface|TokenParserInterface $subject
     */
    private static function isAlwaysAllowedInSandbox($subject): bool
    {
        if (method_exists($subject, 'isAlwaysAllowedInSandbox')) {
            return $subject->isAlwaysAllowedInSandbox();
        }

        $interface = $subject instanceof TokenParserInterface ? TokenParserInterface::class : TwigCallableInterface::class;
        trigger_deprecation('twig/twig', '3.28', 'Not implementing the "isAlwaysAllowedInSandbox()" method in "%s" is deprecated. This method will be part of the "%s" interface in 4.0.', $subject::class, $interface);

        return false;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getPriority(): int
    {
        return 0;
    }
}
