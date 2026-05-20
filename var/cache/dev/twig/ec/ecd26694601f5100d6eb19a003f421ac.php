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

/* components/Progress.html.twig */
class __TwigTemplate_7e304c77b499886254ea2799944ebd29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Progress.html.twig"));

        // line 1
        echo "<div class=\"progress flex-grow-1\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "percent", [], "any", false, false, false, 1), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" ";
        echo twig_escape_filter($this->env, ($context["attributes"] ?? null), "html", null, true);
        echo ">
    <div class=\"progress-bar\" style=\"width: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "percent", [], "any", false, false, false, 2), "html", null, true);
        echo "%\"></div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Progress.html.twig";
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
        return array (  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Progress.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Progress.html.twig");
    }
}
