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

namespace Twig\TokenParser;

<<<<<<< HEAD
=======
use Twig\Node\Expression\AbstractExpression;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\IncludeNode;
use Twig\Node\Node;
use Twig\Token;

/**
 * Includes a template.
 *
<<<<<<< HEAD
 *   {% include 'header.html' %}
 *     Body
 *   {% include 'footer.html' %}
=======
 *   {% include 'header.html.twig' %}
 *     Body
 *   {% include 'footer.html.twig' %}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @internal
 */
class IncludeTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
<<<<<<< HEAD
        $expr = $this->parser->getExpressionParser()->parseExpression();

        [$variables, $only, $ignoreMissing] = $this->parseArguments();

        return new IncludeNode($expr, $variables, $only, $ignoreMissing, $token->getLine(), $this->getTag());
    }

=======
        $expr = $this->parser->parseExpression();

        [$variables, $only, $ignoreMissing] = $this->parseArguments();

        return new IncludeNode($expr, $variables, $only, $ignoreMissing, $token->getLine());
    }

    /**
     * @return array{0: ?AbstractExpression, 1: bool, 2: bool}
     */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected function parseArguments()
    {
        $stream = $this->parser->getStream();

        $ignoreMissing = false;
<<<<<<< HEAD
        if ($stream->nextIf(/* Token::NAME_TYPE */ 5, 'ignore')) {
            $stream->expect(/* Token::NAME_TYPE */ 5, 'missing');
=======
        if ($stream->nextIf(Token::NAME_TYPE, 'ignore')) {
            $stream->expect(Token::NAME_TYPE, 'missing');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $ignoreMissing = true;
        }

        $variables = null;
<<<<<<< HEAD
        if ($stream->nextIf(/* Token::NAME_TYPE */ 5, 'with')) {
            $variables = $this->parser->getExpressionParser()->parseExpression();
        }

        $only = false;
        if ($stream->nextIf(/* Token::NAME_TYPE */ 5, 'only')) {
            $only = true;
        }

        $stream->expect(/* Token::BLOCK_END_TYPE */ 3);
=======
        if ($stream->nextIf(Token::NAME_TYPE, 'with')) {
            $variables = $this->parser->parseExpression();
        }

        $only = false;
        if ($stream->nextIf(Token::NAME_TYPE, 'only')) {
            $only = true;
        }

        $stream->expect(Token::BLOCK_END_TYPE);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return [$variables, $only, $ignoreMissing];
    }

    public function getTag(): string
    {
        return 'include';
    }
}
