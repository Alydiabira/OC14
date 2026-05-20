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

/* views/video_games/list.html.twig */
class __TwigTemplate_8f5e10c5c87a8c6b264d092816d51197 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/video_games/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "views/video_games/list.html.twig", 1);
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-9 d-flex flex-column gap-4\">
\t\t\t\t";
        // line 7
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Sorting", ["list" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 7, $this->source); })())]);
        echo "
\t\t\t\t";
        // line 8
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Info", ["info" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 8, $this->source); })()), "pagination", [], "any", false, false, false, 8), "getInfo", [], "method", false, false, false, 8)]);
        echo "
\t\t\t\t<div class=\"video-games-list d-flex flex-column gap-5\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video_game"]) {
            // line 11
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Card", ["video_game" => $context["video_game"]]);
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video_game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 14
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 14, $this->source); })()), "pagination", [], "any", false, false, false, 14)) > 1)) {
            // line 15
            echo "\t\t\t\t\t";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Pagination", ["pagination" => twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 15, $this->source); })()), "pagination", [], "any", false, false, false, 15)]);
            echo "
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</div>
\t\t\t<div class=\"col-3\">
\t\t\t\t";
        // line 19
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Filter", ["list" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 19, $this->source); })())]);
        echo "
\t\t\t</div>
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
        return "views/video_games/list.html.twig";
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
        return array (  101 => 19,  97 => 17,  91 => 15,  89 => 14,  86 => 13,  77 => 11,  73 => 10,  68 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/video_games/list.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/views/video_games/list.html.twig");
    }
}
