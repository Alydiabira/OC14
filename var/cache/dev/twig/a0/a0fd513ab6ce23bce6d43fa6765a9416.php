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

/* components/Tabs.html.twig */
class __TwigTemplate_b9ad5bc98d1f534022b6138aa16e5ea5 extends Template
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
            'home' => [$this, 'block_home'],
            'test' => [$this, 'block_test'],
            'reviews' => [$this, 'block_reviews'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Tabs.html.twig"));

        // line 1
        yield "<div";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <ul class=\"nav nav-pills mb-4\">
        <li class=\"nav-item\">
            <a
                    class=\"nav-link active\"
                    href=\"#\"
                    id=\"tab-home\"
                    role=\"tab\"
                    aria-selected=\"true\"
                    aria-controls=\"pane-home\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-home\"
            >Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-test\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-test\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-test\"
            >Test</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-reviews\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-reviews\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-reviews\"
            >Avis</a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"pane-home\" role=\"tabpanel\" aria-labelledby=\"tab-home\" tabindex=\"0\">
            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('home', $context, $blocks);
        // line 43
        yield "        </div>
        <div class=\"tab-pane fade\" id=\"pane-test\" role=\"tabpanel\" aria-labelledby=\"tab-test\" tabindex=\"0\">
            ";
        // line 45
        yield from $this->unwrap()->yieldBlock('test', $context, $blocks);
        // line 46
        yield "        </div>
        <div class=\"tab-pane fade\" id=\"pane-reviews\" role=\"tabpanel\" aria-labelledby=\"tab-reviews\" tabindex=\"0\">
            ";
        // line 48
        yield from $this->unwrap()->yieldBlock('reviews', $context, $blocks);
        // line 49
        yield "        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_test(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reviews(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/Tabs.html.twig";
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
        return array (  168 => 48,  146 => 45,  124 => 42,  110 => 49,  108 => 48,  104 => 46,  102 => 45,  98 => 43,  96 => 42,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div{{ attributes }}>
    <ul class=\"nav nav-pills mb-4\">
        <li class=\"nav-item\">
            <a
                    class=\"nav-link active\"
                    href=\"#\"
                    id=\"tab-home\"
                    role=\"tab\"
                    aria-selected=\"true\"
                    aria-controls=\"pane-home\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-home\"
            >Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-test\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-test\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-test\"
            >Test</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-reviews\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-reviews\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-reviews\"
            >Avis</a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"pane-home\" role=\"tabpanel\" aria-labelledby=\"tab-home\" tabindex=\"0\">
            {% block home %}{% endblock %}
        </div>
        <div class=\"tab-pane fade\" id=\"pane-test\" role=\"tabpanel\" aria-labelledby=\"tab-test\" tabindex=\"0\">
            {% block test %}{% endblock %}
        </div>
        <div class=\"tab-pane fade\" id=\"pane-reviews\" role=\"tabpanel\" aria-labelledby=\"tab-reviews\" tabindex=\"0\">
            {% block reviews %}{% endblock %}
        </div>
    </div>
</div>
", "components/Tabs.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/Tabs.html.twig");
    }
}
