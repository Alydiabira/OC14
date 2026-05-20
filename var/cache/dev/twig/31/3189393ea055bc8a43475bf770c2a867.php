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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_6c1b3cd792ce7c4954e3711468ccfb06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            text-align: center;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }

        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-check\"] {
            color: var(--green-500);
        }
        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-x\"] {
            color: var(--red-500);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 54
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 54)) {
            // line 55
            echo "        ";
            ob_start(function () { return ''; });
            // line 56
            echo "            ";
            echo twig_source($this->env, "@Security/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 57
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 57), "n/a")) : ("n/a")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
        ";
            // line 60
            ob_start(function () { return ''; });
            // line 61
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 61)) {
                // line 62
                echo "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonatorUser", [], "any", false, false, false, 65), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
            }
            // line 69
            echo "
            <div class=\"sf-toolbar-info-group\">
                ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 71)) {
                // line 72
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 75), "html", null, true);
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 80
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 80)) ? ("green") : ("yellow"));
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 80)) ? ("Yes") : ("No"));
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                    // line 86
                    $context["remainingRoles"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 86), 1);
                    // line 87
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 87)), "html", null, true);
                    echo "
                                ";
                    // line 88
                    if ( !twig_test_empty(($context["remainingRoles"] ?? null))) {
                        // line 89
                        echo "                                    +
                                    <abbr title=\"";
                        // line 90
                        echo twig_escape_filter($this->env, twig_join_filter(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                        echo "\">
                                        ";
                        // line 91
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["remainingRoles"] ?? null)), "html", null, true);
                        echo " more
                                    </abbr>
                                ";
                    }
                    // line 94
                    echo "                            </span>
                        </div>

                        ";
                    // line 97
                    if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 97)) {
                        // line 98
                        echo "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                        // line 101
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 101))) {
                            // line 102
                            echo "                                        none
                                    ";
                        } else {
                            // line 104
                            echo "                                        ";
                            $context["remainingRoles"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 104), 1);
                            // line 105
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 105)), "html", null, true);
                            echo "
                                        ";
                            // line 106
                            if ( !twig_test_empty(($context["remainingRoles"] ?? null))) {
                                // line 107
                                echo "                                            +
                                            <abbr title=\"";
                                // line 108
                                echo twig_escape_filter($this->env, twig_join_filter(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                                echo "\">
                                                ";
                                // line 109
                                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["remainingRoles"] ?? null)), "html", null, true);
                                echo " more
                                            </abbr>
                                        ";
                            }
                            // line 112
                            echo "                                    ";
                        }
                        // line 113
                        echo "                                </span>
                            </div>
                        ";
                    }
                    // line 116
                    echo "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                    // line 119
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", [], "any", false, false, false, 119), "html", null, true));
                    echo "</span>
                        </div>
                    ";
                } else {
                    // line 122
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                }
                // line 127
                echo "
                    ";
                // line 128
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                // line 134
                echo "
                    ";
                // line 135
                if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 135) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 135))) {
                    // line 136
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 139), "html", null, true);
                    echo "\">Logout</a>
                                ";
                    // line 140
                    if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 140) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 140))) {
                        // line 141
                        echo "                                    | <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 141), "html", null, true);
                        echo "\">Exit impersonation</a>
                                ";
                    }
                    // line 143
                    echo "                            </span>
                        </div>
                    ";
                }
                // line 146
                echo "                ";
            } else {
                // line 147
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
            }
            // line 151
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        ";
            // line 154
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 159
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 159) ||  !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 159))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 160
        echo twig_source($this->env, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 165
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 166
        echo "    <h2>Security</h2>
    ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 167)) {
            // line 168
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 169
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 169))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 173)) {
                // line 174
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 176), "html", null, true);
                echo "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 181
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 181)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 197
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 197))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 197), 1)));
                echo "

                                        ";
                // line 199
                if (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 199) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 199)))) {
                    // line 200
                    echo "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 202
                echo "                                    </td>
                                </tr>

                                ";
                // line 205
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 205)) {
                    // line 206
                    echo "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 208
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 208))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 208), 1)));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 211
                echo "
                                ";
                // line 212
                if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 215
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 215));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 218
                echo "                            </tbody>
                        </table>
                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 220
