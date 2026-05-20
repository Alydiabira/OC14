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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_3887d6750f5090108006b788db4cd752 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
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
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none; color: inherit; }
        .message-item .icon svg { height: 24px; width: 24px; }
        .message-item .icon-close svg { transform: rotate(180deg); }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 43
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 44)) ? ("red") : (""));
            // line 45
            echo "        ";
            ob_start(function () { return ''; });
            // line 46
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/messenger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 47
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 47)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "
        ";
            // line 50
            ob_start(function () { return ''; });
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 52
                echo "                ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, false, 52);
                // line 53
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 54
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</b>
                    <span
                        title=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["exceptionsCount"] ?? null), "html", null, true);
                echo " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                // line 57
                echo ((($context["exceptionsCount"] ?? null)) ? ("red") : (""));
                echo "\"
                    >
                        ";
                // line 59
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, false, 59)), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            echo "
        ";
            // line 65
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 70)) ? (" label-status-error") : (""));
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 70))) ? (" disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 71
        echo twig_source($this->env, "@WebProfiler/Icon/messenger.svg");
        echo "</span>
        <strong>Messages</strong>
        ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 73) > 0)) {
            // line 74
            echo "            <span class=\"count\">
                <span>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 75), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 78
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 82
        echo "    <h2>Messages</h2>

    ";
        // line 84
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 84))) {
            // line 85
            echo "        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } elseif ((1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 88
($context["collector"] ?? null), "buses", [], "any", false, false, false, 88)))) {
            // line 89
            echo "        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        ";
            // line 90
            echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 90), true], 90, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 92
            echo "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 94
            $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 94);
            // line 95
            echo "                ";
            $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [], "any", false, false, false, 95);
            // line 96
            echo "                <h3 class=\"tab-title\">All<span class=\"badge ";
            echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 100
            echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [($context["messages"] ?? null), true], 100, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 105
                echo "                <div class=\"tab message-bus\">
                    ";
                // line 106
                $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["bus"]], "method", false, false, false, 106);
                // line 107
                echo "                    ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [$context["bus"]], "method", false, false, false, 107);
                // line 108
                echo "                    <h3 class=\"tab-title\">";
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "<span class=\"badge ";
                echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 111
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</code> bus</p>
                        ";
                // line 112
                echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [($context["messages"] ?? null)], 112, $context, $this->getSourceContext());
                echo "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        </div>
    ";
        }
        // line 118
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 122
            echo "    ";
            $context["discr"] = twig_random($this->env);
            // line 123
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 124
                echo "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 128
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 128), "html", null, true);
                echo "-details\"
                    data-toggle-initial=\"";
                // line 129
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 129)) ? ("display") : (""));
                echo "\"
                >
                    <span class=\"dump-inline\">";
                // line 131
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 131), "type", [], "any", false, false, false, 131));
                echo "</span>
                    ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 132)) {
                    // line 133
                    echo "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 135
                echo "                    <button class=\"btn btn-link toggle-button\" type=\"button\">
                        <span class=\"icon icon-close\">";
                // line 136
                echo twig_source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                echo "</span>
                        <span class=\"icon icon-open\">";
                // line 137
                echo twig_source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                echo "</span>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 142
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 142), "html", null, true);
                echo "-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    ";
                // line 147
                $context["caller"] = twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 147);
                // line 148
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 149), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 149));
                    // line 150
                    echo "                        ";
                    if (($context["link"] ?? null)) {
                        // line 151
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 151), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 151), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 153
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 153), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 153), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 155
                    echo "                    ";
                } else {
                    // line 156
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", [], "any", false, false, false, 156), "html", null, true);
                    echo "
                    ";
                }
                // line 158
                echo "                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 158), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 158), "html", null, true);
                echo "</button>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 160
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 160), "html", null, true);
                echo "\">
                        <div class=\"trace\">
                            ";
                // line 162
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", [], "any", false, false, false, 162), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [], "any", false, false, false, 162)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 167
                echo "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 172
                if (($context["showBus"] ?? null)) {
                    // line 173
                    echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 175), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 178
                echo "            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>";
                // line 180
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 180), "value", [], "any", false, false, false, 180), 2);
                echo "</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 185));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 186
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    echo "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 188
                    echo "                        <span class=\"text-muted font-normal\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                </td>
            </tr>
            ";
                // line 192
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 192)) {
                    // line 193
                    echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        ";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 196));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 197
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                        echo "
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 199
                        echo "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "                    </td>
                </tr>
            ";
                }
                // line 204
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 204)) {
                    // line 205
                    echo "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 208
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 208), "value", [], "any", false, false, false, 208), 1);
                    echo "
                    </td>
                </tr>
            ";
                }
                // line 212
                echo "        </tbody>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  579 => 212,  572 => 208,  567 => 205,  564 => 204,  559 => 201,  552 => 199,  544 => 197,  539 => 196,  534 => 193,  532 => 192,  528 => 190,  521 => 188,  513 => 186,  508 => 185,  500 => 180,  496 => 178,  490 => 175,  486 => 173,  484 => 172,  477 => 167,  475 => 162,  468 => 160,  458 => 158,  452 => 156,  449 => 155,  441 => 153,  431 => 151,  428 => 150,  425 => 149,  422 => 148,  420 => 147,  410 => 142,  402 => 137,  398 => 136,  395 => 135,  391 => 133,  389 => 132,  385 => 131,  380 => 129,  374 => 128,  368 => 124,  350 => 123,  347 => 122,  330 => 121,  322 => 118,  318 => 116,  308 => 112,  304 => 111,  293 => 108,  290 => 107,  288 => 106,  285 => 105,  281 => 104,  274 => 100,  264 => 96,  261 => 95,  259 => 94,  255 => 92,  250 => 90,  247 => 89,  245 => 88,  240 => 85,  238 => 84,  234 => 82,  227 => 81,  219 => 78,  213 => 75,  210 => 74,  208 => 73,  203 => 71,  197 => 70,  190 => 69,  180 => 65,  177 => 64,  174 => 63,  164 => 59,  159 => 57,  155 => 56,  150 => 54,  147 => 53,  144 => 52,  139 => 51,  137 => 50,  134 => 49,  129 => 47,  124 => 46,  121 => 45,  118 => 44,  115 => 43,  108 => 42,  63 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/messenger.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
}
