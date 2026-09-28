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

/* components/Info.html.twig */
class __TwigTemplate_1e83c5fba68abf560c3dde9f4641c1c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Info.html.twig"));

        // line 1
        yield "<div class=\"fw-bold list-info\" ";
        yield (string) $this->escaper->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    Affiche ";
        // line 2
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 2, $this->source); })()), "count", [], "any", false, false, false, 2), "html", null, true);
        yield " jeux vidéo de ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 2, $this->source); })()), "from", [], "any", false, false, false, 2), "html", null, true);
        yield " à ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 2, $this->source); })()), "to", [], "any", false, false, false, 2), "html", null, true);
        yield " sur les ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 2, $this->source); })()), "total", [], "any", false, false, false, 2), "html", null, true);
        yield " jeux vidéo
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
        return "components/Info.html.twig";
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
        return array (  58 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"fw-bold list-info\" {{ attributes }}>
    Affiche {{ info.count }} jeux vidéo de {{ info.from }} à {{ info.to }} sur les {{ info.total }} jeux vidéo
</div>
", "components/Info.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/Info.html.twig");
    }
}
