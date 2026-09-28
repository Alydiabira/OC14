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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_2267e71b2790b2578b85c781b8540a33 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
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
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "handledCount", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 34
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 36
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "handledCount", [], "any", false, false, false, 36), "html", null, true);
                yield "
            </span>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "
        ";
            // line 40
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
                // line 43
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "handledCount", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
                // line 48
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "totalTime", [], "any", false, false, false, 48) * 1000)), "html", null, true);
                yield " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 56
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "data", [], "any", false, false, false, 56), "serialize", [], "any", false, false, false, 56)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 60
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "data", [], "any", false, false, false, 60), "deserialize", [], "any", false, false, false, 60)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 66
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "data", [], "any", false, false, false, 66), "encode", [], "any", false, false, false, 66)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 70
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, false, 70), "decode", [], "any", false, false, false, 70)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 76
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "data", [], "any", false, false, false, 76), "normalize", [], "any", false, false, false, 76)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 80
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "denormalize", [], "any", false, false, false, 80)), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "
        ";
            // line 86
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 86, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        yield "    <span class=\"label ";
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "handledCount", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 92
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 97
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

        // line 98
        yield "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "handledCount", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "handledCount", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "totalTime", [], "any", false, false, false, 112) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            yield (string) $this->getMacroNamespace()->call("render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "data", [], "any", false, false, false, 118), true], $context, 118, $this->source);
            yield "
                ";
            // line 119
            yield (string) $this->getMacroNamespace()->call("render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), "data", [], "any", false, false, false, 119), false], $context, 119, $this->source);
            yield "

                ";
            // line 121
            yield (string) $this->getMacroNamespace()->call("render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "data", [], "any", false, false, false, 121), true], $context, 121, $this->source);
            yield "
                ";
            // line 122
            yield (string) $this->getMacroNamespace()->call("render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "data", [], "any", false, false, false, 122), false], $context, 122, $this->source);
            yield "

                ";
            // line 124
            yield (string) $this->getMacroNamespace()->call("render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "data", [], "any", false, false, false, 124), true], $context, 124, $this->source);
            yield "
                ";
            // line 125
            yield (string) $this->getMacroNamespace()->call("render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "data", [], "any", false, false, false, 125), false], $context, 125, $this->source);
            yield "
            </div>
        ";
        }
        // line 128
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_serialize_tab" => new \Twig\TwigMacro("render_serialize_tab", function ($collectorData = null, $serialize = null, ...$varargs): string|Markup {
                // line 131
                $macros = $this->macros;
                $context = [
                    "collectorData" => $collectorData,
                    "serialize" => $serialize,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

                    // line 132
                    yield "    ";
                    $context["data"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 132, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 132, $this->source); })()), "serialize", [], "any", false, false, false, 132)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 132, $this->source); })()), "deserialize", [], "any", false, false, false, 132)));
                    // line 133
                    yield "    ";
                    $context["cellPrefix"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 133, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
                    // line 134
                    yield "
    <div class=\"tab ";
                    // line 135
                    yield (string) (( !(($tmp = (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
        <h3 class=\"tab-title\">";
                    // line 136
                    yield (string) (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 136, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
                    yield " <span class=\"badge\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })())), "html", null, true);
                    yield "</h3>
        <div class=\"tab-content\">
            ";
                    // line 138
                    if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 138, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 139
                        yield "                <div class=\"empty\">
                    <p>Nothing was ";
                        // line 140
                        yield (string) (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialized") : ("deserialized"));
                        yield ".</p>
                </div>
            ";
                    } else {
                        // line 143
                        yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 155
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 155, $this->source); })()));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 156
                            yield "                            <tr>
                                <td>";
                            // line 157
                            yield (string) $this->getMacroNamespace()->call("render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 157, $this->source); })())], $context, 157, $this->source);
                            yield "</td>
                                <td>";
                            // line 158
                            yield (string) $this->getMacroNamespace()->call("render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 158), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 158, $this->source); })())], $context, 158, $this->source);
                            yield "</td>
                                <td>";
                            // line 159
                            yield (string) $this->getMacroNamespace()->call("render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 159, $this->source); })())], $context, 159, $this->source);
                            yield "</td>
                                <td>";
                            // line 160
                            yield (string) $this->getMacroNamespace()->call("render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 160, $this->source); })())], $context, 160, $this->source);
                            yield "</td>
                                <td>";
                            // line 161
                            yield (string) $this->getMacroNamespace()->call("render_time_cell", [$context["item"]], $context, 161, $this->source);
                            yield "</td>
                                <td>";
                            // line 162
                            yield (string) $this->getMacroNamespace()->call("render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 162, $this->source); })())], $context, 162, $this->source);
                            yield "</td>
                            </tr>
                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 165
                        yield "                    </tbody>
                </table>
            ";
                    }
                    // line 168
                    yield "        </div>
    </div>
";
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collectorData" => false, "serialize" => false], false),
            "render_caller_cell" => new \Twig\TwigMacro("render_caller_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 172
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

                    // line 173
                    yield "    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 173)) {
                        // line 174
                        yield "        <span class=\"metadata\">
            ";
                        // line 175
                        $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 175, $this->source); })()), "caller", [], "any", false, false, false, 175);
                        // line 176
                        yield "            ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 176, $this->source); })()), "line", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 177
                            yield "                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 177, $this->source); })()), "file", [], "any", false, false, false, 177), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 177, $this->source); })()), "line", [], "any", false, false, false, 177));
                            // line 178
                            yield "                ";
                            if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 178, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 179
                                yield "                    <a href=\"";
                                yield (string) $this->escaper->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 179, $this->source); })()), "html", null, true);
                                yield "\" title=\"";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 179, $this->source); })()), "file", [], "any", false, false, false, 179), "html", null, true);
                                yield "\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 179, $this->source); })()), "name", [], "any", false, false, false, 179), "html", null, true);
                                yield "</a>
                ";
                            } else {
                                // line 181
                                yield "                    <abbr title=\"";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 181, $this->source); })()), "file", [], "any", false, false, false, 181), "html", null, true);
                                yield "\">";
                                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 181, $this->source); })()), "name", [], "any", false, false, false, 181), "html", null, true);
                                yield "</abbr>
                ";
                            }
                            // line 183
                            yield "            ";
                        } else {
                            // line 184
                            yield "                ";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 184, $this->source); })()), "name", [], "any", false, false, false, 184), "html", null, true);
                            yield "
            ";
                        }
                        // line 186
                        yield "            line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                        yield (string) $this->escaper->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 186, $this->source); })()), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 186, $this->source); })()), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 186, $this->source); })()), "line", [], "any", false, false, false, 186), "html", null, true);
                        yield "</button>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                        // line 189
                        yield (string) $this->escaper->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 189, $this->source); })()), "html", null, true);
                        yield "-";
                        yield (string) $this->escaper->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 189, $this->source); })()), "html", null, true);
                        yield "\">
            <div class=\"trace\">
                ";
                        // line 191
                        yield (string) Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 191, $this->source); })()), "file", [], "any", false, false, false, 191), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 191, $this->source); })()), "line", [], "any", false, false, false, 191)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                        // line 196
                        yield "
            </div>
        </div>
    ";
                    }
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_normalize_tab" => new \Twig\TwigMacro("render_normalize_tab", function ($collectorData = null, $normalize = null, ...$varargs): string|Markup {
                // line 202
                $macros = $this->macros;
                $context = [
                    "collectorData" => $collectorData,
                    "normalize" => $normalize,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

                    // line 203
                    yield "    ";
                    $context["data"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 203, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 203, $this->source); })()), "normalize", [], "any", false, false, false, 203)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 203, $this->source); })()), "denormalize", [], "any", false, false, false, 203)));
                    // line 204
                    yield "    ";
                    $context["cellPrefix"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 204, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
                    // line 205
                    yield "
    <div class=\"tab ";
                    // line 206
                    yield (string) (( !(($tmp = (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
        <h3 class=\"tab-title\">";
                    // line 207
                    yield (string) (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 207, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
                    yield " <span class=\"badge\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 207, $this->source); })())), "html", null, true);
                    yield "</h3>
        <div class=\"tab-content\">
            ";
                    // line 209
                    if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 209, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 210
                        yield "                <div class=\"empty\">
                    <p>Nothing was ";
                        // line 211
                        yield (string) (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 211, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalized") : ("denormalized"));
                        yield ".</p>
                </div>
            ";
                    } else {
                        // line 214
                        yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 225
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 225, $this->source); })()));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 226
                            yield "                            <tr>
                                <td>";
                            // line 227
                            yield (string) $this->getMacroNamespace()->call("render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 227, $this->source); })())], $context, 227, $this->source);
                            yield "</td>
                                <td>";
                            // line 228
                            yield (string) $this->getMacroNamespace()->call("render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 228), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 228, $this->source); })())], $context, 228, $this->source);
                            yield "</td>
                                <td>";
                            // line 229
                            yield (string) $this->getMacroNamespace()->call("render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 229, $this->source); })())], $context, 229, $this->source);
                            yield "</td>
                                <td>";
                            // line 230
                            yield (string) $this->getMacroNamespace()->call("render_time_cell", [$context["item"]], $context, 230, $this->source);
                            yield "</td>
                                <td>";
                            // line 231
                            yield (string) $this->getMacroNamespace()->call("render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 231), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 231, $this->source); })())], $context, 231, $this->source);
                            yield "</td>
                            </tr>
                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 234
                        yield "                    </tbody>
                </table>
            ";
                    }
                    // line 237
                    yield "        </div>
    </div>
";
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collectorData" => false, "normalize" => false], false),
            "render_encode_tab" => new \Twig\TwigMacro("render_encode_tab", function ($collectorData = null, $encode = null, ...$varargs): string|Markup {
                // line 241
                $macros = $this->macros;
                $context = [
                    "collectorData" => $collectorData,
                    "encode" => $encode,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

                    // line 242
                    yield "    ";
                    $context["data"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 242, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 242, $this->source); })()), "encode", [], "any", false, false, false, 242)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 242, $this->source); })()), "decode", [], "any", false, false, false, 242)));
                    // line 243
                    yield "    ";
                    $context["cellPrefix"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 243, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
                    // line 244
                    yield "
    <div class=\"tab ";
                    // line 245
                    yield (string) (( !(($tmp = (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 245, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "\">
        <h3 class=\"tab-title\">";
                    // line 246
                    yield (string) (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 246, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
                    yield " <span class=\"badge\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 246, $this->source); })())), "html", null, true);
                    yield "</h3>
        <div class=\"tab-content\">
            ";
                    // line 248
                    if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 248, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 249
                        yield "                <div class=\"empty\">
                    <p>Nothing was ";
                        // line 250
                        yield (string) (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 250, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encoded") : ("decoded"));
                        yield ".</p>
                </div>
            ";
                    } else {
                        // line 253
                        yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                        // line 264
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 264, $this->source); })()));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 265
                            yield "                            <tr>
                                <td>";
                            // line 266
                            yield (string) $this->getMacroNamespace()->call("render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 266), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 266, $this->source); })())], $context, 266, $this->source);
                            yield "</td>
                                <td>";
                            // line 267
                            yield (string) $this->getMacroNamespace()->call("render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 267), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 267, $this->source); })())], $context, 267, $this->source);
                            yield "</td>
                                <td>";
                            // line 268
                            yield (string) $this->getMacroNamespace()->call("render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 268, $this->source); })())], $context, 268, $this->source);
                            yield "</td>
                                <td>";
                            // line 269
                            yield (string) $this->getMacroNamespace()->call("render_time_cell", [$context["item"]], $context, 269, $this->source);
                            yield "</td>
                                <td>";
                            // line 270
                            yield (string) $this->getMacroNamespace()->call("render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 270), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 270, $this->source); })())], $context, 270, $this->source);
                            yield "</td>
                            </tr>
                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 273
                        yield "                    </tbody>
                </table>
            ";
                    }
                    // line 276
                    yield "        </div>
    </div>
";
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["collectorData" => false, "encode" => false], false),
            "render_data_cell" => new \Twig\TwigMacro("render_data_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 280
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

                    // line 281
                    yield "    ";
                    $context["data_id"] = ((("data-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 281, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 281, $this->source); })()));
                    // line 282
                    yield "
    <span class=\"nowrap\">";
                    // line 283
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 283, $this->source); })()), "dataType", [], "any", false, false, false, 283), "html", null, true);
                    yield "</span>

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    // line 286
                    yield (string) $this->escaper->escape((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 286, $this->source); })()), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</button>
        <div id=\"";
                    // line 287
                    yield (string) $this->escaper->escape((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 287, $this->source); })()), "html", null, true);
                    yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                    // line 288
                    yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 288, $this->source); })()), "data", [], "any", false, false, false, 288));
                    yield "
        </div>
    </div>
