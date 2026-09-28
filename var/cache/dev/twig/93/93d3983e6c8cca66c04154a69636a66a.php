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

/* views/video_games/list.html.twig */
class __TwigTemplate_d627ad8a421c7dbd7ff13f371c847183 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-9 d-flex flex-column gap-4\">
                ";
        // line 7
        yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Sorting", ["list" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 7, $this->source); })())]);
        yield "
                ";
        // line 8
        yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Info", ["info" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 8, $this->source); })()), "pagination", [], "any", false, false, false, 8), "info", [], "any", false, false, false, 8)]);
        yield "
                <div class=\"video-games-list d-flex flex-column gap-5\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video_game"]) {
            // line 11
            yield "                        ";
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Card", ["video_game" => $context["video_game"]]);
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['video_game'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 13
        yield "                </div>
                ";
        // line 14
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 14, $this->source); })()), "pagination", [], "any", false, false, false, 14)) > 1)) {
            // line 15
            yield "                    ";
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Pagination", ["pagination" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 15, $this->source); })()), "pagination", [], "any", false, false, false, 15)]);
            yield "
                ";
        }
        // line 17
        yield "            </div>
            <div class=\"col-3\">
                ";
        // line 19
        yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Filter", ["list" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 19, $this->source); })())]);
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "views/video_games/list.html.twig";
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
        return array (  121 => 19,  117 => 17,  111 => 15,  109 => 14,  106 => 13,  96 => 11,  92 => 10,  87 => 8,  83 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-9 d-flex flex-column gap-4\">
                {{ component(\x27Sorting\x27, { list: list }) }}
                {{ component(\x27Info\x27, { info: list.pagination.info }) }}
                <div class=\"video-games-list d-flex flex-column gap-5\">
                    {% for video_game in list %}
                        {{ component(\x27Card\x27, { video_game: video_game }) }}
                    {% endfor %}
                </div>
                {% if list.pagination|length > 1 %}
                    {{ component(\x27Pagination\x27, { pagination: list.pagination }) }}
                {% endif %}
            </div>
            <div class=\"col-3\">
                {{ component(\x27Filter\x27, { list: list }) }}
            </div>
        </div>
    </div>
{% endblock %}
", "views/video_games/list.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/views/video_games/list.html.twig");
    }
}
