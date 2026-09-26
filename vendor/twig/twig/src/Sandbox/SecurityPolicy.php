<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Sandbox;

use Twig\Markup;
use Twig\Template;

/**
 * Represents a security policy which need to be enforced when sandbox mode is enabled.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SecurityPolicy implements SecurityPolicyInterface
{
    private $allowedTags;
    private $allowedFilters;
    private $allowedMethods;
    private $allowedProperties;
    private $allowedFunctions;
<<<<<<< HEAD

    public function __construct(array $allowedTags = [], array $allowedFilters = [], array $allowedMethods = [], array $allowedProperties = [], array $allowedFunctions = [])
=======
    private array $allowedTests;
    private bool $strict = false;

    public function __construct(array $allowedTags = [], array $allowedFilters = [], array $allowedMethods = [], array $allowedProperties = [], array $allowedFunctions = [], array $allowedTests = [])
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->allowedTags = $allowedTags;
        $this->allowedFilters = $allowedFilters;
        $this->setAllowedMethods($allowedMethods);
        $this->allowedProperties = $allowedProperties;
        $this->allowedFunctions = $allowedFunctions;
<<<<<<< HEAD
=======
        $this->allowedTests = $allowedTests;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function setAllowedTags(array $tags): void
    {
        $this->allowedTags = $tags;
    }

    public function setAllowedFilters(array $filters): void
    {
        $this->allowedFilters = $filters;
    }

    public function setAllowedMethods(array $methods): void
    {
        $this->allowedMethods = [];
        foreach ($methods as $class => $m) {
<<<<<<< HEAD
            $this->allowedMethods[$class] = array_map(function ($value) { return strtr($value, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'); }, \is_array($m) ? $m : [$m]);
=======
            $this->allowedMethods[$class] = array_map('strtolower', \is_array($m) ? $m : [$m]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function setAllowedProperties(array $properties): void
    {
        $this->allowedProperties = $properties;
    }

    public function setAllowedFunctions(array $functions): void
    {
        $this->allowedFunctions = $functions;
    }

<<<<<<< HEAD
    public function checkSecurity($tags, $filters, $functions): void
    {
        foreach ($tags as $tag) {
            if (!\in_array($tag, $this->allowedTags)) {
                throw new SecurityNotAllowedTagError(sprintf('Tag "%s" is not allowed.', $tag), $tag);
=======
    public function setAllowedTests(array $tests): void
    {
        $this->allowedTests = $tests;
    }

    /**
     * Toggles strict mode.
     *
     * In strict mode, the tags, functions, and tests that are historically always
     * allowed in a sandbox (the ``extends`` and ``use`` tags, the ``parent``,
     * ``block``, and ``attribute`` functions, and any test) are no longer implicitly
     * allowed and must be added to the relevant allow-list to be usable. Use this
     * flag in 3.x to opt-in to the forthcoming 4.0 behavior and silence the related
     * deprecations.
     */
    public function setStrict(bool $strict): void
    {
        $this->strict = $strict;
    }

    public function checkSecurity($tags, $filters, $functions, array $tests = []): void
    {
        if (\func_num_args() < 4) {
            trigger_deprecation('twig/twig', '3.28', 'Not passing the "$tests" argument to "%s::checkSecurity()" is deprecated; it will be required in 4.0.', static::class);
        }

        foreach ($tags as $tag) {
            if (!\in_array($tag, $this->allowedTags, true)) {
                if (!$this->strict && 'extends' === $tag) {
                    trigger_deprecation('twig/twig', '3.12', 'The "extends" tag is always allowed in sandboxes, but won\'t be in 4.0, please enable it explicitly in your sandbox policy if needed (or enable strict mode on the security policy to opt-in to the 4.0 behavior now).');
                } elseif (!$this->strict && 'use' === $tag) {
                    trigger_deprecation('twig/twig', '3.12', 'The "use" tag is always allowed in sandboxes, but won\'t be in 4.0, please enable it explicitly in your sandbox policy if needed (or enable strict mode on the security policy to opt-in to the 4.0 behavior now).');
                } else {
                    throw new SecurityNotAllowedTagError(\sprintf('Tag "%s" is not allowed.', $tag), $tag);
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        foreach ($filters as $filter) {
<<<<<<< HEAD
            if (!\in_array($filter, $this->allowedFilters)) {
                throw new SecurityNotAllowedFilterError(sprintf('Filter "%s" is not allowed.', $filter), $filter);
=======
            if (!\in_array($filter, $this->allowedFilters, true)) {
                throw new SecurityNotAllowedFilterError(\sprintf('Filter "%s" is not allowed.', $filter), $filter);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        foreach ($functions as $function) {
<<<<<<< HEAD
            if (!\in_array($function, $this->allowedFunctions)) {
                throw new SecurityNotAllowedFunctionError(sprintf('Function "%s" is not allowed.', $function), $function);
=======
            if (!\in_array($function, $this->allowedFunctions, true)) {
                if (!$this->strict && 'parent' === $function) {
                    trigger_deprecation('twig/twig', '3.27', 'The "parent" function is always allowed in sandboxes, but won\'t be in 4.0, please enable it explicitly in your sandbox policy if needed (or enable strict mode on the security policy to opt-in to the 4.0 behavior now).');
                } elseif (!$this->strict && 'block' === $function) {
                    trigger_deprecation('twig/twig', '3.27', 'The "block" function is always allowed in sandboxes, but won\'t be in 4.0, please enable it explicitly in your sandbox policy if needed (or enable strict mode on the security policy to opt-in to the 4.0 behavior now).');
                } elseif (!$this->strict && 'attribute' === $function) {
                    trigger_deprecation('twig/twig', '3.27', 'The "attribute" function is always allowed in sandboxes, but won\'t be in 4.0, please enable it explicitly in your sandbox policy if needed (or enable strict mode on the security policy to opt-in to the 4.0 behavior now).');
                } else {
                    throw new SecurityNotAllowedFunctionError(\sprintf('Function "%s" is not allowed.', $function), $function);
                }
            }
        }

        foreach ($tests as $test) {
            if (!\in_array($test, $this->allowedTests, true)) {
                if (!$this->strict) {
                    trigger_deprecation('twig/twig', '3.28', 'The "%s" test is always allowed in sandboxes, but won\'t be in 4.0, please enable it explicitly in your sandbox policy if needed (or enable strict mode on the security policy to opt-in to the 4.0 behavior now).', $test);
                } else {
                    throw new SecurityNotAllowedTestError(\sprintf('Test "%s" is not allowed.', $test), $test);
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
    }

    public function checkMethodAllowed($obj, $method): void
    {
        if ($obj instanceof Template || $obj instanceof Markup) {
            return;
        }

        $allowed = false;
<<<<<<< HEAD
        $method = strtr($method, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz');
        foreach ($this->allowedMethods as $class => $methods) {
            if ($obj instanceof $class && \in_array($method, $methods)) {
=======
        $method = strtolower($method);
        foreach ($this->allowedMethods as $class => $methods) {
            if ($obj instanceof $class && \in_array($method, $methods, true)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $allowed = true;
                break;
            }
        }

        if (!$allowed) {
<<<<<<< HEAD
            $class = \get_class($obj);
            throw new SecurityNotAllowedMethodError(sprintf('Calling "%s" method on a "%s" object is not allowed.', $method, $class), $class, $method);
=======
            $class = $obj::class;
            throw new SecurityNotAllowedMethodError(\sprintf('Calling "%s" method on a "%s" object is not allowed.', $method, $class), $class, $method);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function checkPropertyAllowed($obj, $property): void
    {
        $allowed = false;
        foreach ($this->allowedProperties as $class => $properties) {
<<<<<<< HEAD
            if ($obj instanceof $class && \in_array($property, \is_array($properties) ? $properties : [$properties])) {
=======
            if ($obj instanceof $class && \in_array($property, \is_array($properties) ? $properties : [$properties], true)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $allowed = true;
                break;
            }
        }

        if (!$allowed) {
<<<<<<< HEAD
            $class = \get_class($obj);
            throw new SecurityNotAllowedPropertyError(sprintf('Calling "%s" property on a "%s" object is not allowed.', $property, $class), $class, $property);
=======
            $class = $obj::class;
            throw new SecurityNotAllowedPropertyError(\sprintf('Calling "%s" property on a "%s" object is not allowed.', $property, $class), $class, $property);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
