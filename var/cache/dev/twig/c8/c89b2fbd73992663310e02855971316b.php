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

/* @WebProfiler/Profiler/_request_summary.html.twig */
class __TwigTemplate_981ffbd503a1e9a7eef33dd869409ea5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_request_summary.html.twig"));

        // line 1
        $context["status_code"] = ((($context["request_collector"] ?? null)) ? (((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0))) : (0));
        // line 2
        $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
        // line 3
        echo "
";
        // line 4
        if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 4))) {
            // line 5
            echo "    ";
            $context["redirect"] = twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 5);
            // line 6
            echo "    ";
            $context["link_to_source_code"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 6), "class", [], "any", true, true, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 6), "file", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 6), "line", [], "any", false, false, false, 6))) : (""));
            // line 7
            echo "    ";
            $context["redirect_route_name"] = ("@" . twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "route", [], "any", false, false, false, 7));
            // line 8
            echo "
    <div class=\"status status-compact status-warning\">
        <span class=\"icon icon-redirect\">";
            // line 10
            echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
            echo "</span>

        <span class=\"status-response-status-code\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "status_code", [], "any", false, false, false, 12), "html", null, true);
            echo "</span> redirect from

        <span class=\"status-request-method\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>

        ";
            // line 16
            if (($context["link_to_source_code"] ?? null)) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["link_to_source_code"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 17), "file", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["redirect_route_name"] ?? null), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, ($context["redirect_route_name"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "
        (<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 22), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 22), "get", ["panel", "request"], "method", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>)
    </div>
";
        }
        // line 25
        echo "
<div class=\"status ";
        // line 26
        echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 27
        if ((($context["status_code"] ?? null) > 399)) {
            // line 28
            echo "        <p class=\"status-error-details\">
            <span class=\"icon\">";
            // line 29
            echo twig_source($this->env, "@WebProfiler/Icon/alert-circle.svg");
            echo "</span>
            <span class=\"status-response-status-code\">Error ";
            // line 30
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</span>
            <span class=\"status-response-status-text\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
        </p>
    ";
        }
        // line 34
        echo "
    <h2>
        <span class=\"status-request-method\">
            ";
        // line 37
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 37)), "html", null, true);
        echo "
        </span>

        ";
        // line 40
        $context["profile_title"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 40)) < 160)) ? (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 40)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 40), 0, 160) . "…")));
        // line 41
        echo "        ";
        if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 41)), ["GET", "HEAD"])) {
            // line 42
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["profile_title"] ?? null), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, ($context["profile_title"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 46
        echo "    </h2>

    <dl class=\"metadata\">
        ";
        // line 49
        if ((($context["status_code"] ?? null) < 400)) {
            // line 50
            echo "            <dt>Response</dt>
            <dd>
                <span class=\"status-response-status-code\">";
            // line 52
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</span>
                <span class=\"status-response-status-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
            </dd>
        ";
        }
        // line 56
        echo "
        ";
        // line 57
        $context["referer"] = ((($context["request_collector"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestheaders", [], "any", false, false, false, 57), "get", ["referer"], "method", false, false, false, 57)) : (null));
        // line 58
        echo "        ";
        if (($context["referer"] ?? null)) {
            // line 59
            echo "            <dt></dt>
            <dd>
                <span class=\"icon icon-referer\">";
            // line 61
            echo twig_source($this->env, "@WebProfiler/Icon/referrer.svg");
            echo "</span>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["referer"] ?? null), "html", null, true);
            echo "\" class=\"referer\">Browse referrer URL</a>
            </dd>
        ";
        }
        // line 65
        echo "
        <dt>IP</dt>
        <dd>
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 68), "html", null, true);
        echo "</a>
        </dd>

        <dt>Profiled on</dt>
        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 72), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 72), "r"), "html", null, true);
        echo "</time></dd>

        <dt>Token</dt>
        <dd>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 75), "html", null, true);
        echo "</dd>
    </dl>
</div>

";
        // line 79
        if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 79))) {
            // line 80
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 80)], "method", false, false, false, 80);
            // line 81
            echo "    ";
            $context["controller"] = ((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, false, 81), "controller", [], "any", false, false, false, 81)) : ("n/a"));
            // line 82
            echo "    <div class=\"status status-compact status-compact-forward\">
        <span class=\"icon icon-forward\">";
            // line 83
            echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
            echo "</span>

        Forwarded to

        ";
            // line 87
            $context["link"] = ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, false, 87)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 87))) : (null));
            // line 88
            if (($context["link"] ?? null)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 88), "html", null, true);
                echo "\">";
            }
            // line 89
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 89)) {
                // line 90
                echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 90), "html", null, true))), "html", null, true);
                // line 91
                ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 91)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 91)), "html", null, true))) : (print ("")));
            } else {
                // line 93
                echo twig_escape_filter($this->env, ($context["controller"] ?? null), "html", null, true);
            }
            // line 95
            if (($context["link"] ?? null)) {
                echo "</a>";
            }
            // line 96
            echo "        (<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 96), "html", null, true);
            echo "</a>)

    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_request_summary.html.twig";
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
        return array (  275 => 96,  271 => 95,  268 => 93,  265 => 91,  263 => 90,  261 => 89,  253 => 88,  251 => 87,  244 => 83,  241 => 82,  238 => 81,  236 => 80,  234 => 79,  227 => 75,  219 => 72,  210 => 68,  205 => 65,  199 => 62,  195 => 61,  191 => 59,  188 => 58,  186 => 57,  183 => 56,  177 => 53,  173 => 52,  169 => 50,  167 => 49,  162 => 46,  156 => 44,  148 => 42,  145 => 41,  143 => 40,  137 => 37,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  115 => 28,  113 => 27,  109 => 26,  106 => 25,  98 => 22,  95 => 21,  89 => 19,  79 => 17,  77 => 16,  72 => 14,  67 => 12,  62 => 10,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/_request_summary.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/_request_summary.html.twig");
    }
}
