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

use Twig\Compiler;
use Twig\Error\SyntaxError;
use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
<<<<<<< HEAD
=======
use Twig\TwigCallableInterface;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;
use Twig\Util\CallableArgumentsExtractor;
use Twig\Util\ReflectionCallable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

abstract class CallExpression extends AbstractExpression
{
    private $reflector;

<<<<<<< HEAD
    protected function compileCallable(Compiler $compiler)
    {
        $callable = $this->getAttribute('callable');
=======
    /**
     * @return void
     */
    protected function compileCallable(Compiler $compiler)
    {
        $twigCallable = $this->getTwigCallable();
        $callable = $twigCallable->getCallable();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (\is_string($callable) && !str_contains($callable, '::')) {
            $compiler->raw($callable);
        } else {
<<<<<<< HEAD
            [$r, $callable] = $this->reflectCallable($callable);
=======
            $rc = $this->reflectCallable($twigCallable);
            $r = $rc->getReflector();
            $callable = $rc->getCallable();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            if (\is_string($callable)) {
                $compiler->raw($callable);
            } elseif (\is_array($callable) && \is_string($callable[0])) {
                if (!$r instanceof \ReflectionMethod || $r->isStatic()) {
<<<<<<< HEAD
                    $compiler->raw(sprintf('%s::%s', $callable[0], $callable[1]));
                } else {
                    $compiler->raw(sprintf('$this->env->getRuntime(\'%s\')->%s', $callable[0], $callable[1]));
=======
                    $compiler->raw(\sprintf('%s::%s', $callable[0], $callable[1]));
                } else {
                    $compiler->raw(\sprintf('$this->env->getRuntime(\'%s\')->%s', $callable[0], $callable[1]));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            } elseif (\is_array($callable) && $callable[0] instanceof ExtensionInterface) {
                $class = \get_class($callable[0]);
                if (!$compiler->getEnvironment()->hasExtension($class)) {
                    // Compile a non-optimized call to trigger a \Twig\Error\RuntimeError, which cannot be a compile-time error
<<<<<<< HEAD
                    $compiler->raw(sprintf('$this->env->getExtension(\'%s\')', $class));
                } else {
                    $compiler->raw(sprintf('$this->extensions[\'%s\']', ltrim($class, '\\')));
                }

                $compiler->raw(sprintf('->%s', $callable[1]));
            } else {
                $compiler->raw(sprintf('$this->env->get%s(\'%s\')->getCallable()', ucfirst($this->getAttribute('type')), $this->getAttribute('name')));
=======
                    $compiler->raw(\sprintf('$this->env->getExtension(\'%s\')', $class));
                } else {
                    $compiler->raw(\sprintf('$this->extensions[\'%s\']', ltrim($class, '\\')));
                }

                $compiler->raw(\sprintf('->%s', $callable[1]));
            } else {
                $compiler->raw(\sprintf('$this->env->get%s(\'%s\')->getCallable()', ucfirst($this->getAttribute('type')), $twigCallable->getDynamicName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $this->compileArguments($compiler);
    }

    protected function compileArguments(Compiler $compiler, $isArray = false): void
    {
<<<<<<< HEAD
=======
        if (\func_num_args() >= 2) {
            trigger_deprecation('twig/twig', '3.11', 'Passing a second argument to "%s()" is deprecated.', __METHOD__);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $compiler->raw($isArray ? '[' : '(');

        $first = true;

<<<<<<< HEAD
        if ($this->hasAttribute('needs_charset') && $this->getAttribute('needs_charset')) {
=======
        $twigCallable = $this->getAttribute('twig_callable');

        if ($twigCallable->needsCharset()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $compiler->raw('$this->env->getCharset()');
            $first = false;
        }

<<<<<<< HEAD
        if ($this->hasAttribute('needs_environment') && $this->getAttribute('needs_environment')) {
=======
        if ($twigCallable->needsEnvironment()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$first) {
                $compiler->raw(', ');
            }
            $compiler->raw('$this->env');
            $first = false;
        }

<<<<<<< HEAD
        if ($this->hasAttribute('needs_context') && $this->getAttribute('needs_context')) {
=======
        if ($twigCallable->needsContext()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (!$first) {
                $compiler->raw(', ');
            }
            $compiler->raw('$context');
            $first = false;
        }

<<<<<<< HEAD
        if ($this->hasAttribute('arguments')) {
            foreach ($this->getAttribute('arguments') as $argument) {
                if (!$first) {
                    $compiler->raw(', ');
                }
                $compiler->string($argument);
                $first = false;
            }
=======
        if (self::needsIsSandboxed($twigCallable)) {
            if (!$first) {
                $compiler->raw(', ');
            }
            $compiler->raw('$this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source)');
            $first = false;
        }

        foreach ($twigCallable->getArguments() as $argument) {
            if (!$first) {
                $compiler->raw(', ');
            }
            $compiler->string($argument);
            $first = false;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($this->hasNode('node')) {
            if (!$first) {
                $compiler->raw(', ');
            }
            $compiler->subcompile($this->getNode('node'));
            $first = false;
        }

        if ($this->hasNode('arguments')) {
<<<<<<< HEAD
            $callable = $this->getAttribute('callable');
            $arguments = $this->getArguments($callable, $this->getNode('arguments'));
=======
            $arguments = (new CallableArgumentsExtractor($this, $this->getTwigCallable()))->extractArguments($this->getNode('arguments'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            foreach ($arguments as $node) {
                if (!$first) {
                    $compiler->raw(', ');
                }
                $compiler->subcompile($node);
                $first = false;
            }
        }

        $compiler->raw($isArray ? ']' : ')');
    }

<<<<<<< HEAD
    protected function getArguments($callable, $arguments)
    {
=======
    /**
     * @deprecated since Twig 3.12, use Twig\Util\CallableArgumentsExtractor::getArguments() instead
     */
    protected function getArguments($callable, $arguments)
    {
        trigger_deprecation('twig/twig', '3.12', 'The "%s()" method is deprecated, use Twig\Util\CallableArgumentsExtractor::getArguments() instead.', __METHOD__);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $callType = $this->getAttribute('type');
        $callName = $this->getAttribute('name');

        $parameters = [];
        $named = false;
        foreach ($arguments as $name => $node) {
            if (!\is_int($name)) {
                $named = true;
                $name = $this->normalizeName($name);
            } elseif ($named) {
<<<<<<< HEAD
                throw new SyntaxError(sprintf('Positional arguments cannot be used after named arguments for %s "%s".', $callType, $callName), $this->getTemplateLine(), $this->getSourceContext());
=======
                throw new SyntaxError(\sprintf('Positional arguments cannot be used after named arguments for %s "%s".', $callType, $callName), $this->getTemplateLine(), $this->getSourceContext());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            $parameters[$name] = $node;
        }

<<<<<<< HEAD
        $isVariadic = $this->hasAttribute('is_variadic') && $this->getAttribute('is_variadic');
=======
        $isVariadic = $this->getAttribute('twig_callable')->isVariadic();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (!$named && !$isVariadic) {
            return $parameters;
        }

        if (!$callable) {
            if ($named) {
<<<<<<< HEAD
                $message = sprintf('Named arguments are not supported for %s "%s".', $callType, $callName);
            } else {
                $message = sprintf('Arbitrary positional arguments are not supported for %s "%s".', $callType, $callName);
=======
                $message = \sprintf('Named arguments are not supported for %s "%s".', $callType, $callName);
            } else {
                $message = \sprintf('Arbitrary positional arguments are not supported for %s "%s".', $callType, $callName);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            throw new \LogicException($message);
        }

        [$callableParameters, $isPhpVariadic] = $this->getCallableParameters($callable, $isVariadic);
        $arguments = [];
        $names = [];
        $missingArguments = [];
        $optionalArguments = [];
        $pos = 0;
        foreach ($callableParameters as $callableParameter) {
            $name = $this->normalizeName($callableParameter->name);
            if (\PHP_VERSION_ID >= 80000 && 'range' === $callable) {
                if ('start' === $name) {
                    $name = 'low';
                } elseif ('end' === $name) {
                    $name = 'high';
                }
            }

            $names[] = $name;

            if (\array_key_exists($name, $parameters)) {
                if (\array_key_exists($pos, $parameters)) {
<<<<<<< HEAD
                    throw new SyntaxError(sprintf('Argument "%s" is defined twice for %s "%s".', $name, $callType, $callName), $this->getTemplateLine(), $this->getSourceContext());
                }

                if (\count($missingArguments)) {
                    throw new SyntaxError(sprintf(
=======
                    throw new SyntaxError(\sprintf('Argument "%s" is defined twice for %s "%s".', $name, $callType, $callName), $this->getTemplateLine(), $this->getSourceContext());
                }

                if (\count($missingArguments)) {
                    throw new SyntaxError(\sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        'Argument "%s" could not be assigned for %s "%s(%s)" because it is mapped to an internal PHP function which cannot determine default value for optional argument%s "%s".',
                        $name, $callType, $callName, implode(', ', $names), \count($missingArguments) > 1 ? 's' : '', implode('", "', $missingArguments)
                    ), $this->getTemplateLine(), $this->getSourceContext());
                }

                $arguments = array_merge($arguments, $optionalArguments);
                $arguments[] = $parameters[$name];
                unset($parameters[$name]);
                $optionalArguments = [];
            } elseif (\array_key_exists($pos, $parameters)) {
                $arguments = array_merge($arguments, $optionalArguments);
                $arguments[] = $parameters[$pos];
                unset($parameters[$pos]);
                $optionalArguments = [];
                ++$pos;
            } elseif ($callableParameter->isDefaultValueAvailable()) {
                $optionalArguments[] = new ConstantExpression($callableParameter->getDefaultValue(), -1);
            } elseif ($callableParameter->isOptional()) {
<<<<<<< HEAD
                if (empty($parameters)) {
                    break;
                } else {
                    $missingArguments[] = $name;
                }
            } else {
                throw new SyntaxError(sprintf('Value for argument "%s" is required for %s "%s".', $name, $callType, $callName), $this->getTemplateLine(), $this->getSourceContext());
=======
                if (!$parameters) {
                    break;
                }
                $missingArguments[] = $name;
            } else {
                throw new SyntaxError(\sprintf('Value for argument "%s" is required for %s "%s".', $name, $callType, $callName), $this->getTemplateLine(), $this->getSourceContext());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        if ($isVariadic) {
            $arbitraryArguments = $isPhpVariadic ? new VariadicExpression([], -1) : new ArrayExpression([], -1);
            foreach ($parameters as $key => $value) {
                if (\is_int($key)) {
                    $arbitraryArguments->addElement($value);
                } else {
                    $arbitraryArguments->addElement($value, new ConstantExpression($key, -1));
                }
                unset($parameters[$key]);
            }

            if ($arbitraryArguments->count()) {
                $arguments = array_merge($arguments, $optionalArguments);
                $arguments[] = $arbitraryArguments;
            }
        }

<<<<<<< HEAD
        if (!empty($parameters)) {
=======
        if ($parameters) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $unknownParameter = null;
            foreach ($parameters as $parameter) {
                if ($parameter instanceof Node) {
                    $unknownParameter = $parameter;
                    break;
                }
            }

            throw new SyntaxError(
<<<<<<< HEAD
                sprintf(
=======
                \sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    'Unknown argument%s "%s" for %s "%s(%s)".',
                    \count($parameters) > 1 ? 's' : '', implode('", "', array_keys($parameters)), $callType, $callName, implode(', ', $names)
                ),
                $unknownParameter ? $unknownParameter->getTemplateLine() : $this->getTemplateLine(),
                $unknownParameter ? $unknownParameter->getSourceContext() : $this->getSourceContext()
            );
        }

        return $arguments;
    }

<<<<<<< HEAD
    protected function normalizeName(string $name): string
    {
        return strtolower(preg_replace(['/([A-Z]+)([A-Z][a-z])/', '/([a-z\d])([A-Z])/'], ['\\1_\\2', '\\1_\\2'], $name));
    }

    private function getCallableParameters($callable, bool $isVariadic): array
    {
        [$r, , $callableName] = $this->reflectCallable($callable);

        $parameters = $r->getParameters();
        if ($this->hasNode('node')) {
            array_shift($parameters);
        }
        if ($this->hasAttribute('needs_charset') && $this->getAttribute('needs_charset')) {
            array_shift($parameters);
        }
        if ($this->hasAttribute('needs_environment') && $this->getAttribute('needs_environment')) {
            array_shift($parameters);
        }
        if ($this->hasAttribute('needs_context') && $this->getAttribute('needs_context')) {
            array_shift($parameters);
        }
        if ($this->hasAttribute('arguments') && null !== $this->getAttribute('arguments')) {
            foreach ($this->getAttribute('arguments') as $argument) {
                array_shift($parameters);
            }
        }
        $isPhpVariadic = false;
        if ($isVariadic) {
            $argument = end($parameters);
            $isArray = $argument && $argument->hasType() && 'array' === $argument->getType()->getName();
=======
    /**
     * @deprecated since Twig 3.12
     */
    protected function normalizeName(string $name): string
    {
        trigger_deprecation('twig/twig', '3.12', 'The "%s()" method is deprecated.', __METHOD__);

        return strtolower(preg_replace(['/([A-Z]+)([A-Z][a-z])/', '/([a-z\d])([A-Z])/'], ['\\1_\\2', '\\1_\\2'], $name));
    }

    // To be removed in 4.0
    private function getCallableParameters($callable, bool $isVariadic): array
    {
        $twigCallable = $this->getAttribute('twig_callable');
        $rc = $this->reflectCallable($twigCallable);
        $callableName = $rc->getName();

        $parameters = $rc->getTwigParameters($this->hasNode('node'));

        $isPhpVariadic = false;
        if ($isVariadic) {
            $argument = end($parameters);
            $isArray = $argument && $argument->hasType() && $argument->getType() instanceof \ReflectionNamedType && 'array' === $argument->getType()->getName();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($isArray && $argument->isDefaultValueAvailable() && [] === $argument->getDefaultValue()) {
                array_pop($parameters);
            } elseif ($argument && $argument->isVariadic()) {
                array_pop($parameters);
                $isPhpVariadic = true;
            } else {
<<<<<<< HEAD
                throw new \LogicException(sprintf('The last parameter of "%s" for %s "%s" must be an array with default value, eg. "array $arg = []".', $callableName, $this->getAttribute('type'), $this->getAttribute('name')));
=======
                throw new \LogicException(\sprintf('The last parameter of "%s" for %s "%s" must be an array with default value, eg. "array $arg = []".', $callableName, $this->getAttribute('type'), $twigCallable->getName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        return [$parameters, $isPhpVariadic];
    }

<<<<<<< HEAD
    private function reflectCallable($callable)
    {
        if (null !== $this->reflector) {
            return $this->reflector;
        }

        if (\is_string($callable) && false !== $pos = strpos($callable, '::')) {
            $callable = [substr($callable, 0, $pos), substr($callable, 2 + $pos)];
        }

        if (\is_array($callable) && method_exists($callable[0], $callable[1])) {
            $r = new \ReflectionMethod($callable[0], $callable[1]);

            return $this->reflector = [$r, $callable, $r->class.'::'.$r->name];
        }

        $checkVisibility = $callable instanceof \Closure;
        try {
            $closure = \Closure::fromCallable($callable);
        } catch (\TypeError $e) {
            throw new \LogicException(sprintf('Callback for %s "%s" is not callable in the current scope.', $this->getAttribute('type'), $this->getAttribute('name')), 0, $e);
        }
        $r = new \ReflectionFunction($closure);

        if (str_contains($r->name, '{closure')) {
            return $this->reflector = [$r, $callable, 'Closure'];
        }

        if ($object = $r->getClosureThis()) {
            $callable = [$object, $r->name];
            $callableName = get_debug_type($object).'::'.$r->name;
        } elseif (\PHP_VERSION_ID >= 80111 && $class = $r->getClosureCalledClass()) {
            $callableName = $class->name.'::'.$r->name;
        } elseif (\PHP_VERSION_ID < 80111 && $class = $r->getClosureScopeClass()) {
            $callableName = (\is_array($callable) ? $callable[0] : $class->name).'::'.$r->name;
        } else {
            $callable = $callableName = $r->name;
        }

        if ($checkVisibility && \is_array($callable) && method_exists(...$callable) && !(new \ReflectionMethod(...$callable))->isPublic()) {
            $callable = $r->getClosure();
        }

        return $this->reflector = [$r, $callable, $callableName];
=======
    private function reflectCallable(TwigCallableInterface $callable): ReflectionCallable
    {
        if (!$this->reflector) {
            $this->reflector = new ReflectionCallable($callable);
        }

        return $this->reflector;
    }

    /**
     * @internal
     *
     * To be removed in 4.0 and replaced by $twigCallable->needsIsSandboxed().
     */
    public static function needsIsSandboxed(TwigCallableInterface $twigCallable): bool
    {
        if (method_exists($twigCallable, 'needsIsSandboxed')) {
            return $twigCallable->needsIsSandboxed();
        }

        trigger_deprecation('twig/twig', '3.25', 'Not implementing the "needsIsSandboxed()" method in "%s" is deprecated. This method will be part of the "%s" interface in 4.0.', $twigCallable::class, TwigCallableInterface::class);

        return false;
    }

    /**
     * Overrides the Twig callable based on attributes (as potentially, attributes changed between the creation and the compilation of the node).
     *
     * To be removed in 4.0 and replace by $this->getAttribute('twig_callable').
     */
    private function getTwigCallable(): TwigCallableInterface
    {
        $current = $this->getAttribute('twig_callable');

        $this->setAttribute('twig_callable', match ($this->getAttribute('type')) {
            'test' => (new TwigTest(
                $this->getAttribute('name'),
                $this->hasAttribute('callable') ? $this->getAttribute('callable') : $current->getCallable(),
                [
                    'needs_is_sandboxed' => $this->hasAttribute('needs_is_sandboxed') ? $this->getAttribute('needs_is_sandboxed') : self::needsIsSandboxed($current),
                    'is_variadic' => $this->hasAttribute('is_variadic') ? $this->getAttribute('is_variadic') : $current->isVariadic(),
                ],
            ))->withDynamicArguments($this->getAttribute('name'), $this->hasAttribute('dynamic_name') ? $this->getAttribute('dynamic_name') : $current->getDynamicName(), $this->hasAttribute('arguments') ? $this->getAttribute('arguments') : $current->getArguments()),
            'function' => (new TwigFunction(
                $this->hasAttribute('name') ? $this->getAttribute('name') : $current->getName(),
                $this->hasAttribute('callable') ? $this->getAttribute('callable') : $current->getCallable(),
                [
                    'needs_environment' => $this->hasAttribute('needs_environment') ? $this->getAttribute('needs_environment') : $current->needsEnvironment(),
                    'needs_context' => $this->hasAttribute('needs_context') ? $this->getAttribute('needs_context') : $current->needsContext(),
                    'needs_charset' => $this->hasAttribute('needs_charset') ? $this->getAttribute('needs_charset') : $current->needsCharset(),
                    'needs_is_sandboxed' => $this->hasAttribute('needs_is_sandboxed') ? $this->getAttribute('needs_is_sandboxed') : self::needsIsSandboxed($current),
                    'is_variadic' => $this->hasAttribute('is_variadic') ? $this->getAttribute('is_variadic') : $current->isVariadic(),
                ],
            ))->withDynamicArguments($this->getAttribute('name'), $this->hasAttribute('dynamic_name') ? $this->getAttribute('dynamic_name') : $current->getDynamicName(), $this->hasAttribute('arguments') ? $this->getAttribute('arguments') : $current->getArguments()),
            'filter' => (new TwigFilter(
                $this->getAttribute('name'),
                $this->hasAttribute('callable') ? $this->getAttribute('callable') : $current->getCallable(),
                [
                    'needs_environment' => $this->hasAttribute('needs_environment') ? $this->getAttribute('needs_environment') : $current->needsEnvironment(),
                    'needs_context' => $this->hasAttribute('needs_context') ? $this->getAttribute('needs_context') : $current->needsContext(),
                    'needs_charset' => $this->hasAttribute('needs_charset') ? $this->getAttribute('needs_charset') : $current->needsCharset(),
                    'needs_is_sandboxed' => $this->hasAttribute('needs_is_sandboxed') ? $this->getAttribute('needs_is_sandboxed') : self::needsIsSandboxed($current),
                    'is_variadic' => $this->hasAttribute('is_variadic') ? $this->getAttribute('is_variadic') : $current->isVariadic(),
                ],
            ))->withDynamicArguments($this->getAttribute('name'), $this->hasAttribute('dynamic_name') ? $this->getAttribute('dynamic_name') : $current->getDynamicName(), $this->hasAttribute('arguments') ? $this->getAttribute('arguments') : $current->getArguments()),
        });

        return $this->getAttribute('twig_callable');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
