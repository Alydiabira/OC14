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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_7148678a87830e2f0d0aabeada0faeca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'toolbar' => [$this, 'block_toolbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll('.mailer-email-summary-table-row');

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener('click', () => {
                        emailRows.forEach((row) => row.classList.remove('active'));
                        emailRow.classList.add('active');

                        document.querySelectorAll('.mailer-email-details').forEach((emailDetails) => emailDetails.style.display = 'none');
                        document.querySelector(emailRow.getAttribute('data-target')).style.display = 'block';
                    });
                });
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 192
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 192);
        // line 193
        echo "
    ";
        // line 194
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 194))) {
            // line 195
            echo "        ";
            ob_start(function () { return ''; });
            // line 196
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/mailer.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 197
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 197)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 199
            echo "
        ";
            // line 200
            ob_start(function () { return ''; });
            // line 201
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 203
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 203), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 203); })), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 207
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 207), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 207); })), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            echo "
        ";
            // line 211
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 215
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 216
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 216);
        // line 217
        echo "
    <span class=\"label ";
        // line 218
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 218))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 219
        echo twig_source($this->env, "@WebProfiler/Icon/mailer.svg");
        echo "</span>

        <strong>Emails</strong>
        ";
        // line 222
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            echo "            <span class=\"count\">
                <span>";
            // line 224
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 224)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 227
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 231
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 231);
        // line 232
        echo "    <h2>Emails</h2>

    ";
        // line 234
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 234))) {
            // line 235
            echo "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 239
            echo "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 242
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 242), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 242); })), "html", null, true);
            echo "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 247
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 247), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 247); })), "html", null, true);
            echo "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 253
        echo "
    ";
        // line 254
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 254)) > 1)) {
            // line 255
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 256
                echo "            <h2><code>";
                echo twig_escape_filter($this->env, $context["transport"], "html", null, true);
                echo "</code> transport</h2>
            ";
                // line 257
                echo twig_call_macro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), $context["transport"]], 257, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 259))) {
            // line 260
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 260)), true], 260, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 262
        echo "
    ";
        // line 317
        echo "
    ";
        // line 501
        echo "
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 263
    public function macro_render_transport_details($__collector__ = null, $__transport__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 264
            echo "        <div class=\"card\">
            ";
            // line 265
            $context["num_emails"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 265), "events", [($context["transport"] ?? null)], "method", false, false, false, 265));
            // line 266
            echo "            ";
            if ((($context["num_emails"] ?? null) > 1)) {
                // line 267
                echo "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 278
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 278), "events", [($context["transport"] ?? null)], "method", false, false, false, 278));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 279
                    echo "                                <tr class=\"mailer-email-summary-table-row ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 279)) ? ("active") : (""));
                    echo "\" data-target=\"#email-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 279), "html", null, true);
                    echo "\">
                                    <td>";
                    // line 280
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 280), "html", null, true);
                    echo "</td>
                                    <td>
                                        ";
                    // line 282
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 282), "subject", [], "any", true, true, false, 282)) {
                        // line 283
                        echo "                                            ";
                        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", true, true, false, 283) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", false, false, false, 283)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", false, false, false, 283), "html", null, true))) : (print ("(No subject)")));
                        echo "
                                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 284
$context["event"], "message", [], "any", false, false, false, 284), "headers", [], "any", false, false, false, 284), "has", ["subject"], "method", false, false, false, 284)) {
                        // line 285
                        echo "                                            ";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 285), "headers", [], "any", false, true, false, 285), "get", ["subject"], "method", false, true, false, 285), "bodyAsString", [], "method", true, true, false, 285)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 285), "headers", [], "any", false, true, false, 285), "get", ["subject"], "method", false, true, false, 285), "bodyAsString", [], "method", false, false, false, 285), "(No subject)")) : ("(No subject)")), "html", null, true);
                        echo "
                                        ";
                    } else {
                        // line 287
                        echo "                                            (No subject)
                                        ";
                    }
                    // line 289
                    echo "                                    </td>
                                    <td>
                                        ";
                    // line 291
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 291), "to", [], "any", true, true, false, 291)) {
                        // line 292
                        echo "                                            ";
                        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 292), "getTo", [], "method", false, false, false, 292), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 292); }), ", "), "(empty)"), "html", null, true);
                        echo "
                                        ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 293
