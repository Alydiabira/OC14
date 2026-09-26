<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\TokenParser;

use Symfony\Bridge\Twig\Node\StopwatchNode;
use Twig\Node\Expression\AssignNameExpression;
<<<<<<< HEAD
=======
use Twig\Node\Expression\Variable\LocalVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Node;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

/**
 * Token Parser for the stopwatch tag.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchTokenParser extends AbstractTokenParser
{
    private bool $stopwatchIsAvailable;

    public function __construct(bool $stopwatchIsAvailable)
    {
        $this->stopwatchIsAvailable = $stopwatchIsAvailable;
    }

    public function parse(Token $token): Node
    {
        $lineno = $token->getLine();
        $stream = $this->parser->getStream();

        // {% stopwatch 'bar' %}
<<<<<<< HEAD
        $name = $this->parser->getExpressionParser()->parseExpression();
=======
        $name = method_exists($this->parser, 'parseExpression') ?
            $this->parser->parseExpression() :
            $this->parser->getExpressionParser()->parseExpression();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $stream->expect(Token::BLOCK_END_TYPE);

        // {% endstopwatch %}
        $body = $this->parser->subparse($this->decideStopwatchEnd(...), true);
        $stream->expect(Token::BLOCK_END_TYPE);

        if ($this->stopwatchIsAvailable) {
<<<<<<< HEAD
            return new StopwatchNode($name, $body, new AssignNameExpression($this->parser->getVarName(), $token->getLine()), $lineno, $this->getTag());
=======
            return new StopwatchNode($name, $body, class_exists(LocalVariable::class) ? new LocalVariable(null, $token->getLine()) : new AssignNameExpression($this->parser->getVarName(), $token->getLine()), $lineno, $this->getTag());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $body;
    }

    public function decideStopwatchEnd(Token $token): bool
    {
        return $token->test('endstopwatch');
    }

    public function getTag(): string
    {
        return 'stopwatch';
    }
}
