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

/* @WebProfiler/Profiler/_command_summary.html.twig */
class __TwigTemplate_be910e5c39d115052a2b37217ee9a840 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

        // line 1
        $context["status_code"] = ((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0));
        // line 2
        $context["interrupted"] = (((($context["command_collector"] ?? null) === false)) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["command_collector"] ?? null), "interruptedBySignal", [], "any", false, false, false, 2)));
        // line 3
        $context["css_class"] = ((((($context["status_code"] ?? null) == 113) ||  !(null === ($context["interrupted"] ?? null)))) ? ("status-warning") : ((((($context["status_code"] ?? null) > 0)) ? ("status-error") : ("status-success"))));
        // line 4
        echo "
<div class=\"terminal status ";
        // line 5
        echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
        echo "\">
    <div class=\"container\">
        <h2>
            <span class=\"status-request-method\">
                ";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 9)), "html", null, true);
        echo "
            </span>

            <span class=\"status-command\">
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
        echo "
            </span>
        </h2>

        <dl class=\"metadata\">
            ";
        // line 18
        if (($context["interrupted"] ?? null)) {
            // line 19
            echo "                <span class=\"status-response-status-code\">Interrupted</span>
                <dt>Signal</dt>
                <dd class=\"status-response-status-text\">";
            // line 21
            echo twig_escape_filter($this->env, ($context["interrupted"] ?? null), "html", null, true);
            echo "</dd>

                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\">";
            // line 24
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</dd>
            ";
        } elseif ((        // line 25
($context["status_code"] ?? null) == 0)) {
            // line 26
            echo "                <span class=\"status-response-status-code\">Success</span>
            ";
        } elseif ((        // line 27
($context["status_code"] ?? null) > 0)) {
            // line 28
            echo "                <span class=\"status-response-status-code\">Error</span>
                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\"><span class=\"status-response-status-code\">";
            // line 30
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</span></dd>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 33), "has", ["SYMFONY_CLI_BINARY_NAME"], "method", false, false, false, 33)) {
            // line 34
            echo "                <dt>Symfony CLI</dt>
                <dd>v";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 35), "get", ["SYMFONY_CLI_VERSION"], "method", false, false, false, 35), "html", null, true);
            echo "</dd>
            ";
        }
        // line 37
        echo "
            <dt>Application</dt>
            <dd>
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 40), "type" => "command"]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 40), "html", null, true);
        echo "</a>
            </dd>

            <dt>Profiled on</dt>
            <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 44), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 44), "r"), "html", null, true);
        echo "</time></dd>

            <dt>Token</dt>
            <dd>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 47), "html", null, true);
        echo "</dd>
        </dl>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_command_summary.html.twig";
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
        return array (  138 => 47,  130 => 44,  121 => 40,  116 => 37,  111 => 35,  108 => 34,  106 => 33,  103 => 32,  98 => 30,  94 => 28,  92 => 27,  89 => 26,  87 => 25,  83 => 24,  77 => 21,  73 => 19,  71 => 18,  63 => 13,  56 => 9,  49 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/_command_summary.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/_command_summary.html.twig");
    }
}
