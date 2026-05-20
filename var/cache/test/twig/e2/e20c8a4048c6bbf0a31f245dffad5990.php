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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_77aec7d0676d19e98bb28f7f6b857965 extends Template
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
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "querycount", [], "any", false, false, false, 6) > 0) || (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            echo "
        ";
            // line 8
            ob_start(function () { return ''; });
            // line 9
            echo "            ";
            $context["status"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
            // line 10
            echo "
            ";
            // line 11
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 11, $this->source); })()) >= 3)) {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@Doctrine/Collector/database.svg");
                echo "
            ";
            } else {
                // line 14
                echo "                <span class=\"icon\">";
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "</span>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "querycount", [], "any", false, false, false, 17) == 0) && (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                // line 18
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
            } else {
                // line 21
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "querycount", [], "any", false, false, false, 21), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                // line 24
                echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
            }
            // line 28
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            ob_start(function () { return ''; });
            // line 31
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 33
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 41
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 45
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 47)) {
                // line 48
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 50), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 54
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 54) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 54), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 58
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 61
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 66
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "
        ";
            // line 68
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 68, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 68, $this->source); })()), "")) : (""))]);
            echo "

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 74
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 74) > 0)) ? ("label-status-error") : (""));
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "querycount", [], "any", false, false, false, 74) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 75
        echo twig_include($this->env, $context, (("@Doctrine/Collector/" . ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 75, $this->source); })()) < 3)) ? ("icon") : ("database"))) . ".svg"));
        echo "</span>
        <strong>Doctrine</strong>
        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 77)) {
            // line 78
            echo "            <span class=\"count\">
                <span>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 79), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 82
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 86
        echo "    ";
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 86, $this->source); })()))) {
            // line 87
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 88
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 88, $this->source); })()), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 90
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 90, $this->source); })()), "query", [], "any", false, false, false, 90), "get", ["connection"], "method", false, false, false, 90), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 91
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 91, $this->source); })()), "query", [], "any", false, false, false, 91), "get", ["query"], "method", false, false, false, 91)]));
            // line 92
            echo "
    ";
        } else {
            // line 94
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_queries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 99
        echo "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        ";
        // line 105
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 105, $this->source); })()) >= 3)) {
            // line 106
            echo "        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        ";
        }
        // line 115
        echo "    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "querycount", [], "any", false, false, false, 122), "html", null, true);
        echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 127), "html", null, true);
        echo "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 132
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "time", [], "any", false, false, false, 132) * 1000)), "html", null, true);
        echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 137), "html", null, true);
        echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
        </div>

        ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 142)) {
            // line 143
            echo "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 145, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 145), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 149, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 149), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 153, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 153), "html", null, true);
            echo "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 158
        echo "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 161
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "queries", [], "any", false, false, false, 161))) ? ("disabled") : (""));
        echo "\">
            ";
        // line 162
        $context["group_queries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 162, $this->source); })()), "query", [], "any", false, false, false, 162), "getBoolean", ["group"], "method", false, false, false, 162);
        // line 163
        echo "            <h3 class=\"tab-title\">
                ";
        // line 164
        if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 164, $this->source); })())) {
            // line 165
            echo "                    Grouped Statements
                ";
        } else {
            // line 167
            echo "                    Queries
                ";
        }
        // line 169
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 172
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "queries", [], "any", false, false, false, 172)) {
            // line 173
            echo "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 177
            echo "                    ";
            if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 177, $this->source); })())) {
                // line 178
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 178, $this->source); })())]), "html", null, true);
                echo "\">Show all queries</a></p>
                    ";
            } else {
                // line 180
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 180, $this->source); })()), "group" => true]), "html", null, true);
                echo "\">Group similar statements</a></p>
                    ";
            }
            // line 182
            echo "
                    ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 183, $this->source); })()), "queries", [], "any", false, false, false, 183));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 184
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "connections", [], "any", false, false, false, 184)) > 1)) {
                    // line 185
                    echo "                            <h3>";
                    echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                    echo " <small>connection</small></h3>
                        ";
                }
                // line 187
                echo "
                        ";
                // line 188
                if (twig_test_empty($context["queries"])) {
                    // line 189
                    echo "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 193
                    echo "                            ";
                    if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 193, $this->source); })())) {
                        // line 194
                        echo "                                ";
                        $context["queries"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 194, $this->source); })()), "groupedQueries", [], "any", false, false, false, 194), $context["connection"], [], "array", false, false, false, 194);
                        // line 195
                        echo "                            ";
                    }
                    // line 196
                    echo "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 199
                    if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 199, $this->source); })())) {
                        // line 200
                        echo "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 200), "html", null, true);
                        echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 201
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 201), "html", null, true);
                        echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 203
                        echo "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), "html", null, true);
                        echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                        // line 204
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 204), "html", null, true);
                        echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 206
                    echo "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 209
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 209), "html", null, true);
                    echo "\">
                                ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 211
                        echo "                                    ";
                        $context["i"] = (((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 211, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 211)) : ($context["i"]));
                        // line 212
                        echo "                                    <tr id=\"queryNo-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 212), "loop", [], "any", false, false, false, 212), "index", [], "any", false, false, false, 212), "html", null, true);
                        echo "\">
                                        ";
                        // line 213
                        if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 213, $this->source); })())) {
                            // line 214
                            echo "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 215
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 215)), "html", null, true);
                            echo "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 216
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 216) * 1000)), "html", null, true);
                            echo "&nbsp;ms<br />(";
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 216)), "html", null, true);
                            echo "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 218
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 218), "html", null, true);
                            echo "</td>
                                        ";
                        } else {
                            // line 220
                            echo "                                            <td class=\"nowrap\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 220), "html", null, true);
                            echo "</td>
                                            <td class=\"nowrap\">";
                            // line 221
                            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 221) * 1000)), "html", null, true);
                            echo "&nbsp;ms</td>
                                        ";
                        }
                        // line 223
                        echo "                                        <td>
                                            ";
                        // line 224
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 224));
                        echo "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 227
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 227), 2);
                        echo "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 231
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 231), "loop", [], "any", false, false, false, 231), "index", [], "any", false, false, false, 231), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 233
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 233)) {
                            // line 234
                            echo "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 235
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 235), "loop", [], "any", false, false, false, 235), "index", [], "any", false, false, false, 235), "html", null, true);
                            echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 237
                        echo "
                                                ";
                        // line 238
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 238)) {
                            // line 239
                            echo "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 240
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 240, $this->source); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 240), "loop", [], "any", false, false, false, 240), "index", [], "any", false, false, false, 240), "html", null, true);
                            echo "\">Explain query</a>
                                                ";
                        }
                        // line 242
                        echo "
                                                ";
                        // line 243
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 243)) {
                            // line 244
                            echo "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 245
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 245), "loop", [], "any", false, false, false, 245), "index", [], "any", false, false, false, 245), "html", null, true);
                            echo "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 247
                        echo "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 249
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 249), "loop", [], "any", false, false, false, 249), "index", [], "any", false, false, false, 249), "html", null, true);
                        echo "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 250
                        echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 250), true);
                        echo "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 251
                        echo twig_escape_filter($this->env, $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 251), false), "html_attr");
                        echo "\">Copy</button>
                                            </div>

                                            ";
                        // line 254
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 254)) {
                            // line 255
                            echo "                                                <div id=\"original-query-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 255), "loop", [], "any", false, false, false, 255), "index", [], "any", false, false, false, 255), "html", null, true);
                            echo "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 256
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((twig_get_attribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 256) . ";"), twig_get_attribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 256));
                            // line 257
                            echo "                                                    ";
                            echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 257, $this->source); })()));
                            echo "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 258
                            echo twig_escape_filter($this->env, (isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 258, $this->source); })()), "html_attr");
                            echo "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 261
                        echo "
                                            ";
                        // line 262
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 262)) {
                            // line 263
                            echo "                                                <div id=\"explain-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 263), "loop", [], "any", false, false, false, 263), "index", [], "any", false, false, false, 263), "html", null, true);
                            echo "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 265
                        echo "
                                            ";
                        // line 266
                        if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 266)) {
                            // line 267
                            echo "                                                <div id=\"backtrace-";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 267), "loop", [], "any", false, false, false, 267), "index", [], "any", false, false, false, 267), "html", null, true);
                            echo "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 276
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 276));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 277
                                echo "                                                            <tr>
                                                                <td>";
                                // line 278
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 278), "html", null, true);
                                echo "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 281
                                $context["line_number"] = ((twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 281)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 281), 1)) : (1));
                                // line 282
                                echo "                                                                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 282)) {
                                    // line 283
                                    echo "                                                                                    <a href=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 283), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 283, $this->source); })())), "html", null, true);
                                    echo "\">
                                                                                ";
                                }
                                // line 285
                                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 285)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 285))) : ("")) . ((twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 285)) ? (((twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 285)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 285), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 286
                                echo "<span class=\"status-warning\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 286), "html", null, true);
                                echo "</span>
                                                                                ";
                                // line 287
                                if (twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 287)) {
                                    // line 288
                                    echo "                                                                                    </a>
                                                                                ";
                                }
                                // line 290
                                echo "                                                                                (line ";
                                echo twig_escape_filter($this->env, (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 290, $this->source); })()), "html", null, true);
                                echo ")
                                                                            </span>
                                                                </td>
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 295
                            echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 299
                        echo "                                        </td>
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
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 305
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "                ";
        }
        // line 307
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 310
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 310, $this->source); })()), "connections", [], "any", false, false, false, 310))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 313
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 313, $this->source); })()), "connections", [], "any", false, false, false, 313)) {
            // line 314
            echo "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 318
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 318, $this->source); })()), "connections", [], "any", false, false, false, 318)], 318, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 320
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 323
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 323, $this->source); })()), "managers", [], "any", false, false, false, 323))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 327
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 327, $this->source); })()), "managers", [], "any", false, false, false, 327)) {
            // line 328
            echo "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 332
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Name", "Service", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 332, $this->source); })()), "managers", [], "any", false, false, false, 332)], 332, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 334
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 337
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 337, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 337)) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 341
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 341, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 341)) {
            // line 342
            echo "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 346
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 346, $this->source); })()), "cacheCounts", [], "any", false, false, false, 346)) {
                // line 347
                echo "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 351
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 353
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "cacheCounts", [], "any", false, false, false, 353), "hits", [], "any", false, false, false, 353), "html", null, true);
                echo "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 358
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "cacheCounts", [], "any", false, false, false, 358), "misses", [], "any", false, false, false, 358), "html", null, true);
                echo "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 363
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 363, $this->source); })()), "cacheCounts", [], "any", false, false, false, 363), "puts", [], "any", false, false, false, 363), "html", null, true);
                echo "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 368
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 368, $this->source); })()), "cacheRegions", [], "any", false, false, false, 368), "hits", [], "any", false, false, false, 368)) {
                    // line 369
                    echo "                            <h3>Number of cache hits</h3>
                            ";
                    // line 370
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Hits", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 370, $this->source); })()), "cacheRegions", [], "any", false, false, false, 370), "hits", [], "any", false, false, false, 370)], 370, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 372
                echo "
                        ";
                // line 373
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 373, $this->source); })()), "cacheRegions", [], "any", false, false, false, 373), "misses", [], "any", false, false, false, 373)) {
                    // line 374
                    echo "                            <h3>Number of cache misses</h3>
                            ";
                    // line 375
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Misses", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 375, $this->source); })()), "cacheRegions", [], "any", false, false, false, 375), "misses", [], "any", false, false, false, 375)], 375, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 377
                echo "
                        ";
                // line 378
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 378, $this->source); })()), "cacheRegions", [], "any", false, false, false, 378), "puts", [], "any", false, false, false, 378)) {
                    // line 379
                    echo "                            <h3>Number of cache puts</h3>
                            ";
                    // line 380
                    echo twig_call_macro($macros["helper"], "macro_render_simple_table", ["Region", "Puts", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 380, $this->source); })()), "cacheRegions", [], "any", false, false, false, 380), "puts", [], "any", false, false, false, 380)], 380, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                // line 382
                echo "                    ";
            }
            // line 383
            echo "                ";
        }
        // line 384
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 387
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 387, $this->source); })()), "entities", [], "any", false, false, false, 387)) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 391
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 391, $this->source); })()), "entities", [], "any", false, false, false, 391)) {
            // line 392
            echo "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 396
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 396, $this->source); })()), "entities", [], "any", false, false, false, 396));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 397
                echo "                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 397, $this->source); })()), "managers", [], "any", false, false, false, 397)) > 1)) {
                    // line 398
                    echo "                            <h3>";
                    echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                    echo " <small>entity manager</small></h3>
                        ";
                }
                // line 400
                echo "
                        ";
                // line 401
                if (twig_test_empty($context["classes"])) {
                    // line 402
                    echo "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 406
                    echo "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 414
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 415
                        echo "                                    ";
                        $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 415), $context["manager"], [], "array", true, true, false, 415) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 415), $context["manager"], [], "array", false, true, false, 415), twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 415), [], "array", true, true, false, 415));
                        // line 416
                        echo "                                    <tr class=\"";
                        echo (((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 416, $this->source); })())) ? ("status-error") : (""));
                        echo "\">
                                        <td>
                                <a href=\"";
                        // line 418
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 418), twig_get_attribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 418)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 418), "html", null, true);
                        echo "</a>
                            </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 421
                        if ((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 421, $this->source); })())) {
                            // line 422
                            echo "                                                <ul>
                                                    ";
                            // line 423
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 423, $this->source); })()), "mappingErrors", [], "any", false, false, false, 423), $context["manager"], [], "array", false, false, false, 423), twig_get_attribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 423), [], "array", false, false, false, 423));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 424
                                echo "                                                        <li>";
                                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                                echo "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 426
                            echo "                                                </ul>
                                            ";
                        } else {
                            // line 428
                            echo "                                                No errors.
                                            ";
                        }
                        // line 430
                        echo "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 433
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 436
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "                ";
        }
        // line 438
        echo "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                if (targetElement.getAttribute('data-sfurl') !== link.href) {
                    fetch(link.href, {
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute('data-sfurl', link.href)
                    }, function () {
                        targetElement.innerHTML = 'An error occurred while loading the query explanation.';
                    })
                }

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                button.classList.remove('hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 516
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 517
            echo "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 520
            echo twig_escape_filter($this->env, (isset($context["label1"]) || array_key_exists("label1", $context) ? $context["label1"] : (function () { throw new RuntimeError('Variable "label1" does not exist.', 520, $this->source); })()), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 521
            echo twig_escape_filter($this->env, (isset($context["label2"]) || array_key_exists("label2", $context) ? $context["label2"] : (function () { throw new RuntimeError('Variable "label2" does not exist.', 521, $this->source); })()), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 525
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 525, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 526
                echo "            <tr>
                <th scope=\"row\">";
                // line 527
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</th>
                <td>";
                // line 528
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            echo "        </tbody>
    </table>
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
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1242 => 531,  1233 => 528,  1229 => 527,  1226 => 526,  1222 => 525,  1215 => 521,  1211 => 520,  1206 => 517,  1188 => 516,  1105 => 438,  1102 => 437,  1096 => 436,  1091 => 433,  1083 => 430,  1079 => 428,  1075 => 426,  1066 => 424,  1062 => 423,  1059 => 422,  1057 => 421,  1049 => 418,  1043 => 416,  1040 => 415,  1036 => 414,  1026 => 406,  1020 => 402,  1018 => 401,  1015 => 400,  1009 => 398,  1006 => 397,  1001 => 396,  995 => 392,  993 => 391,  986 => 387,  981 => 384,  978 => 383,  975 => 382,  970 => 380,  967 => 379,  965 => 378,  962 => 377,  957 => 375,  954 => 374,  952 => 373,  949 => 372,  944 => 370,  941 => 369,  939 => 368,  931 => 363,  923 => 358,  915 => 353,  911 => 351,  905 => 347,  902 => 346,  896 => 342,  894 => 341,  887 => 337,  882 => 334,  876 => 332,  870 => 328,  868 => 327,  861 => 323,  856 => 320,  850 => 318,  844 => 314,  842 => 313,  836 => 310,  831 => 307,  828 => 306,  814 => 305,  809 => 302,  793 => 299,  787 => 295,  767 => 290,  763 => 288,  761 => 287,  756 => 286,  754 => 285,  748 => 283,  745 => 282,  743 => 281,  737 => 278,  734 => 277,  717 => 276,  702 => 267,  700 => 266,  697 => 265,  689 => 263,  687 => 262,  684 => 261,  678 => 258,  673 => 257,  671 => 256,  664 => 255,  662 => 254,  656 => 251,  652 => 250,  646 => 249,  642 => 247,  635 => 245,  632 => 244,  630 => 243,  627 => 242,  618 => 240,  615 => 239,  613 => 238,  610 => 237,  603 => 235,  600 => 234,  598 => 233,  591 => 231,  584 => 227,  578 => 224,  575 => 223,  570 => 221,  565 => 220,  560 => 218,  553 => 216,  549 => 215,  546 => 214,  544 => 213,  537 => 212,  534 => 211,  517 => 210,  513 => 209,  508 => 206,  503 => 204,  498 => 203,  493 => 201,  488 => 200,  486 => 199,  481 => 196,  478 => 195,  475 => 194,  472 => 193,  466 => 189,  464 => 188,  461 => 187,  455 => 185,  452 => 184,  435 => 183,  432 => 182,  426 => 180,  420 => 178,  417 => 177,  411 => 173,  409 => 172,  404 => 169,  400 => 167,  396 => 165,  394 => 164,  391 => 163,  389 => 162,  385 => 161,  380 => 158,  372 => 153,  365 => 149,  358 => 145,  354 => 143,  352 => 142,  344 => 137,  336 => 132,  328 => 127,  320 => 122,  311 => 115,  300 => 106,  298 => 105,  290 => 99,  283 => 98,  272 => 94,  268 => 92,  266 => 91,  265 => 90,  264 => 88,  262 => 87,  259 => 86,  252 => 85,  244 => 82,  238 => 79,  235 => 78,  233 => 77,  228 => 75,  221 => 74,  214 => 73,  203 => 68,  200 => 67,  197 => 66,  190 => 61,  182 => 58,  173 => 54,  166 => 50,  162 => 48,  160 => 47,  153 => 45,  146 => 41,  139 => 37,  130 => 33,  126 => 31,  124 => 30,  121 => 29,  118 => 28,  111 => 24,  104 => 21,  97 => 18,  95 => 17,  92 => 16,  86 => 14,  80 => 12,  78 => 11,  75 => 10,  72 => 9,  70 => 8,  67 => 7,  64 => 6,  57 => 5,  50 => 1,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Doctrine/Collector/db.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/doctrine/doctrine-bundle/templates/Collector/db.html.twig");
    }
}