$context["event"], "message", [], "any", false, false, false, 293), "headers", [], "any", false, false, false, 293), "has", ["to"], "method", false, false, false, 293)) {
                        // line 294
                        echo "                                            ";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 294), "headers", [], "any", false, true, false, 294), "get", ["to"], "method", false, true, false, 294), "bodyAsString", [], "method", true, true, false, 294)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 294), "headers", [], "any", false, true, false, 294), "get", ["to"], "method", false, true, false, 294), "bodyAsString", [], "method", false, false, false, 294), "(empty)")) : ("(empty)")), "html", null, true);
                        echo "
                                        ";
                    } else {
                        // line 296
                        echo "                                            (empty)
                                        ";
                    }
                    // line 298
                    echo "                                    </td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 299
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 299), "html", null, true);
                    echo "\">View email details</button></td>
                                </tr>
                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                echo "                        </tbody>
                    </table>
                </div>

                ";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 306), "events", [($context["transport"] ?? null)], "method", false, false, false, 306));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 307
                    echo "                    <div class=\"mailer-email-details ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 307)) ? ("active") : (""));
                    echo "\" id=\"email-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 307), "html", null, true);
                    echo "\">
                        ";
                    // line 308
                    echo twig_call_macro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 308), twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 308), ($context["show_transport_name"] ?? null)], 308, $context, $this->getSourceContext());
                    echo "
                    </div>
                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 311
                echo "            ";
            } else {
                // line 312
                echo "                ";
                $context["event"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 312), "events", [($context["transport"] ?? null)], "method", false, false, false, 312));
                // line 313
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "message", [], "any", false, false, false, 313), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isQueued", [], "any", false, false, false, 313), ($context["show_transport_name"] ?? null)], 313, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 315
            echo "        </div>
    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 318
    public function macro_render_email_details($__collector__ = null, $__transport__ = null, $__message__ = null, $__message_is_queued__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "message" => $__message__,
            "message_is_queued" => $__message_is_queued__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 319
            echo "        ";
            if (($context["show_transport_name"] ?? null)) {
                // line 320
                echo "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 321
                echo ((($context["message_is_queued"] ?? null)) ? ("warning") : ("success"));
                echo "\">";
                echo ((($context["message_is_queued"] ?? null)) ? ("Queued") : ("Sent"));
                echo "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 323
                echo twig_escape_filter($this->env, ($context["transport"] ?? null), "html", null, true);
                echo "</code>
            </p>
        ";
            }
            // line 326
            echo "
        ";
            // line 327
            if ( !twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 327)) {
                // line 328
                echo "            ";
                // line 329
                echo "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 329)], "method", false, false, false, 329), "html", null, true);
                echo "\" download=\"email.eml\">
                ";
                // line 330
                echo twig_source($this->env, "@WebProfiler/Icon/download.svg");
                echo "
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 334
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 334), "html", null, true);
                echo "</pre>
        ";
            } else {
                // line 336
                echo "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 342
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "subject", [], "any", true, true, false, 342)) {
                    // line 343
                    echo "                                    ";
                    (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 343) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 343)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 343), "html", null, true))) : (print ("(No subject)")));
                    echo "
                                ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 344
