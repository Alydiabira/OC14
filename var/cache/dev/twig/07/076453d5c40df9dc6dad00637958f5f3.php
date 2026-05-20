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

/* components/Tabs.html.twig */
class __TwigTemplate_cf21722fa62d8ff1fed2f7831c5ffbc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'home' => [$this, 'block_home'],
            'test' => [$this, 'block_test'],
            'reviews' => [$this, 'block_reviews'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Tabs.html.twig"));

        // line 1
        echo "<div";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ">
    <ul class=\"nav nav-pills mb-4\">
        <li class=\"nav-item\">
            <a
                    class=\"nav-link active\"
                    href=\"#\"
                    id=\"tab-home\"
                    role=\"tab\"
                    aria-selected=\"true\"
                    aria-controls=\"pane-home\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-home\"
            >Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-test\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-test\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-test\"
            >Test</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-reviews\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-reviews\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-reviews\"
            >Avis</a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"pane-home\" role=\"tabpanel\" aria-labelledby=\"tab-home\" tabindex=\"0\">
            ";
        // line 42
        $this->displayBlock('home', $context, $blocks);
        // line 43
        echo "        </div>
        <div class=\"tab-pane fade\" id=\"pane-test\" role=\"tabpanel\" aria-labelledby=\"tab-test\" tabindex=\"0\">
            ";
        // line 45
        $this->displayBlock('test', $context, $blocks);
        // line 46
        echo "        </div>
        <div class=\"tab-pane fade\" id=\"pane-reviews\" role=\"tabpanel\" aria-labelledby=\"tab-reviews\" tabindex=\"0\">
            ";
        // line 48
        $this->displayBlock('reviews', $context, $blocks);
        // line 49
        echo "        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reviews"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/Tabs.html.twig";
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
        return array (  154 => 48,  136 => 45,  118 => 42,  105 => 49,  103 => 48,  99 => 46,  97 => 45,  93 => 43,  91 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes }}>
    <ul class=\"nav nav-pills mb-4\">
        <li class=\"nav-item\">
            <a
                    class=\"nav-link active\"
                    href=\"#\"
                    id=\"tab-home\"
                    role=\"tab\"
                    aria-selected=\"true\"
                    aria-controls=\"pane-home\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-home\"
            >Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-test\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-test\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-test\"
            >Test</a>
        </li>
        <li class=\"nav-item\">
            <a
                    class=\"nav-link\"
                    href=\"#\"
                    id=\"tab-reviews\"
                    role=\"tab\"
                    aria-selected=\"false\"
                    aria-controls=\"pane-reviews\"
                    data-bs-toggle=\"tab\"
                    data-bs-target=\"#pane-reviews\"
            >Avis</a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"pane-home\" role=\"tabpanel\" aria-labelledby=\"tab-home\" tabindex=\"0\">
            {% block home %}{% endblock %}
        </div>
        <div class=\"tab-pane fade\" id=\"pane-test\" role=\"tabpanel\" aria-labelledby=\"tab-test\" tabindex=\"0\">
            {% block test %}{% endblock %}
        </div>
        <div class=\"tab-pane fade\" id=\"pane-reviews\" role=\"tabpanel\" aria-labelledby=\"tab-reviews\" tabindex=\"0\">
            {% block reviews %}{% endblock %}
        </div>
    </div>
</div>
", "components/Tabs.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/components/Tabs.html.twig");
    }
}
