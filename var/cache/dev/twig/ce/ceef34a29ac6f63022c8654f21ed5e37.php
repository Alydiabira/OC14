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

/* components/Sorting.html.twig */
class __TwigTemplate_54f5977c580a34739b35ce82943aa05b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Sorting.html.twig"));

        // line 1
        echo "<form name=\"sorting\" method=\"get\" class=\"row\" ";
        echo twig_escape_filter($this->env, ($context["attributes"] ?? null), "html", null, true);
        echo ">
    <input type=\"hidden\" name=\"page\" value=\"1\">
    <input type=\"hidden\" name=\"filter[search]\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "filter", [], "any", false, false, false, 3), "search", [], "any", false, false, false, 3), "html", null, true);
        echo "\"/>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "filter", [], "any", false, false, false, 4), "tags", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 5
            echo "        <input type=\"hidden\" name=\"filter[tags][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"limit\" name=\"limit\" aria-label=\"Jeux vidéo par page\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([10, 25, 50, 100]);
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 11
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "\" ";
            echo ((($context["limit"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 11), "limit", [], "any", false, false, false, 11))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
            <label for=\"limit\">Jeux vidéo par page</label>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"sorting\" name=\"sorting\" aria-label=\"Tri\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 20), "allSorting", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorting"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["sorting"], "name", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 21), "sorting", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sorting"], "value", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </select>
            <label for=\"sorting\">Tri</label>
        </div>
    </div>
    <div class=\"col\">
        <div class=\"form-floating\">
            <select class=\"form-select\" id=\"direction\" name=\"direction\" aria-label=\"Tri\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 30), "directions", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["direction"]) {
            // line 31
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["direction"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["direction"], "name", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pagination", [], "any", false, false, false, 31), "direction", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["direction"], "value", [], "any", false, false, false, 31), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['direction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </select>
            <label for=\"direction\">Ordre</label>
        </div>
    </div>
    <div class=\"col-2\">
        <button type=\"submit\" class=\"w-100 h-100 btn btn-primary\">Trier</button>
    </div>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Sorting.html.twig";
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
        return array (  137 => 33,  124 => 31,  120 => 30,  111 => 23,  98 => 21,  94 => 20,  85 => 13,  72 => 11,  68 => 10,  63 => 7,  54 => 5,  50 => 4,  46 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/Sorting.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Sorting.html.twig");
    }
}