($context["message"] ?? null), "headers", [], "any", false, false, false, 344), "has", ["subject"], "method", false, false, false, 344)) {
                    // line 345
                    echo "                                    ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 345), "get", ["subject"], "method", false, true, false, 345), "bodyAsString", [], "method", true, true, false, 345)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 345), "get", ["subject"], "method", false, true, false, 345), "bodyAsString", [], "method", false, false, false, 345), "(No subject)")) : ("(No subject)")), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 347
                    echo "                                    (No subject)
                                ";
                }
                // line 349
                echo "                            </p>
                            <div class=\"mailer-message-headers\">
                                <p>
                                    <strong>From:</strong>
                                    ";
                // line 353
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "from", [], "any", true, true, false, 353)) {
                    // line 354
                    echo "                                        ";
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getFrom", [], "method", false, false, false, 354), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 354); }), ", "), "(empty)"), "html", null, true);
                    echo "
                                    ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 355
($context["message"] ?? null), "headers", [], "any", false, false, false, 355), "has", ["from"], "method", false, false, false, 355)) {
                    // line 356
                    echo "                                        ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 356), "get", ["from"], "method", false, true, false, 356), "bodyAsString", [], "method", true, true, false, 356)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 356), "get", ["from"], "method", false, true, false, 356), "bodyAsString", [], "method", false, false, false, 356), "(empty)")) : ("(empty)")), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 358
                    echo "                                        (empty)
                                    ";
                }
                // line 360
                echo "                                </p>
                                <p>
                                    <strong>To:</strong>
                                    ";
                // line 363
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "to", [], "any", true, true, false, 363)) {
                    // line 364
                    echo "                                        ";
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter(twig_array_map($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getTo", [], "method", false, false, false, 364), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return twig_get_attribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 364); }), ", "), "(empty)"), "html", null, true);
                    echo "
                                    ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 365
($context["message"] ?? null), "headers", [], "any", false, false, false, 365), "has", ["to"], "method", false, false, false, 365)) {
                    // line 366
                    echo "                                        ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 366), "get", ["to"], "method", false, true, false, 366), "bodyAsString", [], "method", true, true, false, 366)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 366), "get", ["to"], "method", false, true, false, 366), "bodyAsString", [], "method", false, false, false, 366), "(empty)")) : ("(empty)")), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 368
                    echo "                                        (empty)
                                    ";
                }
                // line 370
                echo "                                </p>
                                ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 371), "all", [], "any", false, false, false, 371), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !twig_in_filter(twig_lower_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 371) &&  !(null === twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 371)))) ? (twig_get_attribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 371)) : (""))), ["subject", "from", "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 372
                    echo "                                    <p class=\"mailer-message-header-secondary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 372), "html", null, true);
                    echo "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                            </div>
                        </div>

                        ";
                // line 377
                if ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", true, true, false, 377) && twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 377))) {
                    // line 378
                    echo "                            <div class=\"card-block\">
                                ";
                    // line 379
                    $context["num_of_attachments"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 379));
                    // line 380
                    echo "                                ";
                    $context["total_attachments_size_in_bytes"] = twig_array_reduce($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 380), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return (($context["total_size"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attachment"] ?? null), "body", [], "any", false, false, false, 380))); }, 0);
                    // line 381
                    echo "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 382
                    echo twig_source($this->env, "@WebProfiler/Icon/attachment.svg");
                    echo "
                                    Attachments <span>(";
                    // line 383
                    echo twig_escape_filter($this->env, ($context["num_of_attachments"] ?? null), "html", null, true);
                    echo " file";
                    echo (((($context["num_of_attachments"] ?? null) > 1)) ? ("s") : (""));
                    echo " / ";
                    echo twig_call_macro($macros["_self"], "macro_render_file_size_humanized", [($context["total_attachments_size_in_bytes"] ?? null)], 383, $context, $this->getSourceContext());
                    echo ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 387
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 387));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 388
                        echo "                                        <li>
                                            ";
                        // line 389
                        echo twig_source($this->env, "@WebProfiler/Icon/file.svg");
                        echo "

                                            ";
                        // line 391
                        if (((twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 391)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 391))) : (""))) {
                            // line 392
                            echo "                                                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 392), "html", null, true);
                            echo "
                                            ";
                        } else {
                            // line 394
                            echo "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 396
                        echo "
                                            (";
                        // line 397
                        echo twig_call_macro($macros["_self"], "macro_render_file_size_humanized", [twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 397))], 397, $context, $this->getSourceContext());
                        echo ")

                                            <a href=\"data:";
                        // line 399
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 399)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 399), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [twig_get_attribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 399)], "method", false, false, false, 399), "html", null, true);
                        echo "\" download=\"";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 399)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 399), "attachment")) : ("attachment")), "html", null, true);
                        echo "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 402
                    echo "                                </ul>
                            </div>
                        ";
                }
                // line 405
                echo "
                        <div class=\"card-block\">
                            <div class=\"sf-tabs sf-tabs-sm\">
                            ";
                // line 408
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 408)) {
                    // line 409
                    echo "                                ";
                    $context["textBody"] = twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "any", false, false, false, 409);
                    // line 410
                    echo "                                ";
                    $context["htmlBody"] = twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", false, false, false, 410);
                    // line 411
                    echo "                                <div class=\"tab ";
                    echo (( !($context["textBody"] ?? null)) ? ("disabled") : (""));
                    echo " ";
                    echo ((($context["textBody"] ?? null)) ? ("active") : (""));
                    echo "\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 414
                    if (($context["textBody"] ?? null)) {
                        // line 415
                        echo "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 416
                        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 416)) {
                            // line 417
                            echo twig_escape_filter($this->env, twig_convert_encoding(($context["textBody"] ?? null), "UTF-8", twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 417)), "html", null, true);
                        } else {
                            // line 419
                            echo twig_escape_filter($this->env, ($context["textBody"] ?? null), "html", null, true);
                        }
                        // line 421
                        echo "</pre>
                                        ";
                    } else {
                        // line 423
                        echo "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 427
                    echo "                                    </div>
                                </div>

                                ";
                    // line 430
                    if (($context["htmlBody"] ?? null)) {
                        // line 431
                        echo "                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                        // line 434
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["htmlBody"] ?? null)], "method", false, false, false, 434), "html", null, true);
                        echo "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 439
                    echo "
                                <div class=\"tab ";
                    // line 440
                    echo (( !($context["htmlBody"] ?? null)) ? ("disabled") : (""));
                    echo " ";
                    echo ((( !($context["textBody"] ?? null) && ($context["htmlBody"] ?? null))) ? ("active") : (""));
                    echo "\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 443
                    if (($context["htmlBody"] ?? null)) {
                        // line 444
                        echo "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 445
                        if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 445)) {
                            // line 446
                            echo twig_escape_filter($this->env, twig_convert_encoding(($context["htmlBody"] ?? null), "UTF-8", twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 446)), "html", null, true);
                        } else {
                            // line 448
                            echo twig_escape_filter($this->env, ($context["htmlBody"] ?? null), "html", null, true);
                        }
                        // line 450
                        echo "</pre>
                                        ";
                    } else {
                        // line 452
                        echo "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 456
                    echo "                                    </div>
                                </div>
                            ";
                } else {
                    // line 459
                    echo "                                ";
                    $context["body"] = ((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "any", false, false, false, 459)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "any", false, false, false, 459), "toString", [], "method", false, false, false, 459)) : (null));
                    // line 460
                    echo "                                <div class=\"tab ";
                    echo (( !($context["body"] ?? null)) ? ("disabled") : (""));
                    echo " ";
                    echo ((($context["body"] ?? null)) ? ("active") : (""));
                    echo "\">
                                    <h3 class=\"tab-title\">Content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 463
                    if (($context["body"] ?? null)) {
                        // line 464
                        echo "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 465
                        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
                        echo "
                                            </pre>
                                        ";
                    } else {
                        // line 468
                        echo "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 472
                    echo "                                    </div>
                                </div>
                            ";
                }
                // line 475
                echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 483
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "method", false, false, false, 483), "asDebugString", [], "method", false, false, false, 483), "html", null, true);
                echo "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 490
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 490)], "method", false, false, false, 490), "html", null, true);
                echo "\" download=\"email.eml\">
                            ";
                // line 491
                echo twig_source($this->env, "@WebProfiler/Icon/download.svg");
                echo "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 495
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 495), "html", null, true);
                echo "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 500
            echo "    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 502
    public function macro_render_file_size_humanized($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 503
            if ((($context["bytes"] ?? null) < 1000)) {
                // line 504
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " bytes"), "html", null, true);
            } elseif ((            // line 505
($context["bytes"] ?? null) < (1000 ** 2))) {
                // line 506
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 508
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / (1000 ** 2)), 2) . " MB"), "html", null, true);
            }
            
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
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  1117 => 508,  1114 => 506,  1112 => 505,  1110 => 504,  1108 => 503,  1092 => 502,  1080 => 500,  1072 => 495,  1065 => 491,  1061 => 490,  1051 => 483,  1041 => 475,  1036 => 472,  1030 => 468,  1024 => 465,  1022 => 464,  1020 => 463,  1011 => 460,  1008 => 459,  1003 => 456,  997 => 452,  993 => 450,  990 => 448,  987 => 446,  985 => 445,  983 => 444,  981 => 443,  973 => 440,  970 => 439,  962 => 434,  957 => 431,  955 => 430,  950 => 427,  944 => 423,  940 => 421,  937 => 419,  934 => 417,  932 => 416,  930 => 415,  928 => 414,  919 => 411,  916 => 410,  913 => 409,  911 => 408,  906 => 405,  901 => 402,  888 => 399,  883 => 397,  880 => 396,  876 => 394,  870 => 392,  868 => 391,  863 => 389,  860 => 388,  856 => 387,  845 => 383,  841 => 382,  838 => 381,  835 => 380,  833 => 379,  830 => 378,  828 => 377,  823 => 374,  814 => 372,  810 => 371,  807 => 370,  803 => 368,  797 => 366,  795 => 365,  790 => 364,  788 => 363,  783 => 360,  779 => 358,  773 => 356,  771 => 355,  766 => 354,  764 => 353,  758 => 349,  754 => 347,  748 => 345,  746 => 344,  741 => 343,  739 => 342,  731 => 336,  726 => 334,  719 => 330,  714 => 329,  712 => 328,  710 => 327,  707 => 326,  701 => 323,  694 => 321,  691 => 320,  688 => 319,  668 => 318,  655 => 315,  649 => 313,  646 => 312,  643 => 311,  626 => 308,  619 => 307,  602 => 306,  596 => 302,  579 => 299,  576 => 298,  572 => 296,  566 => 294,  564 => 293,  559 => 292,  557 => 291,  553 => 289,  549 => 287,  543 => 285,  541 => 284,  536 => 283,  534 => 282,  529 => 280,  522 => 279,  505 => 278,  492 => 267,  489 => 266,  487 => 265,  484 => 264,  466 => 263,  458 => 501,  455 => 317,  452 => 262,  446 => 260,  443 => 259,  435 => 257,  430 => 256,  425 => 255,  423 => 254,  420 => 253,  411 => 247,  403 => 242,  398 => 239,  392 => 235,  390 => 234,  386 => 232,  383 => 231,  376 => 230,  368 => 227,  362 => 224,  359 => 223,  357 => 222,  351 => 219,  347 => 218,  344 => 217,  341 => 216,  334 => 215,  324 => 211,  321 => 210,  315 => 207,  308 => 203,  304 => 201,  302 => 200,  299 => 199,  294 => 197,  289 => 196,  286 => 195,  284 => 194,  281 => 193,  278 => 192,  271 => 191,  235 => 162,  228 => 161,  64 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/mailer.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/mailer.html.twig");
    }
}
