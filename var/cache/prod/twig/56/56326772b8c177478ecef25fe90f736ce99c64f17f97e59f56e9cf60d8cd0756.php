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

/* @ContaoCore/Backend/be_page.html.twig */
class __TwigTemplate_e2d08765d14548b5490e584212f53d8e7e237faf445f3f5721b186726459606f extends \Twig\Template
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
        // line 1
        echo $this->extensions['Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension']->renderContaoBackendTemplate(["main" =>         $this->renderBlock("main", $context, $blocks), "error" =>         $this->renderBlock("error", $context, $blocks), "headline" =>         $this->renderBlock("headline", $context, $blocks)]);
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_page.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Backend\\be_page.html.twig");
    }
}
