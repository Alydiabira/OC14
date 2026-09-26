<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

use PhpParser\Token;

abstract class KeywordEmulator extends TokenEmulator {
    abstract public function getKeywordString(): string;
    abstract public function getKeywordToken(): int;

    public function isEmulationNeeded(string $code): bool {
        return strpos(strtolower($code), $this->getKeywordString()) !== false;
    }

    /** @param Token[] $tokens */
    protected function isKeywordContext(array $tokens, int $pos): bool {
<<<<<<< HEAD
        $previousNonSpaceToken = $this->getPreviousNonSpaceToken($tokens, $pos);
        return $previousNonSpaceToken === null || $previousNonSpaceToken->id !== \T_OBJECT_OPERATOR;
=======
        $prevToken = $this->getPreviousNonIgnorableToken($tokens, $pos);
        if ($prevToken === null) {
            return false;
        }
        return $prevToken->id !== \T_OBJECT_OPERATOR
            && $prevToken->id !== \T_NULLSAFE_OBJECT_OPERATOR;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function emulate(string $code, array $tokens): array {
        $keywordString = $this->getKeywordString();
        foreach ($tokens as $i => $token) {
            if ($token->id === T_STRING && strtolower($token->text) === $keywordString
                    && $this->isKeywordContext($tokens, $i)) {
                $token->id = $this->getKeywordToken();
            }
        }

        return $tokens;
    }

    /** @param Token[] $tokens */
<<<<<<< HEAD
    private function getPreviousNonSpaceToken(array $tokens, int $start): ?Token {
        for ($i = $start - 1; $i >= 0; --$i) {
            if ($tokens[$i]->id === T_WHITESPACE) {
                continue;
            }

            return $tokens[$i];
=======
    private function getPreviousNonIgnorableToken(array $tokens, int $start): ?Token {
        for ($i = $start - 1; $i >= 0; --$i) {
            $token = $tokens[$i];
            if ($token->id === T_WHITESPACE || $token->id == T_COMMENT || $token->id === T_DOC_COMMENT) {
                continue;
            }

            return $token;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return null;
    }

    public function reverseEmulate(string $code, array $tokens): array {
        $keywordToken = $this->getKeywordToken();
        foreach ($tokens as $token) {
            if ($token->id === $keywordToken) {
                $token->id = \T_STRING;
            }
        }

        return $tokens;
    }
}
