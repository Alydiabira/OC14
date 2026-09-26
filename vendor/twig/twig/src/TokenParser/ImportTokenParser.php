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
use Twig\Node\Expression\AssignNameExpression;
=======
use Twig\Node\Expression\Variable\AssignTemplateVariable;
use Twig\Node\Expression\Variable\TemplateVariable;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Node\ImportNode;
use Twig\Node\Node;
use Twig\Token;

/**
 * Imports macros.
 *
<<<<<<< HEAD
 *   {% import 'forms.html' as forms %}
=======
 *   {% import 'forms.html.twig' as forms %}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @internal
 */
final class ImportTokenParser extends AbstractTokenParser
{
    public function parse(Token $token): Node
    {
<<<<<<< HEAD
        $macro = $this->parser->getExpressionParser()->parseExpression();
        $this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5, 'as');
        $var = new AssignNameExpression($this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5)->getValue(), $token->getLine());
        $this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        $this->parser->addImportedSymbol('template', $var->getAttribute('name'));

        return new ImportNode($macro, $var, $token->getLine(), $this->getTag(), $this->parser->isMainScope());
=======
        $macro = $this->parser->parseExpression();
        $this->parser->getStream()->expect(Token::NAME_TYPE, 'as');
        $name = $this->parser->getStream()->expect(Token::NAME_TYPE)->getValue();
        $var = new AssignTemplateVariable(new TemplateVariable($name, $token->getLine()), $this->parser->isMainScope());
        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);
        $this->parser->addImportedSymbol('template', $name);

        return new ImportNode($macro, $var, $token->getLine());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getTag(): string
    {
        return 'import';
    }
}
