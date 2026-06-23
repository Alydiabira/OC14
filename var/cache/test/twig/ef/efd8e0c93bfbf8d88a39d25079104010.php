<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/Sorting.html.twig */
class __TwigTemplate_5cbcb526468cfc831285905663da323b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Sorting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Sorting.html.twig"));

        // line 1
        yield "<form name=\"sorting\" method=\"get\" class=\"row\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <input type=\"hidden\" name=\"page\" value=\"1\">
    <input type=\"hidden\" name=\"filter[search]\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 3, $this->source); })()), "filter", [], "any", false, false, false, 3), "search", [], "any", false, false, false, 3), "html", null, true);
        yield "\"/>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 4, $this->source); })()), "filter", [], "any", false, false, false, 4), "tags", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 5
            yield "        <input type=\"hidden\" name=\"filter[tags][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 5), "html", null, true);
            yield "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"limit\" name=\"limit\" aria-label=\"Jeux vidéo par page\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([10, 25, 50, 100]);
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 11
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
            yield "\" ";
            yield ((($context["limit"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 11, $this->source); })()), "pagination", [], "any", false, false, false, 11), "limit", [], "any", false, false, false, 11))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </select>
            <label for=\"limit\">Jeux vidéo par page</label>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"sorting\" name=\"sorting\" aria-label=\"Tri\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 20, $this->source); })()), "pagination", [], "any", false, false, false, 20), "allSorting", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
            // line 21
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sorting"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sorting"], "name", [], "any", false, false, false, 21) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 21, $this->source); })()), "pagination", [], "any", false, false, false, 21), "sorting", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sorting"], "value", [], "any", false, false, false, 21), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sorting'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "            </select>
            <label for=\"sorting\">Tri</label>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"direction\" name=\"direction\" aria-label=\"Tri\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 30, $this->source); })()), "pagination", [], "any", false, false, false, 30), "directions", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["direction"]) {
            // line 31
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["direction"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["direction"], "name", [], "any", false, false, false, 31) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 31, $this->source); })()), "pagination", [], "any", false, false, false, 31), "direction", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["direction"], "value", [], "any", false, false, false, 31), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['direction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "            </select>
            <label for=\"direction\">Ordre</label>
        </div>
    </div>
    <div class=\"col-2\">
        <button type=\"submit\" class=\"w-100 h-100 btn btn-primary\">Trier</button>
    </div>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Sorting.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  145 => 33,  132 => 31,  128 => 30,  119 => 23,  106 => 21,  102 => 20,  93 => 13,  80 => 11,  76 => 10,  71 => 7,  62 => 5,  58 => 4,  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form name=\"sorting\" method=\"get\" class=\"row\" {{ attributes }}>
    <input type=\"hidden\" name=\"page\" value=\"1\">
    <input type=\"hidden\" name=\"filter[search]\" value=\"{{ list.filter.search }}\"/>
    {% for tag in list.filter.tags %}
        <input type=\"hidden\" name=\"filter[tags][]\" value=\"{{ tag.id }}\"/>
    {% endfor %}
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"limit\" name=\"limit\" aria-label=\"Jeux vidéo par page\">
                {% for limit in [10, 25, 50, 100] %}
                    <option value=\"{{ limit }}\" {{ limit == list.pagination.limit ? \x27selected\x27 }}>{{ limit }}</option>
                {% endfor %}
            </select>
            <label for=\"limit\">Jeux vidéo par page</label>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"sorting\" name=\"sorting\" aria-label=\"Tri\">
                {% for sorting in list.pagination.allSorting %}
                    <option value=\"{{ sorting.name }}\" {{ sorting.name == list.pagination.sorting.name ? \x27selected\x27 }}>{{ sorting.value }}</option>
                {% endfor %}
            </select>
            <label for=\"sorting\">Tri</label>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"direction\" name=\"direction\" aria-label=\"Tri\">
                {% for direction in list.pagination.directions %}
                    <option value=\"{{ direction.name }}\" {{ direction.name == list.pagination.direction.name ? \x27selected\x27 }}>{{ direction.value }}</option>
                {% endfor %}
            </select>
            <label for=\"direction\">Ordre</label>
        </div>
    </div>
    <div class=\"col-2\">
        <button type=\"submit\" class=\"w-100 h-100 btn btn-primary\">Trier</button>
    </div>
</form>
", "components/Sorting.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/Sorting.html.twig");
    }
}
