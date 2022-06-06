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

/* @ContaoCore/Error/backend.html.twig */
class __TwigTemplate_61299e4c62739bbcf4db9eab3c3584cbba8c367b5f71f543f7dbf8d8be74ad34 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/backend.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["statusName"] ?? null), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.matter", [], "contao_exception"), "html", null, true);
        echo "</h2>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["exception"] ?? null), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@ContaoCore/Error/backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  62 => 7,  58 => 6,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Error/backend.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\core-bundle\\src\\Resources\\views\\Error\\backend.html.twig");
    }
}
