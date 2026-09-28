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

/* components/Pagination.html.twig */
class __TwigTemplate_bb6324207ae244d78e248e944f7460c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Pagination.html.twig"));

        // line 1
        yield "<nav aria-label=\"Pagination\" class=\"d-flex justify-content-center\" ";
        yield (string) $this->escaper->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <ul class=\"pagination\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "                <li class=\"page-item active\" aria-current=\"true\" aria-label=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 5), "html", null, true);
                yield "\">
                    <span class=\"page-link\">";
                // line 6
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 6), "html", null, true);
                yield "</span>
                </li>
            ";
            } else {
                // line 9
                yield "                <li class=\"page-item\" aria-label=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 9), "html", null, true);
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 10
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 10), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 13
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 14
        yield "    </ul>
</nav>
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
        return "components/Pagination.html.twig";
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
        return array (  97 => 14,  90 => 13,  82 => 10,  77 => 9,  71 => 6,  66 => 5,  63 => 4,  59 => 3,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav aria-label=\"Pagination\" class=\"d-flex justify-content-center\" {{ attributes }}>
    <ul class=\"pagination\">
        {% for page in pagination %}
            {% if page.active %}
                <li class=\"page-item active\" aria-current=\"true\" aria-label=\"{{ page.label }}\">
                    <span class=\"page-link\">{{ page.label }}</span>
                </li>
            {% else %}
                <li class=\"page-item\" aria-label=\"{{ page.label }}\">
                    <a class=\"page-link\" href=\"{{ page.url }}\">{{ page.label }}</a>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>
", "components/Pagination.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/Pagination.html.twig");
    }
}
