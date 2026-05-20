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

/* components/Filter.html.twig */
class __TwigTemplate_d0289b6eca568c0fe05c0b1cd7185b11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Filter.html.twig"));

        // line 1
        echo "<div class=\"rounded bg-light p-3\" ";
        echo twig_escape_filter($this->env, ($context["attributes"] ?? null), "html", null, true);
        echo ">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "form", [], "any", false, false, false, 2), 'form_start');
        echo "
    <input type=\"hidden\" name=\"page\" value=\"1\"/>
    <input type=\"hidden\" name=\"limit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 4), "limit", [], "any", false, false, false, 4), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"sorting\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 5), "sorting", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 6), "direction", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\"/>
    <fieldset class=\"mb-3\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "form", [], "any", false, false, false, 8), "search", [], "any", false, false, false, 8), 'row');
        echo "
    </fieldset>
    <div class=\"mb-3 d-flex flex-column gap-3\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "form", [], "any", false, false, false, 11), "tags", [], "any", false, false, false, 11), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "form", [], "any", false, false, false, 12), "tags", [], "any", false, false, false, 12), 'widget');
        echo "
    </div>
    <button class=\"btn btn-secondary w-100\" type=\"submit\">Filtrer</button>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "form", [], "any", false, false, false, 15), 'form_end');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Filter.html.twig";
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
        return array (  79 => 15,  73 => 12,  69 => 11,  63 => 8,  58 => 6,  54 => 5,  50 => 4,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Filter.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Filter.html.twig");
    }
}
