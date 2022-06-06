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

/* @ContaoCore/Backend/be_header_menu.html.twig */
class __TwigTemplate_f637129c7346ed576898de6930072382d65bd96fcbfd04a242ac3d1215793d12 extends \Twig\Template
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
        echo "<nav aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.headerNavigation", [], "contao_default"), "html", null, true);
        echo "\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "requestUri", [], "any", false, false, false, 3), "html", null, true);
        echo "#skipHeaderNav\" class=\"invisible\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.skipNavigation", [], "contao_default"), "html", null, true);
        echo "</a>
    ";
        // line 4
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("be_header_menu", ["allow_safe_labels" => true]);
        echo "
    <a id=\"skipHeaderNav\" class=\"invisible\">&nbsp;</a>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_header_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_header_menu.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Backend\\be_header_menu.html.twig");
    }
}
