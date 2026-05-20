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
class __TwigTemplate_2b7d8e43f0e7920aa7c54736764c521f extends Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "views/auth/login.html.twig", 1);
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
        echo "    <div class=\"container h-100 d-flex flex-column justify-content-center\">
        <div class=\"row justify-content-center\">
            <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_login");
        echo "\" method=\"post\" name=\"login\">
                <h1 class=\"h3 mb-3 fw-normal\">Connectez-vous !</h1>
                ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "                    ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Alert", ["type" => "danger", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 9), "security")]);
            echo "
                ";
        }
        // line 11
        echo "                <fieldset class=\"mb-3\">
                    <div class=\"form-floating\">
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"nom@exemple.com\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  97 => 27,  80 => 13,  76 => 11,  70 => 9,  68 => 8,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "views/auth/login.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/templates/views/auth/login.html.twig");
    }
}
