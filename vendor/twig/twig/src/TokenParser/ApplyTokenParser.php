<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\TokenParser;

<<<<<<< HEAD
use Twig\Node\Expression\TempNameExpression;
use Twig\Node\Node;
=======
use Twig\ExpressionParser\Infix\FilterExpressionParser;
use Twig\Node\Expression\Variable\LocalVariable;
use Twig\Node\Node;
use Twig\Node\Nodes;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\PrintNode;
use Twig\Node\SetNode;
use Twig\Token;

/**
 * Applies filters on a section of a template.
 *
 *   {% apply upper %}
 *      This text becomes uppercase
 *   {% endapply %}
 *
 * @internal
 */
final class ApplyTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
        $lineno = $token->getLine();
<<<<<<< HEAD
        $name = $this->parser->getVarName();

        $ref = new TempNameExpression($name, $lineno);
        $ref->setAttribute('always_defined', true);

        $filter = $this->parser->getExpressionParser()->parseFilterExpressionRaw($ref, $this->getTag());
=======
        $ref = new LocalVariable(null, $lineno);
        $filter = $ref;
        $op = $this->parser->getEnvironment()->getExpressionParsers()->getByClass(FilterExpressionParser::class);
        while (true) {
            $filter = $op->parse($this->parser, $filter, $this->parser->getCurrentToken());
            if (!$this->parser->getStream()->test(Token::OPERATOR_TYPE, '|')) {
                break;
            }
            $this->parser->getStream()->next();
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse([$this, 'decideApplyEnd'], true);
        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

<<<<<<< HEAD
        return new Node([
            new SetNode(true, $ref, $body, $lineno, $this->getTag()),
            new PrintNode($filter, $lineno, $this->getTag()),
        ]);
=======
        return new Nodes([
            new SetNode(true, $ref, $body, $lineno),
            new PrintNode($filter, $lineno),
        ], $lineno);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function decideApplyEnd(Token $token): bool
    {
        return $token->test('endapply');
    }

    public function getTag(): string
    {
        return 'apply';
    }
}
