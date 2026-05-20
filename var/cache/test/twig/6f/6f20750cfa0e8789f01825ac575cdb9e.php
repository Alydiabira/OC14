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

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_9b4c08b27ead2092244ccbcb470eee41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 5
        echo twig_source($this->env, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        echo "    <h2>Dispatched Events</h2>

    <div class=\"sf-tabs\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["dispatcherName"] => $context["dispatcherData"]) {
            // line 15
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">";
            // line 16
            echo twig_escape_filter($this->env, $context["dispatcherName"], "html", null, true);
            echo "</h3>
                <div class=\"tab-content\">
                    ";
            // line 18
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "called_listeners", [], "array", false, false, false, 18))) {
                // line 19
                echo "                        <div class=\"empty empty-panel\">
                            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 23
                echo "                        <div class=\"sf-tabs\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
                // line 25
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "called_listeners", [], "array", false, false, false, 25)), "html", null, true);
                echo "</span></h3>

                                <div class=\"tab-content\">
                                    ";
                // line 28
                echo twig_call_macro($macros["_self"], "macro_render_table", [twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "called_listeners", [], "array", false, false, false, 28)], 28, $context, $this->getSourceContext());
                echo "
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
                // line 33
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "not_called_listeners", [], "array", false, false, false, 33)), "html", null, true);
                echo "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 35
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "not_called_listeners", [], "array", false, false, false, 35))) {
                    // line 36
                    echo "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no uncalled listeners</strong>.
                                            </p>
                                            <p>
                                                All listeners were called or an error occurred
                                                when trying to collect uncalled listeners (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 47
                    echo "                                        ";
                    echo twig_call_macro($macros["_self"], "macro_render_table", [twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "not_called_listeners", [], "array", false, false, false, 47)], 47, $context, $this->getSourceContext());
                    echo "
                                    ";
                }
                // line 49
                echo "                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Orphaned Events <span class=\"badge\">";
                // line 53
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "orphaned_events", [], "array", false, false, false, 53)), "html", null, true);
                echo "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 55
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "orphaned_events", [], "array", false, false, false, 55))) {
                    // line 56
                    echo "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no orphaned events</strong>.
                                            </p>
                                            <p>
                                                All dispatched events were handled or an error occurred
                                                when trying to collect orphaned events (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 67
                    echo "                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatcherData"], "orphaned_events", [], "array", false, false, false, 74));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 75
                        echo "                                                    <tr>
                                                        <td class=\"font-normal\">";
                        // line 76
                        echo twig_escape_filter($this->env, $context["event"], "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                            </tbody>
                                        </table>
                                    ";
                }
                // line 82
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 86
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dispatcherName'], $context['dispatcherData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 93
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 101
            $context["previous_event"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new RuntimeError('Variable "listeners" does not exist.', 101, $this->source); })())), "event", [], "any", false, false, false, 101);
            // line 102
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new RuntimeError('Variable "listeners" does not exist.', 102, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 103
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 103) || (twig_get_attribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 103) != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 103, $this->source); })())))) {
                    // line 104
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 104)) {
                        // line 105
                        echo "                    </tbody>
                ";
                    }
                    // line 107
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 110), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 113
                    $context["previous_event"] = twig_get_attribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 113);
                    // line 114
                    echo "            ";
                }
                // line 115
                echo "
            <tr>
                <td class=\"text-right nowrap\">";
                // line 117
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["listener"], "priority", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["listener"], "priority", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 118
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 118));
                echo "</td>
            </tr>

            ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "                </tbody>
            ";
                }
                // line 124
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
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
        return array (  335 => 125,  321 => 124,  317 => 122,  315 => 121,  309 => 118,  305 => 117,  301 => 115,  298 => 114,  296 => 113,  290 => 110,  285 => 107,  281 => 105,  278 => 104,  275 => 103,  257 => 102,  255 => 101,  245 => 93,  229 => 92,  221 => 89,  213 => 86,  207 => 82,  202 => 79,  193 => 76,  190 => 75,  186 => 74,  177 => 67,  164 => 56,  162 => 55,  157 => 53,  151 => 49,  145 => 47,  132 => 36,  130 => 35,  125 => 33,  117 => 28,  111 => 25,  107 => 23,  101 => 19,  99 => 18,  94 => 16,  91 => 15,  87 => 14,  82 => 11,  75 => 10,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/events.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/events.html.twig");
    }
}
