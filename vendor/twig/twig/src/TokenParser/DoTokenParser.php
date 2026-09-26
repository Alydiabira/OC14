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

use Twig\Node\DoNode;
use Twig\Node\Node;
use Twig\Token;

/**
 * Evaluates an expression, discarding the returned value.
 *
 * @internal
 */
final class DoTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
<<<<<<< HEAD
        $expr = $this->parser->getExpressionParser()->parseExpression();

        $this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new DoNode($expr, $token->getLine(), $this->getTag());
=======
        $expr = $this->parser->parseExpression();

        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new DoNode($expr, $token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getTag(): string
    {
        return 'do';
    }
}
