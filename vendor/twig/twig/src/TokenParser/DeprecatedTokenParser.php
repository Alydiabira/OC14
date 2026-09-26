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
=======
use Twig\Error\SyntaxError;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\DeprecatedNode;
use Twig\Node\Node;
use Twig\Token;

/**
 * Deprecates a section of a template.
 *
 *    {% deprecated 'The "base.twig" template is deprecated, use "layout.twig" instead.' %}
 *    {% extends 'layout.html.twig' %}
 *
<<<<<<< HEAD
=======
 *    {% deprecated 'The "base.twig" template is deprecated, use "layout.twig" instead.' package="foo/bar" version="1.1" %}
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
final class DeprecatedTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
<<<<<<< HEAD
        $expr = $this->parser->getExpressionParser()->parseExpression();

        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new DeprecatedNode($expr, $token->getLine(), $this->getTag());
=======
        $stream = $this->parser->getStream();
        $expr = $this->parser->parseExpression();
        $node = new DeprecatedNode($expr, $token->getLine());

        while ($stream->test(Token::NAME_TYPE)) {
            $k = $stream->getCurrent()->getValue();
            $stream->next();
            $stream->expect(Token::OPERATOR_TYPE, '=');

            switch ($k) {
                case 'package':
                    $node->setNode('package', $this->parser->parseExpression());
                    break;
                case 'version':
                    $node->setNode('version', $this->parser->parseExpression());
                    break;
                default:
                    throw new SyntaxError(\sprintf('Unknown "%s" option.', $k), $stream->getCurrent()->getLine(), $stream->getSourceContext());
            }
        }

        $stream->expect(Token::BLOCK_END_TYPE);

        return $node;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getTag(): string
    {
        return 'deprecated';
    }
}
