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

/* views/video_games/show.html.twig */
class __TwigTemplate_fb4a1662116952c6ab49c209c1b8ea20 extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

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
        yield "\t<div class=\"container\">
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
\t\t\t\t\t<h1 class=\"mb-4 text-center text-uppercase\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

\t\t\t\t\t<div class=\"tags d-flex justify-content-center gap-3 mb-3\">
\t\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 11, $this->source); })()), "tags", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 12
            yield "\t\t\t\t\t\t\t<span class=\"badge bg-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 12), "html", null, true);
            yield "</span>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "\t\t\t\t\t</div>

\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\tSortie :
\t\t\t\t\t\t";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 18, $this->source); })()), "releaseDate", [], "any", false, false, false, 18), "m/d/Y"), "html", null, true);
        yield "
\t\t\t\t\t</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Colonne gauche -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 28, $this->source); })()), "imageFile", "App\\Model\\Entity\\VideoGame"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Couverture de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28));
        yield "\">

\t\t\t\t<div class=\"ratings justify-content-between mt-3\">
\t\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Rating", ["rating" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 31, $this->source); })()), "rating", [], "any", false, false, false, 31), "label" => "Test"]);
        yield "
\t\t\t\t\t";
        // line 32
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 32, $this->source); })()), "averageRating", [], "any", false, false, false, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Rating", ["rating" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 33, $this->source); })()), "averageRating", [], "any", false, false, false, 33), "label" => "Avis"]);
            yield "
\t\t\t\t\t";
        }
        // line 35
        yield "\t\t\t\t</div>

\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Notes</h2>

\t\t\t\t\t<ul class=\"d-flex flex-column gap-2 p-0\">
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>5/5</span>
\t\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 43, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 43, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 43), "numberOfFive", [], "any", false, false, false, 43)]);
        yield "
\t\t\t\t\t\t\t<span>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 44, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 44), "numberOfFive", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>4/5</span>
\t\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 48), "numberOfFour", [], "any", false, false, false, 48)]);
        yield "
\t\t\t\t\t\t\t<span>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 49, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 49), "numberOfFour", [], "any", false, false, false, 49), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>3/5</span>
\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 53, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 53, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 53), "numberOfThree", [], "any", false, false, false, 53)]);
        yield "
\t\t\t\t\t\t\t<span>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 54, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 54), "numberOfThree", [], "any", false, false, false, 54), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>2/5</span>
\t\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 58, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 58, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 58), "numberOfTwo", [], "any", false, false, false, 58)]);
        yield "
\t\t\t\t\t\t\t<span>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 59, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 59), "numberOfTwo", [], "any", false, false, false, 59), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>1/5</span>
\t\t\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 63, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 63, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 63), "numberOfOne", [], "any", false, false, false, 63)]);
        yield "
\t\t\t\t\t\t\t<span>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 64, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 64), "numberOfOne", [], "any", false, false, false, 64), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Colonne droite -->
\t\t\t<div class=\"col-8\">
\t\t\t\t";
        // line 72
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("Tabs", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("Tabs", Twig\Extension\CoreExtension::toArray([]), $context, "views/video_games/show.html.twig", 39292991341);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 39292991341);
            $this->load("views/video_games/show.html.twig", 72, "39292991341")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        // line 114
        yield "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "views/video_games/show.html.twig";
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
        return array (  223 => 114,  209 => 72,  198 => 64,  194 => 63,  187 => 59,  183 => 58,  176 => 54,  172 => 53,  165 => 49,  161 => 48,  154 => 44,  150 => 43,  140 => 35,  134 => 33,  132 => 32,  128 => 31,  120 => 28,  107 => 18,  101 => 14,  92 => 12,  88 => 11,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
\t\t\t\t\t<h1 class=\"mb-4 text-center text-uppercase\">{{ video_game.title }}</h1>

\t\t\t\t\t<div class=\"tags d-flex justify-content-center gap-3 mb-3\">
\t\t\t\t\t\t{% for tag in video_game.tags %}
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">{{ tag.name }}</span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\tSortie :
\t\t\t\t\t\t{{ video_game.releaseDate|date(\x27m/d/Y\x27) }}
\t\t\t\t\t</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Colonne gauche -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"{{ vich_uploader_asset(video_game, \x27imageFile\x27, \x27App\\\\Model\\\\Entity\\\\VideoGame\x27) }}\" class=\"img-fluid rounded\" alt=\"Couverture de {{ video_game.title|e }}\">

\t\t\t\t<div class=\"ratings justify-content-between mt-3\">
\t\t\t\t\t{{ component(\x27Rating\x27, { rating: (video_game.rating), label: \x27Test\x27 }) }}
\t\t\t\t\t{% if video_game.averageRating is not null %}
\t\t\t\t\t\t{{ component(\x27Rating\x27, { rating: (video_game.averageRating), label: \x27Avis\x27 }) }}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Notes</h2>

\t\t\t\t\t<ul class=\"d-flex flex-column gap-2 p-0\">
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>5/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFive }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfFive }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>4/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFour }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfFour }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>3/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfThree }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfThree }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>2/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfTwo }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfTwo }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>1/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfOne }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfOne }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Colonne droite -->
\t\t\t<div class=\"col-8\">
\t\t\t\t{% component \x27Tabs\x27 %}
\t\t\t\t\t{% block home %}
\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Description</h2>
\t\t\t\t\t\t\t{{ video_game.description|nl2br }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block test %}
\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Test CritiPixel</h2>
\t\t\t\t\t\t\t{{ video_game.test|nl2br }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block reviews %}
\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Avis des lecteurs</h2>

