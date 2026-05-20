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

/* views/auth/login.html.twig */
class __TwigTemplate_cd032f54bb6ba576082613a81083886b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/auth/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/auth/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "views/auth/login.html.twig", 1);
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
        echo "    <div class=\"container h-100 d-flex flex-column justify-content-center\">
        <div class=\"row justify-content-center\">
            <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_login");
        echo "\" method=\"post\" name=\"login\">
                <h1 class=\"h3 mb-3 fw-normal\">Connectez-vous !</h1>
                ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                    ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Alert", ["type" => "danger", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security")]);
            echo "
                ";
        }
        // line 11
        echo "                <fieldset class=\"mb-3\">
                    <div class=\"form-floating\">
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"nom@exemple.com\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
                        <label for=\"email\">Email</label>
                    </div>
                    <div class=\"form-floating\">
                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Mot de passe\">
                        <label for=\"password\">Mot de passe</label>
                    </div>
                </fieldset>
                <div class=\"form-check text-start my-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\" checked>
                    <label class=\"form-check-label\" for=\"_remember_me\">
                        Se souvenir de moi
                    </label>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">Se connecter</button>
            </form>
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
        return "views/auth/login.html.twig";
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
        return array (  106 => 27,  89 => 13,  85 => 11,  79 => 9,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container h-100 d-flex flex-column justify-content-center\">
        <div class=\"row justify-content-center\">
            <form action=\"{{ path('auth_login') }}\" method=\"post\" name=\"login\">
                <h1 class=\"h3 mb-3 fw-normal\">Connectez-vous !</h1>
                {% if error %}
                    {{ component('Alert', { type: 'danger', message: (error.messageKey|trans(error.messageData, 'security')) }) }}
                {% endif %}
                <fieldset class=\"mb-3\">
                    <div class=\"form-floating\">
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"nom@exemple.com\" value=\"{{ last_username }}\">
                        <label for=\"email\">Email</label>
                    </div>
                    <div class=\"form-floating\">
                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Mot de passe\">
                        <label for=\"password\">Mot de passe</label>
                    </div>
                </fieldset>
                <div class=\"form-check text-start my-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\" checked>
                    <label class=\"form-check-label\" for=\"_remember_me\">
                        Se souvenir de moi
                    </label>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">Se connecter</button>
            </form>
        </div>
    </div>

{% endblock %}
", "views/auth/login.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/views/auth/login.html.twig");
    }
}
