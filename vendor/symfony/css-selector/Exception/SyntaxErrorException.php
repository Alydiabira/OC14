<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\CssSelector\Exception;

use Symfony\Component\CssSelector\Parser\Token;

/**
 * ParseException is thrown when a CSS selector syntax is not valid.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class SyntaxErrorException extends ParseException
{
    public static function unexpectedToken(string $expectedValue, Token $foundToken): self
    {
<<<<<<< HEAD
        return new self(sprintf('Expected %s, but %s found.', $expectedValue, $foundToken));
=======
        return new self(\sprintf('Expected %s, but %s found.', $expectedValue, $foundToken));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public static function pseudoElementFound(string $pseudoElement, string $unexpectedLocation): self
    {
<<<<<<< HEAD
        return new self(sprintf('Unexpected pseudo-element "::%s" found %s.', $pseudoElement, $unexpectedLocation));
=======
        return new self(\sprintf('Unexpected pseudo-element "::%s" found %s.', $pseudoElement, $unexpectedLocation));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public static function unclosedString(int $position): self
    {
<<<<<<< HEAD
        return new self(sprintf('Unclosed/invalid string at %s.', $position));
=======
        return new self(\sprintf('Unclosed/invalid string at %s.', $position));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public static function nestedNot(): self
    {
        return new self('Got nested ::not().');
    }

    public static function notAtTheStartOfASelector(string $pseudoElement): self
    {
<<<<<<< HEAD
        return new self(sprintf('Got immediate child pseudo-element ":%s" not at the start of a selector', $pseudoElement));
=======
        return new self(\sprintf('Got immediate child pseudo-element ":%s" not at the start of a selector', $pseudoElement));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public static function stringAsFunctionArgument(): self
    {
        return new self('String not allowed as function argument.');
    }
}