\t\t\t\t\t\t\t{% if is_granted(\x27review\x27, video_game) %}
\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t{{ form_start(form, { attr: { id: \x27review_form\x27 } }) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(form) }}

\t\t\t\t\t\t\t\t\t<fieldset class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.note) }}
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.comment) }}
\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t{% for review in video_game.reviews %}
\t\t\t\t\t\t\t\t\t{{ component(\x27Review\x27, { review: review }) }}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
\t\t\t\t{% endcomponent %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "views/video_games/show.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/views/video_games/show.html.twig");
    }
}


/* views/video_games/show.html.twig */
class __TwigTemplate_fb4a1662116952c6ab49c209c1b8ea20___39292991341 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'home' => [$this, 'block_home'],
            'test' => [$this, 'block_test'],
            'reviews' => [$this, 'block_reviews'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 72
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 72, $this->source); })()), 72);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Description</h2>
\t\t\t\t\t\t\t";
        // line 76
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true));
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Test CritiPixel</h2>
\t\t\t\t\t\t\t";
        // line 83
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 83, $this->source); })()), "test", [], "any", false, false, false, 83), "html", null, true));
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Avis des lecteurs</h2>

\t\t\t\t\t\t\t";
        // line 91
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("review", (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 91, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t";
            // line 93
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_start', ["attr" => ["id" => "review_form"]]);
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 94
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'errors');
            yield "

\t\t\t\t\t\t\t\t\t<fieldset class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t";
            // line 97
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "note", [], "any", false, false, false, 97), 'row');
            yield "
\t\t\t\t\t\t\t\t\t\t";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "comment", [], "any", false, false, false, 98), 'row');
            yield "
\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
\t\t\t\t\t\t\t\t\t";
            // line 102
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
            yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 105
        yield "
\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 107, $this->source); })()), "reviews", [], "any", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 108
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Review", ["review" => $context["review"]]);
            yield "
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "views/video_games/show.html.twig";
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
        return array (  582 => 110,  573 => 108,  569 => 107,  565 => 105,  559 => 102,  552 => 98,  548 => 97,  542 => 94,  538 => 93,  535 => 92,  533 => 91,  528 => 88,  515 => 87,  501 => 83,  497 => 81,  484 => 80,  470 => 76,  466 => 74,  453 => 73,  410 => 72,  223 => 114,  209 => 72,  198 => 64,  194 => 63,  187 => 59,  183 => 58,  176 => 54,  172 => 53,  165 => 49,  161 => 48,  154 => 44,  150 => 43,  140 => 35,  134 => 33,  132 => 32,  128 => 31,  120 => 28,  107 => 18,  101 => 14,  92 => 12,  88 => 11,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
\t\t\t\t\t<h1 class=\"mb-4 text-center text-uppercase\">{{ video_game.title }}</h1>

\t\t\t\t\t<div class=\"tags d-flex justify-content-center gap-3 mb-3\">
\t\t\t\t\t\t{% for tag in video_game.tags %}
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">{{ tag.name }}</span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t<small class=\"text-muted\">
\t\t\t\t\t\tSortie :
\t\t\t\t\t\t{{ video_game.releaseDate|date(\x27m/d/Y\x27) }}
\t\t\t\t\t</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Colonne gauche -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"{{ vich_uploader_asset(video_game, \x27imageFile\x27, \x27App\\\\Model\\\\Entity\\\\VideoGame\x27) }}\" class=\"img-fluid rounded\" alt=\"Couverture de {{ video_game.title|e }}\">

\t\t\t\t<div class=\"ratings justify-content-between mt-3\">
\t\t\t\t\t{{ component(\x27Rating\x27, { rating: (video_game.rating), label: \x27Test\x27 }) }}
\t\t\t\t\t{% if video_game.averageRating is not null %}
\t\t\t\t\t\t{{ component(\x27Rating\x27, { rating: (video_game.averageRating), label: \x27Avis\x27 }) }}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Notes</h2>

\t\t\t\t\t<ul class=\"d-flex flex-column gap-2 p-0\">
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>5/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFive }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfFive }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>4/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFour }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfFour }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>3/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfThree }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfThree }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>2/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfTwo }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfTwo }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>1/5</span>
\t\t\t\t\t\t\t{{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfOne }) }}
\t\t\t\t\t\t\t<span>{{ video_game.numberOfRatingsPerValue.numberOfOne }}</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Colonne droite -->
\t\t\t<div class=\"col-8\">
\t\t\t\t{% component \x27Tabs\x27 %}
\t\t\t\t\t{% block home %}
\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Description</h2>
\t\t\t\t\t\t\t{{ video_game.description|nl2br }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block test %}
\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Test CritiPixel</h2>
\t\t\t\t\t\t\t{{ video_game.test|nl2br }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block reviews %}
\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Avis des lecteurs</h2>

\t\t\t\t\t\t\t{% if is_granted(\x27review\x27, video_game) %}
\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t{{ form_start(form, { attr: { id: \x27review_form\x27 } }) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(form) }}

\t\t\t\t\t\t\t\t\t<fieldset class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.note) }}
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.comment) }}
\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t{% for review in video_game.reviews %}
\t\t\t\t\t\t\t\t\t{{ component(\x27Review\x27, { review: review }) }}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
\t\t\t\t{% endcomponent %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "views/video_games/show.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/views/video_games/show.html.twig");
    }
}
