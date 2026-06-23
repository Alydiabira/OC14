<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* views/video_games/show.html.twig */
class __TwigTemplate_dbbbc92cb602e9d414adb038c210398a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "views/video_games/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
                    <h1 class=\"mb-4 text-center text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
                    <div class=\"tags d-flex justify-content-center gap-3 mb-3\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 10, $this->source); })()), "tags", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "                            <span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                    </div>
                    <small class=\"text-muted\">Sortie: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 14, $this->source); })()), "releaseDate", [], "any", false, false, false, 14), "m/d/Y"), "html", null, true);
        echo "</small>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 20, $this->source); })()), "imageFile", "App\\Model\\Entity\\VideoGame"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Couverture de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20));
        echo "\">
                <div class=\"ratings justify-content-between mt-3\">
                    ";
        // line 22
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 22, $this->source); })()), "rating", [], "any", false, false, false, 22), "label" => "Test"]);
        echo "
                    ";
        // line 23
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 23, $this->source); })()), "averageRating", [], "any", false, false, false, 23))) {
            // line 24
            echo "                        ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 24, $this->source); })()), "averageRating", [], "any", false, false, false, 24), "label" => "Avis"]);
            echo "
                    ";
        }
        // line 26
        echo "                </div>
                <div class=\"mt-4\">
                    <h2 class=\"text-uppercase\">Notes (";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 28, $this->source); })()), "reviews", [], "any", false, false, false, 28)), "html", null, true);
        echo ")</h2>
                    <ul class=\"d-flex flex-column gap-2 p-0\">
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>5/5</span>
                            ";
        // line 32
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 32, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 32, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 32), "numberOfFive", [], "any", false, false, false, 32)]);
        echo "
                            <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 33, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 33), "numberOfFive", [], "any", false, false, false, 33), "html", null, true);
        echo "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>4/5</span>
                            ";
        // line 37
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 37, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 37, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 37), "numberOfFour", [], "any", false, false, false, 37)]);
        echo "
                            <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 38, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 38), "numberOfFour", [], "any", false, false, false, 38), "html", null, true);
        echo "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>3/5</span>
                            ";
        // line 42
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 42, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 42, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 42), "numberOfThree", [], "any", false, false, false, 42)]);
        echo "
                            <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 43, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 43), "numberOfThree", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>2/5</span>
                            ";
        // line 47
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 47, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 47, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 47), "numberOfTwo", [], "any", false, false, false, 47)]);
        echo "
                            <span>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 48), "numberOfTwo", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>1/5</span>
                            ";
        // line 52
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 52, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 52, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 52), "numberOfOne", [], "any", false, false, false, 52)]);
        echo "
                            <span>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 53, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 53), "numberOfOne", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-8\">
                ";
        // line 59
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("Tabs", twig_to_array([]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("Tabs", twig_to_array([]), $context, "views/video_games/show.html.twig", 13390898441);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            if (!isset($embeddedContext["outerBlocks"])) {
                $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
            }
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 13390898441);
            $this->loadTemplate("views/video_games/show.html.twig", "views/video_games/show.html.twig", 59, "13390898441")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 95
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "views/video_games/show.html.twig";
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
        return array (  206 => 95,  191 => 59,  182 => 53,  178 => 52,  171 => 48,  167 => 47,  160 => 43,  156 => 42,  149 => 38,  145 => 37,  138 => 33,  134 => 32,  127 => 28,  123 => 26,  117 => 24,  115 => 23,  111 => 22,  104 => 20,  95 => 14,  92 => 13,  83 => 11,  79 => 10,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                    <small class=\"text-muted\">Sortie: {{ video_game.releaseDate|date('m/d/Y') }}</small>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <img src=\"{{ vich_uploader_asset(video_game, 'imageFile', 'App\\\\Model\\\\Entity\\\\VideoGame') }}\" class=\"img-fluid rounded\" alt=\"Couverture de {{ video_game.title|e }}\">
                <div class=\"ratings justify-content-between mt-3\">
                    {{ component('Rating', { rating: (video_game.rating), label: 'Test' }) }}
                    {% if video_game.averageRating is not null %}
                        {{ component('Rating', { rating: (video_game.averageRating), label: 'Avis' }) }}
                    {% endif %}
                </div>
                <div class=\"mt-4\">
                    <h2 class=\"text-uppercase\">Notes ({{ video_game.reviews|length }})</h2>
                    <ul class=\"d-flex flex-column gap-2 p-0\">
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>5/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFive }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFive }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>4/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFour }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFour }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>3/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfThree }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfThree }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>2/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfTwo }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfTwo }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>1/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfOne }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfOne }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-8\">
                {% component 'Tabs' %}
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
                            {% if is_granted('review', video_game) %}
                                <div class=\"mb-4\">
                                    {{ form_start(form) }}
                                        {{ form_errors(form) }}
                                        <fieldset class=\"mb-3\">
                                            {{ form_row(form.rating) }}
                                            {{ form_row(form.comment) }}
                                        </fieldset>
                                        <button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
                                    {{ form_end(form) }}
                                </div>
                            {% endif %}
                            <div class=\"list-group\">
                                {% for review in video_game.reviews %}
                                    {{ component('Review', { review: review }) }}
                                {% endfor %}
                            </div>
                        </div>
                    {% endblock %}
                {% endcomponent %}
            </div>
        </div>
    </div>
{% endblock %}

