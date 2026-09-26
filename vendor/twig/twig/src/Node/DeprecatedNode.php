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
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\ConstantExpression;

/**
 * Represents a deprecated node.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
#[YieldReady]
<<<<<<< HEAD
class DeprecatedNode extends Node
{
    public function __construct(AbstractExpression $expr, int $lineno, ?string $tag = null)
    {
        parent::__construct(['expr' => $expr], [], $lineno, $tag);
=======
class DeprecatedNode extends Node implements CoercesChildrenToStringInterface
{
    public function __construct(AbstractExpression $expr, int $lineno)
    {
        parent::__construct(['expr' => $expr], [], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function compile(Compiler $compiler): void
    {
        $compiler->addDebugInfo($this);

        $expr = $this->getNode('expr');

<<<<<<< HEAD
        if ($expr instanceof ConstantExpression) {
            $compiler->write('@trigger_error(')
                ->subcompile($expr);
        } else {
            $varName = $compiler->getVarName();
            $compiler->write(sprintf('$%s = ', $varName))
                ->subcompile($expr)
                ->raw(";\n")
                ->write(sprintf('@trigger_error($%s', $varName));
=======
        if (!$expr instanceof ConstantExpression) {
            $varName = $compiler->getVarName();
            $compiler
                ->write(\sprintf('$%s = ', $varName))
                ->subcompile($expr)
                ->raw(";\n")
            ;
        }

        $compiler->write('trigger_deprecation(');
        if ($this->hasNode('package')) {
            $compiler->subcompile($this->getNode('package'));
        } else {
            $compiler->raw("''");
        }
        $compiler->raw(', ');
        if ($this->hasNode('version')) {
            $compiler->subcompile($this->getNode('version'));
        } else {
            $compiler->raw("''");
        }
        $compiler->raw(', ');

        if ($expr instanceof ConstantExpression) {
            $compiler->subcompile($expr);
        } else {
            $compiler->write(\sprintf('$%s', $varName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $compiler
            ->raw('.')
<<<<<<< HEAD
            ->string(sprintf(' ("%s" at line %d).', $this->getTemplateName(), $this->getTemplateLine()))
            ->raw(", E_USER_DEPRECATED);\n")
        ;
    }
=======
            ->string(\sprintf(' in "%s" at line %d.', $this->getTemplateName(), $this->getTemplateLine()))
            ->raw(");\n")
        ;
    }

    public function getStringCoercedChildNames(): array
    {
        // the message is concatenated with `.`, and `package` / `version` are typed `string` on trigger_deprecation()
        $names = ['expr'];
        if ($this->hasNode('package')) {
            $names[] = 'package';
        }
        if ($this->hasNode('version')) {
            $names[] = 'version';
        }

        return $names;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
