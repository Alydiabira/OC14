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

/* components/Card.html.twig */
class __TwigTemplate_c2dd2162dfbd390aea162e7cdcae2441 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Card.html.twig"));

        // line 1
        echo "<article";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " class=\"card game-card\">
\t<div class=\"row g-0\">
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_games_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\" class=\"col-md-4\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 4, $this->source); })()), "imageFile", "App\\Model\\Entity\\VideoGame"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start game-card-image\" alt=\"Couverture de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4));
        echo "\">
\t\t</a>
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h2 class=\"game-card-title\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_games_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" class=\"text-decoration-none\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
\t\t\t\t</h2>
\t\t\t\t<p class=\"game-card-description\">";
        // line 11
        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11)), "truncate", [130, "...", true], "method", false, false, false, 11);
        echo "</p>
\t\t\t\t<p class=\"game-card-text\">
\t\t\t\t\t<small class=\"text-muted\">Sortie:
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 14, $this->source); })()), "releaseDate", [], "any", false, false, false, 14), "m/d/Y"), "html", null, true);
        echo "</small>
\t\t\t\t</p>
\t\t\t\t<div class=\"game-card-tags\">
\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 17, $this->source); })()), "tags", [], "any", false, false, false, 17), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "\t\t\t\t\t\t<span class=\"tag\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t";
        // line 22
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 22, $this->source); })()), "rating", [], "any", false, false, false, 22))) {
            // line 23
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 23, $this->source); })()), "rating", [], "any", false, false, false, 23), "label" => "Test"]);
            echo "
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 25, $this->source); })()), "averageRating", [], "any", false, false, false, 25))) {
            // line 26
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 26, $this->source); })()), "averageRating", [], "any", false, false, false, 26), "label" => "Avis"]);
            echo "
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</article>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Card.html.twig";
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
        return array (  113 => 28,  107 => 26,  104 => 25,  98 => 23,  96 => 22,  92 => 20,  83 => 18,  79 => 17,  73 => 14,  67 => 11,  60 => 9,  50 => 4,  46 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Card.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Card.html.twig");
    }
}
