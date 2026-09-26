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
use Twig\Node\IncludeNode;
use Twig\Node\Node;
use Twig\Node\SandboxNode;
use Twig\Node\TextNode;
use Twig\Token;

/**
 * Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.
 *
 *    {% sandbox %}
<<<<<<< HEAD
 *        {% include 'user.html' %}
=======
 *        {% include 'user.html.twig' %}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *    {% endsandbox %}
 *
 * @see https://twig.symfony.com/doc/api.html#sandbox-extension for details
 *
 * @internal
 */
final class SandboxTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
        $stream = $this->parser->getStream();
<<<<<<< HEAD
        $stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        $body = $this->parser->subparse([$this, 'decideBlockEnd'], true);
        $stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        // in a sandbox tag, only include tags are allowed
        if (!$body instanceof IncludeNode) {
=======
        trigger_deprecation('twig/twig', '3.15', \sprintf('The "sandbox" tag is deprecated in "%s" at line %d.', $stream->getSourceContext()->getName(), $token->getLine()));

        $stream->expect(Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse([$this, 'decideBlockEnd'], true);
        $stream->expect(Token::BLOCK_END_TYPE);

        // in a sandbox tag, only include tags are allowed
        if ($body instanceof IncludeNode) {
            $body->setAttribute('sandboxed', true);
        } else {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            foreach ($body as $node) {
                if ($node instanceof TextNode && ctype_space($node->getAttribute('data'))) {
                    continue;
                }

                if (!$node instanceof IncludeNode) {
                    throw new SyntaxError('Only "include" tags are allowed within a "sandbox" section.', $node->getTemplateLine(), $stream->getSourceContext());
                }
<<<<<<< HEAD
            }
        }

        return new SandboxNode($body, $token->getLine(), $this->getTag());
=======

                $node->setAttribute('sandboxed', true);
            }
        }

        return new SandboxNode($body, $token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function decideBlockEnd(Token $token): bool
    {
        return $token->test('endsandbox');
    }

    public function getTag(): string
    {
        return 'sandbox';
    }
}
