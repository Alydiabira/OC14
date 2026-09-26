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

use Twig\Node\FlushNode;
use Twig\Node\Node;
use Twig\Token;

/**
 * Flushes the output to the client.
 *
 * @see flush()
 *
 * @internal
 */
final class FlushTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
<<<<<<< HEAD
        $this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new FlushNode($token->getLine(), $this->getTag());
=======
        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new FlushNode($token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getTag(): string
    {
        return 'flush';
    }
}