";
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_context_cell" => new \Twig\TwigMacro("render_context_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 293
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

                    // line 294
                    yield "    ";
                    $context["context_id"] = ((("context-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 294, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 294, $this->source); })()));
                    // line 295
                    yield "
    ";
                    // line 296
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 296, $this->source); })()), "type", [], "any", false, false, false, 296)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 297
                        yield "        <span class=\"nowrap\">Type: ";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 297, $this->source); })()), "type", [], "any", false, false, false, 297), "html", null, true);
                        yield "</span>
        <div class=\"nowrap\">Format: ";
                        // line 298
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "format", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "format", [], "any", false, false, false, 298), "html", null, true)) : ("none"));
                        yield "</div>
    ";
                    } else {
                        // line 300
                        yield "        <span class=\"nowrap\">Format: ";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 300, $this->source); })()), "format", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 300, $this->source); })()), "format", [], "any", false, false, false, 300), "html", null, true)) : ("none"));
                        yield "</span>
    ";
                    }
                    // line 302
                    yield "
    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    // line 304
                    yield (string) $this->escaper->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 304, $this->source); })()), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide context\">Show context</button>
        <div id=\"";
                    // line 305
                    yield (string) $this->escaper->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 305, $this->source); })()), "html", null, true);
                    yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                    // line 306
                    yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 306, $this->source); })()), "context", [], "any", false, false, false, 306));
                    yield "
        </div>
    </div>
