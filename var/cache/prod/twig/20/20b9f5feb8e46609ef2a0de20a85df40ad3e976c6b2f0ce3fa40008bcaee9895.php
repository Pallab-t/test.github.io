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

/* @ContaoInstallation/main.html.twig */
class __TwigTemplate_8f88f36961c134f3b95e87813cf28e1755d16daeacc7efe94e4b6b8dda167e4c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoInstallation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <fieldset class=\"tl_tbox";
        if ((twig_test_empty(($context["sql_form"] ?? null)) && twig_test_empty(($context["sql_message"] ?? null)))) {
            echo " collapsed";
        }
        echo "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</legend>
    <div>
      <h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</h3>
      ";
        // line 9
        if (twig_test_empty(($context["sql_form"] ?? null))) {
            // line 10
            echo "        <p class=\"tl_confirm\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables_confirm", [], "ContaoInstallationBundle"), "html", null, true);
            echo "</p>
      ";
        }
        // line 12
        echo "      <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables_explain", [], "ContaoInstallationBundle");
        echo "</p>
      ";
        // line 13
        if ( !twig_test_empty(($context["sql_message"] ?? null))) {
            // line 14
            echo "        <div id=\"sql_message\">";
            echo ($context["sql_message"] ?? null);
            echo "</div>
      ";
        }
        // line 16
        echo "      ";
        if ( !twig_test_empty(($context["sql_form"] ?? null))) {
            // line 17
            echo "        <form method=\"post\">
          <div class=\"tl_formbody\">
            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_update\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
            echo "\">
            <div id=\"sql_wrapper\">
              <table id=\"sql_table\">
              ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sql_form"] ?? null));
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
            foreach ($context['_seq'] as $context["category"] => $context["commands"]) {
                // line 24
                echo "                ";
                if ( !twig_test_empty($context["commands"])) {
                    // line 25
                    echo "                  <tr>
                    <td colspan=\"2\" class=\"tl_col_0\">";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["category"], [], "ContaoInstallationBundle"), "html", null, true);
                    echo "</td>
                  </tr>
                  <tr>
                    <td class=\"tl_col_1\"><input type=\"checkbox\" id=\"check_all_";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" class=\"tl_checkbox\" onclick=\"Backend.toggleCheckboxElements(this, '";
                    echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                    echo "')\"";
                    if ((!twig_in_filter("DROP", $context["category"]) || twig_in_filter("DROP INDEX", $context["category"]))) {
                        echo " checked";
                    }
                    echo "></td>
                    <td class=\"tl_col_2\"><label for=\"check_all_";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" style=\"color:#a6a6a6\"><em>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select_all", [], "ContaoInstallationBundle"), "html", null, true);
                    echo "</em></label></td>
                  </tr>
                  ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["commands"]);
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
                    foreach ($context['_seq'] as $context["md5"] => $context["command"]) {
                        // line 33
                        echo "                    <tr>
                      <td class=\"tl_col_1\"><input type=\"checkbox\" name=\"sql[]\" id=\"sql_";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 34), "loop", [], "any", false, false, false, 34), "index", [], "any", false, false, false, 34), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
                        echo "\" class=\"tl_checkbox ";
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $context["md5"], "html", null, true);
                        echo "\"";
                        if ((!twig_in_filter("DROP", $context["command"]) || twig_in_filter("DROP INDEX", $context["command"]))) {
                            echo " checked";
                        }
                        echo "></td>
                      <td class=\"tl_col_2\"><pre><label for=\"sql_";
                        // line 35
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 35), "loop", [], "any", false, false, false, 35), "index", [], "any", false, false, false, 35), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35), "html", null, true);
                        echo "\">";
                        if (twig_in_filter("CREATE", $context["command"])) {
                            echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery($context["command"]);
                        } else {
                            echo twig_escape_filter($this->env, $context["command"], "html", null, true);
                        }
                        echo "</label></pre></td>
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
                    unset($context['_seq'], $context['_iterated'], $context['md5'], $context['command'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "                ";
                }
                // line 39
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['commands'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "              </table>
            </div>
          </div>
          <div class=\"tl_formbody_submit\">
            <div class=\"tl_submit_container\">
              <button type=\"submit\" class=\"tl_submit\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_save", [], "ContaoInstallationBundle"), "html", null, true);
            echo "</button>
            </div>
          </div>
        </form>
      ";
        }
        // line 50
        echo "    </div>
  </fieldset>
  <fieldset class=\"tl_box";
        // line 52
        if (($context["has_admin"] ?? null)) {
            echo " collapsed";
        }
        echo "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</legend>
    <div>
      <h3>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</h3>
      ";
        // line 56
        if ((isset($context["import_error"]) || array_key_exists("import_error", $context))) {
            // line 57
            echo "        <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["import_error"] ?? null), "html", null, true);
            echo "</p>
      ";
        } elseif (        // line 58
(isset($context["import_date"]) || array_key_exists("import_date", $context))) {
            // line 59
            echo "        <p class=\"tl_confirm\">";
            echo twig_escape_filter($this->env, sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imported_on", [], "ContaoInstallationBundle"), ($context["import_date"] ?? null)), "html", null, true);
            echo "</p>
      ";
        } else {
            // line 61
            echo "        <p class=\"tl_info\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("import_data_will_be_deleted", [], "ContaoInstallationBundle"), "html", null, true);
            echo "</p>
      ";
        }
        // line 63
        echo "      <p>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import_explain", [], "ContaoInstallationBundle");
        echo "</p>
      <form method=\"post\">
        <div class=\"tl_formbody_submit\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_template_import\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
          <h4><label for=\"template\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("templates", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</label></h4>
          <select name=\"template\" id=\"template\" class=\"tl_select\" required>
            <option value=\"\">-</option>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 72
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "          </select>
          <div class=\"tl_checkbox_container\" style=\"margin-top:3px\">
            <input type=\"checkbox\" name=\"preserve\" id=\"ctrl_preserve\" class=\"tl_checkbox\" value=\"1\"> <label for=\"ctrl_preserve\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("do_not_truncate", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</label>
          </div>
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\" onclick=\"if(!confirm('";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("import_confirm", [], "ContaoInstallationBundle"), "html", null, true);
        echo "'))return false;Backend.getScrollOffset()\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_save", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  ";
        // line 87
        if ( !($context["hide_admin"] ?? null)) {
            // line 88
            echo "    <fieldset class=\"tl_box";
            if (($context["has_admin"] ?? null)) {
                echo " collapsed";
            }
            echo "\">
      <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create", [], "ContaoInstallationBundle"), "html", null, true);
            echo "</legend>
      <div>
        <h3>";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create", [], "ContaoInstallationBundle"), "html", null, true);
            echo "</h3>
        ";
            // line 92
            if ((isset($context["admin_error"]) || array_key_exists("admin_error", $context))) {
                // line 93
                echo "          <p class=\"tl_error\">";
                echo twig_escape_filter($this->env, ($context["admin_error"] ?? null), "html", null, true);
                echo "</p>
        ";
            } elseif (            // line 94
($context["has_admin"] ?? null)) {
                // line 95
                echo "          <p class=\"tl_confirm\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_confirm", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</p>
        ";
            }
            // line 97
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create_explain", [], "ContaoInstallationBundle"), "html", null, true);
            echo "</p>
        ";
            // line 98
            if ( !($context["has_admin"] ?? null)) {
                // line 99
                echo "          <form method=\"post\">
            <div class=\"tl_formbody\">
              <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_admin\">
              <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
                // line 102
                echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
                echo "\">
              <h4><label for=\"username\">";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_username", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</label></h4>
              ";
                // line 104
                if ((isset($context["admin_username_error"]) || array_key_exists("admin_username_error", $context))) {
                    // line 105
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_username_error"] ?? null), "html", null, true);
                    echo "</p>
              ";
                }
                // line 107
                echo "              <input type=\"text\" name=\"username\" id=\"username\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_username_value"]) || array_key_exists("admin_username_value", $context))) ? (_twig_default_filter(($context["admin_username_value"] ?? null))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"name\">";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_name", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</label></h4>
              <input type=\"text\" name=\"name\" id=\"name\" class=\"tl_text\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, (((isset($context["admin_name_value"]) || array_key_exists("admin_name_value", $context))) ? (_twig_default_filter(($context["admin_name_value"] ?? null))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"email\">";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_email", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</label></h4>
              ";
                // line 111
                if ((isset($context["admin_email_error"]) || array_key_exists("admin_email_error", $context))) {
                    // line 112
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_email_error"] ?? null), "html", null, true);
                    echo "</p>
              ";
                }
                // line 114
                echo "              <input type=\"email\" name=\"email\" id=\"email\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_email_value"]) || array_key_exists("admin_email_value", $context))) ? (_twig_default_filter(($context["admin_email_value"] ?? null))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"password\">";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</label></h4>
              ";
                // line 116
                if ((isset($context["admin_password_error"]) || array_key_exists("admin_password_error", $context))) {
                    // line 117
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_password_error"] ?? null), "html", null, true);
                    echo "</p>
              ";
                }
                // line 119
                echo "              <input type=\"password\" name=\"password\" id=\"password\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_password_value"]) || array_key_exists("admin_password_value", $context))) ? (_twig_default_filter(($context["admin_password_value"] ?? null))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"confirmation\">";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirmation", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</label></h4>
              <input type=\"password\" name=\"confirmation\" id=\"confirmation\" class=\"tl_text\" value=\"";
                // line 121
                echo twig_escape_filter($this->env, (((isset($context["admin_confirmation_value"]) || array_key_exists("admin_confirmation_value", $context))) ? (_twig_default_filter(($context["admin_confirmation_value"] ?? null))) : ("")), "html", null, true);
                echo "\" required>
            </div>
            <div class=\"tl_formbody_submit\">
              <div class=\"tl_submit_container\">
                <button type=\"submit\" class=\"tl_submit\">";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_save", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</button>
              </div>
            </div>
          </form>
        ";
            }
            // line 130
            echo "      </div>
    </fieldset>
    ";
            // line 132
            if (($context["has_admin"] ?? null)) {
                // line 133
                echo "      <fieldset class=\"tl_box last\">
        <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("installation_complete", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</legend>
        <div>
          <h3>";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("congratulations", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</h3>
          <p class=\"tl_confirm\">";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("congratulations_explain", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</p>
          <p>";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("installation_complete_explain", [], "ContaoInstallationBundle"), "html", null, true);
                echo "</p>
        </div>
      </fieldset>
      <p id=\"back_end\"><a href=\"";
                // line 141
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contao_backend", [], true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back_end", [], "ContaoInstallationBundle"), "html", null, true);
                echo " ›</a></p>
    ";
            }
            // line 143
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 143,  489 => 141,  483 => 138,  479 => 137,  475 => 136,  470 => 134,  467 => 133,  465 => 132,  461 => 130,  453 => 125,  446 => 121,  442 => 120,  437 => 119,  431 => 117,  429 => 116,  425 => 115,  420 => 114,  414 => 112,  412 => 111,  408 => 110,  404 => 109,  400 => 108,  395 => 107,  389 => 105,  387 => 104,  383 => 103,  379 => 102,  374 => 99,  372 => 98,  367 => 97,  361 => 95,  359 => 94,  354 => 93,  352 => 92,  348 => 91,  343 => 89,  336 => 88,  334 => 87,  323 => 81,  315 => 76,  311 => 74,  300 => 72,  296 => 71,  290 => 68,  286 => 67,  278 => 63,  272 => 61,  266 => 59,  264 => 58,  259 => 57,  257 => 56,  253 => 55,  248 => 53,  242 => 52,  238 => 50,  230 => 45,  223 => 40,  209 => 39,  206 => 38,  181 => 35,  167 => 34,  164 => 33,  147 => 32,  140 => 30,  130 => 29,  124 => 26,  121 => 25,  118 => 24,  101 => 23,  95 => 20,  90 => 17,  87 => 16,  81 => 14,  79 => 13,  74 => 12,  68 => 10,  66 => 9,  62 => 8,  57 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/main.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\main.html.twig");
    }
}
