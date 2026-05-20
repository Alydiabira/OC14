<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Collector/command.html.twig */
class __TwigTemplate_bf03525f89ab4c613594548d3ecb5ab6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/command.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/command.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 5
        echo twig_source($this->env, "@WebProfiler/Icon/command.svg");
        echo "</span>
        <strong>Console Command</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        echo "    <h2>
        ";
        // line 12
        $context["command"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "command", [], "any", false, false, false, 12);
        // line 13
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "file", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "line", [], "any", false, false, false, 13)), "html", null, true);
        echo "\">
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", true, true, false, 14)) {
            // line 15
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrMethod(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", false, false, false, 15), "html", null, true));
            echo "
            ";
        } else {
            // line 17
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["command"] ?? null), "class", [], "any", false, false, false, 17), "html", null, true));
            echo "
            ";
        }
        // line 19
        echo "        </a>
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Command</h3>

            <div class=\"tab-content\">
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                        <span class=\"label\">Duration</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "maxMemoryUsage", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
                        <span class=\"label\">Peak Memory Usage</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "verbosityLevel", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
                        <span class=\"label\">Verbosity Level</span>
                    </div>
                </div>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 46
        echo twig_source($this->env, (("@WebProfiler/Icon/" . (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, false, 46))) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Signalable</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 51
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactive", [], "any", false, false, false, 51)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Interactive</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 56
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "validateInput", [], "any", false, false, false, 56)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Validate Input</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 61
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 61)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Enabled</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 66
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "visible", [], "any", false, false, false, 66)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Visible</span>
                    </div>
                </div>

                <h3>Arguments</h3>

                ";
        // line 73
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "arguments", [], "any", false, false, false, 73))) {
            // line 74
            echo "                    <div class=\"empty\">
                        <p>No arguments were set</p>
                    </div>
                ";
        } else {
            // line 78
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "arguments", [], "any", false, false, false, 78), "labels" => ["Argument", "Value"], "maxDepth" => 2], false);
            echo "
                ";
        }
        // line 80
        echo "
                <h3>Options</h3>

                ";
        // line 83
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "options", [], "any", false, false, false, 83))) {
            // line 84
            echo "                    <div class=\"empty\">
                        <p>No options were set</p>
                    </div>
                ";
        } else {
            // line 88
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "options", [], "any", false, false, false, 88), "labels" => ["Option", "Value"], "maxDepth" => 2], false);
            echo "
                ";
        }
        // line 90
        echo "
                ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactive", [], "any", false, false, false, 91)) {
            // line 92
            echo "                    <h3>Interactive Inputs</h3>

                    <p class=\"help\">
                        The values which have been set interactively.
                    </p>

                    ";
            // line 98
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactiveInputs", [], "any", false, false, false, 98))) {
                // line 99
                echo "                        <div class=\"empty\">
                            <p>No inputs were set</p>
                        </div>
                    ";
            } else {
                // line 103
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "interactiveInputs", [], "any", false, false, false, 103), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
                echo "
                    ";
            }
            // line 105
            echo "                ";
        }
        // line 106
        echo "
                <h3>Application inputs</h3>

                ";
        // line 109
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "applicationInputs", [], "any", false, false, false, 109))) {
            // line 110
            echo "                    <div class=\"empty\">
                        <p>No application inputs are set</p>
                    </div>
                ";
        } else {
            // line 114
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "applicationInputs", [], "any", false, false, false, 114), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
            echo "
                ";
        }
        // line 116
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Input / Output</h3>

            <div class=\"tab-content\">
                <table>
                    <tr>
                        <td class=\"font-normal\">Input</td>
                        <td class=\"font-normal\">";
        // line 126
        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "input", [], "any", false, false, false, 126));
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"font-normal\">Output</td>
                        <td class=\"font-normal\">";
        // line 130
        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "output", [], "any", false, false, false, 130));
        echo "</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Helper Set</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "helperSet", [], "any", false, false, false, 140))) {
            // line 141
            echo "                    <div class=\"empty\">
                        <p>No helpers</p>
                    </div>
                ";
        } else {
            // line 145
            echo "                    <table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Helpers</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "helperSet", [], "any", false, false, false, 152)));
            foreach ($context['_seq'] as $context["_key"] => $context["helper"]) {
                // line 153
                echo "                            <tr>
                                <td>";
                // line 154
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["helper"]);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 160
        echo "            </div>
        </div>

        <div class=\"tab\">
            ";
        // line 164
        $context["request_collector"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 164), "request", [], "any", false, false, false, 164);
        // line 165
        echo "            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 169
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "dotenvvars", [], "any", false, false, false, 169)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 172
        $context["requestserver"] = [];
        // line 173
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 173), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "dotenvvars", [], "any", false, false, false, 173), "keys", [], "any", false, false, false, 173)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 174
            echo "                    ";
            $context["requestserver"] = twig_array_merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 175
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        echo "
            </div>
        </div>

        ";
        // line 180
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, false, 180))) {
            // line 181
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Signals</h3>

                <div class=\"tab-content\">
                    <h3>Subscribed signals</h3>
                    ";
            // line 186
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, false, 186), ", "), "html", null, true);
            echo "

                    <h3>Handled signals</h3>
                    ";
            // line 189
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledSignals", [], "any", false, false, false, 189))) {
                // line 190
                echo "                        <div class=\"empty\">
                            <p>No signals handled</p>
                        </div>
                    ";
            } else {
                // line 194
                echo "                        <table>
                            <thead>
                                <tr>
                                    <th>Signal</th>
                                    <th>Times handled</th>
                                    <th>Total execution time</th>
                                    <th>Memory peak</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledSignals", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["signal"] => $context["data"]) {
                    // line 205
                    echo "                                    <tr>
                                        <td>";
                    // line 206
                    echo twig_escape_filter($this->env, $context["signal"], "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "handled", [], "any", false, false, false, 207), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 208
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "duration", [], "any", false, false, false, 208), "html", null, true);
                    echo " ms</td>
                                        <td>";
                    // line 209
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "memory", [], "any", false, false, false, 209), "html", null, true);
                    echo " MiB</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['signal'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 215
            echo "                </div>
            </div>
        ";
        }
        // line 218
        echo "
        ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 219)) {
            // line 220
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Parent Command</h3>

                <div class=\"tab-content\">
                    <h3>
                        <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 225), "token", [], "any", false, false, false, 225)]), "html", null, true);
            echo "\">Return to parent command</a>
                        <small>(token = ";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 226), "token", [], "any", false, false, false, 226), "html", null, true);
            echo ")</small>
                    </h3>

                    ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 229), "url", [], "any", false, false, false, 229), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 233
        echo "
        ";
        // line 234
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 234))) {
            // line 235
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Sub Commands <span class=\"badge\">";
            // line 236
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 236)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 239));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 240
                echo "                        <h3>
                            ";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 241), "html", null, true);
                echo "
                            <small>(token = <a href=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 242)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 242), "html", null, true);
                echo "</a>)</small>
                        </h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                </div>
            </div>
        ";
        }
        // line 248
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/command.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  526 => 248,  521 => 245,  510 => 242,  506 => 241,  503 => 240,  499 => 239,  493 => 236,  490 => 235,  488 => 234,  485 => 233,  478 => 229,  472 => 226,  468 => 225,  461 => 220,  459 => 219,  456 => 218,  451 => 215,  446 => 212,  437 => 209,  433 => 208,  429 => 207,  425 => 206,  422 => 205,  418 => 204,  406 => 194,  400 => 190,  398 => 189,  392 => 186,  385 => 181,  383 => 180,  375 => 176,  369 => 175,  366 => 174,  361 => 173,  359 => 172,  353 => 169,  347 => 165,  345 => 164,  339 => 160,  334 => 157,  325 => 154,  322 => 153,  318 => 152,  307 => 145,  301 => 141,  299 => 140,  286 => 130,  279 => 126,  267 => 116,  261 => 114,  255 => 110,  253 => 109,  248 => 106,  245 => 105,  239 => 103,  233 => 99,  231 => 98,  223 => 92,  221 => 91,  218 => 90,  212 => 88,  206 => 84,  204 => 83,  199 => 80,  193 => 78,  187 => 74,  185 => 73,  175 => 66,  167 => 61,  159 => 56,  151 => 51,  143 => 46,  133 => 39,  125 => 34,  117 => 29,  105 => 19,  99 => 17,  93 => 15,  91 => 14,  86 => 13,  84 => 12,  81 => 11,  74 => 10,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/command.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/command.html.twig");
    }
}
