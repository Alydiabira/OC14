<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* views/auth/login.html.twig */
class __TwigTemplate_ccd00eaabcc2336aca59b3eaa9832be0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/auth/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "views/auth/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container h-100 d-flex flex-column justify-content-center\">
        <div class=\"row justify-content-center\">
            <form action=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_login");
        yield "\" method=\"post\" name=\"login\">
                <h1 class=\"h3 mb-3 fw-normal\">Connectez-vous !</h1>
                ";
        // line 8
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert", ["type" => "danger", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security")]);
            yield "
                ";
        }
        // line 11
        yield "                <fieldset class=\"mb-3\">
                    <div class=\"form-floating\">
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"nom@exemple.com\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">Se connecter</button>
            </form>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "views/auth/login.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  114 => 27,  97 => 13,  93 => 11,  87 => 9,  85 => 8,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block body %}
    <div class=\"container h-100 d-flex flex-column justify-content-center\">
        <div class=\"row justify-content-center\">
            <form action=\"{{ path(\x27auth_login\x27) }}\" method=\"post\" name=\"login\">
                <h1 class=\"h3 mb-3 fw-normal\">Connectez-vous !</h1>
                {% if error %}
                    {{ component(\x27Alert\x27, { type: \x27danger\x27, message: (error.messageKey|trans(error.messageData, \x27security\x27)) }) }}
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
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(\x27authenticate\x27) }}\">
                <button class=\"btn btn-primary w-100 py-2\" type=\"submit\">Se connecter</button>
            </form>
        </div>
    </div>

{% endblock %}
", "views/auth/login.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/templates/views/auth/login.html.twig");
    }
}
