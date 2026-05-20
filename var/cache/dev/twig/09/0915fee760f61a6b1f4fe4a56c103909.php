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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_2eeaf1e8a754ccad3f61a606e15fcf79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
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
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 32) > 0)) {
            // line 33
            echo "        ";
            ob_start(function () { return ''; });
            // line 34
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 36), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            echo "
        ";
            // line 40
            ob_start(function () { return ''; });
            // line 41
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 48) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 56), "serialize", [], "any", false, false, false, 56)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 60
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 60), "deserialize", [], "any", false, false, false, 60)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 66), "encode", [], "any", false, false, false, 66)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 70), "decode", [], "any", false, false, false, 70)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 76), "normalize", [], "any", false, false, false, 76)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 80
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 80), "denormalize", [], "any", false, false, false, 80)), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            echo "
        ";
            // line 86
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 91)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 92
        echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
        echo "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 98
        echo "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 100)) {
            // line 101
            echo "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 107), "html", null, true);
            echo "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 112) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            echo twig_call_macro($macros["_self"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 118), true], 118, $context, $this->getSourceContext());
            echo "
                ";
            // line 119
            echo twig_call_macro($macros["_self"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 119), false], 119, $context, $this->getSourceContext());
            echo "

                ";
            // line 121
            echo twig_call_macro($macros["_self"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 121), true], 121, $context, $this->getSourceContext());
            echo "
                ";
            // line 122
            echo twig_call_macro($macros["_self"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 122), false], 122, $context, $this->getSourceContext());
            echo "

                ";
            // line 124
            echo twig_call_macro($macros["_self"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 124), true], 124, $context, $this->getSourceContext());
            echo "
                ";
            // line 125
            echo twig_call_macro($macros["_self"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 125), false], 125, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 128
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 132
            echo "    ";
            $context["data"] = ((($context["serialize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "serialize", [], "any", false, false, false, 132)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "deserialize", [], "any", false, false, false, 132)));
            // line 133
            echo "    ";
            $context["cellPrefix"] = ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            // line 134
            echo "
    <div class=\"tab ";
            // line 135
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 136
            echo ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 138
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 139
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 140
                echo ((($context["serialize"] ?? null)) ? ("serialized") : ("deserialized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 143
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 156
                    echo "                            <tr>
                                <td>";
                    // line 157
                    echo twig_call_macro($macros["_self"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157), ($context["cellPrefix"] ?? null)], 157, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 158
                    echo twig_call_macro($macros["_self"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 158), ($context["cellPrefix"] ?? null)], 158, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 159
                    echo twig_call_macro($macros["_self"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159), ($context["cellPrefix"] ?? null)], 159, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 160
                    echo twig_call_macro($macros["_self"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160), ($context["cellPrefix"] ?? null)], 160, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 161
                    echo twig_call_macro($macros["_self"], "macro_render_time_cell", [$context["item"]], 161, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 162
                    echo twig_call_macro($macros["_self"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), ($context["cellPrefix"] ?? null)], 162, $context, $this->getSourceContext());
                    echo "</td>
                            </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                    </tbody>
                </table>
            ";
            }
            // line 168
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 172
    public function macro_render_caller_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 173
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 173)) {
                // line 174
                echo "        <span class=\"metadata\">
            ";
                // line 175
                $context["caller"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", false, false, false, 175);
                // line 176
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 176)) {
                    // line 177
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 177), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 177));
                    // line 178
                    echo "                ";
                    if (($context["link"] ?? null)) {
                        // line 179
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 179), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 179), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 181
                        echo "                    <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 181), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 181), "html", null, true);
                        echo "</abbr>
                ";
                    }
                    // line 183
                    echo "            ";
                } else {
                    // line 184
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 184), "html", null, true);
                    echo "
            ";
                }
                // line 186
                echo "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 186), "html", null, true);
                echo "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                // line 189
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\">
            <div class=\"trace\">
                ";
                // line 191
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 191), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 191)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 196
                echo "
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 202
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 203
            echo "    ";
            $context["data"] = ((($context["normalize"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "normalize", [], "any", false, false, false, 203)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "denormalize", [], "any", false, false, false, 203)));
            // line 204
            echo "    ";
            $context["cellPrefix"] = ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            // line 205
            echo "
    <div class=\"tab ";
            // line 206
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 207
            echo ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 209
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 210
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 211
                echo ((($context["normalize"] ?? null)) ? ("normalized") : ("denormalized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 214
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 226
                    echo "                            <tr>
                                <td>";
                    // line 227
                    echo twig_call_macro($macros["_self"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227), ($context["cellPrefix"] ?? null)], 227, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 228
                    echo twig_call_macro($macros["_self"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 228), ($context["cellPrefix"] ?? null)], 228, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 229
                    echo twig_call_macro($macros["_self"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229), ($context["cellPrefix"] ?? null)], 229, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 230
                    echo twig_call_macro($macros["_self"], "macro_render_time_cell", [$context["item"]], 230, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 231
                    echo twig_call_macro($macros["_self"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 231), ($context["cellPrefix"] ?? null)], 231, $context, $this->getSourceContext());
                    echo "</td>
                            </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "                    </tbody>
                </table>
            ";
            }
            // line 237
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 241
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 242
            echo "    ";
            $context["data"] = ((($context["encode"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "encode", [], "any", false, false, false, 242)) : (twig_get_attribute($this->env, $this->source, ($context["collectorData"] ?? null), "decode", [], "any", false, false, false, 242)));
            // line 243
            echo "    ";
            $context["cellPrefix"] = ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            // line 244
            echo "
    <div class=\"tab ";
            // line 245
            echo (( !($context["data"] ?? null)) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 246
            echo ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["data"] ?? null)), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 248
            if ( !twig_length_filter($this->env, ($context["data"] ?? null))) {
                // line 249
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 250
                echo ((($context["encode"] ?? null)) ? ("encoded") : ("decoded"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 253
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 265
                    echo "                            <tr>
                                <td>";
                    // line 266
                    echo twig_call_macro($macros["_self"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 266), ($context["cellPrefix"] ?? null)], 266, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 267
                    echo twig_call_macro($macros["_self"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 267), ($context["cellPrefix"] ?? null)], 267, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 268
                    echo twig_call_macro($macros["_self"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), ($context["cellPrefix"] ?? null)], 268, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 269
                    echo twig_call_macro($macros["_self"], "macro_render_time_cell", [$context["item"]], 269, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 270
                    echo twig_call_macro($macros["_self"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 270), ($context["cellPrefix"] ?? null)], 270, $context, $this->getSourceContext());
                    echo "</td>
                            </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                    </tbody>
                </table>
            ";
            }
            // line 276
            echo "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 280
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 281
            echo "    ";
            $context["data_id"] = ((("data-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 282
            echo "
    <span class=\"nowrap\">";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dataType", [], "any", false, false, false, 283), "html", null, true);
            echo "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 286
            echo twig_escape_filter($this->env, ($context["data_id"] ?? null), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 287
            echo twig_escape_filter($this->env, ($context["data_id"] ?? null), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 288
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "data", [], "any", false, false, false, 288));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 293
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 294
            echo "    ";
            $context["context_id"] = ((("context-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 295
            echo "
    ";
            // line 296
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 296)) {
                // line 297
                echo "        <span class=\"nowrap\">Type: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 297), "html", null, true);
                echo "</span>
        <div class=\"nowrap\">Format: ";
                // line 298
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 298)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 298), "html", null, true))) : (print ("none")));
                echo "</div>
    ";
            } else {
                // line 300
                echo "        <span class=\"nowrap\">Format: ";
                ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 300)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 300), "html", null, true))) : (print ("none")));
                echo "</span>
    ";
            }
            // line 302
            echo "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 304
            echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 305
            echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 306
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "context", [], "any", false, false, false, 306));
            echo "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 311
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 312
            echo "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 313
            echo "
    ";
            // line 314
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 314)) {
                // line 315
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "line", [], "any", false, false, false, 315)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "class", [], "any", false, false, false, 315), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 315), "time", [], "any", false, false, false, 315) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 317
            echo "
    ";
            // line 318
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 318)) > 1)) {
                // line 319
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 320
                echo twig_escape_filter($this->env, ($context["nested_normalizers_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 321
                echo twig_escape_filter($this->env, ($context["nested_normalizers_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 324
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 324), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), twig_get_attribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 324)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 324), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 324) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 332
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 333
            echo "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 334
            echo "
    ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 335)) {
                // line 336
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "line", [], "any", false, false, false, 336)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "class", [], "any", false, false, false, 336), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 336), "time", [], "any", false, false, false, 336) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 338
            echo "
    ";
            // line 339
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 339)) > 1)) {
                // line 340
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 341
                echo twig_escape_filter($this->env, ($context["nested_encoders_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 342
                echo twig_escape_filter($this->env, ($context["nested_encoders_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 344
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 344));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 345
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 345), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), twig_get_attribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 345)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 345), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 345) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 353
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 354
            echo "    <span class=\"nowrap\">";
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "time", [], "any", false, false, false, 354) * 1000)), "html", null, true);
            echo " ms</span>