($context["collector"] ?? null), "enabled", [], "any", false, false, false, 220)) {
                // line 221
                echo "                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    ";
            }
            // line 225
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 228
            echo ((( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 228) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 228), "security_enabled", [], "any", false, false, false, 228)))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 231
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 231)) {
                // line 232
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 234), "name", [], "any", false, false, false, 234), "html", null, true);
                echo "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 238
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 238), "security_enabled", [], "any", false, false, false, 238)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 242
                echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 242), "stateless", [], "any", false, false, false, 242)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 247
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 247), "security_enabled", [], "any", false, false, false, 247)) {
                    // line 248
                    echo "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 259
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 259), "provider", [], "any", false, false, false, 259)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 259), "provider", [], "any", false, false, false, 259), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 263
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 263), "context", [], "any", false, false, false, 263)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 263), "context", [], "any", false, false, false, 263), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 267
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 267), "entry_point", [], "any", false, false, false, 267)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 267), "entry_point", [], "any", false, false, false, 267), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 271
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 271), "user_checker", [], "any", false, false, false, 271)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 271), "user_checker", [], "any", false, false, false, 271), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 275
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 275), "access_denied_handler", [], "any", false, false, false, 275)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 275), "access_denied_handler", [], "any", false, false, false, 275), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 279
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 279), "access_denied_url", [], "any", false, false, false, 279)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 279), "access_denied_url", [], "any", false, false, false, 279), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 283
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 283), "authenticators", [], "any", false, false, false, 283))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 283), "authenticators", [], "any", false, false, false, 283), 1)));
                    echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 288
                echo "                    ";
            }
            // line 289
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 292
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 292)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 292), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 295
            if (twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 295)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 295), [])) : ([])))) {
                // line 296
                echo "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 300
                echo "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 309
                $context["previous_event"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 309));
                // line 310
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 310));
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
                    // line 311
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 311) || ($context["listener"] != ($context["previous_event"] ?? null)))) {
                        // line 312
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 312)) {
                            // line 313
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 315
                        echo "                                    <tbody>
                                    ";
                        // line 316
                        $context["previous_event"] = $context["listener"];
                        // line 317
                        echo "                                ";
                    }
                    // line 318
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 320
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 320));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 321
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 321) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 322
                    echo ((twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 322)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 322))) : ("(none)"));
                    echo "</td>
                                </tr>

                                ";
                    // line 325
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 325)) {
                        // line 326
                        echo "                                    </tbody>
                                ";
                    }
                    // line 328
                    echo "                            ";
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
                // line 329
                echo "                        </table>
                    ";
            }
            // line 331
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 334
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 334), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 337
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 337)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 337), [])) : ([])))) {
                // line 338
                echo "                        <table class=\"authenticators\">
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Authenticated</th>
                                <th>Duration</th>
                                <th>Passport</th>
                                <th>Badges</th>
                            </tr>
                            </thead>

                            ";
                // line 350
                $context["previous_event"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 350));
                // line 351
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 351));
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
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 352
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 352) || ($context["authenticator"] != ($context["previous_event"] ?? null)))) {
                        // line 353
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 353)) {
                            // line 354
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 356
                        echo "
                                    <tbody>
                                    ";
                        // line 358
                        $context["previous_event"] = $context["authenticator"];
                        // line 359
                        echo "                                ";
                    }
                    // line 360
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 362
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, false, 362));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 363
                    echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, false, 363)) ? ("yes") : ("no"))) . ".svg"));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 364
                    echo (( !(null === twig_get_attribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 364))) ? (twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 364)) ? ("yes") : ("no"))) . ".svg"))) : (""));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 365
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, false, 365) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 366
                    echo ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 366)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 366))) : ("(none)"));
                    echo "</td>
                                    <td class=\"font-normal\">
                                        ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", true, true, false, 368) &&  !(null === twig_get_attribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, false, 368)))) ? (twig_get_attribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, false, 368)) : ([])));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                        // line 369
                        echo "                                            <span class=\"badge badge-";
                        echo ((twig_get_attribute($this->env, $this->source, $context["badge"], "resolved", [], "any", false, false, false, 369)) ? ("resolved") : ("not_resolved"));
                        echo "\">
                                            ";
                        // line 370
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "stub", [], "any", false, false, false, 370), "html", null, true));
                        echo "
                                            </span>
                                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 373
                        echo "                                            (none)
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 375
                    echo "                                    </td>
                                </tr>

                                ";
                    // line 378
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 378)) {
                        // line 379
                        echo "                                    </tbody>
                                ";
                    }
                    // line 381
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 382
                echo "                        </table>
                    ";
            } else {
                // line 384
                echo "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 388
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 391
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 391)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 391), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 394
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 394)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 394), [])) : ([])))) {
                // line 395
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 397
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 397)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 397), "unknown")) : ("unknown")), "html", null, true);
                echo "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 411));
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
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 412
                    echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 413
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 413), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">";
                    // line 414
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
                    echo "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 417
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 420
            echo "                    ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 420)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 420), [])) : ([])))) {
                // line 421
                echo "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 439));
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
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 440
                    echo "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 441
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 441), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 443
                    echo ((twig_get_attribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 443)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 446
                    echo "
                                        </td>
                                        <td>
                                            ";
                    // line 449
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 449)) == 1)) {
                        // line 450
                        echo "                                                ";
                        $context["attribute"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 450));
                        // line 451
                        echo "                                                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 451)) {
                            // line 452
                            echo "                                                    Expression: <pre><code>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", false, false, false, 452), "html", null, true);
                            echo "</code></pre>
                                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 453