";
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_normalizer_cell" => new \Twig\TwigMacro("render_normalizer_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 311
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

                    // line 312
                    yield "    ";
                    $context["nested_normalizers_id"] = ((("nested-normalizers-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 312, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 312, $this->source); })()));
                    // line 313
                    yield "
    ";
                    // line 314
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 314)) {
                        // line 315
                        yield "        <span class=\"nowrap\"><a href=\"";
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "line", [], "any", false, false, false, 315)), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "class", [], "any", false, false, false, 315), "html", null, true);
                        yield "</a> (";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "time", [], "any", false, false, false, 315) * 1000)), "html", null, true);
                        yield " ms)</span>
    ";
                    }
                    // line 317
                    yield "
    ";
                    // line 318
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 318, $this->source); })()), "normalization", [], "any", false, false, false, 318)) > 1)) {
                        // line 319
                        yield "        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 320
                        yield (string) $this->escaper->escape((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 320, $this->source); })()), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</button>
            <div id=\"";
                        // line 321
                        yield (string) $this->escaper->escape((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 321, $this->source); })()), "html", null, true);
                        yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                        // line 323
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 323, $this->source); })()), "normalization", [], "any", false, false, false, 323));
                        foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                            // line 324
                            yield "                        <li><span class=\"nowrap\">x";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 324), "html", null, true);
                            yield " <a href=\"";
                            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 324)), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), "html", null, true);
                            yield "\">";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 324), "html", null, true);
                            yield "</a> (";
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 324) * 1000)), "html", null, true);
                            yield " ms)</span></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['normalizer'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 326
                        yield "                </ul>
            </div>
        </div>
    ";
                    }
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_encoder_cell" => new \Twig\TwigMacro("render_encoder_cell", function ($item = null, $index = null, $method = null, ...$varargs): string|Markup {
                // line 332
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "index" => $index,
                    "method" => $method,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

                    // line 333
                    yield "    ";
                    $context["nested_encoders_id"] = ((("nested-encoders-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 333, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 333, $this->source); })()));
                    // line 334
                    yield "
    ";
                    // line 335
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 335)) {
                        // line 336
                        yield "        <span class=\"nowrap\"><a href=\"";
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "line", [], "any", false, false, false, 336)), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "class", [], "any", false, false, false, 336), "html", null, true);
                        yield "</a> (";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "time", [], "any", false, false, false, 336) * 1000)), "html", null, true);
                        yield " ms)</span>
    ";
                    }
                    // line 338
                    yield "
    ";
                    // line 339
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 339, $this->source); })()), "encoding", [], "any", false, false, false, 339)) > 1)) {
                        // line 340
                        yield "        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 341
                        yield (string) $this->escaper->escape((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 341, $this->source); })()), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</button>
            <div id=\"";
                        // line 342
                        yield (string) $this->escaper->escape((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 342, $this->source); })()), "html", null, true);
                        yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                        // line 344
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 344, $this->source); })()), "encoding", [], "any", false, false, false, 344));
                        foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                            // line 345
                            yield "                        <li><span class=\"nowrap\">x";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 345), "html", null, true);
                            yield " <a href=\"";
                            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 345)), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), "html", null, true);
                            yield "\">";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 345), "html", null, true);
                            yield "</a> (";
                            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 345) * 1000)), "html", null, true);
                            yield " ms)</span></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['encoder'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 347
                        yield "                </ul>
            </div>
        </div>
    ";
                    }
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "index" => false, "method" => false], false),
            "render_time_cell" => new \Twig\TwigMacro("render_time_cell", function ($item = null, ...$varargs): string|Markup {
                // line 353
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

                    // line 354
                    yield "    <span class=\"nowrap\">";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 354, $this->source); })()), "time", [], "any", false, false, false, 354) * 1000)), "html", null, true);
                    yield " ms</span>
