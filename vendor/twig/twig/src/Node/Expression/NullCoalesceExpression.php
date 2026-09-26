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
<<<<<<< HEAD
use Twig\Node\Expression\Binary\AndBinary;
use Twig\Node\Expression\Test\DefinedTest;
use Twig\Node\Expression\Test\NullTest;
use Twig\Node\Expression\Unary\NotUnary;
use Twig\Node\Node;

class NullCoalesceExpression extends ConditionalExpression
{
    public function __construct(Node $left, Node $right, int $lineno)
    {
        $test = new DefinedTest(clone $left, 'defined', new Node(), $left->getTemplateLine());
=======
use Twig\Node\EmptyNode;
use Twig\Node\Expression\Binary\AndBinary;
use Twig\Node\Expression\Binary\NullCoalesceBinary;
use Twig\Node\Expression\Test\DefinedTest;
use Twig\Node\Expression\Test\NullTest;
use Twig\Node\Expression\Unary\NotUnary;
use Twig\Node\Expression\Variable\ContextVariable;
use Twig\Node\Node;
use Twig\TwigTest;

class NullCoalesceExpression extends ConditionalExpression
{
    /**
     * @param AbstractExpression $left
     * @param AbstractExpression $right
     */
    public function __construct(Node $left, Node $right, int $lineno)
    {
        trigger_deprecation('twig/twig', '3.17', \sprintf('"%s" is deprecated; use "%s" instead.', __CLASS__, NullCoalesceBinary::class));

        if (!$left instanceof AbstractExpression) {
            trigger_deprecation('twig/twig', '3.15', 'Not passing a "%s" instance to the "left" argument of "%s" is deprecated ("%s" given).', AbstractExpression::class, static::class, $left::class);
        }
        if (!$right instanceof AbstractExpression) {
            trigger_deprecation('twig/twig', '3.15', 'Not passing a "%s" instance to the "right" argument of "%s" is deprecated ("%s" given).', AbstractExpression::class, static::class, $right::class);
        }

        $test = new DefinedTest(clone $left, new TwigTest('defined', null, ['always_allowed_in_sandbox' => true]), new EmptyNode(), $left->getTemplateLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        // for "block()", we don't need the null test as the return value is always a string
        if (!$left instanceof BlockReferenceExpression) {
            $test = new AndBinary(
                $test,
<<<<<<< HEAD
                new NotUnary(new NullTest($left, 'null', new Node(), $left->getTemplateLine()), $left->getTemplateLine()),
=======
                new NotUnary(new NullTest($left, new TwigTest('null', null, ['always_allowed_in_sandbox' => true]), new EmptyNode(), $left->getTemplateLine()), $left->getTemplateLine()),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $left->getTemplateLine()
            );
        }

        parent::__construct($test, $left, $right, $lineno);
    }

    public function compile(Compiler $compiler): void
    {
        /*
         * This optimizes only one case. PHP 7 also supports more complex expressions
         * that can return null. So, for instance, if log is defined, log("foo") ?? "..." works,
         * but log($a["foo"]) ?? "..." does not if $a["foo"] is not defined. More advanced
         * cases might be implemented as an optimizer node visitor, but has not been done
         * as benefits are probably not worth the added complexity.
         */
<<<<<<< HEAD
        if ($this->getNode('expr2') instanceof NameExpression) {
=======
        if ($this->getNode('expr2') instanceof ContextVariable) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->getNode('expr2')->setAttribute('always_defined', true);
            $compiler
                ->raw('((')
                ->subcompile($this->getNode('expr2'))
                ->raw(') ?? (')
                ->subcompile($this->getNode('expr3'))
                ->raw('))')
            ;
        } else {
            parent::compile($compiler);
        }
    }
}
