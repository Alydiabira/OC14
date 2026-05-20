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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_49921241b7c332868b31c0776496c0d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 4), "nb_errors", [], "any", false, false, false, 4) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 4), "forms", [], "any", false, false, false, 4)))) {
            // line 5
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 5), "nb_errors", [], "any", false, false, false, 5)) ? ("red") : (""));
            // line 6
            echo "        ";
            ob_start(function () { return ''; });
            // line 7
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "nb_errors", [], "any", false, false, false, 9)) ?: (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "forms", [], "any", false, false, false, 9)))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start(function () { return ''; });
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 16), "forms", [], "any", false, false, false, 16)), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 29), "nb_errors", [], "any", false, false, false, 29)) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 29), "forms", [], "any", false, false, false, 29))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 32), "nb_errors", [], "any", false, false, false, 32) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 34), "nb_errors", [], "any", false, false, false, 34), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 37
        echo "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = 'sf_toggle_data';
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll('.tree .tree-inner');
                treeItems.forEach((treeItem) => {
                    var targetId = treeItem.getAttribute('data-tab-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener('click', (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add('hidden');
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute('data-tab-target-id');
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove('active');
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add('hidden');
                }

                treeItem.classList.add('active');
                treePanel.classList.remove('hidden');

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll('.toggle-button');
                buttons.forEach((button) => {
                    const targetId = button.getAttribute('data-toggle-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains('hidden')) {
                        button.classList.add('closed');
                    }

                    button.addEventListener('click', (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains('closed');
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove('closed');
                    target.classList.remove('hidden');

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add('closed');
                    target.classList.add('hidden');

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains('closed')) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && 'object' === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 378
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 379
        echo "    <h2>Forms</h2>

    ";
        // line 381
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 381), "forms", [], "any", false, false, false, 381))) {
            // line 382
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 384), "forms", [], "any", false, false, false, 384));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 385
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_entry", [$context["formName"], $context["formData"], true], 385, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 391), "forms", [], "any", false, false, false, 391));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 392
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_details", [$context["formName"], $context["formData"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 392), "forms_by_hash", [], "any", false, false, false, 392), twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 392)], 392, $context, $this->getSourceContext());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "        </div>
    ";
        } else {
            // line 396
            echo "        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 402
    public function macro_form_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 403
            echo "    ";
            $context["has_error"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 403) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 403)) > 0));
            // line 404
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 405), "html", null, true);
            echo "-details\" title=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "\">
            ";
            // line 406
            if (($context["has_error"] ?? null)) {
                // line 407
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 407)), "html", null, true);
                echo "</div>
            ";
            }
            // line 409
            echo "
            ";
            // line 410
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 410))) {
                // line 411
                echo "                <button class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 411), "html", null, true);
                echo "-children\">
                    ";
                // line 412
                echo twig_source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                echo "
                </button>
            ";
            } else {
                // line 415
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 417
            echo "
            <span ";
            // line 418
            if ((($context["has_error"] ?? null) || ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 418)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 418), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 419
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 423
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 423))) {
                // line 424
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 424), "html", null, true);
                echo "-children\" ";
                if (( !($context["is_root"] ?? null) &&  !((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 424)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 424), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 425
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 425));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 426
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_form_tree_entry", [$context["childName"], $context["childData"], false], 426, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "            </ul>
        ";
            }
            // line 430
            echo "    </li>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 433
    public function macro_form_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 434
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter(($context["show"] ?? null), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 434)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 434), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>";
            // line 435
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "</h2>
        ";
            // line 436
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 436)) {
                // line 437
                echo "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 439
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", false, false, false, 439));
                echo "
            </div>
        ";
            }
            // line 442
            echo "
        ";
            // line 443
            $context["form_has_errors"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 443) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 443)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 443)) : ([])));
            // line 444
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 445
            echo ((($context["form_has_errors"] ?? null)) ? ("active") : ("disabled"));
            echo "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 449
            echo twig_call_macro($macros["_self"], "macro_render_form_errors", [($context["data"] ?? null)], 449, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 453
            echo (( !($context["form_has_errors"] ?? null)) ? ("active") : (""));
            echo "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 457
            echo twig_call_macro($macros["_self"], "macro_render_form_default_data", [($context["data"] ?? null)], 457, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 461
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, false, 461) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 461)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 461)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 465
            echo twig_call_macro($macros["_self"], "macro_render_form_submitted_data", [($context["data"] ?? null)], 465, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 469
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 469) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 469)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 469)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 473
            echo twig_call_macro($macros["_self"], "macro_render_form_passed_options", [($context["data"] ?? null)], 473, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 477
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 477) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 477)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 477)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 481
            echo twig_call_macro($macros["_self"], "macro_render_form_resolved_options", [($context["data"] ?? null)], 481, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 485
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 485) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 485)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 485)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 489
            echo twig_call_macro($macros["_self"], "macro_render_form_view_variables", [($context["data"] ?? null)], 489, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 495));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 496
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_details", [$context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null)], 496, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 500
    public function macro_render_form_errors($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 501
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 501) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 501)) > 0))) {
                // line 502
                echo "        <div class=\"errors\">
            <table id=\"";
                // line 503
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 503), "html", null, true);
                echo "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 512
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 512));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 513
                    echo "                    <tr>
                        <td>";
                    // line 514
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 514), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 516
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 516))) {
                        // line 517
                        echo "                                <em>This form.</em>
                            ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 518
($context["forms_by_hash"] ?? null), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 518), [], "array", true, true, false, 518)) {
                        // line 519
                        echo "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 521
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["forms_by_hash"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 521)] ?? null) : null), "name", [], "any", false, false, false, 521), "html", null, true);
                        echo "
                            ";
                    }
                    // line 523
                    echo "                        </td>
                        <td>
                            ";
                    // line 525
                    if (twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 525)) {
                        // line 526
                        echo "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 527
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 527));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 528
                            echo "                                    ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["stacked"]);
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 530
                        echo "                            ";
                    } else {
                        // line 531
                        echo "                                <em>Unknown.</em>
                            ";
                    }
                    // line 533
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 536
                echo "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 540
                echo "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 546
    public function macro_render_form_default_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 547
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, false, 547)) {
                // line 548
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 559
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 559), "model", [], "any", true, true, false, 559)) {
                    // line 560
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 560), "seek", ["model"], "method", false, false, false, 560));
                    echo "
                    ";
                } else {
                    // line 562
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 564
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 568
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 568), "seek", ["norm"], "method", false, false, false, 568));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 573
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 573), "view", [], "any", true, true, false, 573)) {
                    // line 574
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 574), "seek", ["view"], "method", false, false, false, 574));
                    echo "
                    ";
                } else {
                    // line 576
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 578
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 583
                echo "        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 589
    public function macro_render_form_submitted_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 590
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 590), "norm", [], "any", true, true, false, 590)) {
                // line 591
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 602
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 602), "view", [], "any", true, true, false, 602)) {
                    // line 603
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 603), "seek", ["view"], "method", false, false, false, 603));
                    echo "
                    ";
                } else {
                    // line 605
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 607
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 611
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 611), "seek", ["norm"], "method", false, false, false, 611));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 616
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 616), "model", [], "any", true, true, false, 616)) {
                    // line 617
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 617), "seek", ["model"], "method", false, false, false, 617));
                    echo "
                    ";
                } else {
                    // line 619
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 621
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 626
                echo "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 632
    public function macro_render_form_passed_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 633
            echo "    ";
            if ( !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 633) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 633)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 633)) : ([])))) {
                // line 634
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 643
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 643));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 644
                    echo "                <tr>
                    <th>";
                    // line 645
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 646
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                    echo "</td>
                    <td>
                        ";
                    // line 649
                    echo "                        ";
                    $context["option_value"] = ((twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, false, 649)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 649), $context["value"])) : ($context["value"]));
                    // line 650
                    echo "                        ";
                    $context["resolved_option_value"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 650), $context["option"], [], "array", false, true, false, 650), "value", [], "any", true, true, false, 650)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 650), $context["option"], [], "array", false, true, false, 650), "value", [], "any", false, false, false, 650), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 650)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["option"]] ?? null) : null))) : ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 650)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["option"]] ?? null) : null)));
                    // line 651
                    echo "                        ";
                    if ((($context["resolved_option_value"] ?? null) == ($context["option_value"] ?? null))) {
                        // line 652
                        echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 654
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 654), "seek", [$context["option"]], "method", false, false, false, 654));
                        echo "
                        ";
                    }
                    // line 656
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 659
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 662
                echo "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 668
    public function macro_render_form_resolved_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 669
            echo "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 677
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 677) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 677)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 677)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 678
                echo "            <tr>
                <th scope=\"row\">";
                // line 679
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</th>
                <td>";
                // line 680
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 683
            echo "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 687
    public function macro_render_form_view_variables($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 688
            echo "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 696
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 696) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 696)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 696)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 697
                echo "            <tr>
                <th scope=\"row\">";
                // line 698
                echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                echo "</th>
                <td>";
                // line 699
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 702
            echo "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/form.html.twig";
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
        return array (  1397 => 702,  1388 => 699,  1384 => 698,  1381 => 697,  1377 => 696,  1367 => 688,  1351 => 687,  1337 => 683,  1328 => 680,  1324 => 679,  1321 => 678,  1317 => 677,  1307 => 669,  1291 => 668,  1275 => 662,  1270 => 659,  1262 => 656,  1256 => 654,  1252 => 652,  1249 => 651,  1246 => 650,  1243 => 649,  1238 => 646,  1234 => 645,  1231 => 644,  1227 => 643,  1216 => 634,  1213 => 633,  1197 => 632,  1181 => 626,  1174 => 621,  1170 => 619,  1164 => 617,  1162 => 616,  1154 => 611,  1148 => 607,  1144 => 605,  1138 => 603,  1136 => 602,  1123 => 591,  1120 => 590,  1104 => 589,  1088 => 583,  1081 => 578,  1077 => 576,  1071 => 574,  1069 => 573,  1061 => 568,  1055 => 564,  1051 => 562,  1045 => 560,  1043 => 559,  1030 => 548,  1027 => 547,  1011 => 546,  995 => 540,  989 => 536,  981 => 533,  977 => 531,  974 => 530,  965 => 528,  961 => 527,  958 => 526,  956 => 525,  952 => 523,  946 => 521,  942 => 519,  940 => 518,  937 => 517,  935 => 516,  930 => 514,  927 => 513,  923 => 512,  911 => 503,  908 => 502,  905 => 501,  889 => 500,  870 => 496,  866 => 495,  857 => 489,  850 => 485,  843 => 481,  836 => 477,  829 => 473,  822 => 469,  815 => 465,  808 => 461,  801 => 457,  794 => 453,  787 => 449,  780 => 445,  777 => 444,  775 => 443,  772 => 442,  766 => 439,  762 => 437,  760 => 436,  756 => 435,  743 => 434,  724 => 433,  711 => 430,  707 => 428,  698 => 426,  694 => 425,  685 => 424,  683 => 423,  676 => 419,  670 => 418,  667 => 417,  663 => 415,  657 => 412,  652 => 411,  650 => 410,  647 => 409,  641 => 407,  639 => 406,  633 => 405,  630 => 404,  627 => 403,  609 => 402,  598 => 396,  594 => 394,  577 => 392,  560 => 391,  554 => 387,  545 => 385,  541 => 384,  537 => 382,  535 => 381,  531 => 379,  524 => 378,  337 => 198,  330 => 197,  167 => 41,  160 => 40,  152 => 37,  146 => 34,  143 => 33,  141 => 32,  136 => 30,  129 => 29,  122 => 28,  112 => 24,  109 => 23,  101 => 20,  94 => 16,  90 => 14,  88 => 13,  85 => 12,  79 => 9,  73 => 7,  70 => 6,  67 => 5,  64 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/form.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/web-profiler-bundle/Resources/views/Collector/form.html.twig");
    }
}
