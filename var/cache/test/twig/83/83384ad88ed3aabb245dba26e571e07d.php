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

/* components/Progress.html.twig */
class __TwigTemplate_731e118a13ab23ab1a0744f59d820256 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Progress.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Progress.html.twig"));

        // line 1
        $context["percent"] = 0;
        // line 2
        yield "
";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["videoGame"] ?? null), "numberOfRatingsPerValue", [], "any", true, true, false, 3)) {
            // line 4
            yield "\t";
            $context["total"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 5
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 5, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 5), "numberOfOne", [], "any", false, false, false, 5) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 6, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 6), "numberOfTwo", [], "any", false, false, false, 6)) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 7
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 7, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 7), "numberOfThree", [], "any", false, false, false, 7)) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 8
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 8, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 8), "numberOfFour", [], "any", false, false, false, 8)) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 9
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 9, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 9), "numberOfFive", [], "any", false, false, false, 9));
            // line 11
            yield "
\t";
            // line 12
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 12, $this->source); })()) > 0)) {
                // line 13
                yield "\t\t";
                $context["percent"] = (((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 13, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 13, $this->source); })())) * 100);
                // line 14
                yield "\t";
            }
        }
        // line 16
        yield "
<div class=\"progress flex-grow-1\" role=\"progressbar\" aria-valuenow=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t<div class=\"progress-bar\" style=\"width: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "%\"></div>
</div>
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
        return "components/Progress.html.twig";
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
        return array (  82 => 18,  78 => 17,  75 => 16,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  61 => 9,  60 => 8,  59 => 7,  58 => 6,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set percent = 0 %}

{% if videoGame.numberOfRatingsPerValue is defined %}
\t{% set total =
        videoGame.numberOfRatingsPerValue.numberOfOne +
        videoGame.numberOfRatingsPerValue.numberOfTwo +
        videoGame.numberOfRatingsPerValue.numberOfThree +
        videoGame.numberOfRatingsPerValue.numberOfFour +
        videoGame.numberOfRatingsPerValue.numberOfFive
    %}

\t{% if total > 0 %}
\t\t{% set percent = (number / total) * 100 %}
\t{% endif %}
{% endif %}

<div class=\"progress flex-grow-1\" role=\"progressbar\" aria-valuenow=\"{{ percent }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t<div class=\"progress-bar\" style=\"width: {{ percent }}%\"></div>
</div>
", "components/Progress.html.twig", "/Users/diabiraaly/Openclassrooms/OC14/templates/components/Progress.html.twig");
    }
}