";
            
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
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  1135 => 354,  1119 => 353,  1103 => 347,  1086 => 345,  1082 => 344,  1077 => 342,  1073 => 341,  1070 => 340,  1068 => 339,  1065 => 338,  1053 => 336,  1051 => 335,  1048 => 334,  1045 => 333,  1027 => 332,  1011 => 326,  994 => 324,  990 => 323,  985 => 321,  981 => 320,  978 => 319,  976 => 318,  973 => 317,  961 => 315,  959 => 314,  956 => 313,  953 => 312,  935 => 311,  919 => 306,  915 => 305,  911 => 304,  907 => 302,  901 => 300,  896 => 298,  891 => 297,  889 => 296,  886 => 295,  883 => 294,  865 => 293,  849 => 288,  845 => 287,  841 => 286,  835 => 283,  832 => 282,  829 => 281,  811 => 280,  797 => 276,  792 => 273,  775 => 270,  771 => 269,  767 => 268,  763 => 267,  759 => 266,  756 => 265,  739 => 264,  726 => 253,  720 => 250,  717 => 249,  715 => 248,  708 => 246,  704 => 245,  701 => 244,  698 => 243,  695 => 242,  678 => 241,  664 => 237,  659 => 234,  642 => 231,  638 => 230,  634 => 229,  630 => 228,  626 => 227,  623 => 226,  606 => 225,  593 => 214,  587 => 211,  584 => 210,  582 => 209,  575 => 207,  571 => 206,  568 => 205,  565 => 204,  562 => 203,  545 => 202,  529 => 196,  527 => 191,  520 => 189,  509 => 186,  503 => 184,  500 => 183,  492 => 181,  482 => 179,  479 => 178,  476 => 177,  473 => 176,  471 => 175,  468 => 174,  465 => 173,  447 => 172,  433 => 168,  428 => 165,  411 => 162,  407 => 161,  403 => 160,  399 => 159,  395 => 158,  391 => 157,  388 => 156,  371 => 155,  357 => 143,  351 => 140,  348 => 139,  346 => 138,  339 => 136,  335 => 135,  332 => 134,  329 => 133,  326 => 132,  309 => 131,  301 => 128,  295 => 125,  291 => 124,  286 => 122,  282 => 121,  277 => 119,  273 => 118,  264 => 112,  256 => 107,  252 => 105,  246 => 101,  244 => 100,  240 => 98,  233 => 97,  222 => 92,  217 => 91,  210 => 90,  200 => 86,  197 => 85,  189 => 80,  182 => 76,  173 => 70,  166 => 66,  157 => 60,  150 => 56,  139 => 48,  131 => 43,  127 => 41,  125 => 40,  122 => 39,  116 => 36,  110 => 34,  107 => 33,  104 => 32,  97 => 31,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/serializer.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
