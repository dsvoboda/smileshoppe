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

/* themes/custom/smileshoppe/templates/content/node--gallery-image.html.twig */
class __TwigTemplate_cf0e9c8741db1854df35919546918b8dee4ca91d7dfcdc0aace7a5461fe58775 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 74];
        $filters = ["clean_class" => 75, "escape" => 83];
        $functions = ["file_url" => 88];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['file_url']
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "id", 1 => ("node-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [], "method")))], "method"), "setAttribute", [0 => "data-id", 1 => $this->getAttribute(($context["node"] ?? null), "id", [], "method")], "method"), "setAttribute", [0 => "data-category", 1 => $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_category", []), "target_id", [])], "method")), "html", null, true);
        echo ">
\t";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
\t<div class=\"images\">
\t\t<div class=\"before\">
\t\t\t<p><strong>Before</strong></p>
\t\t\t<img src=\"";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_before_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" alt=\"\" />
\t\t</div>
\t\t<div class=\"after\">
\t\t\t<p><strong>After</strong></p>
\t\t\t<img src=\"";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_after_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" alt=\"\" />
\t\t</div>
\t</div>
\t<div class=\"information\">
\t\t<h2>";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h2>
\t\t<div class=\"description\">
\t\t\t";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/smileshoppe/templates/content/node--gallery-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 98,  89 => 96,  82 => 92,  75 => 88,  67 => 84,  62 => 83,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/smileshoppe/templates/content/node--gallery-image.html.twig", "/home/smileshoppe/public_html/themes/custom/smileshoppe/templates/content/node--gallery-image.html.twig");
    }
}
