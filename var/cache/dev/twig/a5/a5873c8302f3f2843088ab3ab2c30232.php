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

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_23ee98566edadc3244b15e42334f6592 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'summary' => [$this, 'block_summary'],
            'sidebar_search_css_class' => [$this, 'block_sidebar_search_css_class'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #search-results td {
            font-family: var(--font-family-system);
            vertical-align: middle;
        }

        #search-results .sf-search {
            visibility: hidden;
            margin-left: 2px;
        }
        #search-results tr:hover .sf-search {
            visibility: visible;
        }
        #search-results .sf-search svg {
            stroke-width: 3;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 32
        echo "    <div class=\"status\">
        <h2>Profile Search</h2>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_sidebar_search_css_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search_css_class"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_sidebar_shortcuts_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <div class=\"sf-tabs\" data-processed=\"true\">
        <div class=\"tab-navigation\" role=\"tablist\">
            <button class=\"tab-control ";
        // line 43
        echo ((("request" == ($context["profile_type"] ?? null))) ? ("active") : (""));
        echo "\" role=\"tab\" ";
        echo ((("request" == ($context["profile_type"] ?? null))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        echo " >
                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10]), "html", null, true);
        echo "\">
                    HTTP Requests
                </a>
            </button>
            <button class=\"tab-control ";
        // line 48
        echo ((("command" == ($context["profile_type"] ?? null))) ? ("active") : (""));
        echo "\" role=\"tab\" ";
        echo ((("command" == ($context["profile_type"] ?? null))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        echo ">
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10, "type" => "command"]), "html", null, true);
        echo "\">
                    Console Commands
                </a>
            </button>
        </div>
    </div>

    <h2>";
        // line 56
        ((($context["tokens"] ?? null)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, ($context["tokens"] ?? null)), "html", null, true))) : (print ("No")));
        echo " results found</h2>

    ";
        // line 58
        if (($context["tokens"] ?? null)) {
            // line 59
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">
                        ";
            // line 63
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 64
                echo "                            Exit code
                        ";
            } else {
                // line 66
                echo "                            Status
                        ";
            }
            // line 68
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 70
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 71
                echo "                            Application
                        ";
            } else {
                // line 73
                echo "                            IP
                        ";
            }
            // line 75
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 77
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 78
                echo "                            Mode
                        ";
            } else {
                // line 80
                echo "                            Method
                        ";
            }
            // line 82
            echo "                    </th>
                    <th scope=\"col\">
                        ";
            // line 84
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 85
                echo "                            Command
                        ";
            } else {
                // line 87
                echo "                            URL
                        ";
            }
            // line 89
            echo "                    </th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 96
                echo "                    ";
                if (("command" == ($context["profile_type"] ?? null))) {
                    // line 97
                    echo "                        ";
                    $context["css_class"] = (((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 97) == 113)) ? ("status-warning") : ((((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 97) > 0)) ? ("status-error") : ("status-success"))));
                    // line 98
                    echo "                    ";
                } else {
                    // line 99
                    echo "                        ";
                    $context["css_class"] = (((((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 99), 0)) : (0)) > 399)) ? ("status-error") : ((((((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 99), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                    // line 100
                    echo "                    ";
                }
                // line 101
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 104
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 104), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "ip", [], "any", false, false, false, 107), "html", null, true);
                echo " ";
                echo twig_call_macro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "ip"], 107, $context, $this->getSourceContext());
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "method", [], "any", false, false, false, 110), "html", null, true);
                echo " ";
                echo twig_call_macro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "method"], 110, $context, $this->getSourceContext());
                echo "</span>
                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "url", [], "any", false, false, false, 113), "html", null, true);
                echo "
                            ";
                // line 114
                echo twig_call_macro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "url"], 114, $context, $this->getSourceContext());
                echo "
                        </td>
                        <td class=\"text-small\">
                            <time data-convert-to-user-timezone data-render-as-date datetime=\"";
                // line 117
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 117), "c"), "html", null, true);
                echo "\">
                                ";
                // line 118
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 118), "d-M-Y"), "html", null, true);
                echo "
                            </time>
                            <time class=\"newline\" data-convert-to-user-timezone data-render-as-time datetime=\"";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 120), "c"), "html", null, true);
                echo "\">
                                ";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 121), "H:i:s"), "html", null, true);
                echo "
                            </time>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, false, 124)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, false, 124), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 130
            echo "        <div class=\"empty empty-panel\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 134
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function macro_profile_search_filter($__request__ = null, $__result__ = null, $__property__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "request" => $__request__,
            "result" => $__result__,
            "property" => $__property__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "profile_search_filter"));

            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "hasSession", [], "any", false, false, false, 4)) {
                // line 5
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 5), "all", [], "any", false, false, false, 5), ["token" => twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "token", [], "any", false, false, false, 5)]), [($context["property"] ?? null) => (($__internal_compile_0 = ($context["result"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["property"] ?? null)] ?? null) : null)])), "html", null, true);
                echo "\" title=\"Search\"><span title=\"Search\" class=\"sf-icon sf-search\">";
                echo twig_source($this->env, "@WebProfiler/Icon/search.svg");
                echo "</span></a>";
            }
            
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
        return "@WebProfiler/Profiler/results.html.twig";
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
        return array (  373 => 5,  371 => 4,  353 => 3,  345 => 134,  339 => 130,  334 => 127,  323 => 124,  317 => 121,  313 => 120,  308 => 118,  304 => 117,  298 => 114,  294 => 113,  286 => 110,  278 => 107,  270 => 104,  265 => 101,  262 => 100,  259 => 99,  256 => 98,  253 => 97,  250 => 96,  246 => 95,  238 => 89,  234 => 87,  230 => 85,  228 => 84,  224 => 82,  220 => 80,  216 => 78,  214 => 77,  210 => 75,  206 => 73,  202 => 71,  200 => 70,  196 => 68,  192 => 66,  188 => 64,  186 => 63,  180 => 59,  178 => 58,  173 => 56,  163 => 49,  157 => 48,  150 => 44,  144 => 43,  140 => 41,  133 => 40,  121 => 38,  109 => 37,  99 => 32,  92 => 31,  64 => 10,  57 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/results.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/results.html.twig");
    }
}
