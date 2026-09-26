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
use Twig\Parser;
=======
use Twig\Lexer;
use Twig\Node\Expression\Variable\AssignContextVariable;
use Twig\Node\Nodes;
use Twig\Parser;
use Twig\Token;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Base class for all token parsers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractTokenParser implements TokenParserInterface
{
    /**
     * @var Parser
     */
    protected $parser;

    public function setParser(Parser $parser): void
    {
        $this->parser = $parser;
    }
<<<<<<< HEAD
=======

    public function isAlwaysAllowedInSandbox(): bool
    {
        return false;
    }

    /**
     * Parses an assignment expression like "a, b".
     */
    protected function parseAssignmentExpression(): Nodes
    {
        $stream = $this->parser->getStream();
        $targets = [];
        while (true) {
            $token = $stream->getCurrent();
            if ($stream->test(Token::OPERATOR_TYPE) && preg_match(Lexer::REGEX_NAME, $token->getValue())) {
                // in this context, string operators are variable names
                $stream->next();
            } else {
                $stream->expect(Token::NAME_TYPE, null, 'Only variables can be assigned to');
            }
            $targets[] = new AssignContextVariable($token->getValue(), $token->getLine());

            if (!$stream->nextIf(Token::PUNCTUATION_TYPE, ',')) {
                break;
            }
        }

        return new Nodes($targets);
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
