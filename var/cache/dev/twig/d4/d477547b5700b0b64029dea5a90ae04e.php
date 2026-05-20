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

/* @WebProfiler/Collector/validator.html.twig */
class __TwigTemplate_f9fb3500c48bcd898f61076df6d2e55e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/validator.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #collector-content .sf-validator {
            margin-bottom: 2em;
        }

        #collector-content .sf-validator .sf-validator-context,
        #collector-content .sf-validator .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-validator .trace {
            font-size: 12px;
        }
        #collector-content .sf-validator .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-validator .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 33
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 33) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 33)))) {
            // line 34
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 34)) ? ("red") : (""));
            // line 35
            echo "        ";
            ob_start(function () { return ''; });
            // line 36
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/validator.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 38)) ?: (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 38)))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            echo "
        ";
            // line 42
            ob_start(function () { return ''; });
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 45
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 45)), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status";
            // line 49
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 49) > 0)) ? (" sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "
        ";
            // line 53
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 58
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 58)) ? (" label-status-error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 58))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 59
        echo twig_source($this->env, "@WebProfiler/Icon/validator.svg");
        echo "</span>
        <strong>Validator</strong>
        ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 61) > 0)) {
            // line 62
            echo "            <span class=\"count\">
                <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "violationsCount", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 66
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 70
        echo "    <h2>Validator calls</h2>

    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 72));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 73
            echo "        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 75
            $context["caller"] = twig_get_attribute($this->env, $this->source, $context["call"], "caller", [], "any", false, false, false, 75);
            // line 76
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 76)) {
                // line 77
                echo "                    ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 77));
                // line 78
                echo "                    ";
                if (($context["link"] ?? null)) {
                    // line 79
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 79), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 79), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 81
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 81), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 81), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 83
                echo "                ";
            } else {
                // line 84
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "
                ";
            }
            // line 86
            echo "                line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 86), "html", null, true);
            echo "</button> (<button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-context-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86), "html", null, true);
            echo "\">context</button>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 91
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 91)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
            // line 96
            echo "
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
                ";
            // line 101
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "context", [], "any", false, false, false, 101), 1);
            echo "
            </div>

            ";
            // line 104
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "violations", [], "any", false, false, false, 104))) {
                // line 105
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["call"], "violations", [], "any", false, false, false, 114));
                foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                    // line 115
                    echo "                        <tr>
                            <td>";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["violation"], "propertyPath", [], "any", false, false, false, 116), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["violation"], "message", [], "any", false, false, false, 117), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 118
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["violation"], "seek", ["invalidValue"], "method", false, false, false, 118));
                    echo "</td>
                            <td>";
                    // line 119
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["violation"]);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "                </table>
            ";
            } else {
                // line 124
                echo "                No violations
            ";
            }
            // line 126
            echo "        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 128
            echo "        <div class=\"empty empty-panel\">
            <p>No calls to the validator were collected.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/validator.html.twig";
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
        return array (  368 => 128,  354 => 126,  350 => 124,  346 => 122,  337 => 119,  333 => 118,  329 => 117,  325 => 116,  322 => 115,  318 => 114,  307 => 105,  305 => 104,  299 => 101,  295 => 100,  289 => 96,  287 => 91,  282 => 89,  271 => 86,  265 => 84,  262 => 83,  254 => 81,  244 => 79,  241 => 78,  238 => 77,  235 => 76,  233 => 75,  229 => 73,  211 => 72,  207 => 70,  200 => 69,  192 => 66,  186 => 63,  183 => 62,  181 => 61,  176 => 59,  169 => 58,  162 => 57,  152 => 53,  149 => 52,  141 => 49,  134 => 45,  130 => 43,  128 => 42,  125 => 41,  119 => 38,  113 => 36,  110 => 35,  107 => 34,  104 => 33,  97 => 32,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/validator.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/validator.html.twig");
    }
}
