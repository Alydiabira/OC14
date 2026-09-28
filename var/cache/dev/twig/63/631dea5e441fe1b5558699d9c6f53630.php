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

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_b083d2b459cae13ace6aba753e1b9554 extends Template
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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'summary' => [$this, 'block_summary'],
            'sidebar_search_css_class' => [$this, 'block_sidebar_search_css_class'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #search-results td {
            font-family: var(--font-family-system);
            vertical-align: middle;
        }

        #search-results .sf-search {
            visibility: hidden;
            margin-left: 2px;
        }
        #search-results tr:hover .sf-search {
            visibility: visible;
        }
        #search-results .sf-search svg {
            stroke-width: 3;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_summary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 32
        yield "    <div class=\"status\">
        <h2>Profile Search</h2>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_search_css_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search_css_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search_css_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_shortcuts_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        // line 39
        yield "    ";
        yield from $this->yieldParentBlock("sidebar_shortcuts_links", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 43
        yield "    <div class=\"sf-tabs\" data-processed=\"true\">
        <div class=\"tab-navigation\" role=\"tablist\">
            <button class=\"tab-control ";
        // line 45
        yield (string) ((("request" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 45, $this->source); })()))) ? ("active") : (""));
        yield "\" role=\"tab\" ";
        yield (string) ((("request" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 45, $this->source); })()))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        yield " >
                <a href=\"";
        // line 46
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10]), "html", null, true);
        yield "\">
                    HTTP Requests
                </a>
            </button>
            <button class=\"tab-control ";
        // line 50
        yield (string) ((("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 50, $this->source); })()))) ? ("active") : (""));
        yield "\" role=\"tab\" ";
        yield (string) ((("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 50, $this->source); })()))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        yield ">
                <a href=\"";
        // line 51
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10, "type" => "command"]), "html", null, true);
        yield "\">
                    Console Commands
                </a>
            </button>
        </div>
    </div>

    <h2>";
        // line 58
        yield (string) (((($tmp = (isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 58, $this->source); })())), "html", null, true)) : ("No"));
        yield " results found</h2>

    ";
        // line 60
        if ((($tmp = (isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">
                        ";
            // line 65
            if (("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 65, $this->source); })()))) {
                // line 66
                yield "                            Exit code
                        ";
            } else {
                // line 68
                yield "                            Status
                        ";
            }
            // line 70
            yield "                    </th>
                    <th scope=\"col\">
                        ";
            // line 72
            if (("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 72, $this->source); })()))) {
                // line 73
                yield "                            Application
                        ";
            } else {
                // line 75
                yield "                            IP
                        ";
            }
            // line 77
            yield "                    </th>
                    <th scope=\"col\">
                        ";
            // line 79
            if (("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 79, $this->source); })()))) {
                // line 80
                yield "                            Mode
                        ";
            } else {
                // line 82
                yield "                            Method
                        ";
            }
            // line 84
            yield "                    </th>
                    <th scope=\"col\">
                        ";
            // line 86
            if (("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 86, $this->source); })()))) {
                // line 87
                yield "                            Command
                        ";
            } else {
                // line 89
                yield "                            URL
                        ";
            }
            // line 91
            yield "                    </th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 98
                yield "                    ";
                if (("command" == (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 98, $this->source); })()))) {
                    // line 99
                    yield "                        ";
                    $context["css_class"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 99) == 113)) ? ("status-warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 99) > 0)) ? ("status-error") : ("status-success"))));
                    // line 100
                    yield "                    ";
                } else {
                    // line 101
                    yield "                        ";
                    $context["css_class"] = (((((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 101), 0)) : (0)) > 399)) ? ("status-error") : ((((((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 101), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                    // line 102
                    yield "                    ";
                }
                // line 103
                yield "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 106
                yield (string) $this->escaper->escape((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 106), "n/a")) : ("n/a")), "html", null, true);
                yield "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 109
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "ip", [], "any", false, false, false, 109), "html", null, true);
                yield " ";
                yield (string) $this->getMacroNamespace()->call("profile_search_filter", [(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 109, $this->source); })()), $context["result"], "ip"], $context, 109, $this->source);
                yield "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 112
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "method", [], "any", false, false, false, 112), "html", null, true);
                yield " ";
                yield (string) $this->getMacroNamespace()->call("profile_search_filter", [(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 112, $this->source); })()), $context["result"], "method"], $context, 112, $this->source);
                yield "</span>
                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 115
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "url", [], "any", false, false, false, 115), "html", null, true);
                yield "
                            ";
                // line 116
                yield (string) $this->getMacroNamespace()->call("profile_search_filter", [(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 116, $this->source); })()), $context["result"], "url"], $context, 116, $this->source);
                yield "
                        </td>
                        <td class=\"text-small\">
                            <time data-convert-to-user-timezone data-render-as-date datetime=\"";
                // line 119
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 119), "c"), "html", null, true);
                yield "\">
                                ";
                // line 120
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 120), "d-M-Y"), "html", null, true);
                yield "
                            </time>
                            <time class=\"newline\" data-convert-to-user-timezone data-render-as-time datetime=\"";
                // line 122
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 122), "c"), "html", null, true);
                yield "\">
                                ";
                // line 123
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 123), "H:i:s"), "html", null, true);
                yield "
                            </time>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 126
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, false, 126)]), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, false, 126), "html", null, true);
                yield "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 129
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 132
            yield "        <div class=\"empty empty-panel\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 136
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "profile_search_filter" => new \Twig\TwigMacro("profile_search_filter", function ($request = null, $result = null, $property = null, ...$varargs): string|Markup {
                // line 3
                $macros = $this->macros;
                $context = [
                    "request" => $request,
                    "result" => $result,
                    "property" => $property,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "profile_search_filter"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "profile_search_filter"));

                    // line 4
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 4, $this->source); })()), "hasSession", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 5
                        yield "<a href=\"";
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 5, $this->source); })()), "query", [], "any", false, false, false, 5), "all", [], "any", false, false, false, 5), ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 5, $this->source); })()), "token", [], "any", false, false, false, 5)]), [ (string)(isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 5, $this->source); })()) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 5, $this->source); })()), (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5)])), "html", null, true);
                        yield "\" title=\"Search\"><span title=\"Search\" class=\"sf-icon sf-search\">";
                        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/search.svg");
                        yield "</span></a>";
                    }
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["request" => false, "result" => false, "property" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/results.html.twig";
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
        return array (  448 => 5,  446 => 4,  428 => 3,  412 => 136,  406 => 132,  401 => 129,  389 => 126,  383 => 123,  379 => 122,  374 => 120,  370 => 119,  364 => 116,  360 => 115,  352 => 112,  344 => 109,  336 => 106,  331 => 103,  328 => 102,  325 => 101,  322 => 100,  319 => 99,  316 => 98,  312 => 97,  304 => 91,  300 => 89,  296 => 87,  294 => 86,  290 => 84,  286 => 82,  282 => 80,  280 => 79,  276 => 77,  272 => 75,  268 => 73,  266 => 72,  262 => 70,  258 => 68,  254 => 66,  252 => 65,  246 => 61,  244 => 60,  239 => 58,  229 => 51,  223 => 50,  216 => 46,  210 => 45,  206 => 43,  193 => 42,  179 => 39,  166 => 38,  144 => 37,  130 => 32,  117 => 31,  85 => 10,  72 => 9,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% macro profile_search_filter(request, result, property) %}
    {%- if request.hasSession -%}
        <a href=\"{{ path(\x27_profiler_search_results\x27, request.query.all|merge({token: result.token})|merge({ (property): result[property] })) }}\" title=\"Search\"><span title=\"Search\" class=\"sf-icon sf-search\">{{ source(\x27@WebProfiler/Icon/search.svg\x27) }}</span></a>
    {%- endif -%}
{% endmacro %}

{% block head %}
    {{ parent() }}

    <style>
        #search-results td {
            font-family: var(--font-family-system);
            vertical-align: middle;
        }

        #search-results .sf-search {
            visibility: hidden;
            margin-left: 2px;
        }
        #search-results tr:hover .sf-search {
            visibility: visible;
        }
        #search-results .sf-search svg {
            stroke-width: 3;
        }
    </style>
{% endblock %}

