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

/* components/Review.html.twig */
class __TwigTemplate_e59778f28dd45adf249c9c1ec8d7ade0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Review.html.twig"));

        // line 1
        echo "<div";
        echo twig_escape_filter($this->env, ($context["attributes"] ?? null), "html", null, true);
        echo " class=\"list-group-item\">
\t<div class=\"d-flex gap-3\">
\t\t";
        // line 3
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "note", [], "any", false, false, false, 3), "label" => "Note"]);
        echo "
\t\t<div class=\"d-flex flex-column gap-2 w-100 justify-content-start\">
\t\t\t<h3 class=\"m-0\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "user", [], "any", false, false, false, 5), "username", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3>
\t\t\t";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 6))) {
            // line 7
            echo "\t\t\t\t<p class=\"m-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
\t\t\t";
        }
        // line 9
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Review.html.twig";
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
        return array (  63 => 9,  57 => 7,  55 => 6,  51 => 5,  46 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Review.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Review.html.twig");
    }
}