($context["attribute"] ?? null), "type", [], "any", false, false, false, 453) == "string")) {
                            // line 454
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, ($context["attribute"] ?? null), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 456
                            echo "                                                     ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, ($context["attribute"] ?? null));
                            echo "
                                                ";
                        }
                        // line 458
                        echo "                                            ";
                    } else {
                        // line 459
                        echo "                                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 459));
                        echo "
                                            ";
                    }
                    // line 461
                    echo "                                        </td>
                                        <td>";
                    // line 462
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, false, 462));
                    echo "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 467
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 467))) {
                        // line 468
                        echo "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 468));
                        // line 469
                        echo "                                            <div id=\"";
                        echo twig_escape_filter($this->env, ($context["voter_details_id"] ?? null), "html", null, true);
                        echo "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 472
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 472));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 473
                            echo "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 474
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($__internal_compile_0 = $context["voter_detail"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["class"] ?? null) : null));
                            echo "</td>
                                                            ";
                            // line 475
                            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 475) == "unanimous")) {
                                // line 476
                                echo "                                                            <td class=\"font-normal text-small\">attribute ";
                                echo twig_escape_filter($this->env, (($__internal_compile_1 = (($__internal_compile_2 = $context["voter_detail"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["attributes"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "html", null, true);
                                echo "</td>
                                                            ";
                            }
                            // line 478
                            echo "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 479
                            if (((($__internal_compile_3 = $context["voter_detail"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 480
                                echo "                                                                    ACCESS GRANTED
                                                                ";
                            } elseif (((($__internal_compile_4 =                             // line 481
$context["voter_detail"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 482
                                echo "                                                                    ACCESS ABSTAIN
                                                                ";
                            } elseif (((($__internal_compile_5 =                             // line 483
$context["voter_detail"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["vote"] ?? null) : null) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 484
                                echo "                                                                    ACCESS DENIED
                                                                ";
                            } else {
                                // line 486
                                echo "                                                                    unknown (";
                                echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["voter_detail"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["vote"] ?? null) : null), "html", null, true);
                                echo ")
                                                                ";
                            }
                            // line 488
                            echo "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 491
                        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 494
                        echo twig_escape_filter($this->env, ($context["voter_details_id"] ?? null), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 496
                    echo "                                        </td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 499
                echo "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 503
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
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
        return array (  1141 => 503,  1135 => 499,  1119 => 496,  1114 => 494,  1109 => 491,  1101 => 488,  1095 => 486,  1091 => 484,  1089 => 483,  1086 => 482,  1084 => 481,  1081 => 480,  1079 => 479,  1076 => 478,  1070 => 476,  1068 => 475,  1064 => 474,  1061 => 473,  1057 => 472,  1050 => 469,  1047 => 468,  1045 => 467,  1037 => 462,  1034 => 461,  1028 => 459,  1025 => 458,  1019 => 456,  1013 => 454,  1011 => 453,  1006 => 452,  1003 => 451,  1000 => 450,  998 => 449,  993 => 446,  991 => 443,  986 => 441,  983 => 440,  966 => 439,  946 => 421,  943 => 420,  938 => 417,  921 => 414,  917 => 413,  914 => 412,  897 => 411,  880 => 397,  876 => 395,  874 => 394,  868 => 391,  863 => 388,  857 => 384,  853 => 382,  839 => 381,  835 => 379,  833 => 378,  828 => 375,  821 => 373,  813 => 370,  808 => 369,  803 => 368,  798 => 366,  794 => 365,  790 => 364,  786 => 363,  782 => 362,  778 => 360,  775 => 359,  773 => 358,  769 => 356,  765 => 354,  762 => 353,  759 => 352,  741 => 351,  739 => 350,  725 => 338,  723 => 337,  717 => 334,  712 => 331,  708 => 329,  694 => 328,  690 => 326,  688 => 325,  682 => 322,  678 => 321,  674 => 320,  670 => 318,  667 => 317,  665 => 316,  662 => 315,  658 => 313,  655 => 312,  652 => 311,  634 => 310,  632 => 309,  621 => 300,  615 => 296,  613 => 295,  607 => 292,  602 => 289,  599 => 288,  591 => 283,  584 => 279,  577 => 275,  570 => 271,  563 => 267,  556 => 263,  549 => 259,  536 => 248,  534 => 247,  526 => 242,  519 => 238,  512 => 234,  508 => 232,  506 => 231,  500 => 228,  495 => 225,  489 => 221,  487 => 220,  483 => 218,  477 => 215,  473 => 213,  471 => 212,  468 => 211,  462 => 208,  458 => 206,  456 => 205,  451 => 202,  447 => 200,  445 => 199,  440 => 197,  421 => 181,  413 => 176,  409 => 174,  407 => 173,  400 => 169,  397 => 168,  395 => 167,  392 => 166,  385 => 165,  374 => 160,  369 => 159,  362 => 158,  352 => 154,  349 => 153,  345 => 151,  339 => 147,  336 => 146,  331 => 143,  325 => 141,  323 => 140,  319 => 139,  314 => 136,  312 => 135,  309 => 134,  303 => 131,  299 => 129,  297 => 128,  294 => 127,  287 => 122,  281 => 119,  276 => 116,  271 => 113,  268 => 112,  262 => 109,  258 => 108,  255 => 107,  253 => 106,  248 => 105,  245 => 104,  241 => 102,  239 => 101,  234 => 98,  232 => 97,  227 => 94,  221 => 91,  217 => 90,  214 => 89,  212 => 88,  207 => 87,  205 => 86,  194 => 80,  186 => 75,  182 => 73,  179 => 72,  177 => 71,  173 => 69,  166 => 65,  161 => 62,  158 => 61,  156 => 60,  153 => 59,  148 => 57,  143 => 56,  140 => 55,  137 => 54,  130 => 53,  76 => 6,  69 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Security/Collector/security.html.twig", "/Users/diabiraaly/Desktop/Bureau - MacBook Air de DIABIRA/Openclassrooms/OC14/Exercice Mettez en place des tests dans votre code/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
}
