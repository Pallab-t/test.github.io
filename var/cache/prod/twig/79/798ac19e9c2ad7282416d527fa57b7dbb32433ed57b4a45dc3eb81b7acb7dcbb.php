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

/* @ContaoInstallation/misconfigured_database_url.html.twig */
class __TwigTemplate_e864ef466c09508a57d639034761859f7826c76d0d3c163b44d62f8949f14bfa extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/misconfigured_database_url.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <fieldset class=\"tl_tbox nolegend\">
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("an_error_occurred", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</h3>
        <p class=\"tl_error\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_could_not_connect", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</p>
        <p>";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("misconfigured_database_url_explain", [], "ContaoInstallationBundle");
        echo "</p>
    </fieldset>
";
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/misconfigured_database_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/misconfigured_database_url.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\misconfigured_database_url.html.twig");
    }
}
