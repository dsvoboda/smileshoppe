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

/* themes/custom/smileshoppe/templates/content/node--faq.html.twig */
class __TwigTemplate_3116d2fe0a2e22d7892f8103620416ddb61f8a49e77af06dd5004ec94dd75fc6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 74, "if" => 86];
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
\t\t";
        // line 86
        if ( !twig_test_empty($this->getAttribute(($context["node"] ?? null), "field_image", []))) {
            // line 87
            echo "\t\t<div class=\"page-photo\">
\t\t\t";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        // line 91
        echo "\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/smileshoppe/templates/content/node--faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 91,  81 => 88,  78 => 87,  76 => 86,  72 => 85,  67 => 84,  62 => 83,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
\tset classes = [
\t\t'type-' ~ node.bundle|clean_class,
\t\tnode.isPromoted() ? 'promoted',
\t\tnode.isSticky() ? 'sticky',
\t\tnot node.isPublished() ? 'unpublished',
\t\tview_mode ? 'view-mode-' ~ view_mode|clean_class,
\t\t'clearfix',
\t]
%}
<div{{ attributes.addClass(classes).setAttribute('id','node-'~node.id()) }}>
\t{{ title_prefix }}{{ title_suffix }}
\t<div{{ content_attributes.addClass(node.bundle|clean_class ~ '-content').addClass('node-content') }}>
\t\t{% if node.field_image is not empty %}
\t\t<div class=\"page-photo\">
\t\t\t{{ content.field_image }}
\t\t</div>
\t\t{% endif %}
\t\t{{ content.body }}
\t</div>

</div>
", "themes/custom/smileshoppe/templates/content/node--faq.html.twig", "/nfs/c03/h03/mnt/49724/domains/dsvoboda.com/html/themes/custom/smileshoppe/templates/content/node--faq.html.twig");
    }
}
