<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/smileshoppe/templates/layout/page.html.twig */
class __TwigTemplate_c41137271b2e0d7210cbb491bce555675200f2d11a25c119e402bd23e70cfe62 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 90];
        $filters = ["escape" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "<div class=\"page\">
\t<div class=\"sidebar\">
\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" class=\"logo\">Smile Shoppe</a>
\t\t";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
\t</div><!-- /.sidebar -->
\t<div class=\"content\">
\t\t<div class=\"header cf\">
\t    \t";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
\t\t</div><!-- /.header -->
\t\t<div class=\"main cf\">
\t    \t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t    <!-- PHOTO -->
\t\t    ";
        // line 89
        echo "\t    
\t\t\t";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 91
            echo "\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t";
        }
        // line 93
        echo "\t\t
\t\t\t";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "info_messages", [])) {
            // line 95
            echo "\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "info_messages", [])), "html", null, true);
            echo "
\t\t\t";
        }
        // line 97
        echo "\t\t    
\t\t\t";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

\t\t\t";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "sub_content", [])) {
            // line 101
            echo "\t\t\t<div id=\"sub-content\">
\t\t\t\t";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_content", [])), "html", null, true);
            echo "
\t\t\t</div><!-- /#sub-content -->
\t\t\t";
        }
        // line 105
        echo "\t\t</div><!-- /.main -->
\t\t<div class=\"footer cf\">
\t\t    ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
\t\t</div> <!-- /.footer -->
\t</div> <!-- /.content -->
</div><!-- /.page -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/smileshoppe/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 107,  119 => 105,  113 => 102,  110 => 101,  108 => 100,  103 => 98,  100 => 97,  94 => 95,  92 => 94,  89 => 93,  83 => 91,  81 => 90,  78 => 89,  70 => 52,  63 => 48,  59 => 47,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/smileshoppe/templates/layout/page.html.twig", "/home/smileshoppe/public_html/themes/custom/smileshoppe/templates/layout/page.html.twig");
    }
}
