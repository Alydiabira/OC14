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

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_d6b5dfb71d5af9f4734a59956d206052 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        #twig-dump pre {
            font-size: var(--font-size-monospace);
            line-height: 1.7;
            background-color: var(--page-background);
            border: var(--border);
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0 0 1px rgba(128, 128, 128, .2);
        }
        #twig-dump span {
            border-radius: 2px;
            padding: 1px 2px;
        }
        #twig-dump .status-error { background: transparent; color: var(--color-error); }
        #twig-dump .status-warning { background: rgba(240, 181, 24, 0.3); }
        #twig-dump .status-success { background: rgba(100, 189, 99, 0.2); }
        #twig-dump .status-info { background: var(--info-background); }
        .theme-dark #twig-dump .status-warning { color: var(--yellow-200); }
        .theme-dark #twig-dump .status-success { color: var(--green-200); }

        #twig-table tbody td {
            position: relative;
        }
        #twig-table tbody td div {
            margin: 0;
        }
        #twig-table .template-file-path {
            color: var(--color-muted);
            display: block;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 41
        echo "    ";
        $context["time"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 41)) ? (twig_sprintf("%0.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 41))) : ("n/a"));
        // line 42
        echo "    ";
        ob_start(function () { return ''; });
        // line 43
        echo "        ";
        echo twig_source($this->env, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 44
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
    ";
        // line 48
        ob_start(function () { return ''; });
        // line 49
        echo "        ";
        $context["template"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templates", [], "any", false, false, false, 49)));
        // line 50
        echo "        ";
        $context["file"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 50), ($context["template"] ?? null), [], "array", true, true, false, 50)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 50)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["template"] ?? null)] ?? null) : null), false)) : (false));
        // line 51
        echo "        ";
        $context["link"] = ((($context["file"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(($context["file"] ?? null), 1)) : (false));
        // line 52
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Entry View</b>
            <span>
                 ";
        // line 55
        if (($context["link"] ?? null)) {
            // line 56
            echo "                     <a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "\">
                         ";
            // line 57
            echo twig_escape_filter($this->env, ($context["template"] ?? null), "html", null, true);
            echo "
                     </a>
                 ";
        } else {
            // line 60
            echo "                     ";
            echo twig_escape_filter($this->env, ($context["template"] ?? null), "html", null, true);
            echo "
                 ";
        }
        // line 62
        echo "            </span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 66
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 70), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, false, 74), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, false, 78), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "
    ";
        // line 82
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 86
        echo "    <span class=\"label ";
        echo (((0 == twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templateCount", [], "any", false, false, false, 86))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 87
        echo twig_source($this->env, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 93
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 93) == 0)) {
            // line 94
            echo "        <h2>Twig</h2>

        <div class=\"empty empty-panel\">
            <p>No Twig templates were rendered.</p>
        </div>
    ";
        } else {
            // line 100
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 104
            echo twig_escape_filter($this->env, twig_sprintf("%0.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 104)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
                    <span class=\"label\">Template calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, false, 117), "html", null, true);
            echo "</span>
                    <span class=\"label\">Block calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>
                    <span class=\"label\">Macro calls</span>
                </div>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table id=\"twig-table\">
            <thead>
            <tr>
                <th scope=\"col\">Template Name &amp; Path</th>
                <th class=\"num-col\" scope=\"col\">Render Count</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templates", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 143
                echo "                <tr>
                    ";
                // line 144
                $context["file"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 144), $context["template"], [], "array", true, true, false, 144)) ? (_twig_default_filter((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 144)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["template"]] ?? null) : null), false)) : (false));
                // line 145
                echo "                    ";
                $context["link"] = ((($context["file"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(($context["file"] ?? null), 1)) : (false));
                // line 146
                echo "                    <td class=\"font-normal\">
                        ";
                // line 147
                if (($context["link"] ?? null)) {
                    // line 148
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                    echo "\" class=\"stretched-link\">
                                ";
                    // line 149
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                    echo "
                                <span class=\"template-file-path\">";
                    // line 150
                    echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileRelative(($context["file"] ?? null)), ($context["file"] ?? null)), "html", null, true);
                    echo "</span>
                            </a>
                        ";
                } else {
                    // line 153
                    echo "                            ";
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                    echo "
                        ";
                }
                // line 155
                echo "                    </td>
                    <td class=\"font-normal num-col\">";
                // line 156
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "htmlcallgraph", [], "any", false, false, false, 165), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
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
        return array (  371 => 165,  363 => 159,  354 => 156,  351 => 155,  345 => 153,  339 => 150,  335 => 149,  328 => 148,  326 => 147,  323 => 146,  320 => 145,  318 => 144,  315 => 143,  311 => 142,  288 => 122,  280 => 117,  272 => 112,  261 => 104,  255 => 100,  247 => 94,  244 => 93,  237 => 92,  226 => 87,  221 => 86,  214 => 85,  205 => 82,  202 => 81,  196 => 78,  189 => 74,  182 => 70,  175 => 66,  169 => 62,  163 => 60,  157 => 57,  150 => 56,  148 => 55,  143 => 52,  140 => 51,  137 => 50,  134 => 49,  132 => 48,  129 => 47,  123 => 44,  118 => 43,  115 => 42,  112 => 41,  105 => 40,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/twig.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/twig.html.twig");
    }
}
