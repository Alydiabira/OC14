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

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_820cec7c877e934a8ca3f88faa903581 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        // line 1
        echo "<div id=\"sidebar-search\" class=\"";
        echo (((($context["render_hidden_by_default"]) ?? (true))) ? ("hidden") : (""));
        echo "\">
    <form action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">
                ";
        // line 5
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 6
            echo "                    Application
                ";
        } else {
            // line 8
            echo "                    IP
                ";
        }
        // line 10
        echo "            </label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["ip"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group-row\">
            <div class=\"form-group\">
                <label for=\"method\">
                    ";
        // line 17
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 18
            echo "                        Mode
                    ";
        } else {
            // line 20
            echo "                        Method
                    ";
        }
        // line 22
        echo "                </label>
                <select name=\"method\" id=\"method\">
                    <option value=\"\">Any</option>
                    ";
        // line 25
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 26
            echo "                        ";
            $context["methods"] = ["BATCH", "INTERACTIVE"];
            // line 27
            echo "                    ";
        } else {
            // line 28
            echo "                        ";
            $context["methods"] = ["DELETE", "GET", "HEAD", "PATCH", "POST", "PUT"];
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 31
            echo "                        <option ";
            echo ((($context["m"] == ($context["method"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"status_code\">
                    ";
        // line 38
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 39
            echo "                        Exit code
                        ";
            // line 40
            $context["min_and_max"] = twig_sprintf("min=%d max=%d", 0, 255);
            // line 41
            echo "                    ";
        } else {
            // line 42
            echo "                        Status
                        ";
            // line 43
            $context["min_and_max"] = twig_sprintf("min=%d max=%d", 100, 599);
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                </label>
                <input type=\"number\" name=\"status_code\" id=\"status_code\" ";
        // line 46
        echo twig_escape_filter($this->env, ($context["min_and_max"] ?? null), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "\">
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"url\">
                ";
        // line 52
        if (("command" == ($context["profile_type"] ?? null))) {
            // line 53
            echo "                    Command
                ";
        } else {
            // line 55
            echo "                    URL
                ";
        }
        // line 57
        echo "            </label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" size=\"8\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group-row form-group-row-search-button\">
            <div class=\"form-group\">
                <label for=\"limit\">Results</label>
                <select name=\"limit\" id=\"limit\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([10, 50, 100]);
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 81
            echo "                        <option ";
            echo ((($context["l"] == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </select>
            </div>

            <input type=\"hidden\" name=\"type\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["profile_type"] ?? null), "html", null, true);
        echo "\">

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-sm\">Search</button>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/search.html.twig";
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
        return array (  224 => 86,  219 => 83,  208 => 81,  204 => 80,  194 => 73,  186 => 68,  178 => 63,  170 => 58,  167 => 57,  163 => 55,  159 => 53,  157 => 52,  146 => 46,  143 => 45,  140 => 44,  138 => 43,  135 => 42,  132 => 41,  130 => 40,  127 => 39,  125 => 38,  118 => 33,  107 => 31,  102 => 30,  99 => 29,  96 => 28,  93 => 27,  90 => 26,  88 => 25,  83 => 22,  79 => 20,  75 => 18,  73 => 17,  64 => 11,  61 => 10,  57 => 8,  53 => 6,  51 => 5,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/search.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/search.html.twig");
    }
}
