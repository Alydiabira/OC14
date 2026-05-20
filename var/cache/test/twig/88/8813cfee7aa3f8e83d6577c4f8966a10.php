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
class __TwigTemplate_ee2906d5ec7c3410aeca543dd18e6040 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Filter.html.twig"));

        // line 1
        echo "<div class=\"rounded bg-light p-3\" ";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 2, $this->source); })()), "form", [], "any", false, false, false, 2), 'form_start');
        echo "
    <input type=\"hidden\" name=\"page\" value=\"1\"/>
    <input type=\"hidden\" name=\"limit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 4, $this->source); })()), "pagination", [], "any", false, false, false, 4), "limit", [], "any", false, false, false, 4), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"sorting\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 5, $this->source); })()), "pagination", [], "any", false, false, false, 5), "sorting", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 6, $this->source); })()), "pagination", [], "any", false, false, false, 6), "direction", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\"/>
    <fieldset class=\"mb-3\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 8, $this->source); })()), "form", [], "any", false, false, false, 8), "search", [], "any", false, false, false, 8), 'row');
        echo "
    </fieldset>
    <div class=\"mb-3 d-flex flex-column gap-3\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), "tags", [], "any", false, false, false, 11), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 12, $this->source); })()), "form", [], "any", false, false, false, 12), "tags", [], "any", false, false, false, 12), 'widget');
        echo "
    </div>
    <button class=\"btn btn-secondary w-100\" type=\"submit\">Filtrer</button>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 15, $this->source); })()), "form", [], "any", false, false, false, 15), 'form_end');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  82 => 15,  76 => 12,  72 => 11,  66 => 8,  61 => 6,  57 => 5,  53 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rounded bg-light p-3\" {{ attributes }}>
    {{ form_start(list.form) }}
    <input type=\"hidden\" name=\"page\" value=\"1\"/>
    <input type=\"hidden\" name=\"limit\" value=\"{{ list.pagination.limit }}\"/>
    <input type=\"hidden\" name=\"sorting\" value=\"{{ list.pagination.sorting.name }}\"/>
    <input type=\"hidden\" name=\"direction\" value=\"{{ list.pagination.direction.name }}\"/>
    <fieldset class=\"mb-3\">
        {{ form_row(list.form.search) }}
    </fieldset>
    <div class=\"mb-3 d-flex flex-column gap-3\">
        {{ form_label(list.form.tags) }}
        {{ form_widget(list.form.tags) }}
    </div>
    <button class=\"btn btn-secondary w-100\" type=\"submit\">Filtrer</button>
    {{ form_end(list.form) }}
</div>
", "components/Filter.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Filter.html.twig");
    }
}
