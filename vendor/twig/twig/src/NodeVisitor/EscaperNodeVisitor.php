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
use Twig\Extension\EscaperExtension;
use Twig\Node\AutoEscapeNode;
use Twig\Node\BlockNode;
use Twig\Node\BlockReferenceNode;
<<<<<<< HEAD
use Twig\Node\DoNode;
use Twig\Node\Expression\ConditionalExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Expression\InlinePrint;
use Twig\Node\ImportNode;
use Twig\Node\ModuleNode;
use Twig\Node\Node;
=======
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Expression\OperatorEscapeInterface;
use Twig\Node\ImportNode;
use Twig\Node\ModuleNode;
use Twig\Node\Node;
use Twig\Node\Nodes;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\PrintNode;
use Twig\NodeTraverser;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class EscaperNodeVisitor implements NodeVisitorInterface
{
    private $statusStack = [];
    private $blocks = [];
    private $safeAnalysis;
    private $traverser;
    private $defaultStrategy = false;
    private $safeVars = [];

    public function __construct()
    {
        $this->safeAnalysis = new SafeAnalysisNodeVisitor();
    }

    public function enterNode(Node $node, Environment $env): Node
    {
        if ($node instanceof ModuleNode) {
            if ($env->hasExtension(EscaperExtension::class) && $defaultStrategy = $env->getExtension(EscaperExtension::class)->getDefaultStrategy($node->getTemplateName())) {
                $this->defaultStrategy = $defaultStrategy;
            }
            $this->safeVars = [];
            $this->blocks = [];
        } elseif ($node instanceof AutoEscapeNode) {
            $this->statusStack[] = $node->getAttribute('value');
        } elseif ($node instanceof BlockNode) {
            $this->statusStack[] = $this->blocks[$node->getAttribute('name')] ?? $this->needEscaping();
        } elseif ($node instanceof ImportNode) {
<<<<<<< HEAD
            $this->safeVars[] = $node->getNode('var')->getAttribute('name');
=======
            $this->safeVars[] = $node->getNode('var')->getNode('var')->getAttribute('name');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $node;
    }

    public function leaveNode(Node $node, Environment $env): ?Node
    {
        if ($node instanceof ModuleNode) {
            $this->defaultStrategy = false;
            $this->safeVars = [];
            $this->blocks = [];
        } elseif ($node instanceof FilterExpression) {
            return $this->preEscapeFilterNode($node, $env);
        } elseif ($node instanceof PrintNode && false !== $type = $this->needEscaping()) {
            $expression = $node->getNode('expr');
<<<<<<< HEAD
            if ($expression instanceof ConditionalExpression && $this->shouldUnwrapConditional($expression, $env, $type)) {
                return new DoNode($this->unwrapConditional($expression, $env, $type), $expression->getTemplateLine());
            }

            return $this->escapePrintNode($node, $env, $type);
=======
            if ($expression instanceof OperatorEscapeInterface) {
                $this->escapeConditional($expression, $env, $type);
            } else {
                $node->setNode('expr', $this->escapeExpression($expression, $env, $type));
            }

            return $node;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($node instanceof AutoEscapeNode || $node instanceof BlockNode) {
            array_pop($this->statusStack);
        } elseif ($node instanceof BlockReferenceNode) {
            $this->blocks[$node->getAttribute('name')] = $this->needEscaping();
        }

        return $node;
    }

<<<<<<< HEAD
    private function shouldUnwrapConditional(ConditionalExpression $expression, Environment $env, string $type): bool
    {
        $expr2Safe = $this->isSafeFor($type, $expression->getNode('expr2'), $env);
        $expr3Safe = $this->isSafeFor($type, $expression->getNode('expr3'), $env);

        return $expr2Safe !== $expr3Safe;
    }

    private function unwrapConditional(ConditionalExpression $expression, Environment $env, string $type): ConditionalExpression
    {
        // convert "echo a ? b : c" to "a ? echo b : echo c" recursively
        $expr2 = $expression->getNode('expr2');
        if ($expr2 instanceof ConditionalExpression && $this->shouldUnwrapConditional($expr2, $env, $type)) {
            $expr2 = $this->unwrapConditional($expr2, $env, $type);
        } else {
            $expr2 = $this->escapeInlinePrintNode(new InlinePrint($expr2, $expr2->getTemplateLine()), $env, $type);
        }
        $expr3 = $expression->getNode('expr3');
        if ($expr3 instanceof ConditionalExpression && $this->shouldUnwrapConditional($expr3, $env, $type)) {
            $expr3 = $this->unwrapConditional($expr3, $env, $type);
        } else {
            $expr3 = $this->escapeInlinePrintNode(new InlinePrint($expr3, $expr3->getTemplateLine()), $env, $type);
        }

        return new ConditionalExpression($expression->getNode('expr1'), $expr2, $expr3, $expression->getTemplateLine());
    }

    private function escapeInlinePrintNode(InlinePrint $node, Environment $env, string $type): Node
    {
        $expression = $node->getNode('node');

        if ($this->isSafeFor($type, $expression, $env)) {
            return $node;
        }

        return new InlinePrint($this->getEscaperFilter($type, $expression), $node->getTemplateLine());
    }

    private function escapePrintNode(PrintNode $node, Environment $env, string $type): Node
    {
        $expression = $node->getNode('expr');

        if ($this->isSafeFor($type, $expression, $env)) {
            return $node;
        }

        $class = \get_class($node);

        return new $class($this->getEscaperFilter($type, $expression), $node->getTemplateLine());
=======
    /**
     * @param AbstractExpression&OperatorEscapeInterface $expression
     */
    private function escapeConditional($expression, Environment $env, string $type): void
    {
        foreach ($expression->getOperandNamesToEscape() as $name) {
            /** @var AbstractExpression $operand */
            $operand = $expression->getNode($name);
            if ($operand instanceof OperatorEscapeInterface) {
                $this->escapeConditional($operand, $env, $type);
            } else {
                $expression->setNode($name, $this->escapeExpression($operand, $env, $type));
            }
        }
    }

    private function escapeExpression(AbstractExpression $expression, Environment $env, string $type): AbstractExpression
    {
        return $this->isSafeFor($type, $expression, $env) ? $expression : $this->getEscaperFilter($env, $type, $expression);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function preEscapeFilterNode(FilterExpression $filter, Environment $env): FilterExpression
    {
<<<<<<< HEAD
        $name = $filter->getNode('filter')->getAttribute('value');

        $type = $env->getFilter($name)->getPreEscape();
=======
        if ($filter->hasAttribute('twig_callable')) {
            $type = $filter->getAttribute('twig_callable')->getPreEscape();
        } else {
            // legacy
            $name = $filter->getNode('filter', false)->getAttribute('value');
            $type = $env->getFilter($name)->getPreEscape();
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (null === $type) {
            return $filter;
        }

<<<<<<< HEAD
=======
        /** @var AbstractExpression $node */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $node = $filter->getNode('node');
        if ($this->isSafeFor($type, $node, $env)) {
            return $filter;
        }

<<<<<<< HEAD
        $filter->setNode('node', $this->getEscaperFilter($type, $node));
=======
        $filter->setNode('node', $this->getEscaperFilter($env, $type, $node));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $filter;
    }

<<<<<<< HEAD
    private function isSafeFor(string $type, Node $expression, Environment $env): bool
    {
        $safe = $this->safeAnalysis->getSafe($expression);

        if (null === $safe) {
=======
    private function isSafeFor(string $type, AbstractExpression $expression, Environment $env): bool
    {
        $safe = $this->safeAnalysis->getSafe($expression);

        if (!$safe) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if (null === $this->traverser) {
                $this->traverser = new NodeTraverser($env, [$this->safeAnalysis]);
            }

            $this->safeAnalysis->setSafeVars($this->safeVars);

            $this->traverser->traverse($expression);
            $safe = $this->safeAnalysis->getSafe($expression);
        }

<<<<<<< HEAD
        return \in_array($type, $safe) || \in_array('all', $safe);
    }

    private function needEscaping()
=======
        return \in_array($type, $safe, true) || \in_array('all', $safe, true);
    }

    /**
     * @return string|false
     */
    private function needEscaping(): string|bool
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (\count($this->statusStack)) {
            return $this->statusStack[\count($this->statusStack) - 1];
        }

        return $this->defaultStrategy ?: false;
    }

<<<<<<< HEAD
    private function getEscaperFilter(string $type, Node $node): FilterExpression
    {
        $line = $node->getTemplateLine();
        $name = new ConstantExpression('escape', $line);
        $args = new Node([new ConstantExpression($type, $line), new ConstantExpression(null, $line), new ConstantExpression(true, $line)]);

        return new FilterExpression($node, $name, $args, $line);
=======
    private function getEscaperFilter(Environment $env, string $type, AbstractExpression $node): FilterExpression
    {
        $line = $node->getTemplateLine();
        $filter = $env->getFilter('escape');
        $args = new Nodes([new ConstantExpression($type, $line), new ConstantExpression(null, $line), new ConstantExpression(true, $line)]);

        return new FilterExpression($node, $filter, $args, $line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getPriority(): int
    {
        return 0;
    }
}
