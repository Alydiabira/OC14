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

/* components/Info.html.twig */
class __TwigTemplate_40abe7bc943bd3ed70160a8b570a3181 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Info.html.twig"));

        // line 1
        echo "<div class=\"fw-bold list-info\" ";
        echo twig_escape_filter($this->env, ($context["attributes"] ?? null), "html", null, true);
        echo ">
    Affiche ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "count", [], "any", false, false, false, 2), "html", null, true);
        echo " jeux vidéo de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "from", [], "any", false, false, false, 2), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "to", [], "any", false, false, false, 2), "html", null, true);
        echo " sur les ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "total", [], "any", false, false, false, 2), "html", null, true);
        echo " jeux vidéo
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Info.html.twig";
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
        return array (  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Info.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Info.html.twig");
    }
}
