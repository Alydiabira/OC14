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

/* @TwigComponent/Collector/twig_component.html.twig */
class __TwigTemplate_d09052bb7c64f78070b0e86a692639e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'table_components' => [$this, 'block_table_components'],
            'table_renders' => [$this, 'block_table_renders'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TwigComponent/Collector/twig_component.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TwigComponent/Collector/twig_component.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@TwigComponent/Collector/twig_component.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Twig Components";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>
        .twig-component-dump {
            display: block;
            background: rgba(0, 0, 0, .15);
            --font-size-monospace: 12px;
            font-weight: 400;
            border-radius: 4px;
            padding: 5px;
        }
        .twig-component-metrics {
            margin-block-end: 3rem;
        }

        .twig-component-component {
            margin-block-end: 3rem;
        }
        .twig-component-component th:first-child,
        .twig-component-component td:first-child {
            width: 25%;
        }
        .twig-component-component thead th {
            font-weight: 200;
            vertical-align: middle;
            padding: .75rem 1rem;
        }
        .twig-component-component thead strong {
            font-weight: 600;
            display: block;
        }
        .twig-component-component td {
            vertical-align: middle;
            padding: .75rem 1rem;
        }
        .twig-component-component tbody td.metric {
            text-align: right;
        }
        .twig-component-component thead small,
        .twig-component-component thead strong {
            display: block;
        }
        .twig-component-component .cell-right {
            width: 4rem;
            text-align: right;
        }

        .twig-component-renders {
            margin-bottom: 2rem;
        }
        .twig-component-render {
            margin-left: calc(var(--render-depth) * .5rem);
            width: calc(100% - calc(var(--render-depth) * .5rem));
        }
        .twig-component-render thead th {
            text-align: left;
            border-bottom: none;
            vertical-align: middle;
        }
        .twig-component-render thead tr {
            vertical-align: middle;
            opacity: .9;
        }
        .twig-component-render thead tr:hover {
            opacity: 1;
            cursor: pointer;
        }
        .twig-component-render .sf-toggle .toggle-button {
            color: inherit;
        }
        .twig-component-render .sf-toggle-on .toggle-button {
            transform: rotate(0deg);
            opacity: 1;
            transition: all 150ms ease-in-out;
        }
        .twig-component-render .sf-toggle-off .toggle-button {
            transform: rotate(90deg);
            opacity: .85;
            transition: all 250ms ease-in-out;
        }
        .twig-component-render th:first-child,
        .twig-component-render tr:first-child {
            width: 25%;
        }
        .twig-component-render th,
        .twig-component-render tbody th {
            font-weight: normal;
        }
        .twig-component-render th:first-child {
            font-weight: bolder;
        }
        .twig-component-render th:first-child svg {
            transform: rotate(45deg);
            transform-origin: inherit;
            transform-style: initial;
            width: 1.25rem;
            vertical-align: inherit;
        }
        .twig-component-render th:last-child {
            width: 2rem;
        }
        .twig-component-render th.renderTime {
            width: 4rem;
            font-weight: initial;
        }
        .twig-component-render tbody.sf-toggle-visible {
            display: table-row-group;
            width: inherit;
        }
        .twig-component-render tbody th {
            font-weight: normal !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 121
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "renderCount", [], "any", false, false, false, 121)) {
            // line 122
            echo "
        ";
            // line 123
            ob_start();
            // line 124
            echo "            ";
            echo twig_source($this->env, "@TwigComponent/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "renderCount", [], "any", false, false, false, 125), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 128
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "renderTime", [], "any", false, false, false, 128)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "
        ";
            // line 133
            ob_start();
            // line 134
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "components", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["_component"]) {
                // line 135
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_component"], "name", [], "any", false, false, false, 136), "html", null, true);
                echo "</b>
                    <span class=\"sf-toolbar-status\">";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_component"], "render_count", [], "any", false, false, false, 137), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_component'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 141
            echo "
        ";
            // line 142
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 142, $this->source); })())]);
            echo "

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 148
        echo "    <span class=\"label";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 148, $this->source); })()), "components", [], "any", false, false, false, 148))) ? (" disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 149
        echo twig_source($this->env, "@TwigComponent/Collector/icon.svg");
        echo "</span>
        <strong>Twig Components</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 154
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 155
        echo "    <h2>Components</h2>
    ";
        // line 156
        if ( !((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "componentCount", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "componentCount", [], "any", false, false, false, 156))) : (""))) {
            // line 157
            echo "        <div class=\"empty empty-panel\">
            <p>No component were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 161
            echo "        <section class=\"twig-component-metrics metrics\">
            <div class=\"metric-group\">
                ";
            // line 163
            echo twig_call_macro($macros["_self"], "macro_metric", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 163, $this->source); })()), "componentCount", [], "any", false, false, false, 163), "Twig Components"], 163, $context, $this->getSourceContext());
            echo "
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric-group\">
                ";
            // line 167
            echo twig_call_macro($macros["_self"], "macro_metric", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 167, $this->source); })()), "renderCount", [], "any", false, false, false, 167), "Render Count"], 167, $context, $this->getSourceContext());
            echo "
                ";
            // line 168
            echo twig_call_macro($macros["_self"], "macro_metric", [twig_round(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 168, $this->source); })()), "renderTime", [], "any", false, false, false, 168)), "Render Time", "ms"], 168, $context, $this->getSourceContext());
            echo "
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric-group\">
                ";
            // line 172
            echo twig_call_macro($macros["_self"], "macro_metric", [twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "peakMemoryUsage", [], "any", false, false, false, 172) / 1024) / 1024), 1), "Memory Usage", "MiB"], 172, $context, $this->getSourceContext());
            echo "
            </div>
        </section>
        <section class=\"twig-component-components\">
            <h3>Components</h3>
            ";
            // line 177
            $this->displayBlock("table_components", $context, $blocks);
            echo "
        </section>
        <section class=\"twig-component-renders\">
            <h3>Render calls</h3>
            ";
            // line 181
            $this->displayBlock("table_renders", $context, $blocks);
            echo "
        </section>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 200
    public function block_table_components($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_components"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_components"));

        // line 201
        echo "    <table class=\"twig-component-component\">
        <thead>
        <tr>
            <th class=\"key\">
                <strong>Name</strong>
            </th>
            <th>
                <strong>Metadata</strong>
            </th>
            <th class=\"cell-right\">
                <small>Render</small>
                <strong>Count</strong>
            </th>
            <th class=\"cell-right\">
                <small>Render</small>
                <strong>Time</strong>
            </th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 221, $this->source); })()), "components", [], "any", false, false, false, 221));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 222
            echo "                <tr>
                    <td>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "name", [], "any", false, false, false, 223), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 225
            if ((twig_get_attribute($this->env, $this->source, $context["component"], "class", [], "any", false, false, false, 225) == "Symfony\\UX\\TwigComponent\\AnonymousComponent")) {
                // line 226
                echo "                            <pre class=\"sf-dump\"><span class=\"text-muted\">[Anonymous]</span></pre>
                        ";
            } else {
                // line 228
                echo "                            ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "class_stub", [], "any", false, false, false, 228));
                echo "
                        ";
            }
            // line 230
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["component"], "template_path", [], "any", false, false, false, 230)) {
                // line 231
                echo "                            <a class=text-muted\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["component"], "template_path", [], "any", false, false, false, 231), 1), "html", null, true);
                echo "\">";
                // line 232
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "template", [], "any", false, false, false, 232), "html", null, true);
                // line 233
                echo "</a>
                        ";
            } else {
                // line 235
                echo "                            <span class=text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "template", [], "any", false, false, false, 235), "html", null, true);
                echo "</span>
                        ";
            }
            // line 237
            echo "                    </td>
                    <td class=\"cell-right\">";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "render_count", [], "any", false, false, false, 238), "html", null, true);
            echo "</td>
                    <td class=\"cell-right\">";
            // line 240
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "render_time", [], "any", false, false, false, 240), 2), "html", null, true);
            // line 241
            echo "<span class=\"text-muted text-small\">ms</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 249
    public function block_table_renders($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_renders"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_renders"));

        // line 250
        echo "    <div class=\"twig-component-renders\">
        ";
        // line 251
        $context["_memory"] = null;
        // line 252
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "renders", [], "any", false, false, false, 252));
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
        foreach ($context['_seq'] as $context["_key"] => $context["render"]) {
            // line 253
            echo "            <table class=\"twig-component-render\" style=\"--render-depth:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "depth", [], "any", false, false, false, 253), "html", null, true);
            echo ";\">
                <thead
                    class=\"sf-toggle ";
            // line 255
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 255) == 1)) ? ("sf-toggle-on") : ("sf-toggle-off"));
            echo "\"
                   data-toggle-selector=\"#render-";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 256), "html", null, true);
            echo "--details\"
                   data-toggle-initial=\"";
            // line 257
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 257) == 1)) ? ("display") : (""));
            echo "\"
                >
                    <tr>
                        <th class=\"key\">";
            // line 260
            echo ((twig_get_attribute($this->env, $this->source, $context["render"], "depth", [], "any", false, false, false, 260)) ? (twig_source($this->env, "@TwigComponent/Collector/chevron-down.svg")) : (""));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "name", [], "any", false, false, false, 260), "html", null, true);
            echo "</th>
                        <th>
                            ";
            // line 262
            if ((twig_get_attribute($this->env, $this->source, $context["render"], "class", [], "any", false, false, false, 262) == "Symfony\\UX\\TwigComponent\\AnonymousComponent")) {
                // line 263
                echo "                                <pre class=\"sf-dump\"><span class=\"text-muted\">[Anonymous]</span></pre>
                            ";
            } else {
                // line 265
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "class", [], "any", false, false, false, 265), "html", null, true);
                echo "
                            ";
            }
            // line 267
            echo "                        </th>
                        <th class=\"cell-right renderTime\">
                            ";
            // line 269
            $context["_render_memory"] = ((((twig_get_attribute($this->env, $this->source, $context["render"], "render_memory", [], "any", true, true, false, 269)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["render"], "render_memory", [], "any", false, false, false, 269), 0)) : (0)) / 1024) / 1024);
            // line 270
            echo "                            <span class=\"";
            echo ((((isset($context["_render_memory"]) || array_key_exists("_render_memory", $context) ? $context["_render_memory"] : (function () { throw new RuntimeError('Variable "_render_memory" does not exist.', 270, $this->source); })()) == (isset($context["_memory"]) || array_key_exists("_memory", $context) ? $context["_memory"] : (function () { throw new RuntimeError('Variable "_memory" does not exist.', 270, $this->source); })()))) ? ("text-muted") : (""));
            echo "\">";
            // line 271
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["_render_memory"]) || array_key_exists("_render_memory", $context) ? $context["_render_memory"] : (function () { throw new RuntimeError('Variable "_render_memory" does not exist.', 271, $this->source); })()), 1), "html", null, true);
            // line 272
            echo "</span>
                            <span class=\"text-muted text-small\">MiB</span>
                            ";
            // line 274
            $context["_memory"] = (isset($context["_render_memory"]) || array_key_exists("_render_memory", $context) ? $context["_render_memory"] : (function () { throw new RuntimeError('Variable "_render_memory" does not exist.', 274, $this->source); })());
            // line 275
            echo "                        </th>
                        <th class=\"cell-right renderTime\">
                            ";
            // line 277
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "render_time", [], "any", false, false, false, 277), 2), "html", null, true);
            echo "
                            <span class=\"text-muted text-small\">ms</span>
                        </th>
                        <th class=\"cell-right\">
                            <button class=\"btn btn-link toggle-button\" type=\"button\" aria-label=\"Toggle details\">
                                ";
            // line 282
            echo twig_source($this->env, "@TwigComponent/Collector/chevron-down.svg");
            echo "
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody id=\"render-";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), "html", null, true);
            echo "--details\">
                    <tr class=\"";
            // line 288
            echo (( !((twig_get_attribute($this->env, $this->source, $context["render"], "input_props", [], "any", true, true, false, 288)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["render"], "input_props", [], "any", false, false, false, 288))) : (""))) ? ("opacity-50") : (""));
            echo "\">
                        <th scope=\"row\">Input props</th>
                        <td colspan=\"3\">";
            // line 290
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "input_props", [], "any", false, false, false, 290));
            echo "</td>
                    </tr>
                    <tr class=\"";
            // line 292
            echo (( !((twig_get_attribute($this->env, $this->source, $context["render"], "attributes", [], "any", true, true, false, 292)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["render"], "attributes", [], "any", false, false, false, 292))) : (""))) ? ("opacity-50") : (""));
            echo "\">
                        <th scope=\"row\">Attributes</th>
                        <td colspan=\"3\">";
            // line 294
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "attributes", [], "any", false, false, false, 294));
            echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Component</th>
                        <td colspan=\"3\">";
            // line 298
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["render"], "component", [], "any", false, false, false, 298));
            echo "</td>
                    </tr>
                </tbody>
            </table>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['render'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 186
    public function macro_metric($__value__ = null, $__label__ = null, $__unit__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "label" => $__label__,
            "unit" => $__unit__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "metric"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "metric"));

            // line 187
            echo "    <div class=\"metric\">
        <span class=\"value\">
            ";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 189, $this->source); })()), "html", null, true);
            echo "
            ";
            // line 190
            if ((isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 190, $this->source); })())) {
                // line 191
                echo "                <span class=\"unit text-small\">";
                echo twig_escape_filter($this->env, (isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 191, $this->source); })()), "html", null, true);
                echo "</span>
            ";
            }
            // line 193
            echo "        </span>
        <span class=\"label\">";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 195, $this->source); })()), "html", null, true);
            // line 196
            echo "</span>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TwigComponent/Collector/twig_component.html.twig";
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
        return array (  713 => 196,  711 => 195,  708 => 193,  702 => 191,  700 => 190,  696 => 189,  692 => 187,  671 => 186,  660 => 303,  641 => 298,  634 => 294,  629 => 292,  624 => 290,  619 => 288,  615 => 287,  607 => 282,  599 => 277,  595 => 275,  593 => 274,  589 => 272,  587 => 271,  583 => 270,  581 => 269,  577 => 267,  571 => 265,  567 => 263,  565 => 262,  559 => 260,  553 => 257,  549 => 256,  545 => 255,  539 => 253,  521 => 252,  519 => 251,  516 => 250,  506 => 249,  494 => 245,  485 => 241,  483 => 240,  479 => 238,  476 => 237,  470 => 235,  466 => 233,  464 => 232,  460 => 231,  457 => 230,  451 => 228,  447 => 226,  445 => 225,  440 => 223,  437 => 222,  433 => 221,  411 => 201,  401 => 200,  387 => 181,  380 => 177,  372 => 172,  365 => 168,  361 => 167,  354 => 163,  350 => 161,  344 => 157,  342 => 156,  339 => 155,  329 => 154,  315 => 149,  310 => 148,  300 => 147,  286 => 142,  283 => 141,  280 => 140,  271 => 137,  267 => 136,  264 => 135,  259 => 134,  257 => 133,  254 => 132,  247 => 128,  241 => 125,  236 => 124,  234 => 123,  231 => 122,  228 => 121,  218 => 120,  94 => 6,  84 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Twig Components' %}

{% block head %}
    {{ parent() }}
    <style>
        .twig-component-dump {
            display: block;
            background: rgba(0, 0, 0, .15);
            --font-size-monospace: 12px;
            font-weight: 400;
            border-radius: 4px;
            padding: 5px;
        }
        .twig-component-metrics {
            margin-block-end: 3rem;
        }

        .twig-component-component {
            margin-block-end: 3rem;
        }
        .twig-component-component th:first-child,
        .twig-component-component td:first-child {
            width: 25%;
        }
        .twig-component-component thead th {
            font-weight: 200;
            vertical-align: middle;
            padding: .75rem 1rem;
        }
        .twig-component-component thead strong {
            font-weight: 600;
            display: block;
        }
        .twig-component-component td {
            vertical-align: middle;
            padding: .75rem 1rem;
        }
        .twig-component-component tbody td.metric {
            text-align: right;
        }
        .twig-component-component thead small,
        .twig-component-component thead strong {
            display: block;
        }
        .twig-component-component .cell-right {
            width: 4rem;
            text-align: right;
        }

        .twig-component-renders {
            margin-bottom: 2rem;
        }
        .twig-component-render {
            margin-left: calc(var(--render-depth) * .5rem);
            width: calc(100% - calc(var(--render-depth) * .5rem));
        }
        .twig-component-render thead th {
            text-align: left;
            border-bottom: none;
            vertical-align: middle;
        }
        .twig-component-render thead tr {
            vertical-align: middle;
            opacity: .9;
        }
        .twig-component-render thead tr:hover {
            opacity: 1;
            cursor: pointer;
        }
        .twig-component-render .sf-toggle .toggle-button {
            color: inherit;
        }
        .twig-component-render .sf-toggle-on .toggle-button {
            transform: rotate(0deg);
            opacity: 1;
            transition: all 150ms ease-in-out;
        }
        .twig-component-render .sf-toggle-off .toggle-button {
            transform: rotate(90deg);
            opacity: .85;
            transition: all 250ms ease-in-out;
        }
        .twig-component-render th:first-child,
        .twig-component-render tr:first-child {
            width: 25%;
        }
        .twig-component-render th,
        .twig-component-render tbody th {
            font-weight: normal;
        }
        .twig-component-render th:first-child {
            font-weight: bolder;
        }
        .twig-component-render th:first-child svg {
            transform: rotate(45deg);
            transform-origin: inherit;
            transform-style: initial;
            width: 1.25rem;
            vertical-align: inherit;
        }
        .twig-component-render th:last-child {
            width: 2rem;
        }
        .twig-component-render th.renderTime {
            width: 4rem;
            font-weight: initial;
        }
        .twig-component-render tbody.sf-toggle-visible {
            display: table-row-group;
            width: inherit;
        }
        .twig-component-render tbody th {
            font-weight: normal !important;
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.renderCount %}

        {% set icon %}
            {{ source('@TwigComponent/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.renderCount }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ collector.renderTime|round }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}

        {% set text %}
            {% for _component in collector.components %}
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">{{ _component.name }}</b>
                    <span class=\"sf-toolbar-status\">{{ _component.render_count }}</span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: profiler_url}) }}

    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label{{ collector.components is empty ? ' disabled' }}\">
        <span class=\"icon\">{{ source('@TwigComponent/Collector/icon.svg') }}</span>
        <strong>Twig Components</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Components</h2>
    {% if not collector.componentCount|default %}
        <div class=\"empty empty-panel\">
            <p>No component were rendered for this request.</p>
        </div>
    {% else %}
        <section class=\"twig-component-metrics metrics\">
            <div class=\"metric-group\">
                {{ _self.metric(collector.componentCount, \"Twig Components\") }}
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric-group\">
                {{ _self.metric(collector.renderCount, \"Render Count\") }}
                {{ _self.metric(collector.renderTime|round, \"Render Time\", \"ms\") }}
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric-group\">
                {{ _self.metric((collector.peakMemoryUsage / 1024 / 1024)|number_format(1), \"Memory Usage\", \"MiB\") }}
            </div>
        </section>
        <section class=\"twig-component-components\">
            <h3>Components</h3>
            {{ block('table_components') }}
        </section>
        <section class=\"twig-component-renders\">
            <h3>Render calls</h3>
            {{ block('table_renders') }}
        </section>
    {% endif %}
{% endblock %}

{% macro metric(value, label, unit = '') %}
    <div class=\"metric\">
        <span class=\"value\">
            {{ value }}
            {% if unit %}
                <span class=\"unit text-small\">{{ unit }}</span>
            {% endif %}
        </span>
        <span class=\"label\">
            {{- label -}}
        </span>
    </div>
{% endmacro %}

{% block table_components %}
    <table class=\"twig-component-component\">
        <thead>
        <tr>
            <th class=\"key\">
                <strong>Name</strong>
            </th>
            <th>
                <strong>Metadata</strong>
            </th>
            <th class=\"cell-right\">
                <small>Render</small>
                <strong>Count</strong>
            </th>
            <th class=\"cell-right\">
                <small>Render</small>
                <strong>Time</strong>
            </th>
        </tr>
        </thead>
        <tbody>
            {% for component in collector.components %}
                <tr>
                    <td>{{ component.name }}</td>
                    <td>
                        {% if component.class == 'Symfony\\\\UX\\\\TwigComponent\\\\AnonymousComponent' %}
                            <pre class=\"sf-dump\"><span class=\"text-muted\">[Anonymous]</span></pre>
                        {% else %}
                            {{ profiler_dump(component.class_stub) }}
                        {% endif %}
                        {% if component.template_path %}
                            <a class=text-muted\" href=\"{{ component.template_path|file_link(1) }}\">
                                {{- component.template -}}
                            </a>
                        {% else %}
                            <span class=text-muted\">{{ component.template }}</span>
                        {% endif %}
                    </td>
                    <td class=\"cell-right\">{{ component.render_count }}</td>
                    <td class=\"cell-right\">
                        {{- component.render_time|number_format(2) -}}
                        <span class=\"text-muted text-small\">ms</span>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block table_renders %}
    <div class=\"twig-component-renders\">
        {% set _memory = null %}
        {% for render in collector.renders %}
            <table class=\"twig-component-render\" style=\"--render-depth:{{ render.depth }};\">
                <thead
                    class=\"sf-toggle {{ loop.index == 1 ? 'sf-toggle-on' : 'sf-toggle-off' }}\"
                   data-toggle-selector=\"#render-{{ loop.index }}--details\"
                   data-toggle-initial=\"{{ loop.index == 1 ? 'display' }}\"
                >
                    <tr>
                        <th class=\"key\">{{ render.depth ? source('@TwigComponent/Collector/chevron-down.svg') }}{{ render.name }}</th>
                        <th>
                            {% if render.class == 'Symfony\\\\UX\\\\TwigComponent\\\\AnonymousComponent' %}
                                <pre class=\"sf-dump\"><span class=\"text-muted\">[Anonymous]</span></pre>
                            {% else %}
                                {{ render.class }}
                            {% endif %}
                        </th>
                        <th class=\"cell-right renderTime\">
                            {% set _render_memory = render.render_memory|default(0) / 1024 / 1024 %}
                            <span class=\"{{ _render_memory == _memory ? 'text-muted' }}\">
                                {{- _render_memory|number_format(1) -}}
                            </span>
                            <span class=\"text-muted text-small\">MiB</span>
                            {% set _memory = _render_memory %}
                        </th>
                        <th class=\"cell-right renderTime\">
                            {{ render.render_time|number_format(2) }}
                            <span class=\"text-muted text-small\">ms</span>
                        </th>
                        <th class=\"cell-right\">
                            <button class=\"btn btn-link toggle-button\" type=\"button\" aria-label=\"Toggle details\">
                                {{ source('@TwigComponent/Collector/chevron-down.svg') }}
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody id=\"render-{{ loop.index }}--details\">
                    <tr class=\"{{ not render.input_props|default ? 'opacity-50' }}\">
                        <th scope=\"row\">Input props</th>
                        <td colspan=\"3\">{{ profiler_dump(render.input_props) }}</td>
                    </tr>
                    <tr class=\"{{ not render.attributes|default ? 'opacity-50' }}\">
                        <th scope=\"row\">Attributes</th>
                        <td colspan=\"3\">{{ profiler_dump(render.attributes) }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Component</th>
                        <td colspan=\"3\">{{ profiler_dump(render.component) }}</td>
                    </tr>
                </tbody>
            </table>
        {% endfor %}
    </div>
{% endblock %}
", "@TwigComponent/Collector/twig_component.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/ux-twig-component/templates/Collector/twig_component.html.twig");
    }
}
