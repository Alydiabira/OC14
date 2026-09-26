<?php

declare(strict_types=1);

/**
 * SQL Formatter is a collection of utilities for debugging SQL queries.
 * It includes methods for formatting, syntax highlighting, removing comments, etc.
 *
 * @link       http://github.com/jdorn/sql-formatter
 */

namespace Doctrine\SqlFormatter;

<<<<<<< HEAD
use function array_search;
use function array_shift;
use function array_unshift;
use function assert;
use function current;
use function preg_replace;
use function reset;
=======
use function array_pop;
use function array_search;
use function assert;
use function end;
use function in_array;
use function preg_replace;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function rtrim;
use function str_repeat;
use function str_replace;
use function strlen;
<<<<<<< HEAD
=======
use function strtoupper;
use function substr;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function trim;

use const PHP_SAPI;

final class SqlFormatter
{
    private readonly Highlighter $highlighter;
    private readonly Tokenizer $tokenizer;

<<<<<<< HEAD
=======
    private const INDENT_TYPE_BLOCK   = 'block';
    private const INDENT_TYPE_SPECIAL = 'special';

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(Highlighter|null $highlighter = null)
    {
        $this->tokenizer   = new Tokenizer();
        $this->highlighter = $highlighter ?? (PHP_SAPI === 'cli' ? new CliHighlighter() : new HtmlHighlighter());
    }

