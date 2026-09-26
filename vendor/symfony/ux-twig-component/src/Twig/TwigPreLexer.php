<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\TwigComponent\Twig;

use Twig\Error\SyntaxError;
use Twig\Lexer;

/**
 * Rewrites <twig:component> syntaxes to {% component %} syntaxes.
 */
class TwigPreLexer
{
    private string $input;
    private int $length;
    private int $position = 0;
    private int $line;
    /**
     * @var array<array{name: string, hasDefaultBlock: bool}>
     */
    private array $currentComponents = [];

    public function __construct(int $startingLine = 1)
    {
        $this->line = $startingLine;
    }

    public function preLexComponents(string $input): string
    {
        if (!str_contains($input, '<twig:')) {
            return $input;
        }

<<<<<<< HEAD
        $this->input = $input;
=======
        $this->input = $input = str_replace(["\r\n", "\r"], "\n", $input);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->length = \strlen($input);
        $output = '';

        $inTwigEmbed = false;

        while ($this->position < $this->length) {
            // ignore content inside verbatim block #947
            if ($this->consume('{% verbatim %}')) {
                $output .= '{% verbatim %}';
                $output .= $this->consumeUntil('{% endverbatim %}');
                $this->consume('{% endverbatim %}');
                $output .= '{% endverbatim %}';

                if ($this->position === $this->length) {
                    break;
                }
            }

            // ignore content inside twig comments, see #838
            if ($this->consume('{#')) {
                $output .= '{#';
                $output .= $this->consumeUntil('#}');
                $this->consume('#}');
                $output .= '#}';

                if ($this->position === $this->length) {
                    break;
                }
            }

            if ($this->consume('{% embed')) {
                $inTwigEmbed = true;
                $output .= '{% embed';
                $output .= $this->consumeUntil('%}');

                continue;
            }

            if ($this->consume('{% endembed %}')) {
                $inTwigEmbed = false;
                $output .= '{% endembed %}';

                continue;
            }

            $isTwigHtmlOpening = $this->consume('<twig:');
            $isTraditionalBlockOpening = false;

            if ($isTwigHtmlOpening || (0 !== \count($this->currentComponents) && $isTraditionalBlockOpening = $this->consume('{% block'))) {
                $componentName = $isTraditionalBlockOpening ? 'block' : $this->consumeComponentName();

                if ('block' === $componentName) {
                    // if we're already inside the "default" block, let's close it
                    if (!empty($this->currentComponents) && $this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock'] && !$inTwigEmbed) {
                        $output .= '{% endblock %}';

                        $this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock'] = false;
                    }

                    if ($isTraditionalBlockOpening) {
                        // add what we've consumed so far
                        $output .= '{% block';
                        $output .= $stringUntilClosingTag = $this->consumeUntil('%}');

                        // If the last-consumed string does not match the Twig's block name regex, we assume the block is self-closing
                        $isBlockSelfClosing = '' !== preg_replace(Lexer::REGEX_NAME, '', trim($stringUntilClosingTag));

                        if ($isBlockSelfClosing && $this->consume('%}')) {
                            $output .= '%}';
                        } else {
                            $output .= $this->consumeUntilEndBlock();
                        }

                        continue;
                    }

                    $output .= $this->consumeBlock($componentName);

                    continue;
                }

                // if we're already inside a component,
                // *and* we've just found a new component, then we should try to
                // open the default block
                if (!empty($this->currentComponents)
                    && !$this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock']) {
<<<<<<< HEAD
                    $output .= $this->addDefaultBlock();
=======
                    $output .= '{% block content %}';
                    $this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock'] = true;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                $attributes = $this->consumeAttributes($componentName);
                $isSelfClosing = $this->consume('/>');
                if (!$isSelfClosing) {
                    $this->consume('>');
                    $this->currentComponents[] = ['name' => $componentName, 'hasDefaultBlock' => false];
                }

                if ($isSelfClosing) {
                    // use the simpler component() format, so that the system doesn't think
                    // this is an "embedded" component with blocks
                    // see https://github.com/symfony/ux/issues/810
                    $output .= "{{ component('{$componentName}'".($attributes ? ", { {$attributes} }" : '').') }}';
                } else {
                    $output .= "{% component '{$componentName}'".($attributes ? " with { {$attributes} }" : '').' %}';
                }

                continue;
            }

            if (!empty($this->currentComponents) && $this->check('</twig:')) {
                $this->consume('</twig:');
                $closingComponentName = $this->consumeComponentName();
                $this->consume('>');

                $lastComponent = array_pop($this->currentComponents);
                $lastComponentName = $lastComponent['name'];

                if ($closingComponentName !== $lastComponentName) {
<<<<<<< HEAD
                    throw new SyntaxError("Expected closing tag '</twig:{$lastComponentName}>' but found '</twig:{$closingComponentName}>'", $this->line);
=======
                    throw new SyntaxError("Expected closing tag '</twig:{$lastComponentName}>' but found '</twig:{$closingComponentName}>'.", $this->line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }

                // we've reached the end of this component. If we're inside the
                // default block, let's close it
                if ($lastComponent['hasDefaultBlock']) {
                    $output .= '{% endblock %}';
                }

                $output .= '{% endcomponent %}';

                continue;
            }

            $char = $this->input[$this->position];
            if ("\n" === $char) {
                ++$this->line;
            }

            // handle adding a default block if we find non-whitespace outside of a block
            if (!empty($this->currentComponents)
                && !$this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock']
                && preg_match('/\S/', $char)
                && !$this->check('{% block')
            ) {
<<<<<<< HEAD
                $output .= $this->addDefaultBlock();
=======
                $this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock'] = true;
                $output .= '{% block content %}';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            $output .= $char;
            $this->consumeChar();
        }

        if (!empty($this->currentComponents)) {
            $lastComponent = array_pop($this->currentComponents)['name'];
<<<<<<< HEAD
            throw new SyntaxError(sprintf('Expected closing tag "</twig:%s>" not found.', $lastComponent), $this->line);
=======
            throw new SyntaxError(\sprintf('Expected closing tag "</twig:%s>" not found.', $lastComponent), $this->line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $output;
    }

    private function consumeComponentName(?string $customExceptionMessage = null): string
    {
<<<<<<< HEAD
        $start = $this->position;
        while ($this->position < $this->length && preg_match('/[A-Za-z0-9_:@\-.]/', $this->input[$this->position])) {
            ++$this->position;
        }

        $componentName = substr($this->input, $start, $this->position - $start);

        if (empty($componentName)) {
            $exceptionMessage = $customExceptionMessage;
            if (null == $exceptionMessage) {
                $exceptionMessage = 'Expected component name when resolving the "<twig:" syntax.';
            }
            throw new SyntaxError($exceptionMessage, $this->line);
        }

        return $componentName;
    }

    private function consumeAttributeName(string $componentName): string
    {
        $message = sprintf('Expected attribute name when parsing the "<twig:%s" syntax.', $componentName);

        return $this->consumeComponentName($message);
=======
        if (preg_match('/\G[A-Za-z0-9_:@\-.]+/', $this->input, $matches, 0, $this->position)) {
            $componentName = $matches[0];
            $this->position += \strlen($componentName);

            return $componentName;
        }

        throw new SyntaxError($customExceptionMessage ?? 'Expected component name when resolving the "<twig:" syntax.', $this->line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function consumeAttributes(string $componentName): string
    {
        $attributes = [];

        while ($this->position < $this->length && !$this->check('>') && !$this->check('/>')) {
            $this->consumeWhitespace();
            if ($this->check('>') || $this->check('/>')) {
                break;
            }

            if ($this->check('{{...') || $this->check('{{ ...')) {
                $this->consume('{{...');
                $this->consume('{{ ...');
                $attributes[] = '...'.trim($this->consumeUntil('}}'));
                $this->consume('}}');

                continue;
            }

            $isAttributeDynamic = false;

            // :someProp="dynamicVar"
<<<<<<< HEAD
=======
            $this->consumeWhitespace();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($this->check(':')) {
                $this->consume(':');
                $isAttributeDynamic = true;
            }

<<<<<<< HEAD
            $key = $this->consumeAttributeName($componentName);

            // <twig:component someProp> -> someProp: true
            if (!$this->check('=')) {
                // don't allow "<twig:component :someProp>"
                if ($isAttributeDynamic) {
                    throw new SyntaxError(sprintf('Expected "=" after ":%s" when parsing the "<twig:%s" syntax.', $key, $componentName), $this->line);
                }

                $attributes[] = sprintf('%s: true', preg_match('/[-:]/', $key) ? "'$key'" : $key);
=======
            $message = \sprintf('Expected attribute name when parsing the "<twig:%s" syntax.', $componentName);
            // was called 'consumeAttributeName'
            $key = $this->consumeComponentName($message);

            // <twig:component someProp> -> someProp: true
            if (!$this->check('=')) {
                $this->consumeWhitespace();
                // don't allow "<twig:component :someProp>"
                if ($isAttributeDynamic) {
                    throw new SyntaxError(\sprintf('Expected "=" after ":%s" when parsing the "<twig:%s" syntax.', $key, $componentName), $this->line);
                }

                $attributes[] = \sprintf('%s: true', preg_match('/[-:@]/', $key) ? "'$key'" : $key);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $this->consumeWhitespace();
                continue;
            }

            $this->expectAndConsumeChar('=');
            $quote = $this->consumeChar(["'", '"']);

            if ($isAttributeDynamic) {
                // :someProp="dynamicVar"
                $attributeValue = $this->consumeUntil($quote);
            } else {
                $attributeValue = $this->consumeAttributeValue($quote);
            }

<<<<<<< HEAD
            $attributes[] = sprintf('%s: %s', preg_match('/[-:]/', $key) ? "'$key'" : $key, '' === $attributeValue ? "''" : $attributeValue);
=======
            $attributes[] = \sprintf('%s: %s', preg_match('/[-:@]/', $key) ? "'$key'" : $key, '' === $attributeValue ? "''" : $attributeValue);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            $this->expectAndConsumeChar($quote);
            $this->consumeWhitespace();
        }

        return implode(', ', $attributes);
    }

    /**
     * If the next character(s) exactly matches the given string, then
     * consume it (move forward) and return true.
     */
    private function consume(string $string): bool
    {
<<<<<<< HEAD
        $stringLength = \strlen($string);
        if (substr($this->input, $this->position, $stringLength) === $string) {
            $this->position += $stringLength;
=======
        if (str_starts_with(substr($this->input, $this->position), $string)) {
            $this->position += \strlen($string);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return true;
        }

        return false;
    }

    private function consumeChar($validChars = null): string
    {
        if ($this->position >= $this->length) {
<<<<<<< HEAD
            throw new SyntaxError('Unexpected end of input', $this->line);
=======
            throw new SyntaxError('Unexpected end of input.', $this->line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $char = $this->input[$this->position];

        if (null !== $validChars && !\in_array($char, (array) $validChars, true)) {
<<<<<<< HEAD
            throw new SyntaxError('Expected one of ['.implode('', (array) $validChars)."] but found '{$char}'.", $this->line);
=======
            throw new SyntaxError('Expected one of [.'.implode('', (array) $validChars)."] but found '{$char}'.", $this->line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        ++$this->position;

        return $char;
    }

    /**
     * Moves the position forward until it finds $endString.
     *
     * Any string consumed *before* finding that string is returned.
     * The position is moved forward to just *before* $endString.
     */
    private function consumeUntil(string $endString): string
    {
<<<<<<< HEAD
        $start = $this->position;
        $endCharLength = \strlen($endString);

        while ($this->position < $this->length) {
            if (substr($this->input, $this->position, $endCharLength) === $endString) {
                break;
            }

            if ("\n" === $this->input[$this->position]) {
                ++$this->line;
            }
            ++$this->position;
        }

        return substr($this->input, $start, $this->position - $start);
=======
        if (false === $endPosition = strpos($this->input, $endString, $this->position)) {
            $start = $this->position;
            $this->position = $this->length;

            return substr($this->input, $start);
        }

        $content = substr($this->input, $this->position, $endPosition - $this->position);
        $this->line += substr_count($content, "\n");
        $this->position = $endPosition;

        return $content;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function consumeWhitespace(): void
    {
<<<<<<< HEAD
        while ($this->position < $this->length && preg_match('/\s/', $this->input[$this->position])) {
            if ("\n" === $this->input[$this->position]) {
                ++$this->line;
            }
            ++$this->position;
=======
        $whitespace = substr($this->input, $this->position, strspn($this->input, " \t\n\r\0\x0B", $this->position));
        $this->line += substr_count($whitespace, "\n");
        $this->position += \strlen($whitespace);

        if ($this->check('#')) {
            $this->consume('#');
            $this->consumeUntil("\n");
            $this->consumeWhitespace();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    /**
     * Checks that the next character is the one given and consumes it.
     */
    private function expectAndConsumeChar(string $char): void
    {
        if (1 !== \strlen($char)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException('Expected a single character');
=======
            throw new \InvalidArgumentException('Expected a single character.');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($this->position >= $this->length) {
            throw new SyntaxError("Expected '{$char}' but reached the end of the file.", $this->line);
        }

        if ($this->input[$this->position] !== $char) {
            throw new SyntaxError("Expected '{$char}' but found '{$this->input[$this->position]}'.", $this->line);
        }

        ++$this->position;
    }

    private function check(string $chars): bool
    {
<<<<<<< HEAD
        $charsLength = \strlen($chars);
        if ($this->position + $charsLength > $this->length) {
            return false;
        }

        for ($i = 0; $i < $charsLength; ++$i) {
            if ($this->input[$this->position + $i] !== $chars[$i]) {
                return false;
            }
        }

        return true;
=======
        return $this->position + \strlen($chars) <= $this->length
            && 0 === substr_compare($this->input, $chars, $this->position, \strlen($chars));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function consumeBlock(string $componentName): string
    {
        $attributes = $this->consumeAttributes($componentName);
        $this->consume('>');

        $blockName = '';
        foreach (explode(', ', $attributes) as $attr) {
            [$key, $value] = explode(': ', $attr);
            if ('name' === $key) {
                $blockName = trim($value, "'");
                break;
            }
        }

        if (empty($blockName)) {
            throw new SyntaxError('Expected block name.', $this->line);
        }

        $output = "{% block {$blockName} %}";

        $closingTag = '</twig:block>';
<<<<<<< HEAD
        if (!$this->doesStringEventuallyExist($closingTag)) {
=======
        if (false === strpos($this->input, $closingTag, $this->position)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            throw new SyntaxError("Expected closing tag '{$closingTag}' for block '{$blockName}'.", $this->line);
        }
        $blockContents = $this->consumeUntilEndBlock();

        $subLexer = new self($this->line);
        $output .= $subLexer->preLexComponents($blockContents);

        $this->consume($closingTag);
        $output .= '{% endblock %}';

        return $output;
    }

    private function consumeUntilEndBlock(): string
    {
        $start = $this->position;

        $depth = 1;
        $inComment = false;
        while ($this->position < $this->length) {
            if ($inComment && '#}' === substr($this->input, $this->position, 2)) {
                $inComment = false;
            }
            if (!$inComment && '{#' === substr($this->input, $this->position, 2)) {
                $inComment = true;
            }

            if (!$inComment && '</twig:block>' === substr($this->input, $this->position, 13)) {
                if (1 === $depth) {
                    break;
<<<<<<< HEAD
                } else {
                    --$depth;
                }
=======
                }

                --$depth;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if (!$inComment && '{% endblock %}' === substr($this->input, $this->position, 14)) {
                if (1 === $depth) {
                    // in this case, we want to advance ALL the way beyond the endblock
<<<<<<< HEAD
                    $this->position += 14 /* strlen('{% endblock %}') */;
                    break;
                } else {
                    --$depth;
                }
=======
                    // strlen('{% endblock %}') = 14
                    $this->position += 14;
                    break;
                }

                --$depth;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if (!$inComment && '<twig:block' === substr($this->input, $this->position, 11)) {
                ++$depth;
            }

            if (!$inComment && '{% block' === substr($this->input, $this->position, 8)) {
                ++$depth;
            }

            if ("\n" === $this->input[$this->position]) {
                ++$this->line;
            }
<<<<<<< HEAD
=======

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ++$this->position;
        }

        return substr($this->input, $start, $this->position - $start);
    }

    private function consumeAttributeValue(string $quote): string
    {
        $parts = [];
        $currentPart = '';
        while ($this->position < $this->length) {
            if ($this->check($quote)) {
                break;
            }

            if ("\n" === $this->input[$this->position]) {
                ++$this->line;
            }

            if ($this->check('{{')) {
                // mark any previous static text as complete: push into parts
                if ('' !== $currentPart) {
<<<<<<< HEAD
                    $parts[] = sprintf("'%s'", str_replace("'", "\'", $currentPart));
=======
                    $parts[] = \sprintf("'%s'", str_replace("'", "\'", $currentPart));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $currentPart = '';
                }

                // consume the entire {{ }} block
                $this->consume('{{');
                $this->consumeWhitespace();
<<<<<<< HEAD
                $parts[] = sprintf('(%s)', rtrim($this->consumeUntil('}}')));
=======
                $parts[] = \sprintf('(%s)', rtrim($this->consumeUntil('}}')));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $this->expectAndConsumeChar('}');
                $this->expectAndConsumeChar('}');

                continue;
            }

            $currentPart .= $this->input[$this->position];
            ++$this->position;
        }

        if ('' !== $currentPart) {
<<<<<<< HEAD
            $parts[] = sprintf("'%s'", str_replace("'", "\'", $currentPart));
=======
            $parts[] = \sprintf("'%s'", str_replace("'", "\'", $currentPart));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return implode('~', $parts);
    }
<<<<<<< HEAD

    private function doesStringEventuallyExist(string $needle): bool
    {
        $remainingString = substr($this->input, $this->position);

        return str_contains($remainingString, $needle);
    }

    private function addDefaultBlock(): string
    {
        $this->currentComponents[\count($this->currentComponents) - 1]['hasDefaultBlock'] = true;

        return '{% block content %}';
    }
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
