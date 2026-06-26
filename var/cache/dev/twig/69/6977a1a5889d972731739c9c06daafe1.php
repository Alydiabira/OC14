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
class __TwigTemplate_2b2928548d528623d0e44368da53d4fb extends Template
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
        yield "    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
                    <h1 class=\"mb-4 text-center text-uppercase\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>

                    <div class=\"tags d-flex justify-content-center gap-3 mb-3\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 11, $this->source); })()), "tags", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 12
            yield "                            <span class=\"badge bg-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 12), "html", null, true);
            yield "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "                    </div>

                    <small class=\"text-muted\">
                        Sortie : ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 17, $this->source); })()), "releaseDate", [], "any", false, false, false, 17), "m/d/Y"), "html", null, true);
        yield "
                    </small>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 25, $this->source); })()), "imageFile", "App\\Model\\Entity\\VideoGame"), "html", null, true);
        yield "\"
                     class=\"img-fluid rounded\"
                     alt=\"Couverture de ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27));
        yield "\">

                <div class=\"ratings justify-content-between mt-3\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Rating", ["rating" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 30, $this->source); })()), "rating", [], "any", false, false, false, 30), "label" => "Test"]);
        yield "
                    ";
        // line 31
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 31, $this->source); })()), "averageRating", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Rating", ["rating" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 32, $this->source); })()), "averageRating", [], "any", false, false, false, 32), "label" => "Avis"]);
            yield "
                    ";
        }
        // line 34
        yield "                </div>

                <div class=\"mt-4\">
                    <h2 class=\"text-uppercase\">Notes</h2>

                    <ul class=\"d-flex flex-column gap-2 p-0\">
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>5/5</span>
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 42, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 42, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 42), "numberOfFive", [], "any", false, false, false, 42)]);
        yield "
                            <span>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 43, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 43), "numberOfFive", [], "any", false, false, false, 43), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>4/5</span>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 47, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 47, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 47), "numberOfFour", [], "any", false, false, false, 47)]);
        yield "
                            <span>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 48), "numberOfFour", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>3/5</span>
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 52, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 52, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 52), "numberOfThree", [], "any", false, false, false, 52)]);
        yield "
                            <span>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 53, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 53), "numberOfThree", [], "any", false, false, false, 53), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>2/5</span>
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 57, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 57, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 57), "numberOfTwo", [], "any", false, false, false, 57)]);
        yield "
                            <span>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 58, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 58), "numberOfTwo", [], "any", false, false, false, 58), "html", null, true);
        yield "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>1/5</span>
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 62, $this->source); })()), "number" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 62, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 62), "numberOfOne", [], "any", false, false, false, 62)]);
        yield "
                            <span>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 63, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 63), "numberOfOne", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-8\">
                ";
        // line 70
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("Tabs", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("Tabs", Twig\Extension\CoreExtension::toArray([]), $context, "views/video_games/show.html.twig", 709246901);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 709246901);
            $this->load("views/video_games/show.html.twig", 70, "709246901")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        // line 112
        yield "            </div>
        </div>
    </div>
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
        return array (  222 => 112,  208 => 70,  198 => 63,  194 => 62,  187 => 58,  183 => 57,  176 => 53,  172 => 52,  165 => 48,  161 => 47,  154 => 43,  150 => 42,  140 => 34,  134 => 32,  132 => 31,  128 => 30,  122 => 27,  117 => 25,  106 => 17,  101 => 14,  92 => 12,  88 => 11,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
                    <h1 class=\"mb-4 text-center text-uppercase\">{{ video_game.title }}</h1>

                    <div class=\"tags d-flex justify-content-center gap-3 mb-3\">
                        {% for tag in video_game.tags %}
                            <span class=\"badge bg-primary\">{{ tag.name }}</span>
                        {% endfor %}
                    </div>

                    <small class=\"text-muted\">
                        Sortie : {{ video_game.releaseDate|date(\x27m/d/Y\x27) }}
                    </small>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <img src=\"{{ vich_uploader_asset(video_game, \x27imageFile\x27, \x27App\\\\Model\\\\Entity\\\\VideoGame\x27) }}\"
                     class=\"img-fluid rounded\"
                     alt=\"Couverture de {{ video_game.title|e }}\">

                <div class=\"ratings justify-content-between mt-3\">
                    {{ component(\x27Rating\x27, { rating: (video_game.rating), label: \x27Test\x27 }) }}
                    {% if video_game.averageRating is not null %}
                        {{ component(\x27Rating\x27, { rating: (video_game.averageRating), label: \x27Avis\x27 }) }}
                    {% endif %}
                </div>

                <div class=\"mt-4\">
                    <h2 class=\"text-uppercase\">Notes</h2>

                    <ul class=\"d-flex flex-column gap-2 p-0\">
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>5/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFive }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFive }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>4/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFour }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFour }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>3/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfThree }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfThree }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>2/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfTwo }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfTwo }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>1/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfOne }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfOne }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-8\">
                {% component \x27Tabs\x27 %}
                    {% block home %}
                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Description</h2>
                            {{ video_game.description|nl2br }}
                        </div>
                    {% endblock %}

                    {% block test %}
                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Test CritiPixel</h2>
                            {{ video_game.test|nl2br }}
                        </div>
                    {% endblock %}

                    {% block reviews %}
                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Avis des lecteurs</h2>

                            {% if is_granted(\x27review\x27, video_game) %}
                                <div class=\"mb-4\">
                                    {{ form_start(form, { attr: { id: \x27review_form\x27 } }) }}
                                    {{ form_errors(form) }}

                                    <fieldset class=\"mb-3\">
                                        {{ form_row(form.note) }}
                                        {{ form_row(form.comment) }}
                                    </fieldset>

                                    <button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
                                    {{ form_end(form) }}
                                </div>
                            {% endif %}

                            <div class=\"list-group\">
                                {% for review in video_game.reviews %}
                                    {{ component(\x27Review\x27, { review: review }) }}
                                {% endfor %}
                            </div>
                        </div>
                    {% endblock %}
                {% endcomponent %}
            </div>
        </div>
    </div>
{% endblock %}
", "views/video_games/show.html.twig", "/Users/diabiraaly/Openclassrooms/OC14/templates/views/video_games/show.html.twig");
    }
}


