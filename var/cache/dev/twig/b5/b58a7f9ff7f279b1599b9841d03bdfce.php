<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/Filter.html.twig */
class __TwigTemplate_1308c77d7e50de5948db14ee433b1613 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Filter.html.twig"));

        // line 1
        yield "<div class=\"rounded bg-light p-3\" ";
        yield (string) $this->escaper->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    ";
        // line 2
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 2, $this->source); })()), "form", [], "any", false, false, false, 2), 'form_start');
        yield "
    <input type=\"hidden\" name=\"page\" value=\"1\"/>
    <input type=\"hidden\" name=\"limit\" value=\"";
        // line 4
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 4, $this->source); })()), "pagination", [], "any", false, false, false, 4), "limit", [], "any", false, false, false, 4), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"sorting\" value=\"";
        // line 5
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 5, $this->source); })()), "pagination", [], "any", false, false, false, 5), "sorting", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"direction\" value=\"";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 6, $this->source); })()), "pagination", [], "any", false, false, false, 6), "direction", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\"/>
    <fieldset class=\"mb-3\">
        ";
        // line 8
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 8, $this->source); })()), "form", [], "any", false, false, false, 8), "search", [], "any", false, false, false, 8), 'row');
        yield "
    </fieldset>
    <div class=\"mb-3 d-flex flex-column gap-3\">
        ";
        // line 11
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), "tags", [], "any", false, false, false, 11), 'label');
        yield "
        ";
        // line 12
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 12, $this->source); })()), "form", [], "any", false, false, false, 12), "tags", [], "any", false, false, false, 12), 'widget');
        yield "
    </div>
    <button class=\"btn btn-secondary w-100\" type=\"submit\">Filtrer</button>
    ";
        // line 15
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 15, $this->source); })()), "form", [], "any", false, false, false, 15), 'form_end');
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Filter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  92 => 15,  86 => 12,  82 => 11,  76 => 8,  71 => 6,  67 => 5,  63 => 4,  58 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
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
", "components/Filter.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/Filter.html.twig");
    }
}
