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

/* core/themes/seven/templates/classy/misc/progress-bar.html.twig */
class __TwigTemplate_d52630a23e106c0d1be06c5e6911a06159230e8a5d1bde365beb9e496375588e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 14];
        $functions = ["attach_library" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("seven/classy.progress"), "html", null, true);
        echo "
<div class=\"progress\" data-drupal-progress>
  ";
        // line 16
        if (($context["label"] ?? null)) {
            // line 17
            echo "    <div class=\"progress__label\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
  ";
        }
        // line 19
        echo "  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percent"] ?? null)), "html", null, true);
        echo "%\"></div></div>
  <div class=\"progress__percentage\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percent"] ?? null)), "html", null, true);
        echo "%</div>
  <div class=\"progress__description\">";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null)), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/misc/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 20,  68 => 19,  62 => 17,  60 => 16,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a progress bar.
 *
 * Note that the core Batch API uses this only for non-JavaScript batch jobs.
 *
 * Available variables:
 * - label: The label of the working task.
 * - percent: The percentage of the progress.
 * - message: A string containing information to be displayed.
 */
#}
{{ attach_library('seven/classy.progress') }}
<div class=\"progress\" data-drupal-progress>
  {% if label %}
    <div class=\"progress__label\">{{ label }}</div>
  {% endif %}
  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: {{ percent }}%\"></div></div>
  <div class=\"progress__percentage\">{{ percent }}%</div>
  <div class=\"progress__description\">{{ message }}</div>
</div>
", "core/themes/seven/templates/classy/misc/progress-bar.html.twig", "/nfs/c03/h03/mnt/49724/domains/dsvoboda.com/html/core/themes/seven/templates/classy/misc/progress-bar.html.twig");
    }
}