/* views/video_games/show.html.twig */
class __TwigTemplate_2b2928548d528623d0e44368da53d4fb___709246901 extends Template
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
        // line 70
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 70, $this->source); })()), 70);
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

    // line 71
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

        // line 72
        yield "                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Description</h2>
                            ";
        // line 74
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), "html", null, true));
        yield "
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Test CritiPixel</h2>
                            ";
        // line 81
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 81, $this->source); })()), "test", [], "any", false, false, false, 81), "html", null, true));
        yield "
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
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

        // line 86
        yield "                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Avis des lecteurs</h2>

                            ";
        // line 89
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("review", (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 89, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                                <div class=\"mb-4\">
                                    ";
            // line 91
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["id" => "review_form"]]);
            yield "
                                    ";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'errors');
            yield "

                                    <fieldset class=\"mb-3\">
                                        ";
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "note", [], "any", false, false, false, 95), 'row');
            yield "
                                        ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "comment", [], "any", false, false, false, 96), 'row');
            yield "
                                    </fieldset>

                                    <button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
                                    ";
            // line 100
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
            yield "
                                </div>
                            ";
        }
        // line 103
        yield "
                            <div class=\"list-group\">
                                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 105, $this->source); })()), "reviews", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 106
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Review", ["review" => $context["review"]]);
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                            </div>
                        </div>
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
        return array (  579 => 108,  570 => 106,  566 => 105,  562 => 103,  556 => 100,  549 => 96,  545 => 95,  539 => 92,  535 => 91,  532 => 90,  530 => 89,  525 => 86,  512 => 85,  498 => 81,  494 => 79,  481 => 78,  467 => 74,  463 => 72,  450 => 71,  407 => 70,  222 => 112,  208 => 70,  198 => 63,  194 => 62,  187 => 58,  183 => 57,  176 => 53,  172 => 52,  165 => 48,  161 => 47,  154 => 43,  150 => 42,  140 => 34,  134 => 32,  132 => 31,  128 => 30,  122 => 27,  117 => 25,  106 => 17,  101 => 14,  92 => 12,  88 => 11,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
                    <h1 class=\"mb-4 text-center text-uppercase\">{{ video_game.title }}</h1>

                    <div class=\"tags d-flex justify-content-center gap-3 mb-3\">
                        {% for tag in video_game.tags %}
                            <span class=\"badge bg-primary\">{{ tag.name }}</span>
                        {% endfor %}
                    </div>

                    <small class=\"text-muted\">
                        Sortie : {{ video_game.releaseDate|date(\x27m/d/Y\x27) }}
                    </small>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <img src=\"{{ vich_uploader_asset(video_game, \x27imageFile\x27, \x27App\\\\Model\\\\Entity\\\\VideoGame\x27) }}\"
                     class=\"img-fluid rounded\"
                     alt=\"Couverture de {{ video_game.title|e }}\">

                <div class=\"ratings justify-content-between mt-3\">
                    {{ component(\x27Rating\x27, { rating: (video_game.rating), label: \x27Test\x27 }) }}
                    {% if video_game.averageRating is not null %}
                        {{ component(\x27Rating\x27, { rating: (video_game.averageRating), label: \x27Avis\x27 }) }}
                    {% endif %}
                </div>

                <div class=\"mt-4\">
                    <h2 class=\"text-uppercase\">Notes</h2>

                    <ul class=\"d-flex flex-column gap-2 p-0\">
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>5/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFive }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFive }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>4/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFour }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFour }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>3/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfThree }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfThree }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>2/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfTwo }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfTwo }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>1/5</span>
                            {{ component(\x27Progress\x27, { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfOne }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfOne }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"col-8\">
                {% component \x27Tabs\x27 %}
                    {% block home %}
                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Description</h2>
                            {{ video_game.description|nl2br }}
                        </div>
                    {% endblock %}

                    {% block test %}
                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Test CritiPixel</h2>
                            {{ video_game.test|nl2br }}
                        </div>
                    {% endblock %}

                    {% block reviews %}
                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Avis des lecteurs</h2>

                            {% if is_granted(\x27review\x27, video_game) %}
                                <div class=\"mb-4\">
                                    {{ form_start(form, { attr: { id: \x27review_form\x27 } }) }}
                                    {{ form_errors(form) }}

                                    <fieldset class=\"mb-3\">
                                        {{ form_row(form.note) }}
                                        {{ form_row(form.comment) }}
                                    </fieldset>

                                    <button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
                                    {{ form_end(form) }}
                                </div>
                            {% endif %}

                            <div class=\"list-group\">
                                {% for review in video_game.reviews %}
                                    {{ component(\x27Review\x27, { review: review }) }}
                                {% endfor %}
                            </div>
                        </div>
                    {% endblock %}
                {% endcomponent %}
            </div>
        </div>
    </div>
{% endblock %}
", "views/video_games/show.html.twig", "/Users/diabiraaly/Openclassrooms/OC14/templates/views/video_games/show.html.twig");
    }
}
