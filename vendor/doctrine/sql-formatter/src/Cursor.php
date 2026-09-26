<?php

declare(strict_types=1);

namespace Doctrine\SqlFormatter;

final class Cursor
{
    private int $position = -1;

<<<<<<< HEAD
    /** @param Token[] $tokens */
=======
    /** @param list<Token> $tokens */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        private readonly array $tokens,
    ) {
    }

<<<<<<< HEAD
=======
    /** @param Token::TOKEN_TYPE_* $exceptTokenType */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function next(int|null $exceptTokenType = null): Token|null
    {
        while ($token = $this->tokens[++$this->position] ?? null) {
            if ($exceptTokenType !== null && $token->isOfType($exceptTokenType)) {
                continue;
            }

            return $token;
        }

        return null;
    }

<<<<<<< HEAD
=======
    /** @param Token::TOKEN_TYPE_* $exceptTokenType */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function previous(int|null $exceptTokenType = null): Token|null
    {
        while ($token = $this->tokens[--$this->position] ?? null) {
            if ($exceptTokenType !== null && $token->isOfType($exceptTokenType)) {
                continue;
            }

            return $token;
        }

        return null;
    }

    public function subCursor(): self
    {
        $cursor           = new self($this->tokens);
        $cursor->position = $this->position;

        return $cursor;
    }
}
