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

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_33a3ff980a40f52e1a3c815704331816 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 4), "calls", [], "any", false, false, false, 4) > 0)) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 7), "calls", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 10), "time", [], "any", false, false, false, 10) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start(function () { return ''; });
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 17), "calls", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 21), "time", [], "any", false, false, false, 21) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "hits", [], "any", false, false, false, 25), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "reads", [], "any", false, false, false, 25), "html", null, true);
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25))) {
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 29), "writes", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 38), "calls", [], "any", false, false, false, 38) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 40
        echo twig_source($this->env, "@WebProfiler/Icon/cache.svg");
        echo "
        </span>
        <strong>Cache</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 49), "calls", [], "any", false, false, false, 49) == 0)) {
            // line 50
            echo "        <div class=\"empty empty-panel\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_render_metrics", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 54), true], 54, $context, $this->getSourceContext());
            echo "

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 59
            echo "            ";
            $context["cache_pools_with_calls"] = twig_array_merge(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 59), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (twig_length_filter($this->env, ($context["calls"] ?? null)) > 0); }), []);
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cache_pools_with_calls"] ?? null));
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
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 61
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 62
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statistics", [], "any", false, false, false, 62)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["name"]] ?? null) : null), "calls", [], "any", false, false, false, 62), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        <h4>Adapter</h4>
                        <div class=\"card\">
                            ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "adapters", [], "any", false, true, false, 67), $context["name"], [], "array", true, true, false, 67)) {
                    // line 68
                    echo "                                <code>";
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "adapters", [], "any", false, false, false, 68)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["name"]] ?? null) : null), "html", null, true);
                    echo "</code>
                            ";
                } else {
                    // line 70
                    echo "                                <span class=\"text-muted\">Unable to get the adapter class.</span>
                            ";
                }
                // line 72
                echo "                        </div>
                        ";
                // line 73
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 74
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 75
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 78
                    echo "                            <h4>Metrics</h4>
                            ";
                    // line 79
                    echo twig_call_macro($macros["_self"], "macro_render_metrics", [(($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statistics", [], "any", false, false, false, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["name"]] ?? null) : null)], 79, $context, $this->getSourceContext());
                    echo "

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
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
                        // line 93
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 94
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 94), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 95
                        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", ((twig_get_attribute($this->env, $this->source, $context["call"], "end", [], "any", false, false, false, 95) - twig_get_attribute($this->env, $this->source, $context["call"], "start", [], "any", false, false, false, 95)) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "name", [], "any", false, false, false, 96), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 97
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "value", [], "any", false, false, false, 97), "result", [], "any", false, false, false, 97), 2);
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 103
                echo "                    </div>
                </div>

                ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Pools without calls <span class=\"badge\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 108), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == twig_length_filter($this->env, $context["calls"])); })), "html", null, true);
                    echo "</span></h3>

                        <div class=\"tab-content\">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Cache pools that received no calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 118), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == twig_length_filter($this->env, $context["calls"])); }))));
                    foreach ($context['_seq'] as $context["_key"] => $context["cache_pool"]) {
                        // line 119
                        echo "                                        <tr><td>";
                        echo twig_escape_filter($this->env, $context["cache_pool"], "html", null, true);
                        echo "</td></tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cache_pool'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                ";
                }
                // line 126
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function macro_render_metrics($__pool__ = null, $__is_total__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pool" => $__pool__,
            "is_total" => $__is_total__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_metrics"));

            // line 132
            echo "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "calls", [], "any", false, false, false, 134), "html", null, true);
            echo "</span>
            <span class=\"label\">";
            // line 135
            echo ((($context["is_total"] ?? null)) ? ("Total calls") : ("Calls"));
            echo "</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
            // line 138
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "time", [], "any", false, false, false, 138) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">";
            // line 139
            echo ((($context["is_total"] ?? null)) ? ("Total time") : ("Time"));
            echo "</span>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "reads", [], "any", false, false, false, 146), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 147
            echo ((($context["is_total"] ?? null)) ? ("Total reads") : ("Reads"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "writes", [], "any", false, false, false, 150), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 151
            echo ((($context["is_total"] ?? null)) ? ("Total writes") : ("Writes"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "deletes", [], "any", false, false, false, 154), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 155
            echo ((($context["is_total"] ?? null)) ? ("Total deletes") : ("Deletes"));
            echo "</span>
            </div>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hits", [], "any", false, false, false, 163), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 164
            echo ((($context["is_total"] ?? null)) ? ("Total hits") : ("Hits"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "misses", [], "any", false, false, false, 167), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 168
            echo ((($context["is_total"] ?? null)) ? ("Total misses") : ("Misses"));
            echo "</span>
            </div>
            <div class=\"metric\">
                    <span class=\"value\">
                        ";
            // line 172
            (((twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", true, true, false, 172) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", false, false, false, 172)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", false, false, false, 172), "html", null, true))) : (print (0)));
            echo " <span class=\"unit\">%</span>
                    </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>
    </div>
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
        return "@WebProfiler/Collector/cache.html.twig";
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
        return array (  494 => 172,  487 => 168,  483 => 167,  477 => 164,  473 => 163,  462 => 155,  458 => 154,  452 => 151,  448 => 150,  442 => 147,  438 => 146,  428 => 139,  424 => 138,  418 => 135,  414 => 134,  410 => 132,  393 => 131,  384 => 127,  370 => 126,  363 => 121,  354 => 119,  350 => 118,  337 => 108,  334 => 107,  332 => 106,  327 => 103,  322 => 100,  305 => 97,  301 => 96,  297 => 95,  293 => 94,  290 => 93,  273 => 92,  257 => 79,  254 => 78,  248 => 75,  245 => 74,  243 => 73,  240 => 72,  236 => 70,  230 => 68,  228 => 67,  218 => 62,  213 => 61,  195 => 60,  192 => 59,  184 => 54,  178 => 50,  176 => 49,  172 => 47,  165 => 46,  153 => 40,  147 => 38,  140 => 37,  130 => 33,  127 => 32,  121 => 29,  107 => 25,  100 => 21,  93 => 17,  89 => 15,  86 => 14,  79 => 10,  73 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/cache.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/cache.html.twig");
    }
}
