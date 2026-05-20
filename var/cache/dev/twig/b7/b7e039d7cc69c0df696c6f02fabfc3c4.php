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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_5dbe78b81b7b982b7582fbb5f5390e82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #555;
        }
        .theme-dark {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #ccc;
        }

        .log-filters {
            display: flex;
            flex-wrap: wrap;
        }
        .log-filters .log-filter {
            flex-shrink: 0;
            margin-right: 15px;
            position: relative;
        }
        .log-filters .log-filter summary {
            align-items: center;
            background: var(--button-background);
            border-radius: 6px;
            border: 1px solid var(--button-border-color);
            box-shadow: var(--button-box-shadow);
            color: var(--button-color);
            cursor: pointer;
            display: flex;
            font-size: 13px;
            font-weight: 500;
            padding: 4px 8px;
            white-space: nowrap;
        }
        .log-filters .log-filter summary:active {
            box-shadow: none;
            transform: translateY(1px);
        }
        .log-filters .log-filter summary .icon {
            height: 18px;
            width: 18px;
            margin: 0 7px 0 0;
        }
        .log-filters .log-filter summary svg {
            height: 18px;
            width: 18px;
            opacity: 0.7;
        }
        .log-filters .log-filter summary svg {
            stroke-width: 2;
        }
        .log-filters .log-filter summary .filter-active-num {
            color: var(--log-filter-active-num-color);
            font-weight: bold;
            padding: 0 1px;
        }
        .log-filter .tab-navigation {
            position: relative;
        }
        .log-filter .tab-navigation input[type=\"radio\"] {
            position: absolute;
            pointer-events: none;
            opacity: 0;
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            background-color: var(--tab-active-background);
            border-radius: 6px;
            box-shadow: inset 0 0 0 1.5px var(--tab-active-border-color);
            color: var(--tab-active-color);
            position: relative;
            z-index: 1;
        }
        .theme-dark .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            box-shadow: inset 0 0 0 1px var(--tab-border-color);
        }
        .tab-navigation input[type=\"radio\"]:focus-visible + .tab-control {
            outline: 1px solid var(--color-link);
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control + input[type=\"radio\"] + .tab-control:before{
            width: 0;
        }

        .log-filters .log-filter .log-filter-content {
            background: var(--base-0);
            border: 1px solid var(--table-border-color);
            border-radius: 6px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 15px;
            position: absolute;
            left: 0;
            top: 32px;
            max-width: 400px;
            min-width: 200px;
            z-index: 9999;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option {
            align-items: center;
            display: flex;
        }
        .log-filter .filter-select-all-or-none {
            margin-bottom: 10px;
        }
        .log-filter .filter-select-all-or-none button + button {
            margin-left: 15px;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option + .log-filter-option {
            margin: 7px 0 0;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option label {
            cursor: pointer;
            flex: 1;
            padding-left: 10px;
        }

        table.logs {
            border-bottom-width: 0;
            border-collapse: collapse;
        }
        table.logs tr + tr td {
            border-width: 1px 0 0;
        }
        table.logs .metadata {
            display: block;
            font-size: 12px;
        }
        .theme-dark tr.status-error td,
        .theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

        table.logs .log-timestamp {
            color: var(--log-timestamp-color);
        }
        table.logs .log-metadata {
            margin: 8px 0 0;
        }
        table.logs .log-metadata > span {
            display: inline-block;
        }
        table.logs .log-metadata > span + span {
            margin-left: 10px;
        }
        table.logs .log-metadata .log-channel {
            color: var(--base-1);
            font-size: 13px;
            font-weight: bold;
        }
        table.logs .log-metadata .badge {
            background: var(--badge-light-background);
            color: var(--badge-light-color);
        }
        table.logs .log-metadata .log-num-occurrences {
            color: var(--color-muted);
            font-size: 13px;
        }
        table.logs .log-metadata .context {
            background: var(--code-block-background);
            border-radius: 4px;
            padding: 5px;
        }
        table.logs .log-metadata .context + .context {
            margin-top: 10px;
        }
        .log-type-badge {
            background: var(--badge-light-background);
            box-shadow: none;
            color: var(--badge-light-color);
            display: inline-block;
            font-family: var(--font-family-system);
            margin-top: 5px;
        }
        .log-type-badge.badge-deprecation,
        .log-type-badge.badge-warning {
            background: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .log-type-badge.badge-error {
            background: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .log-type-badge.badge-silenced {
            background: #EDE9FE;
            color: #6D28D9;
        }
        .theme-dark .log-type-badge.badge-silenced {
            background: #5B21B6;
            color: #EDE9FE;
        }

        tr.log-status-warning > td:first-child,
        tr.log-status-error > td:first-child,
        tr.log-status-silenced > td:first-child {
            position: relative;
        }
        tr.log-status-warning > td:first-child:before,
        tr.log-status-error > td:first-child:before,
        tr.log-status-silenced > td:first-child:before {
            background: transparent;
            border-radius: 0;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
        }
        tr.log-status-warning > td:first-child:before {
            background: var(--yellow-400);
        }
        tr.log-status-error > td:first-child:before {
            background: var(--red-400);
        }
        tr.log-status-silenced > td:first-child:before {
            background: #a78bfa;
        }

        .container-compilation-logs {
            background: var(--table-background);
            border: 1px solid var(--base-2);
            border-radius: 6px;
            margin-top: 30px;
            padding: 15px;
        }
        .container-compilation-logs summary {
            cursor: pointer;
        }
        .container-compilation-logs summary h4 {
            margin: 0 0 5px;
        }
        .container-compilation-logs summary p {
            margin: 0;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 238
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
        echo "    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerLoggerPanel();
        });

        class SymfonyProfilerLoggerPanel {
            constructor() {
                this.#initializeLogsTable();
            }

            #initializeLogsTable() {
                this.#updateLogsTable();

                document.querySelectorAll('.log-filter input').forEach((input) => {
                    input.addEventListener('change', () => { this.#updateLogsTable(); });
                });

                document.querySelectorAll('.filter-select-all-or-none button').forEach((link) => {
                    link.addEventListener('click', () => {
                        const selectAll = link.classList.contains('select-all');
                        link.closest('.log-filter-content').querySelectorAll('input').forEach((input) => {
                            input.checked = selectAll;
                        });

                        this.#updateLogsTable();
                    });
                });

                document.body.addEventListener('click', (event) => {
                    document.querySelectorAll('details.log-filter').forEach((filterElement) => {
                        if (!filterElement.contains(event.target) && filterElement.open) {
                            filterElement.open = false;
                        }
                    });
                });
            }

            #updateLogsTable() {
                const logs = document.querySelector('table.logs');
                if (null === logs) {
                    return;
                }

                const selectedType = document.querySelector('#log-filter-type input:checked').value;
                const priorities = document.querySelectorAll('#log-filter-priority input');
                const allPriorities = Array.from(priorities).map((input) => input.value);
                const selectedPriorities = Array.from(priorities).filter((input) => input.checked).map((input) => input.value);
                const channels = document.querySelectorAll('#log-filter-channel input');
                const selectedChannels = Array.from(channels).filter((input) => input.checked).map((input) => input.value);

                /* hide rows that don't match the current filters */
                let numVisibleRows = 0;
                logs.querySelectorAll('tbody tr').forEach((row) => {
                    if ('all' !== selectedType && selectedType !== row.getAttribute('data-type')) {
                        row.style.display = 'none';
                        return;
                    }

                    const priority = row.getAttribute('data-priority');
                    if (false === selectedPriorities.includes(priority) && true === allPriorities.includes(priority)) {
                        row.style.display = 'none';
                        return;
                    }

                    if ('' !== row.getAttribute('data-channel') && false === selectedChannels.includes(row.getAttribute('data-channel'))) {
                        row.style.display = 'none';
                        return;
                    }

                    row.style.display = 'table-row';
                    numVisibleRows++;
                });

                document.querySelector('table.logs').style.display = 0 === numVisibleRows ? 'none' : 'table';
                document.querySelector('.no-logs-message').style.display = 0 === numVisibleRows ? 'block' : 'none';

                /* update the selected totals of all filters */
                document.querySelector('#log-filter-priority .filter-active-num').innerText = (priorities.length === selectedPriorities.length) ? 'All' : selectedPriorities.length;
                document.querySelector('#log-filter-channel .filter-active-num').innerText = (channels.length === selectedChannels.length) ? 'All' : selectedChannels.length;
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 323
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 324
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 324) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 324)) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 324))) {
            // line 325
            echo "        ";
            ob_start(function () { return ''; });
            // line 326
            echo "            ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 326)) ? ("red") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 326)) ? ("yellow") : ("none"))));
            // line 327
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 328
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 328)) ?: ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 328) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 328)))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            echo "
        ";
            // line 331
            ob_start(function () { return ''; });
            // line 332
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 334
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 334)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 334), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 339
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 339)) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, false, 339)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 339), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 344
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 344)) ? ("none") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 344)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 344), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 347
            echo "
        ";
            // line 348
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 352
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 353
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 353)) ? ("error") : (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 353)) ? ("warning") : ("none"))));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logs", [], "any", false, false, false, 353))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 354
        echo twig_source($this->env, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 356
        if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 356) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 356)) || twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 356))) {
            // line 357
            echo "            <span class=\"count\">
                <span>";
            // line 358
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 358)) ?: ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 358) + twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 358)))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 361
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 364
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 365
        echo "    <h2>Log Messages</h2>

    ";
        // line 367
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 367))) {
            // line 368
            echo "        <div class=\"empty empty-panel\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 372
            echo "        ";
            $context["has_error_logs"] = (twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 372), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("error" == ($context["type"] ?? null)); })) > 0);
            // line 373
            echo "        ";
            $context["has_deprecation_logs"] = (twig_length_filter($this->env, twig_array_filter($this->env, twig_array_column(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 373), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("deprecation" == ($context["type"] ?? null)); })) > 0);
            // line 374
            echo "
        ";
            // line 375
            $context["filters"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "filters", [], "any", false, false, false, 375);
            // line 376
            echo "        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <div class=\"tab-navigation\">
                    ";
            // line 379
            $context["initially_active_tab"] = ((($context["has_error_logs"] ?? null)) ? ("error") : (((($context["has_deprecation_logs"] ?? null)) ? ("deprecation") : ("all"))));
            // line 380
            echo "                    <input type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\" ";
            echo ((("all" == ($context["initially_active_tab"] ?? null))) ? ("checked") : (""));
            echo ">
                    <label for=\"filter-log-type-all\" class=\"tab-control\">
                        All messages
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\" ";
            // line 385
            echo ((("error" == ($context["initially_active_tab"] ?? null))) ? ("checked") : (""));
            echo ">
                    <label for=\"filter-log-type-error\" class=\"tab-control\">
                        Errors
                        <span class=\"badge status-";
            // line 388
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 388)) ? ("error") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 388)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 388), 0)) : (0)), "html", null, true);
            echo "</span>
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\" ";
            // line 391
            echo ((("deprecation" == ($context["initially_active_tab"] ?? null))) ? ("checked") : (""));
            echo ">
                    <label for=\"filter-log-type-deprecation\" class=\"tab-control\">
                        Deprecations
                        <span class=\"badge status-";
            // line 394
            echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 394)) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 394)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 394), 0)) : (0)), "html", null, true);
            echo "</span>
                    </label>
                </div>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 401
            echo twig_source($this->env, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Level (<span class=\"filter-active-num\">";
            // line 402
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 402)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 411));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 412
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 413
                echo ((("debug" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-level-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-level-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-level-";
                // line 414
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 422
            echo twig_source($this->env, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Channel (<span class=\"filter-active-num\">";
            // line 423
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, false, 423)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 432
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, false, 432));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 433
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 434
                echo ((("event" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-channel-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-channel-";
                // line 435
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["value"]), "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            echo "                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col style=\"width: 140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 456));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 457
                echo "                    ";
                $context["css_class"] = ((("error" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 457))) ? ("error") : (((((twig_get_attribute($this->env, $this->source,                 // line 458
$context["log"], "priorityName", [], "any", false, false, false, 458) == "WARNING") || ("deprecation" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 458)))) ? ("warning") : (((("silenced" == twig_get_attribute($this->env, $this->source,                 // line 459
$context["log"], "type", [], "any", false, false, false, 459))) ? ("silenced") : (""))))));
                // line 461
                echo "                    <tr class=\"log-status-";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 461), "html", null, true);
                echo "\" data-priority=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 461), "html", null, true);
                echo "\" data-channel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 461), "html", null, true);
                echo "\" style=\"";
                echo (((("event" == twig_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 461)) || ("DEBUG" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 461)))) ? ("display: none") : (""));
                echo "\">
                        <td class=\"log-timestamp\">
                            <time class=\"newline\" title=\"";
                // line 463
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 463), "r"), "html", null, true);
                echo "\" datetime=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 463), twig_constant("DateTimeInterface::RFC3339_EXTENDED")), "html", null, true);
                echo "\" data-convert-to-user-timezone data-render-as-time data-render-with-millisecond-precision>
                                ";
                // line 464
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 464), "H:i:s.v"), "html", null, true);
                echo "
                            </time>

                            ";
                // line 467
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 467), ["error", "deprecation", "silenced"]) || ("WARNING" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 467)))) {
                    // line 468
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 469
                    if ((("error" == twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 469)) || ("WARNING" == twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 469)))) {
                        // line 470
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 470)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 472
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 472)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 474
                    echo "                                </span>
                            ";
                } else {
                    // line 476
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 477
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 477)), "html", null, true);
                    echo "
                                </span>
                            ";
                }
                // line 480
                echo "                        </td>

                        <td class=\"font-normal\">
                            ";
                // line 483
                echo twig_call_macro($macros["_self"], "macro_render_log_message", ["debug", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 483), $context["log"]], 483, $context, $this->getSourceContext());
                echo "
                        </td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>
    ";
        }
        // line 494
        echo "
    ";
        // line 495
        $context["compilerLogTotal"] = twig_array_reduce($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 495), function ($__total__, $__logs__) use ($context, $macros) { $context["total"] = $__total__; $context["logs"] = $__logs__; return (($context["total"] ?? null) + twig_length_filter($this->env, ($context["logs"] ?? null))); }, 0);
        // line 496
        echo "    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">(";
        // line 498
        echo twig_escape_filter($this->env, ($context["compilerLogTotal"] ?? null), "html", null, true);
        echo ")</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        ";
        // line 502
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 502))) {
            // line 503
            echo "            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        ";
        } else {
            // line 507
            echo "            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 516));
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
            foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                // line 517
                echo "                    <tr>
                        <td class=\"font-normal text-right\">";
                // line 518
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 520
                $context["context_id"] = ("context-compiler-" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 520));
                // line 521
                echo "
                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                // line 522
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</button>

                            <div id=\"";
                // line 524
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    ";
                // line 526
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["logs"]);
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 527
                    echo "                                        <li>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 527));
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 529
                echo "                                </ul>
                            </div>
                        </td>
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
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 534
            echo "                </tbody>
            </table>
        ";
        }
        // line 537
        echo "    </details>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 540
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 541
            echo "    ";
            $context["has_context"] = (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, false, 541) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 541)));
            // line 542
            echo "    ";
            $context["has_trace"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, false, 542), "exception", [], "any", false, true, false, 542), "trace", [], "any", true, true, false, 542);
            // line 543
            echo "
    ";
            // line 544
            if ( !($context["has_context"] ?? null)) {
                // line 545
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, false, 545));
                echo "
    ";
            } else {
                // line 547
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, false, 547), twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 547));
                echo "
    ";
            }
            // line 549
            echo "
    <div class=\"log-metadata\">
        ";
            // line 551
            if (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, false, 551)) {
                // line 552
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, false, 552), "html", null, true);
                echo "</span>
        ";
            }
            // line 554
            echo "
        ";
            // line 555
            if ((twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", true, true, false, 555) && (twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, false, 555) > 1))) {
                // line 556
                echo "            <span class=\"log-num-occurrences\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, false, 556), "html", null, true);
                echo " times</span>
        ";
            }
            // line 558
            echo "
        ";
            // line 559
            if (($context["has_context"] ?? null)) {
                // line 560
                echo "            ";
                $context["context_id"] = ((("context-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 561
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        ";
            }
            // line 563
            echo "
        ";
            // line 564
            if (($context["has_trace"] ?? null)) {
                // line 565
                echo "            ";
                $context["trace_id"] = ((("trace-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 566
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        ";
            }
            // line 568
            echo "
        ";
            // line 569
            if (($context["has_context"] ?? null)) {
                // line 570
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 571
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 571), 1);
                echo "
            </div>
        ";
            }
            // line 574
            echo "
        ";
            // line 575
            if (($context["has_trace"] ?? null)) {
                // line 576
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 577
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 577), "exception", [], "any", false, false, false, 577), "trace", [], "any", false, false, false, 577), 1);
                echo "
            </div>
        ";
            }
            // line 580
            echo "    </div>
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
        return "@WebProfiler/Collector/logger.html.twig";
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
        return array (  1071 => 580,  1065 => 577,  1060 => 576,  1058 => 575,  1055 => 574,  1049 => 571,  1044 => 570,  1042 => 569,  1039 => 568,  1033 => 566,  1030 => 565,  1028 => 564,  1025 => 563,  1019 => 561,  1016 => 560,  1014 => 559,  1011 => 558,  1005 => 556,  1003 => 555,  1000 => 554,  994 => 552,  992 => 551,  988 => 549,  982 => 547,  976 => 545,  974 => 544,  971 => 543,  968 => 542,  965 => 541,  947 => 540,  939 => 537,  934 => 534,  916 => 529,  907 => 527,  903 => 526,  898 => 524,  889 => 522,  886 => 521,  884 => 520,  879 => 518,  876 => 517,  859 => 516,  848 => 507,  842 => 503,  840 => 502,  833 => 498,  829 => 496,  827 => 495,  824 => 494,  815 => 487,  797 => 483,  792 => 480,  786 => 477,  781 => 476,  777 => 474,  771 => 472,  765 => 470,  763 => 469,  758 => 468,  756 => 467,  750 => 464,  744 => 463,  730 => 461,  728 => 459,  727 => 458,  725 => 457,  708 => 456,  688 => 438,  677 => 435,  667 => 434,  664 => 433,  660 => 432,  648 => 423,  644 => 422,  637 => 417,  626 => 414,  616 => 413,  613 => 412,  609 => 411,  597 => 402,  593 => 401,  581 => 394,  575 => 391,  567 => 388,  561 => 385,  552 => 380,  550 => 379,  545 => 376,  543 => 375,  540 => 374,  537 => 373,  534 => 372,  528 => 368,  526 => 367,  522 => 365,  515 => 364,  507 => 361,  501 => 358,  498 => 357,  496 => 356,  491 => 354,  484 => 353,  477 => 352,  467 => 348,  464 => 347,  456 => 344,  446 => 339,  436 => 334,  432 => 332,  430 => 331,  427 => 330,  422 => 328,  417 => 327,  414 => 326,  411 => 325,  408 => 324,  401 => 323,  312 => 239,  305 => 238,  64 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/logger.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
}
