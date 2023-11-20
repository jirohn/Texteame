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

/* themes/custom/xtractor-theme/templates/page.html.twig */
class __TwigTemplate_8c625a6ec711510982ca4d23c7cd75cc extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

</head>
<body>
<header class=\"header clearfix\"> 
  ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 8)) {
            // line 9
            echo "    <nav class=\"primary-menu\">
      ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
    </nav>
  ";
        }
        // line 12
        echo " 
  <div class=\"site-branding-xtractr\">
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 14)) {
            // line 15
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 17
        echo "  </div>
  ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 18)) {
            // line 19
            echo "    <nav class=\"navigation\">
      ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
    </nav>
  ";
        }
        // line 23
        echo "</header>
<!-- añadimos la cartela con ancho completo que se lo daremos en los stilos -->
";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cartela", [], "any", false, false, true, 25)) {
            // line 26
            echo "  <div class=\"cartela\">
    ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cartela", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 30
        echo "
<div class=\"main-content clearfix\">
  <section class=\"content\">
    ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
  </section>
  ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isAuthenticated", [], "method", false, false, true, 35)) {
            // line 36
            echo "    <aside class=\"sidebar\">
      ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 37)) {
                // line 38
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 40
            echo "    </aside>
  ";
        }
        // line 42
        echo "</div>

<footer>
  <div class=\"footer-content\">
    ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
  </div>
  <h1>Texteame 2023, Grupo TTA</h1>
</footer>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/xtractor-theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  127 => 42,  123 => 40,  117 => 38,  115 => 37,  112 => 36,  110 => 35,  105 => 33,  100 => 30,  94 => 27,  91 => 26,  89 => 25,  85 => 23,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  65 => 15,  63 => 14,  59 => 12,  53 => 10,  50 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/xtractor-theme/templates/page.html.twig", "/homepages/0/d794397196/htdocs/clickandbuilds/PubliKtor/themes/custom/xtractor-theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
