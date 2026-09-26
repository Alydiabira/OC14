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

class NameExpression extends AbstractExpression
{
=======
use Twig\Node\Expression\Variable\ContextVariable;

class NameExpression extends AbstractExpression implements SupportDefinedTestInterface
{
    use SupportDefinedTestDeprecationTrait;
    use SupportDefinedTestTrait;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private $specialVars = [
        '_self' => '$this->getTemplateName()',
        '_context' => '$context',
        '_charset' => '$this->env->getCharset()',
    ];

    public function __construct(string $name, int $lineno)
    {
<<<<<<< HEAD
        parent::__construct([], ['name' => $name, 'is_defined_test' => false, 'ignore_strict_check' => false, 'always_defined' => false], $lineno);
=======
        if (self::class === static::class) {
            trigger_deprecation('twig/twig', '3.15', 'The "%s" class is deprecated, use "%s" instead.', self::class, ContextVariable::class);
        }

        parent::__construct([], ['name' => $name, 'ignore_strict_check' => false, 'always_defined' => false], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $name = $this->getAttribute('name');

        $compiler->addDebugInfo($this);

<<<<<<< HEAD
        if ($this->getAttribute('is_defined_test')) {
            if ($this->isSpecial()) {
=======
        if ($this->definedTest) {
            if (isset($this->specialVars[$name]) || $this->getAttribute('always_defined')) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $compiler->repr(true);
            } elseif (\PHP_VERSION_ID >= 70400) {
                $compiler
                    ->raw('array_key_exists(')
                    ->string($name)
                    ->raw(', $context)')
                ;
            } else {
                $compiler
                    ->raw('(isset($context[')
                    ->string($name)
                    ->raw(']) || array_key_exists(')
                    ->string($name)
                    ->raw(', $context))')
                ;
            }
<<<<<<< HEAD
        } elseif ($this->isSpecial()) {
=======
        } elseif (isset($this->specialVars[$name])) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $compiler->raw($this->specialVars[$name]);
        } elseif ($this->getAttribute('always_defined')) {
            $compiler
                ->raw('$context[')
                ->string($name)
                ->raw(']')
            ;
        } else {
            if ($this->getAttribute('ignore_strict_check') || !$compiler->getEnvironment()->isStrictVariables()) {
                $compiler
                    ->raw('($context[')
                    ->string($name)
                    ->raw('] ?? null)')
                ;
            } else {
                $compiler
                    ->raw('(isset($context[')
                    ->string($name)
                    ->raw(']) || array_key_exists(')
                    ->string($name)
                    ->raw(', $context) ? $context[')
                    ->string($name)
                    ->raw('] : (function () { throw new RuntimeError(\'Variable ')
                    ->string($name)
                    ->raw(' does not exist.\', ')
                    ->repr($this->lineno)
                    ->raw(', $this->source); })()')
                    ->raw(')')
                ;
            }
        }
    }

<<<<<<< HEAD
    public function isSpecial()
    {
        return isset($this->specialVars[$this->getAttribute('name')]);
    }

    public function isSimple()
    {
        return !$this->isSpecial() && !$this->getAttribute('is_defined_test');
=======
    /**
     * @deprecated since Twig 3.11 (to be removed in 4.0)
     */
    public function isSpecial()
    {
        trigger_deprecation('twig/twig', '3.11', 'The "%s()" method is deprecated and will be removed in Twig 4.0.', __METHOD__);

        return isset($this->specialVars[$this->getAttribute('name')]);
    }

    /**
     * @deprecated since Twig 3.11 (to be removed in 4.0)
     */
    public function isSimple()
    {
        trigger_deprecation('twig/twig', '3.11', 'The "%s()" method is deprecated and will be removed in Twig 4.0.', __METHOD__);

        return !isset($this->specialVars[$this->getAttribute('name')]) && !$this->definedTest;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
