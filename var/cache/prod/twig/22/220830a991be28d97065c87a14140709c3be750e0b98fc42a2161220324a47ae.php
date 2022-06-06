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

/* @ContaoInstallation/layout.html.twig */
class __TwigTemplate_9b9920e1ae037fff0e5554d895265329174f459754357a78fbaf5e74c50af7a5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\">
<head>

  <meta charset=\"utf-8\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("install_tool", [], "ContaoInstallationBundle"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo "</title>
  <meta name=\"generator\" content=\"Contao Open Source CMS\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
  <meta name=\"robots\" content=\"noindex,nofollow\">

  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/fonts.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/basic.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/install.min.css"), "html", null, true);
        echo "\">

  <script>var Contao={theme:'flexible',path:'";
        // line 16
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "'}</script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mootools/js/mootools.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/contaocore/mootao.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/contaocore/core.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/hover.min.js"), "html", null, true);
        echo "\"></script>

</head>
<body class=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["ua"] ?? null), "html", null, true);
        echo "\">

  <header id=\"header\">
    <h1>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("install_tool", [], "ContaoInstallationBundle"), "html", null, true);
        echo "</h1>
  </header>

  <div id=\"container\">
    <main id=\"main\">
      ";
        // line 31
        $this->displayBlock('main', $context, $blocks);
        // line 32
        echo "    </main>
  </div>

</body>
</html>
";
    }

    // line 31
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@ContaoInstallation/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  109 => 32,  107 => 31,  99 => 26,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  66 => 14,  62 => 13,  58 => 12,  48 => 7,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/layout.html.twig", "C:\\xampp\\htdocs\\be_eco.local\\vendor\\contao\\installation-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
