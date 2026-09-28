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

/* components/Card.html.twig */
class __TwigTemplate_e1607beb897570511979f3eb3403a995 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Card.html.twig"));

        // line 1
        yield "<article";
        yield (string) $this->escaper->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " class=\"card game-card\">
    <div class=\"row g-0\">
        <a href=\"";
        // line 3
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_games_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\" class=\"col-md-4\">
            <img src=\"";
        // line 4
        yield (string) $this->escaper->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 4, $this->source); })()), "imageFile", "App\\Model\\Entity\\VideoGame"), "html", null, true);
        yield "\" class=\"img-fluid rounded-start game-card-image\" alt=\"Couverture de ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4));
        yield "\">
        </a>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h2 class=\"game-card-title\">
                    <a href=\"";
        // line 9
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_games_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</a>
                </h2>
                <p class=\"game-card-description\">";
        // line 11
        yield (string) CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11)), "truncate", [130, "...", true], "method", false, false, false, 11);
        yield "</p>
                <p class=\"game-card-text\"><small class=\"text-muted\">Sortie: ";
        // line 12
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 12, $this->source); })()), "releaseDate", [], "any", false, false, false, 12), "m/d/Y"), "html", null, true);
        yield "</small></p>
                <div class=\"game-card-tags\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 14, $this->source); })()), "tags", [], "any", false, false, false, 14), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            yield "                        <span class=\"tag\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 17
        yield "                </div>
                <div class=\"ratings\">
                    ";
        // line 19
        yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Rating", ["rating" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 19, $this->source); })()), "rating", [], "any", false, false, false, 19), "label" => "Test"]);
        yield "
                    ";
        // line 20
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 20, $this->source); })()), "averageRating", [], "any", false, false, false, 20))) {
            // line 21
            yield "                        ";
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Rating", ["rating" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 21, $this->source); })()), "averageRating", [], "any", false, false, false, 21), "label" => "Avis"]);
            yield "
                    ";
        }
        // line 23
        yield "                </div>
            </div>
        </div>
    </div>
</article>
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
        return "components/Card.html.twig";
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
        return array (  119 => 23,  113 => 21,  111 => 20,  107 => 19,  103 => 17,  93 => 15,  89 => 14,  84 => 12,  80 => 11,  73 => 9,  63 => 4,  59 => 3,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<article{{ attributes }} class=\"card game-card\">
    <div class=\"row g-0\">
        <a href=\"{{ path(\x27video_games_show\x27, {slug: video_game.slug}) }}\" class=\"col-md-4\">
            <img src=\"{{ vich_uploader_asset(video_game, \x27imageFile\x27, \x27App\\\\Model\\\\Entity\\\\VideoGame\x27) }}\" class=\"img-fluid rounded-start game-card-image\" alt=\"Couverture de {{ video_game.title|e }}\">
        </a>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h2 class=\"game-card-title\">
                    <a href=\"{{ path(\x27video_games_show\x27, {slug: video_game.slug}) }}\" class=\"text-decoration-none\">{{ video_game.title }}</a>
                </h2>
                <p class=\"game-card-description\">{{ video_game.description|u.truncate(130, \x27...\x27, true)|raw }}</p>
                <p class=\"game-card-text\"><small class=\"text-muted\">Sortie: {{ video_game.releaseDate|date(\x27m/d/Y\x27) }}</small></p>
                <div class=\"game-card-tags\">
                    {% for tag in video_game.tags|slice(0, 5) %}
                        <span class=\"tag\">{{ tag.name }}</span>
                    {% endfor %}
                </div>
                <div class=\"ratings\">
                    {{ component(\x27Rating\x27, { rating: (video_game.rating), label: \x27Test\x27 }) }}
                    {% if video_game.averageRating is not null %}
                        {{ component(\x27Rating\x27, { rating: (video_game.averageRating), label: \x27Avis\x27 }) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</article>
", "components/Card.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/Card.html.twig");
    }
}
