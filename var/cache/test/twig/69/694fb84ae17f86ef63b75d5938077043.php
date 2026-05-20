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
class __TwigTemplate_0742cb28b979be76086d81fb46901495 extends Template
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
        $context["status_code"] = (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 1, $this->source); })())) ? (((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0))) : (0));
        // line 2
        $context["css_class"] = ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 2, $this->source); })()) > 399)) ? ("status-error") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 2, $this->source); })()) > 299)) ? ("status-warning") : ("status-success"))));
        // line 3
        echo "
";
        // line 4
        if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 4, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 4, $this->source); })()), "redirect", [], "any", false, false, false, 4))) {
            // line 5
            echo "    ";
            $context["redirect"] = twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 5, $this->source); })()), "redirect", [], "any", false, false, false, 5);
            // line 6
            echo "    ";
            $context["link_to_source_code"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 6), "class", [], "any", true, true, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 6, $this->source); })()), "controller", [], "any", false, false, false, 6), "file", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 6, $this->source); })()), "controller", [], "any", false, false, false, 6), "line", [], "any", false, false, false, 6))) : (""));
            // line 7
            echo "    ";
            $context["redirect_route_name"] = ("@" . twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 7, $this->source); })()), "route", [], "any", false, false, false, 7));
            // line 8
            echo "
    <div class=\"status status-compact status-warning\">
        <span class=\"icon icon-redirect\">";
            // line 10
            echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
            echo "</span>

        <span class=\"status-response-status-code\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 12, $this->source); })()), "status_code", [], "any", false, false, false, 12), "html", null, true);
            echo "</span> redirect from

        <span class=\"status-request-method\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 14, $this->source); })()), "method", [], "any", false, false, false, 14), "html", null, true);
            echo "</span>

        ";
            // line 16
            if ((isset($context["link_to_source_code"]) || array_key_exists("link_to_source_code", $context) ? $context["link_to_source_code"] : (function () { throw new RuntimeError('Variable "link_to_source_code" does not exist.', 16, $this->source); })())) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link_to_source_code"]) || array_key_exists("link_to_source_code", $context) ? $context["link_to_source_code"] : (function () { throw new RuntimeError('Variable "link_to_source_code" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 17, $this->source); })()), "controller", [], "any", false, false, false, 17), "file", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["redirect_route_name"]) || array_key_exists("redirect_route_name", $context) ? $context["redirect_route_name"] : (function () { throw new RuntimeError('Variable "redirect_route_name" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["redirect_route_name"]) || array_key_exists("redirect_route_name", $context) ? $context["redirect_route_name"] : (function () { throw new RuntimeError('Variable "redirect_route_name" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "
        (<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 22, $this->source); })()), "token", [], "any", false, false, false, 22), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 22, $this->source); })()), "query", [], "any", false, false, false, 22), "get", ["panel", "request"], "method", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 22, $this->source); })()), "token", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>)
    </div>
";
        }
        // line 25
        echo "
<div class=\"status ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 27
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 27, $this->source); })()) > 399)) {
            // line 28
            echo "        <p class=\"status-error-details\">
            <span class=\"icon\">";
            // line 29
            echo twig_source($this->env, "@WebProfiler/Icon/alert-circle.svg");
            echo "</span>
            <span class=\"status-response-status-code\">Error ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "</span>
            <span class=\"status-response-status-text\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 31, $this->source); })()), "statusText", [], "any", false, false, false, 31), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 37, $this->source); })()), "method", [], "any", false, false, false, 37)), "html", null, true);
        echo "
        </span>

        ";
        // line 40
        $context["profile_title"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40)) < 160)) ? (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40)) : ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), 0, 160) . "…")));
        // line 41
        echo "        ";
        if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 41, $this->source); })()), "method", [], "any", false, false, false, 41)), ["GET", "HEAD"])) {
            // line 42
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 42, $this->source); })()), "url", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["profile_title"]) || array_key_exists("profile_title", $context) ? $context["profile_title"] : (function () { throw new RuntimeError('Variable "profile_title" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["profile_title"]) || array_key_exists("profile_title", $context) ? $context["profile_title"] : (function () { throw new RuntimeError('Variable "profile_title" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 46
        echo "    </h2>

    <dl class=\"metadata\">
        ";
        // line 49
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 49, $this->source); })()) < 400)) {
            // line 50
            echo "            <dt>Response</dt>
            <dd>
                <span class=\"status-response-status-code\">";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "</span>
                <span class=\"status-response-status-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 53, $this->source); })()), "statusText", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
            </dd>
        ";
        }
        // line 56
        echo "
        ";
        // line 57
        $context["referer"] = (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 57, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 57, $this->source); })()), "requestheaders", [], "any", false, false, false, 57), "get", ["referer"], "method", false, false, false, 57)) : (null));
        // line 58
        echo "        ";
        if ((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "            <dt></dt>
            <dd>
                <span class=\"icon icon-referer\">";
            // line 61
            echo twig_source($this->env, "@WebProfiler/Icon/referrer.svg");
            echo "</span>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 62, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 68, $this->source); })()), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "ip", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "ip", [], "any", false, false, false, 68), "html", null, true);
        echo "</a>
        </dd>

        <dt>Profiled on</dt>
        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 72, $this->source); })()), "time", [], "any", false, false, false, 72), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 72, $this->source); })()), "time", [], "any", false, false, false, 72), "r"), "html", null, true);
        echo "</time></dd>

        <dt>Token</dt>
        <dd>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 75, $this->source); })()), "token", [], "any", false, false, false, 75), "html", null, true);
        echo "</dd>
    </dl>
</div>

";
        // line 79
        if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 79, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 79, $this->source); })()), "forwardtoken", [], "any", false, false, false, 79))) {
            // line 80
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 80, $this->source); })()), "childByToken", [twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 80, $this->source); })()), "forwardtoken", [], "any", false, false, false, 80)], "method", false, false, false, 80);
            // line 81
            echo "    ";
            $context["controller"] = (((isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 81, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 81, $this->source); })()), "collector", ["request"], "method", false, false, false, 81), "controller", [], "any", false, false, false, 81)) : ("n/a"));
            // line 82
            echo "    <div class=\"status status-compact status-compact-forward\">
        <span class=\"icon icon-forward\">";
            // line 83
            echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
            echo "</span>

        Forwarded to

        ";
            // line 87
            $context["link"] = ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, false, 87)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 87, $this->source); })()), "file", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 87, $this->source); })()), "line", [], "any", false, false, false, 87))) : (null));
            // line 88
            if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 88, $this->source); })())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 88, $this->source); })()), "file", [], "any", false, false, false, 88), "html", null, true);
                echo "\">";
            }
            // line 89
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 89)) {
                // line 90
                echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 90, $this->source); })()), "class", [], "any", false, false, false, 90), "html", null, true))), "html", null, true);
                // line 91
                ((twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 91, $this->source); })()), "method", [], "any", false, false, false, 91)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 91, $this->source); })()), "method", [], "any", false, false, false, 91)), "html", null, true))) : (print ("")));
            } else {
                // line 93
                echo twig_escape_filter($this->env, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 93, $this->source); })()), "html", null, true);
            }
            // line 95
            if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 95, $this->source); })())) {
                echo "</a>";
            }
            // line 96
            echo "        (<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 96, $this->source); })()), "forwardtoken", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 96, $this->source); })()), "forwardtoken", [], "any", false, false, false, 96), "html", null, true);
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
