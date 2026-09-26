<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class CheckSecurityNode extends Node
{
    private $usedFilters;
    private $usedTags;
    private $usedFunctions;
<<<<<<< HEAD
=======
    private $usedTests;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * @param array<string, int> $usedFilters
     * @param array<string, int> $usedTags
     * @param array<string, int> $usedFunctions
<<<<<<< HEAD
     */
    public function __construct(array $usedFilters, array $usedTags, array $usedFunctions)
    {
        $this->usedFilters = $usedFilters;
        $this->usedTags = $usedTags;
        $this->usedFunctions = $usedFunctions;
=======
     * @param array<string, int> $usedTests
     */
    public function __construct(array $usedFilters, array $usedTags, array $usedFunctions, array $usedTests = [])
    {
        if (\func_num_args() < 4) {
            trigger_deprecation('twig/twig', '3.28', 'Not passing the "$usedTests" argument to "%s::__construct()" is deprecated; it will be required in 4.0.', static::class);
        }

        $this->usedFilters = $usedFilters;
        $this->usedTags = $usedTags;
        $this->usedFunctions = $usedFunctions;
        $this->usedTests = $usedTests;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        parent::__construct();
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->write("\n")
<<<<<<< HEAD
=======
            ->write("public function ensureSecurityChecked(): void\n")
            ->write("{\n")
            ->indent()
            ->write("if (\$this->sandbox->isSandboxed(\$this->source)) {\n")
            ->indent()
            ->write("\$this->checkSecurity();\n")
            ->outdent()
            ->write("}\n")
            ->outdent()
            ->write("}\n")
            ->write("\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->write("public function checkSecurity()\n")
            ->write("{\n")
            ->indent()
            ->write('static $tags = ')->repr(array_filter($this->usedTags))->raw(";\n")
            ->write('static $filters = ')->repr(array_filter($this->usedFilters))->raw(";\n")
<<<<<<< HEAD
            ->write('static $functions = ')->repr(array_filter($this->usedFunctions))->raw(";\n\n")
=======
            ->write('static $functions = ')->repr(array_filter($this->usedFunctions))->raw(";\n")
            ->write('static $tests = ')->repr(array_filter($this->usedTests))->raw(";\n\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->write("try {\n")
            ->indent()
            ->write("\$this->sandbox->checkSecurity(\n")
            ->indent()
<<<<<<< HEAD
            ->write(!$this->usedTags ? "[],\n" : "['".implode("', '", array_keys($this->usedTags))."'],\n")
            ->write(!$this->usedFilters ? "[],\n" : "['".implode("', '", array_keys($this->usedFilters))."'],\n")
            ->write(!$this->usedFunctions ? "[],\n" : "['".implode("', '", array_keys($this->usedFunctions))."'],\n")
=======
            ->write('')->repr(array_keys($this->usedTags))->raw(",\n")
            ->write('')->repr(array_keys($this->usedFilters))->raw(",\n")
            ->write('')->repr(array_keys($this->usedFunctions))->raw(",\n")
            ->write('')->repr(array_keys($this->usedTests))->raw(",\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->write("\$this->source\n")
            ->outdent()
            ->write(");\n")
            ->outdent()
            ->write("} catch (SecurityError \$e) {\n")
            ->indent()
            ->write("\$e->setSourceContext(\$this->source);\n\n")
            ->write("if (\$e instanceof SecurityNotAllowedTagError && isset(\$tags[\$e->getTagName()])) {\n")
            ->indent()
            ->write("\$e->setTemplateLine(\$tags[\$e->getTagName()]);\n")
            ->outdent()
            ->write("} elseif (\$e instanceof SecurityNotAllowedFilterError && isset(\$filters[\$e->getFilterName()])) {\n")
            ->indent()
            ->write("\$e->setTemplateLine(\$filters[\$e->getFilterName()]);\n")
            ->outdent()
            ->write("} elseif (\$e instanceof SecurityNotAllowedFunctionError && isset(\$functions[\$e->getFunctionName()])) {\n")
            ->indent()
            ->write("\$e->setTemplateLine(\$functions[\$e->getFunctionName()]);\n")
            ->outdent()
<<<<<<< HEAD
=======
            ->write("} elseif (\$e instanceof SecurityNotAllowedTestError && isset(\$tests[\$e->getTestName()])) {\n")
            ->indent()
            ->write("\$e->setTemplateLine(\$tests[\$e->getTestName()]);\n")
            ->outdent()
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ->write("}\n\n")
            ->write("throw \$e;\n")
            ->outdent()
            ->write("}\n\n")
            ->outdent()
            ->write("}\n")
        ;
    }
}
