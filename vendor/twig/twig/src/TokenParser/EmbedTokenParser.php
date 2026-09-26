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

use Twig\Node\EmbedNode;
use Twig\Node\Expression\ConstantExpression;
<<<<<<< HEAD
use Twig\Node\Expression\NameExpression;
=======
use Twig\Node\Expression\Variable\ContextVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Node;
use Twig\Token;

/**
 * Embeds a template.
 *
 * @internal
 */
final class EmbedTokenParser extends IncludeTokenParser
{
    public function parse(Token $token): Node
    {
        $stream = $this->parser->getStream();

<<<<<<< HEAD
        $parent = $this->parser->getExpressionParser()->parseExpression();

        [$variables, $only, $ignoreMissing] = $this->parseArguments();

        $parentToken = $fakeParentToken = new Token(/* Token::STRING_TYPE */ 7, '__parent__', $token->getLine());
        if ($parent instanceof ConstantExpression) {
            $parentToken = new Token(/* Token::STRING_TYPE */ 7, $parent->getAttribute('value'), $token->getLine());
        } elseif ($parent instanceof NameExpression) {
            $parentToken = new Token(/* Token::NAME_TYPE */ 5, $parent->getAttribute('name'), $token->getLine());
=======
        $parent = $this->parser->parseExpression();

        [$variables, $only, $ignoreMissing] = $this->parseArguments();

        $parentToken = $fakeParentToken = new Token(Token::STRING_TYPE, '__parent__', $token->getLine());
        if ($parent instanceof ConstantExpression) {
            $parentToken = new Token(Token::STRING_TYPE, $parent->getAttribute('value'), $token->getLine());
        } elseif ($parent instanceof ContextVariable) {
            $parentToken = new Token(Token::NAME_TYPE, $parent->getAttribute('name'), $token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // inject a fake parent to make the parent() function work
        $stream->injectTokens([
<<<<<<< HEAD
            new Token(/* Token::BLOCK_START_TYPE */ 1, '', $token->getLine()),
            new Token(/* Token::NAME_TYPE */ 5, 'extends', $token->getLine()),
            $parentToken,
            new Token(/* Token::BLOCK_END_TYPE */ 3, '', $token->getLine()),
=======
            new Token(Token::BLOCK_START_TYPE, '', $token->getLine()),
            new Token(Token::NAME_TYPE, 'extends', $token->getLine()),
            $parentToken,
            new Token(Token::BLOCK_END_TYPE, '', $token->getLine()),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ]);

        $module = $this->parser->parse($stream, [$this, 'decideBlockEnd'], true);

        // override the parent with the correct one
        if ($fakeParentToken === $parentToken) {
            $module->setNode('parent', $parent);
        }

        $this->parser->embedTemplate($module);

<<<<<<< HEAD
        $stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new EmbedNode($module->getTemplateName(), $module->getAttribute('index'), $variables, $only, $ignoreMissing, $token->getLine(), $this->getTag());
=======
        $stream->expect(Token::BLOCK_END_TYPE);

        return new EmbedNode($module->getTemplateName(), $module->getAttribute('index'), $variables, $only, $ignoreMissing, $token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function decideBlockEnd(Token $token): bool
    {
        return $token->test('endembed');
    }

    public function getTag(): string
    {
        return 'embed';
    }
}
