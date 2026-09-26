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

/* components/Pagination.html.twig */
class __TwigTemplate_b6fb10d1cdbd362b922fd3cbd68b5d9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Pagination.html.twig"));

        // line 1
        yield "<nav aria-label=\"Pagination\" class=\"d-flex justify-content-center\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <ul class=\"pagination\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 4)) {
                // line 5
                yield "                <li class=\"page-item active\" aria-current=\"true\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 5), "html", null, true);
                yield "\">
                    <span class=\"page-link\">";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 6), "html", null, true);
                yield "</span>
                </li>
            ";
            } else {
                // line 9
                yield "                <li class=\"page-item\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 9), "html", null, true);
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "label", [], "any", false, false, false, 10), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 13
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "    </ul>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Pagination.html.twig";
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
        return array (  87 => 14,  81 => 13,  73 => 10,  68 => 9,  62 => 6,  57 => 5,  54 => 4,  50 => 3,  44 => 1,);
    }

    public function getSourceContext()
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
", "components/Pagination.html.twig", "/Users/diabiraaly/Desktop/876-p14-critipixel-corrige/templates/components/Pagination.html.twig");
    }
}
