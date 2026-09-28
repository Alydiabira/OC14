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

/* components/NavBar.html.twig */
class __TwigTemplate_898f0de7a273a2d9dd243053624aaebe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/NavBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/NavBar.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg bg-body-white shadow-sm\" ";
        yield (string) $this->escaper->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_games_list");
        yield "\">
            <img src=\"";
        // line 4
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"CritiPixel\" class=\"rounded-circle h-100\"> CritiPixel
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto gap-4 mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 12
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_games_list");
        yield "\">Jeux vidéo</a>
                </li>
                ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "loggedIn", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 16
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_logout_main");
            yield "\">Se déconnecter</a>
                    </li>
                ";
        } else {
            // line 19
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 20
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_register");
            yield "\">S\x27inscrire</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 23
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_login");
            yield "\">Se connecter</a>
                    </li>
                ";
        }
        // line 26
        yield "            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/NavBar.html.twig";
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
        return array (  105 => 26,  99 => 23,  93 => 20,  90 => 19,  84 => 16,  81 => 15,  79 => 14,  74 => 12,  63 => 4,  59 => 3,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-body-white shadow-sm\" {{ attributes }}>
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path(\x27video_games_list\x27) }}\">
            <img src=\"{{ asset(\x27images/logo.png\x27) }}\" alt=\"CritiPixel\" class=\"rounded-circle h-100\"> CritiPixel
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto gap-4 mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\x27video_games_list\x27) }}\">Jeux vidéo</a>
                </li>
                {% if this.loggedIn %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\x27_logout_main\x27) }}\">Se déconnecter</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\x27auth_register\x27) }}\">S\x27inscrire</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path(\x27auth_login\x27) }}\">Se connecter</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>", "components/NavBar.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/components/NavBar.html.twig");
    }
}