";
                    
                    $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                    
                    $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  1201 => 354,  1185 => 353,  1169 => 347,  1151 => 345,  1147 => 344,  1142 => 342,  1138 => 341,  1135 => 340,  1133 => 339,  1130 => 338,  1118 => 336,  1116 => 335,  1113 => 334,  1110 => 333,  1092 => 332,  1076 => 326,  1058 => 324,  1054 => 323,  1049 => 321,  1045 => 320,  1042 => 319,  1040 => 318,  1037 => 317,  1025 => 315,  1023 => 314,  1020 => 313,  1017 => 312,  999 => 311,  983 => 306,  979 => 305,  975 => 304,  971 => 302,  965 => 300,  960 => 298,  955 => 297,  953 => 296,  950 => 295,  947 => 294,  929 => 293,  913 => 288,  909 => 287,  905 => 286,  899 => 283,  896 => 282,  893 => 281,  875 => 280,  861 => 276,  856 => 273,  838 => 270,  834 => 269,  830 => 268,  826 => 267,  822 => 266,  819 => 265,  802 => 264,  789 => 253,  783 => 250,  780 => 249,  778 => 248,  771 => 246,  767 => 245,  764 => 244,  761 => 243,  758 => 242,  741 => 241,  727 => 237,  722 => 234,  704 => 231,  700 => 230,  696 => 229,  692 => 228,  688 => 227,  685 => 226,  668 => 225,  655 => 214,  649 => 211,  646 => 210,  644 => 209,  637 => 207,  633 => 206,  630 => 205,  627 => 204,  624 => 203,  607 => 202,  591 => 196,  589 => 191,  582 => 189,  571 => 186,  565 => 184,  562 => 183,  554 => 181,  544 => 179,  541 => 178,  538 => 177,  535 => 176,  533 => 175,  530 => 174,  527 => 173,  509 => 172,  495 => 168,  490 => 165,  472 => 162,  468 => 161,  464 => 160,  460 => 159,  456 => 158,  452 => 157,  449 => 156,  432 => 155,  418 => 143,  412 => 140,  409 => 139,  407 => 138,  400 => 136,  396 => 135,  393 => 134,  390 => 133,  387 => 132,  370 => 131,  354 => 128,  348 => 125,  344 => 124,  339 => 122,  335 => 121,  330 => 119,  326 => 118,  317 => 112,  309 => 107,  305 => 105,  299 => 101,  297 => 100,  293 => 98,  280 => 97,  265 => 92,  260 => 91,  247 => 90,  233 => 86,  230 => 85,  221 => 80,  214 => 76,  205 => 70,  198 => 66,  189 => 60,  182 => 56,  171 => 48,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  147 => 36,  141 => 34,  138 => 33,  135 => 32,  122 => 31,  84 => 4,  71 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.handledCount > 0 %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/serializer.svg\x27) }}
            <span class=\"sf-toolbar-value\">
                {{ collector.handledCount }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.handledCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    {{ \x27%.2f\x27|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.serialize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.deserialize|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.encode|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.decode|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.normalize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.denormalize|length }}</span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.handledCount ? \x27disabled\x27 }}\">
        <span class=\"icon\">{{ source(\x27@WebProfiler/Icon/serializer.svg\x27) }}</span>
        <strong>Serializer</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        {% if not collector.handledCount %}
            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.handledCount }}</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ \x27%.2f\x27|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                {{ _self.render_serialize_tab(collector.data, true) }}
                {{ _self.render_serialize_tab(collector.data, false) }}

                {{ _self.render_normalize_tab(collector.data, true) }}
                {{ _self.render_normalize_tab(collector.data, false) }}

                {{ _self.render_encode_tab(collector.data, true) }}
                {{ _self.render_encode_tab(collector.data, false) }}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% macro render_serialize_tab(collectorData, serialize) %}
    {% set data = serialize ? collectorData.serialize : collectorData.deserialize %}
    {% set cellPrefix = serialize ? \x27serialize\x27 : \x27deserialize\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ serialize ? \x27serialize\x27 : \x27deserialize\x27 }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ serialize ? \x27serialized\x27 : \x27deserialized\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_caller_cell(item, index, method) %}
    {% if item.caller is defined %}
        <span class=\"metadata\">
            {% set caller = item.caller %}
            {% if caller.line %}
                {% set link = caller.file|file_link(caller.line) %}
                {% if link %}
                    <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                {% else %}
                    <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                {% endif %}
            {% else %}
                {{ caller.name }}
            {% endif %}
            line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ method }}-{{ index }}\">{{ caller.line }}</button>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-{{ method }}-{{ index }}\">
            <div class=\"trace\">
                {{ caller.file|file_excerpt(caller.line)|replace({
                    \x27#DD0000\x27: \x27var(--highlight-string)\x27,
                    \x27#007700\x27: \x27var(--highlight-keyword)\x27,
                    \x27#0000BB\x27: \x27var(--highlight-default)\x27,
                    \x27#FF8000\x27: \x27var(--highlight-comment)\x27
                })|raw }}
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_normalize_tab(collectorData, normalize) %}
    {% set data = normalize ? collectorData.normalize : collectorData.denormalize %}
    {% set cellPrefix = normalize ? \x27normalize\x27 : \x27denormalize\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ normalize ? \x27normalize\x27 : \x27denormalize\x27 }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ normalize ? \x27normalized\x27 : \x27denormalized\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_encode_tab(collectorData, encode) %}
    {% set data = encode ? collectorData.encode : collectorData.decode %}
    {% set cellPrefix = encode ? \x27encode\x27 : \x27decode\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ encode ? \x27encode\x27 : \x27decode\x27 }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ encode ? \x27encoded\x27 : \x27decoded\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_data_cell(item, index, method) %}
    {% set data_id = \x27data-\x27 ~ method ~ \x27-\x27 ~ index %}

    <span class=\"nowrap\">{{ item.dataType }}</span>

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ data_id }}\" data-toggle-alt-content=\"Hide contents\">Show contents</button>
        <div id=\"{{ data_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.data) }}
        </div>
    </div>
{% endmacro %}

