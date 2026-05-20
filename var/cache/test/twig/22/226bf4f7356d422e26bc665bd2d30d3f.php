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
class __TwigTemplate_d6aa19b75db391a1e38ab57a0b5daf55 extends Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "views/video_games/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row mb-4\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"rounded-5 bg-light p-4 d-flex flex-column align-items-center\">
\t\t\t\t\t<h1 class=\"mb-4 text-center text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
\t\t\t\t\t<div class=\"tags d-flex justify-content-center gap-3 mb-3\">
\t\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 10, $this->source); })()), "tags", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "\t\t\t\t\t\t\t<span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<small class=\"text-muted\">Sortie:
\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 15, $this->source); })()), "releaseDate", [], "any", false, false, false, 15), "m/d/Y"), "html", null, true);
        echo "</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 21, $this->source); })()), "imageFile", "App\\Model\\Entity\\VideoGame"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Couverture de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21));
        echo "\">
\t\t\t\t<div class=\"ratings justify-content-between mt-3\">
\t\t\t\t\t";
        // line 23
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 23, $this->source); })()), "rating", [], "any", false, false, false, 23), "label" => "Test"]);
        echo "
\t\t\t\t\t";
        // line 24
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 24, $this->source); })()), "averageRating", [], "any", false, false, false, 24))) {
            // line 25
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Rating", ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 25, $this->source); })()), "averageRating", [], "any", false, false, false, 25), "label" => "Avis"]);
            echo "
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<h2 class=\"text-uppercase\">Notes (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 29, $this->source); })()), "reviews", [], "any", false, false, false, 29)), "html", null, true);
        echo ")</h2>
\t\t\t\t\t<ul class=\"d-flex flex-column gap-2 p-0\">
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>5/5</span>
\t\t\t\t\t\t\t";
        // line 33
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 33, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 33, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 33), "numberOfFive", [], "any", false, false, false, 33)]);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 34, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 34), "numberOfFive", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>4/5</span>
\t\t\t\t\t\t\t";
        // line 38
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 38, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 38, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 38), "numberOfFour", [], "any", false, false, false, 38)]);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 39, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 39), "numberOfFour", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>3/5</span>
\t\t\t\t\t\t\t";
        // line 43
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 43, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 43, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 43), "numberOfThree", [], "any", false, false, false, 43)]);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 44, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 44), "numberOfThree", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>2/5</span>
\t\t\t\t\t\t\t";
        // line 48
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 48), "numberOfTwo", [], "any", false, false, false, 48)]);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 49, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 49), "numberOfTwo", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t\t\t<span>1/5</span>
\t\t\t\t\t\t\t";
        // line 53
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Progress", ["videoGame" => (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 53, $this->source); })()), "number" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 53, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 53), "numberOfOne", [], "any", false, false, false, 53)]);
        echo "
\t\t\t\t\t\t\t<span>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 54, $this->source); })()), "numberOfRatingsPerValue", [], "any", false, false, false, 54), "numberOfOne", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-8\">
\t\t\t\t";
        // line 60
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("Tabs", twig_to_array([]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("Tabs", twig_to_array([]), $context, "views/video_games/show.html.twig", 4887042111);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            if (!isset($embeddedContext["outerBlocks"])) {
                $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
            }
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 4887042111);
            $this->loadTemplate("views/video_games/show.html.twig", "views/video_games/show.html.twig", 60, "4887042111")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 96
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
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
        return array (  198 => 96,  183 => 60,  174 => 54,  170 => 53,  163 => 49,  159 => 48,  152 => 44,  148 => 43,  141 => 39,  137 => 38,  130 => 34,  126 => 33,  119 => 29,  115 => 27,  109 => 25,  107 => 24,  103 => 23,  96 => 21,  87 => 15,  83 => 13,  74 => 11,  70 => 10,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/video_games/show.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/views/video_games/show.html.twig");
    }
}


/* views/video_games/show.html.twig */
class __TwigTemplate_d6aa19b75db391a1e38ab57a0b5daf55___4887042111 extends Template
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
        // line 60
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 60, $this->source); })()), "views/video_games/show.html.twig", 60);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        // line 62
        echo "\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Description</h2>
\t\t\t\t\t\t\t";
        // line 64
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        // line 68
        echo "\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Test CritiPixel</h2>
\t\t\t\t\t\t\t";
        // line 70
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 70, $this->source); })()), "test", [], "any", false, false, false, 70), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        // line 74
        echo "\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t<h2 class=\"text-uppercase\">Avis des lecteurs</h2>
\t\t\t\t\t\t\t";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("review", (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 76, $this->source); })()))) {
            // line 77
            echo "\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t";
            // line 78
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t<fieldset class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "note", [], "any", false, false, false, 81), 'row');
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "comment", [], "any", false, false, false, 82), 'row');
            echo "
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary py-2\" type=\"submit\">Poster</button>
\t\t\t\t\t\t\t\t\t";
            // line 85
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 89, $this->source); })()), "reviews", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Review", ["review" => $context["review"]]);
            echo "
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
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
        return array (  387 => 92,  378 => 90,  374 => 89,  371 => 88,  365 => 85,  359 => 82,  355 => 81,  350 => 79,  346 => 78,  343 => 77,  341 => 76,  337 => 74,  330 => 73,  320 => 70,  316 => 68,  309 => 67,  299 => 64,  295 => 62,  288 => 61,  261 => 60,  198 => 96,  183 => 60,  174 => 54,  170 => 53,  163 => 49,  159 => 48,  152 => 44,  148 => 43,  141 => 39,  137 => 38,  130 => 34,  126 => 33,  119 => 29,  115 => 27,  109 => 25,  107 => 24,  103 => 23,  96 => 21,  87 => 15,  83 => 13,  74 => 11,  70 => 10,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/video_games/show.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/views/video_games/show.html.twig");
    }
}