", "views/video_games/show.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/views/video_games/show.html.twig");
    }
}


/* views/video_games/show.html.twig */
class __TwigTemplate_dbbbc92cb602e9d414adb038c210398a___13390898441 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 59
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 59, $this->source); })()), "views/video_games/show.html.twig", 59);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        // line 61
        echo "                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Description</h2>
                            ";
        // line 63
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), "html", null, true));
        echo "
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        // line 67
        echo "                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Test CritiPixel</h2>
                            ";
        // line 69
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 69, $this->source); })()), "test", [], "any", false, false, false, 69), "html", null, true));
        echo "
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        // line 73
        echo "                        <div class=\"bg-light p-3 rounded\">
                            <h2 class=\"text-uppercase\">Avis des lecteurs</h2>
                            ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("review", (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 75, $this->source); })()))) {
            // line 76
            echo "                                <div class=\"mb-4\">
                                    ";
            // line 77
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors');
            echo "
                                        <fieldset class=\"mb-3\">
                                            ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "rating", [], "any", false, false, false, 80), 'row');
            echo "
                                            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "comment", [], "any", false, false, false, 81), 'row');
            echo "
                                        </fieldset>
                                        <button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
                                    ";
            // line 84
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
            echo "
                                </div>
                            ";
        }
        // line 87
        echo "                            <div class=\"list-group\">
                                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 88, $this->source); })()), "reviews", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 89
            echo "                                    ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Review", ["review" => $context["review"]]);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "views/video_games/show.html.twig";
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
        return array (  524 => 91,  515 => 89,  511 => 88,  508 => 87,  502 => 84,  496 => 81,  492 => 80,  487 => 78,  483 => 77,  480 => 76,  478 => 75,  474 => 73,  464 => 72,  451 => 69,  447 => 67,  437 => 66,  424 => 63,  420 => 61,  410 => 60,  371 => 59,  206 => 95,  191 => 59,  182 => 53,  178 => 52,  171 => 48,  167 => 47,  160 => 43,  156 => 42,  149 => 38,  145 => 37,  138 => 33,  134 => 32,  127 => 28,  123 => 26,  117 => 24,  115 => 23,  111 => 22,  104 => 20,  95 => 14,  92 => 13,  83 => 11,  79 => 10,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                    <small class=\"text-muted\">Sortie: {{ video_game.releaseDate|date('m/d/Y') }}</small>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <img src=\"{{ vich_uploader_asset(video_game, 'imageFile', 'App\\\\Model\\\\Entity\\\\VideoGame') }}\" class=\"img-fluid rounded\" alt=\"Couverture de {{ video_game.title|e }}\">
                <div class=\"ratings justify-content-between mt-3\">
                    {{ component('Rating', { rating: (video_game.rating), label: 'Test' }) }}
                    {% if video_game.averageRating is not null %}
                        {{ component('Rating', { rating: (video_game.averageRating), label: 'Avis' }) }}
                    {% endif %}
                </div>
                <div class=\"mt-4\">
                    <h2 class=\"text-uppercase\">Notes ({{ video_game.reviews|length }})</h2>
                    <ul class=\"d-flex flex-column gap-2 p-0\">
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>5/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFive }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFive }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>4/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfFour }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfFour }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>3/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfThree }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfThree }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>2/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfTwo }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfTwo }}</span>
                        </li>
                        <li class=\"d-flex gap-2 align-items-center\">
                            <span>1/5</span>
                            {{ component('Progress', { videoGame: video_game, number: video_game.numberOfRatingsPerValue.numberOfOne }) }}
                            <span>{{ video_game.numberOfRatingsPerValue.numberOfOne }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-8\">
                {% component 'Tabs' %}
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
                            {% if is_granted('review', video_game) %}
                                <div class=\"mb-4\">
                                    {{ form_start(form) }}
                                        {{ form_errors(form) }}
                                        <fieldset class=\"mb-3\">
                                            {{ form_row(form.rating) }}
                                            {{ form_row(form.comment) }}
                                        </fieldset>
                                        <button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
                                    {{ form_end(form) }}
                                </div>
                            {% endif %}
                            <div class=\"list-group\">
                                {% for review in video_game.reviews %}
                                    {{ component('Review', { review: review }) }}
                                {% endfor %}
                            </div>
                        </div>
                    {% endblock %}
                {% endcomponent %}
            </div>
        </div>
    </div>
{% endblock %}

", "views/video_games/show.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/views/video_games/show.html.twig");
    }
}
