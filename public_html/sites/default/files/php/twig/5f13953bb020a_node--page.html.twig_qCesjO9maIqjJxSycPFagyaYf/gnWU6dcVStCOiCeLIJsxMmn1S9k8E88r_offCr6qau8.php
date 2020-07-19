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

/* themes/custom/smileshoppe/templates/content/node--page.html.twig */
class __TwigTemplate_77737874c00c023e1f93d5ca159e6c44290768c9c4a264ede32f328fa2781d8c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 74, "if" => 92];
        $filters = ["clean_class" => 75, "escape" => 83];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 74
        $context["classes"] = [0 => ("type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 75
($context["node"] ?? null), "bundle", [])))), 1 => (($this->getAttribute(        // line 76
($context["node"] ?? null), "isPromoted", [], "method")) ? ("promoted") : ("")), 2 => (($this->getAttribute(        // line 77
($context["node"] ?? null), "isSticky", [], "method")) ? ("sticky") : ("")), 3 => (( !$this->getAttribute(        // line 78
($context["node"] ?? null), "isPublished", [], "method")) ? ("unpublished") : ("")), 4 => ((        // line 79
($context["view_mode"] ?? null)) ? (("view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 5 => "clearfix"];
        // line 83
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "id", 1 => ("node-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [], "method")))], "method")), "html", null, true);
        echo ">
\t";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
\t<div";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "bundle", []))) . "-content")], "method"), "addClass", [0 => "node-content"], "method")), "html", null, true);
        echo ">
\t\t<div class=\"page-header\">
\t\t\t<h1 class=\"title\">";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h1>
\t\t\t<hr />
\t\t</div>
\t\t<div class=\"subnav\"></div>
\t\t<span class=\"tagline\"><strong>Exceptional</strong>, comprehensive <strong>dental care</strong> for the <strong>whole family</strong>.</span>
\t\t";
        // line 92
        if ( !twig_test_empty($this->getAttribute(($context["node"] ?? null), "field_image", []))) {
            // line 93
            echo "\t\t<div class=\"page-photo\">
\t\t\t";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        // line 97
        echo "\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/smileshoppe/templates/content/node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 97,  90 => 94,  87 => 93,  85 => 92,  77 => 87,  72 => 85,  67 => 84,  62 => 83,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/smileshoppe/templates/content/node--page.html.twig", "/home/smileshoppe/public_html/themes/custom/smileshoppe/templates/content/node--page.html.twig");
    }
}
