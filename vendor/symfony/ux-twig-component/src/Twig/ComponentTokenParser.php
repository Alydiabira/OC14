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

use Symfony\UX\TwigComponent\BlockStack;
<<<<<<< HEAD
=======
use Twig\Error\SyntaxError;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\Node;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Kevin Bond <kevinbond@gmail.com>
 *
 * @internal
 */
final class ComponentTokenParser extends AbstractTokenParser
{
    private array $lineAndFileCounts = [];

    public function parse(Token $token): Node
    {
        $stream = $this->parser->getStream();
<<<<<<< HEAD
        $componentName = $this->componentName($this->parser->getExpressionParser()->parseExpression());
=======

        if (method_exists($this->parser, 'parseExpression')) {
            // Since Twig 3.21
            $componentName = $this->componentName($this->parser->parseExpression());
        } else {
            $componentName = $this->componentName($this->parser->getExpressionParser()->parseExpression());
        }

        if (null === $componentName) {
            throw new SyntaxError('Could not parse component name.', $stream->getCurrent()->getLine(), $stream->getSourceContext());
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        [$propsExpression, $only] = $this->parseArguments();

        // Write a fake: "extends __parent__" into the "embedded" template.
        // The `__parent__` will be passed in as a context variable.
        $fakeParentToken = new Token(Token::NAME_TYPE, '__parent__', $token->getLine());
        $stream->injectTokens([
            new Token(Token::BLOCK_START_TYPE, '', $token->getLine()),
            new Token(Token::NAME_TYPE, 'extends', $token->getLine()),
            $fakeParentToken,
            new Token(Token::BLOCK_END_TYPE, '', $token->getLine()),

            // Add an empty block which can act as a fallback for when an outer
            // block is referenced that is not passed in from the embedded component.
            // See BlockStack::__call()
            new Token(Token::BLOCK_START_TYPE, '', $token->getLine()),
            new Token(Token::NAME_TYPE, 'block', $token->getLine()),
            new Token(Token::NAME_TYPE, BlockStack::OUTER_BLOCK_FALLBACK_NAME, $token->getLine()),
            new Token(Token::BLOCK_END_TYPE, '', $token->getLine()),
            new Token(Token::BLOCK_START_TYPE, '', $token->getLine()),
            new Token(Token::NAME_TYPE, 'endblock', $token->getLine()),
            new Token(Token::BLOCK_END_TYPE, '', $token->getLine()),
        ]);

        // create the "fake" ModuleNode template then add it to the parser
        $module = $this->parser->parse($stream, fn (Token $token) => $token->test("end{$this->getTag()}"), true);
        $this->parser->embedTemplate($module);

        // override the embedded index with a deterministic value, so it can be loaded in a controlled manner
<<<<<<< HEAD
        $module->setAttribute('index', $this->generateEmbeddedTemplateIndex(TemplateNameParser::parse($stream->getSourceContext()->getName()), $token->getLine()));

        $stream->expect(Token::BLOCK_END_TYPE);

        return new ComponentNode($componentName, $module->getTemplateName(), $module->getAttribute('index'), $propsExpression, $only, $token->getLine(), $this->getTag());
=======
        $module->setAttribute('index', $this->generateEmbeddedTemplateIndex($stream->getSourceContext()->getName(), $token->getLine()));

        $stream->expect(Token::BLOCK_END_TYPE);

        return new ComponentNode($componentName, $module->getTemplateName(), $module->getAttribute('index'), $propsExpression, $only, $token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getTag(): string
    {
        return 'component';
    }

<<<<<<< HEAD
    private function componentName(AbstractExpression $expression): string
=======
    private function componentName(AbstractExpression $expression): ?string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ($expression instanceof ConstantExpression) { // using {% component 'name' %}
            return $expression->getAttribute('value');
        }

        if ($expression instanceof NameExpression) { // using {% component name %}
            return $expression->getAttribute('name');
        }

<<<<<<< HEAD
        throw new \LogicException('Could not parse component name.');
=======
        return null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return array{ArrayExpression|null, bool}
     */
    private function parseArguments(): array
    {
        $stream = $this->parser->getStream();

        $variables = null;

        if ($stream->nextIf(Token::NAME_TYPE, 'with')) {
<<<<<<< HEAD
            $variables = $this->parser->getExpressionParser()->parseExpression();
=======
            if (method_exists($this->parser, 'parseExpression')) {
                // Since Twig 3.21
                $variables = $this->parser->parseExpression();
            } else {
                $variables = $this->parser->getExpressionParser()->parseExpression();
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $only = false;
        if ($stream->nextIf(Token::NAME_TYPE, 'only')) {
            $only = true;
        }

        $stream->expect(Token::BLOCK_END_TYPE);

        return [$variables, $only];
    }

    private function generateEmbeddedTemplateIndex(string $file, int $line): int
    {
<<<<<<< HEAD
        $fileAndLine = sprintf('%s-%d', $file, $line);
=======
        $fileAndLine = \sprintf('%s-%d', $file, $line);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (!isset($this->lineAndFileCounts[$fileAndLine])) {
            $this->lineAndFileCounts[$fileAndLine] = 0;
        }

<<<<<<< HEAD
        return crc32($fileAndLine).++$this->lineAndFileCounts[$fileAndLine];
=======
        $index = crc32($fileAndLine).++$this->lineAndFileCounts[$fileAndLine];

        if (4 === \PHP_INT_SIZE) {
            // On 32-bit PHP, the index can be negative or greater than PHP_INT_MAX
            // we need to convert it to a positive 32-bit integer
            $index = fmod(abs($index), \PHP_INT_MAX) + 1;
        }

        return (int) $index;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