{% block summary %}
    <div class=\"status\">
        <h2>Profile Search</h2>
    </div>
{% endblock %}

{% block sidebar_search_css_class %}{% endblock %}
{% block sidebar_shortcuts_links %}
    {{ parent() }}
{% endblock %}

{% block panel %}
    <div class=\"sf-tabs\" data-processed=\"true\">
        <div class=\"tab-navigation\" role=\"tablist\">
            <button class=\"tab-control {{ \x27request\x27 == profile_type ? \x27active\x27 }}\" role=\"tab\" {{ \x27request\x27 == profile_type ? \x27aria-selected=\"true\"\x27 : \x27tabindex=\"-1\"\x27 }} >
                <a href=\"{{ path(\x27_profiler_search_results\x27, {token: \x27empty\x27, limit: 10}) }}\">
                    HTTP Requests
                </a>
            </button>
            <button class=\"tab-control {{ \x27command\x27 == profile_type ? \x27active\x27 }}\" role=\"tab\" {{ \x27command\x27 == profile_type ? \x27aria-selected=\"true\"\x27 : \x27tabindex=\"-1\"\x27 }}>
                <a href=\"{{ path(\x27_profiler_search_results\x27, {token: \x27empty\x27, limit: 10, type: \x27command\x27}) }}\">
                    Console Commands
                </a>
            </button>
        </div>
    </div>

    <h2>{{ tokens ? tokens|length : \x27No\x27 }} results found</h2>

    {% if tokens %}
        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">
                        {% if \x27command\x27 == profile_type %}
                            Exit code
                        {% else %}
                            Status
                        {% endif %}
                    </th>
                    <th scope=\"col\">
                        {% if \x27command\x27 == profile_type %}
                            Application
                        {% else %}
                            IP
                        {% endif %}
                    </th>
                    <th scope=\"col\">
                        {% if \x27command\x27 == profile_type %}
                            Mode
                        {% else %}
                            Method
                        {% endif %}
                    </th>
                    <th scope=\"col\">
                        {% if \x27command\x27 == profile_type %}
                            Command
                        {% else %}
                            URL
                        {% endif %}
                    </th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                {% for result in tokens %}
                    {% if \x27command\x27 == profile_type %}
                        {% set css_class = result.status_code == 113 ? \x27status-warning\x27 : result.status_code > 0 ? \x27status-error\x27 : \x27status-success\x27 %}
                    {% else %}
                        {% set css_class = result.status_code|default(0) > 399 ? \x27status-error\x27 : result.status_code|default(0) > 299 ? \x27status-warning\x27 : \x27status-success\x27 %}
                    {% endif %}

                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label {{ css_class }}\">{{ result.status_code|default(\x27n/a\x27) }}</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">{{ result.ip }} {{ _self.profile_search_filter(request, result, \x27ip\x27) }}</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">{{ result.method }} {{ _self.profile_search_filter(request, result, \x27method\x27) }}</span>
                        </td>
                        <td class=\"break-long-words\">
                            {{ result.url }}
                            {{ _self.profile_search_filter(request, result, \x27url\x27) }}
                        </td>
                        <td class=\"text-small\">
                            <time data-convert-to-user-timezone data-render-as-date datetime=\"{{ result.time|date(\x27c\x27) }}\">
                                {{ result.time|date(\x27d-M-Y\x27) }}
                            </time>
                            <time class=\"newline\" data-convert-to-user-timezone data-render-as-time datetime=\"{{ result.time|date(\x27c\x27) }}\">
                                {{ result.time|date(\x27H:i:s\x27) }}
                            </time>
                        </td>
                        <td class=\"nowrap\"><a href=\"{{ path(\x27_profiler\x27, { token: result.token }) }}\">{{ result.token }}</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty empty-panel\">
            <p>The query returned no result.</p>
        </div>
    {% endif %}

{% endblock %}
", "@WebProfiler/Profiler/results.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/results.html.twig");
    }
}
