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

use Twig\Error\SyntaxError;
<<<<<<< HEAD
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Node;
=======
use Twig\Node\ConfigNode;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Node;
use Twig\Node\Nodes;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Token;

/**
 * Imports blocks defined in another template into the current template.
 *
 *    {% extends "base.html" %}
 *
 *    {% use "blocks.html" %}
 *
 *    {% block title %}{% endblock %}
 *    {% block content %}{% endblock %}
 *
 * @see https://twig.symfony.com/doc/templates.html#horizontal-reuse for details.
 *
 * @internal
 */
final class UseTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
<<<<<<< HEAD
        $template = $this->parser->getExpressionParser()->parseExpression();
=======
        $template = $this->parser->parseExpression();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $stream = $this->parser->getStream();

        if (!$template instanceof ConstantExpression) {
            throw new SyntaxError('The template references in a "use" statement must be a string.', $stream->getCurrent()->getLine(), $stream->getSourceContext());
        }

        $targets = [];
        if ($stream->nextIf('with')) {
            while (true) {
<<<<<<< HEAD
                $name = $stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

                $alias = $name;
                if ($stream->nextIf('as')) {
                    $alias = $stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
=======
                $name = $stream->expect(Token::NAME_TYPE)->getValue();

                $alias = $name;
                if ($stream->nextIf('as')) {
                    $alias = $stream->expect(Token::NAME_TYPE)->getValue();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                $targets[$name] = new ConstantExpression($alias, -1);

<<<<<<< HEAD
                if (!$stream->nextIf(/* Token::PUNCTUATION_TYPE */ 9, ',')) {
=======
                if (!$stream->nextIf(Token::PUNCTUATION_TYPE, ',')) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    break;
                }
            }
        }

<<<<<<< HEAD
        $stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        $this->parser->addTrait(new Node(['template' => $template, 'targets' => new Node($targets)]));

        return new Node();
=======
        $stream->expect(Token::BLOCK_END_TYPE);

        $this->parser->addTrait(new Nodes(['template' => $template, 'targets' => new Nodes($targets)]));

        return new ConfigNode($token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getTag(): string
    {
        return 'use';
    }
}
