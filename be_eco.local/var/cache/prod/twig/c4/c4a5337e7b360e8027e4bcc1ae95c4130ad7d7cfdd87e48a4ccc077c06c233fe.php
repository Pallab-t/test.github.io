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

/* @ContaoCore/Frontend/preview_toolbar_base.html.twig */
class __TwigTemplate_97cb49e9b1e4645d800d03a04809be55d763496fbcbefbc89c631f9201bc631d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"cto-toolbar__open\">
    <a href=\"#\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.openToolbar", [], "contao_default"), "html", null, true);
        echo "\">";
        echo twig_include($this->env, $context, "@ContaoCore/Collector/contao.svg");
        echo "</a>
</div>
<div class=\"cto-toolbar__inside\">
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"formbody\">
            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_switch\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 10
        if (($context["canSwitchUser"] ?? null)) {
            // line 11
            echo "                <div>
                    <label for=\"ctrl_user\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.feUser", [], "contao_default"), "html", null, true);
            echo ":</label>
                    <input type=\"text\" name=\"user\" id=\"ctrl_user\" list=\"userlist\" class=\"tl_text user\" placeholder=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.username", [], "contao_default"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\" autocomplete=\"off\">
                    <datalist id=\"userlist\"></datalist>
                </div>
            ";
        }
        // line 17
        echo "            <div>
                <label for=\"ctrl_unpublished\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.hiddenElements", [], "contao_default"), "html", null, true);
        echo ":</label>
                <select name=\"unpublished\" id=\"ctrl_unpublished\" class=\"tl_select\">
                    <option value=\"hide\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.hiddenHide", [], "contao_default"), "html", null, true);
        echo "</option>
                    <option value=\"show\"";
        // line 21
        if (($context["show"] ?? null)) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.hiddenShow", [], "contao_default"), "html", null, true);
        echo "</option>
                </select>
                <button type=\"submit\" class=\"tl_submit\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.apply", [], "contao_default"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
    <div class=\"cto-toolbar__close\"><a href=\"#\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.closeToolbar", [], "contao_default"), "html", null, true);
        echo "\">&times;</a></div>
</div>
<div class=\"cto-toolbar__clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Frontend/preview_toolbar_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  97 => 23,  88 => 21,  84 => 20,  79 => 18,  76 => 17,  67 => 13,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Frontend/preview_toolbar_base.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Frontend\\preview_toolbar_base.html.twig");
    }
}