{% macro render_context_cell(item, index, method) %}
    {% set context_id = \x27context-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.type %}
        <span class=\"nowrap\">Type: {{ item.type }}</span>
        <div class=\"nowrap\">Format: {{ item.format ? item.format : \x27none\x27 }}</div>
    {% else %}
        <span class=\"nowrap\">Format: {{ item.format ? item.format : \x27none\x27 }}</span>
    {% endif %}

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</button>
        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.context) }}
        </div>
    </div>
{% endmacro %}

{% macro render_normalizer_cell(item, index, method) %}
    {% set nested_normalizers_id = \x27nested-normalizers-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.normalizer is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.normalizer.file|file_link(item.normalizer.line) }}\" title=\"{{ item.normalizer.file }}\">{{ item.normalizer.class }}</a> ({{ \x27%.2f\x27|format(item.normalizer.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.normalization|length > 1 %}
        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_normalizers_id }}\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</button>
            <div id=\"{{ nested_normalizers_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for normalizer in item.normalization %}
                        <li><span class=\"nowrap\">x{{ normalizer.calls }} <a href=\"{{ normalizer.file|file_link(normalizer.line) }}\" title=\"{{ normalizer.file }}\">{{ normalizer.class }}</a> ({{ \x27%.2f\x27|format(normalizer.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_encoder_cell(item, index, method) %}
    {% set nested_encoders_id = \x27nested-encoders-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.encoder is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.encoder.file|file_link(item.encoder.line) }}\" title=\"{{ item.encoder.file }}\">{{ item.encoder.class }}</a> ({{ \x27%.2f\x27|format(item.encoder.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.encoding|length > 1 %}
        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_encoders_id }}\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</button>
            <div id=\"{{ nested_encoders_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for encoder in item.encoding %}
                        <li><span class=\"nowrap\">x{{ encoder.calls }} <a href=\"{{ encoder.file|file_link(encoder.line) }}\" title=\"{{ encoder.file }}\">{{ encoder.class }}</a> ({{ \x27%.2f\x27|format(encoder.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_time_cell(item) %}
    <span class=\"nowrap\">{{ \x27%.2f\x27|format(item.time * 1000) }} ms</span>
{% endmacro %}
", "@WebProfiler/Collector/serializer.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