    /**
     * Format the whitespace in a SQL string to make it easier to read.
     *
     * @param string $string The SQL string
     *
     * @return string The SQL string with HTML styles and formatting wrapped in a <pre> tag
     */
    public function format(string $string, string $indentString = '  '): string
    {
        // This variable will be populated with formatted html
        $return = '';

        // Use an actual tab while formatting and then switch out with $indentString at the end
        $tab = "\t";

        $indentLevel           = 0;
        $newline               = false;
        $inlineParentheses     = false;
        $increaseSpecialIndent = false;
        $increaseBlockIndent   = false;
        $indentTypes           = [];
        $addedNewline          = false;
        $inlineCount           = 0;
        $inlineIndented        = false;
        $clauseLimit           = false;

<<<<<<< HEAD
=======
        $appendNewLineIfNotAddedFx  = static function () use (&$addedNewline, &$return, $tab, &$indentLevel): void {
            // Add a newline if not already added
            if ($addedNewline) { // @phpstan-ignore if.alwaysFalse
                return;
            }

            $return  = rtrim($return, ' ' . $tab);
            $return .= "\n" . str_repeat($tab, $indentLevel);
        };
        $decreaseIndentationLevelFx = static function () use (&$return, &$indentTypes, $tab, &$indentLevel): void {
            array_pop($indentTypes);
            $indentLevel--;

            // Redo the indentation since it may be different now
            $lastPossiblyIndentLine = substr($return, -($indentLevel + 2));
            if (rtrim($lastPossiblyIndentLine, $tab) !== "\n") {
                return;
            }

            $rtrimLength = $indentLevel + 1;
            while (substr($return, -($rtrimLength + 2), 1) === "\n") {
                $rtrimLength++;
            }

            $return = substr($return, 0, -$rtrimLength) . str_repeat($tab, $indentLevel);
        };

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        // Tokenize String
        $cursor = $this->tokenizer->tokenize($string);

        // Format token by token
        while ($token = $cursor->next(Token::TOKEN_TYPE_WHITESPACE)) {
<<<<<<< HEAD
=======
            $prevNotWhitespaceToken = $cursor->subCursor()->previous(Token::TOKEN_TYPE_WHITESPACE);
            $tokenValueUpper        = strtoupper($token->value());
            if ($prevNotWhitespaceToken !== null && $prevNotWhitespaceToken->value() === '.') {
                $tokenValueUpper = false;
            }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $highlighted = $this->highlighter->highlightToken(
                $token->type(),
                $token->value(),
            );

            // If we are increasing the special indent level now
            if ($increaseSpecialIndent) {
                $indentLevel++;
                $increaseSpecialIndent = false;
<<<<<<< HEAD
                array_unshift($indentTypes, 'special');
=======
                $indentTypes[]         = self::INDENT_TYPE_SPECIAL;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            // If we are increasing the block indent level now
            if ($increaseBlockIndent) {
                $indentLevel++;
                $increaseBlockIndent = false;
<<<<<<< HEAD
                array_unshift($indentTypes, 'block');
=======
                $indentTypes[]       = self::INDENT_TYPE_BLOCK;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            // If we need a new line before the token
            if ($newline) {
<<<<<<< HEAD
                $return       = rtrim($return, ' ');
=======
                $return = rtrim($return, ' ');

                if ($prevNotWhitespaceToken !== null && $prevNotWhitespaceToken->value() === ';') {
                    $return .= "\n";
                }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $return      .= "\n" . str_repeat($tab, $indentLevel);
                $newline      = false;
                $addedNewline = true;
            } else {
                $addedNewline = false;
            }

            // Display comments directly where they appear in the source
            if ($token->isOfType(Token::TOKEN_TYPE_COMMENT, Token::TOKEN_TYPE_BLOCK_COMMENT)) {
                if ($token->isOfType(Token::TOKEN_TYPE_BLOCK_COMMENT)) {
                    $indent      = str_repeat($tab, $indentLevel);
<<<<<<< HEAD
                    $return      = rtrim($return, " \t");
=======
                    $return      = rtrim($return, ' ' . $tab);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $return     .= "\n" . $indent;
                    $highlighted = str_replace("\n", "\n" . $indent, $highlighted);
                }

                $return .= $highlighted;
                $newline = true;
                continue;
            }

            if ($inlineParentheses) {
                // End of inline parentheses
                if ($token->value() === ')') {
                    $return = rtrim($return, ' ');

                    if ($inlineIndented) {
<<<<<<< HEAD
                        array_shift($indentTypes);
                        $indentLevel--;
=======
                        $decreaseIndentationLevelFx();

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        $return  = rtrim($return, ' ');
                        $return .= "\n" . str_repeat($tab, $indentLevel);
                    }

                    $inlineParentheses = false;

                    $return .= $highlighted . ' ';
                    continue;
                }

                if ($token->value() === ',') {
                    if ($inlineCount >= 30) {
                        $inlineCount = 0;
                        $newline     = true;
                    }
                }

                $inlineCount += strlen($token->value());
            }

            // Opening parentheses increase the block indent level and start a new line
            if ($token->value() === '(') {
                // First check if this should be an inline parentheses block
                // Examples are "NOW()", "COUNT(*)", "int(10)", key(`somecolumn`), DECIMAL(7,2)
                // Allow up to 3 non-whitespace tokens inside inline parentheses
                $length    = 0;
                $subCursor = $cursor->subCursor();
                for ($j = 1; $j <= 250; $j++) {
                    // Reached end of string
                    $next = $subCursor->next(Token::TOKEN_TYPE_WHITESPACE);
<<<<<<< HEAD
                    if (! $next) {
=======
                    if ($next === null) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        break;
                    }

                    // Reached closing parentheses, able to inline it
                    if ($next->value() === ')') {
                        $inlineParentheses = true;
                        $inlineCount       = 0;
                        $inlineIndented    = false;
                        break;
                    }

                    // Reached an invalid token for inline parentheses
                    if ($next->value() === ';' || $next->value() === '(') {
                        break;
                    }

                    // Reached an invalid token type for inline parentheses
                    if (
                        $next->isOfType(
                            Token::TOKEN_TYPE_RESERVED_TOPLEVEL,
                            Token::TOKEN_TYPE_RESERVED_NEWLINE,
                            Token::TOKEN_TYPE_COMMENT,
                            Token::TOKEN_TYPE_BLOCK_COMMENT,
                        )
                    ) {
                        break;
                    }

                    $length += strlen($next->value());
                }

                if ($inlineParentheses && $length > 30) {
                    $increaseBlockIndent = true;
                    $inlineIndented      = true;
                    $newline             = true;
                }

                // Take out the preceding space unless there was whitespace there in the original query
                $prevToken = $cursor->subCursor()->previous();
<<<<<<< HEAD
                if ($prevToken && ! $prevToken->isOfType(Token::TOKEN_TYPE_WHITESPACE)) {
=======
                if ($prevToken !== null && ! $prevToken->isOfType(Token::TOKEN_TYPE_WHITESPACE)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $return = rtrim($return, ' ');
                }

                if (! $inlineParentheses) {
                    $increaseBlockIndent = true;
                    // Add a newline after the parentheses
                    $newline = true;
                }
            } elseif ($token->value() === ')') {
                // Closing parentheses decrease the block indent level
                // Remove whitespace before the closing parentheses
                $return = rtrim($return, ' ');

<<<<<<< HEAD
                $indentLevel--;

                // Reset indent level
                while ($j = array_shift($indentTypes)) {
                    if ($j !== 'special') {
                        break;
                    }

                    $indentLevel--;
                }

=======
                while (end($indentTypes) === self::INDENT_TYPE_SPECIAL) {
                    $decreaseIndentationLevelFx();
                }

                $decreaseIndentationLevelFx();

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                if ($indentLevel < 0) {
                    // This is an error
                    $indentLevel = 0;

                    $return .= $this->highlighter->highlightError($token->value());
                    continue;
                }

<<<<<<< HEAD
                // Add a newline before the closing parentheses (if not already added)
                if (! $addedNewline) {
                    $return .= "\n" . str_repeat($tab, $indentLevel);
                }
=======
                $appendNewLineIfNotAddedFx();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            } elseif ($token->isOfType(Token::TOKEN_TYPE_RESERVED_TOPLEVEL)) {
                // Top level reserved words start a new line and increase the special indent level
                $increaseSpecialIndent = true;

<<<<<<< HEAD
                // If the last indent type was 'special', decrease the special indent for this round
                reset($indentTypes);
                if (current($indentTypes) === 'special') {
                    $indentLevel--;
                    array_shift($indentTypes);
=======
                // If the last indent type was special, decrease the special indent for this round
                if (end($indentTypes) === self::INDENT_TYPE_SPECIAL) {
                    $decreaseIndentationLevelFx();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                // Add a newline after the top level reserved word
                $newline = true;
<<<<<<< HEAD
                // Add a newline before the top level reserved word (if not already added)
                if (! $addedNewline) {
                    $return  = rtrim($return, ' ');
                    $return .= "\n" . str_repeat($tab, $indentLevel);
                } else {
                    // If we already added a newline, redo the indentation since it may be different now
                    $return = rtrim($return, $tab) . str_repeat($tab, $indentLevel);
                }
=======

                $appendNewLineIfNotAddedFx();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                if ($token->hasExtraWhitespace()) {
                    $highlighted = preg_replace('/\s+/', ' ', $highlighted);
                }

<<<<<<< HEAD
                //if SQL 'LIMIT' clause, start variable to reset newline
                if ($token->value() === 'LIMIT' && ! $inlineParentheses) {
                    $clauseLimit = true;
                }
=======
                // if SQL 'LIMIT' clause, start variable to reset newline
                if ($tokenValueUpper === 'LIMIT' && ! $inlineParentheses) {
                    $clauseLimit = true;
                }
            } elseif ($token->value() === ';') {
                // If the last indent type was special, decrease the special indent for this round
                if (end($indentTypes) === self::INDENT_TYPE_SPECIAL) {
                    $decreaseIndentationLevelFx();
                }

                $newline = true;
            } elseif ($tokenValueUpper === 'CASE') {
                $increaseBlockIndent = true;
            } elseif ($tokenValueUpper === 'BEGIN') {
                $newline             = true;
                $increaseBlockIndent = true;
            } elseif ($tokenValueUpper === 'LOOP') {
                // https://docs.oracle.com/en/database/oracle/oracle-database/19/lnpls/basic-LOOP-statement.html

                if ($prevNotWhitespaceToken !== null && strtoupper($prevNotWhitespaceToken->value()) !== 'END') {
                    $newline             = true;
                    $increaseBlockIndent = true;
                }
            } elseif (in_array($tokenValueUpper, ['WHEN', 'THEN', 'ELSE', 'END'], true)) {
                if ($tokenValueUpper !== 'THEN') {
                    $decreaseIndentationLevelFx();

                    if ($prevNotWhitespaceToken !== null && strtoupper($prevNotWhitespaceToken->value()) !== 'CASE') {
                        $appendNewLineIfNotAddedFx();
                    }
                }

                if ($tokenValueUpper === 'THEN' || $tokenValueUpper === 'ELSE') {
                    $newline             = true;
                    $increaseBlockIndent = true;
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            } elseif (
                $clauseLimit &&
                $token->value() !== ',' &&
                ! $token->isOfType(Token::TOKEN_TYPE_NUMBER, Token::TOKEN_TYPE_WHITESPACE)
            ) {
                // Checks if we are out of the limit clause
                $clauseLimit = false;
            } elseif ($token->value() === ',' && ! $inlineParentheses) {
                // Commas start a new line (unless within inline parentheses or SQL 'LIMIT' clause)
<<<<<<< HEAD
                //If the previous TOKEN_VALUE is 'LIMIT', resets new line
=======
                // If the previous TOKEN_VALUE is 'LIMIT', resets new line
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                if ($clauseLimit === true) {
                    $newline     = false;
                    $clauseLimit = false;
                } else {
                    // All other cases of commas
                    $newline = true;
                }
            } elseif ($token->isOfType(Token::TOKEN_TYPE_RESERVED_NEWLINE)) {
<<<<<<< HEAD
            // Newline reserved words start a new line
                // Add a newline before the reserved word (if not already added)
                if (! $addedNewline) {
                    $return  = rtrim($return, ' ');
                    $return .= "\n" . str_repeat($tab, $indentLevel);
                }
=======
                // Newline reserved words start a new line

                $appendNewLineIfNotAddedFx();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                if ($token->hasExtraWhitespace()) {
                    $highlighted = preg_replace('/\s+/', ' ', $highlighted);
                }
            } elseif ($token->isOfType(Token::TOKEN_TYPE_BOUNDARY)) {
                // Multiple boundary characters in a row should not have spaces between them (not including parentheses)
<<<<<<< HEAD
                $prevNotWhitespaceToken = $cursor->subCursor()->previous(Token::TOKEN_TYPE_WHITESPACE);
                if ($prevNotWhitespaceToken && $prevNotWhitespaceToken->isOfType(Token::TOKEN_TYPE_BOUNDARY)) {
                    $prevToken = $cursor->subCursor()->previous();
                    if ($prevToken && ! $prevToken->isOfType(Token::TOKEN_TYPE_WHITESPACE)) {
=======
                if ($prevNotWhitespaceToken !== null && $prevNotWhitespaceToken->isOfType(Token::TOKEN_TYPE_BOUNDARY)) {
                    $prevToken = $cursor->subCursor()->previous();
                    if ($prevToken !== null && ! $prevToken->isOfType(Token::TOKEN_TYPE_WHITESPACE)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        $return = rtrim($return, ' ');
                    }
                }
            }

            // If the token shouldn't have a space before it
            if (
                $token->value() === '.' ||
                $token->value() === ',' ||
                $token->value() === ';'
            ) {
                $return = rtrim($return, ' ');
            }

            $return .= $highlighted . ' ';

            // If the token shouldn't have a space after it
            if ($token->value() === '(' || $token->value() === '.') {
                $return = rtrim($return, ' ');
            }

            // If this is the "-" of a negative number, it shouldn't have a space after it
            if ($token->value() !== '-') {
                continue;
            }

            $nextNotWhitespace = $cursor->subCursor()->next(Token::TOKEN_TYPE_WHITESPACE);
<<<<<<< HEAD
            if (! $nextNotWhitespace || ! $nextNotWhitespace->isOfType(Token::TOKEN_TYPE_NUMBER)) {
=======
            if ($nextNotWhitespace === null || ! $nextNotWhitespace->isOfType(Token::TOKEN_TYPE_NUMBER)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }

            $prev = $cursor->subCursor()->previous(Token::TOKEN_TYPE_WHITESPACE);
<<<<<<< HEAD
            if (! $prev) {
=======
            if ($prev === null) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }

            if (
                $prev->isOfType(
                    Token::TOKEN_TYPE_QUOTE,
                    Token::TOKEN_TYPE_BACKTICK_QUOTE,
                    Token::TOKEN_TYPE_WORD,
                    Token::TOKEN_TYPE_NUMBER,
                )
            ) {
                continue;
            }

            $return = rtrim($return, ' ');
        }

        // If there are unmatched parentheses
<<<<<<< HEAD
        if (array_search('block', $indentTypes) !== false) {
=======
        if (array_search(self::INDENT_TYPE_BLOCK, $indentTypes) !== false) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $return  = rtrim($return, ' ');
            $return .= $this->highlighter->highlightErrorMessage(
                'WARNING: unclosed parentheses or section',
            );
        }

        // Replace tab characters with the configuration tab character
<<<<<<< HEAD
        $return = trim(str_replace("\t", $indentString, $return));
=======
        $return = trim(str_replace($tab, $indentString, $return));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this->highlighter->output($return);
    }

    /**
     * Add syntax highlighting to a SQL string
     *
     * @param string $string The SQL string
     *
     * @return string The SQL string with HTML styles applied
     */
    public function highlight(string $string): string
    {
        $cursor = $this->tokenizer->tokenize($string);

        $return = '';

        while ($token = $cursor->next()) {
            $return .= $this->highlighter->highlightToken(
                $token->type(),
                $token->value(),
            );
        }

        return $this->highlighter->output($return);
    }

    /**
     * Compress a query by collapsing white space and removing comments
     *
     * @param string $string The SQL string
     *
     * @return string The SQL string without comments
     */
    public function compress(string $string): string
    {
        $result = '';
        $cursor = $this->tokenizer->tokenize($string);

        $whitespace = true;
        while ($token = $cursor->next()) {
            // Skip comment tokens
            if ($token->isOfType(Token::TOKEN_TYPE_COMMENT, Token::TOKEN_TYPE_BLOCK_COMMENT)) {
                continue;
            }

            // Remove extra whitespace in reserved words (e.g "OUTER     JOIN" becomes "OUTER JOIN")

            if (
                $token->isOfType(
                    Token::TOKEN_TYPE_RESERVED,
                    Token::TOKEN_TYPE_RESERVED_NEWLINE,
                    Token::TOKEN_TYPE_RESERVED_TOPLEVEL,
                )
            ) {
                $newValue = preg_replace('/\s+/', ' ', $token->value());
                assert($newValue !== null);
                $token = $token->withValue($newValue);
            }

            if ($token->isOfType(Token::TOKEN_TYPE_WHITESPACE)) {
                // If the last token was whitespace, don't add another one
                if ($whitespace) {
                    continue;
                }

                $whitespace = true;
                // Convert all whitespace to a single space
                $token = $token->withValue(' ');
            } else {
                $whitespace = false;
            }

            $result .= $token->value();
        }

        return rtrim($result);
    }
}
