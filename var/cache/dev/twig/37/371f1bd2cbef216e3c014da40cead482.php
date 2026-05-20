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

/* components/Rating.html.twig */
class __TwigTemplate_63f8135dd79fed19853355101722390a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Rating.html.twig"));

        // line 1
        echo "<div class=\"rating-";
        echo twig_escape_filter($this->env, ($context["rating"] ?? null), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["attributes"] ?? null), "html", null, true);
        echo ">
    <div class=\"rating-square\">
        <span class=\"value\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["rating"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"label\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Rating.html.twig";
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
        return array (  52 => 4,  48 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Rating.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Rating.html.twig");
    }
}
