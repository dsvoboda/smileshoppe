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
class __TwigTemplate_3b56ea94a5276e053427ce3f50c8cf38374b22d6b40959013f21ef40293cc756 extends \Twig\Template
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
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"page\">
\t<div class=\"sidebar\">
\t\t<a href=\"{{ front_page }}\" class=\"logo\">Smile Shoppe</a>
\t\t{{ page.sidebar_first }}
\t</div><!-- /.sidebar -->
\t<div class=\"content\">
\t\t<div class=\"header cf\">
\t    \t{{ page.header }}
\t\t</div><!-- /.header -->
\t\t<div class=\"main cf\">
\t    \t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t    <!-- PHOTO -->
\t\t    {#
\t\t    <?php 
\t\t    if(!empty(\$page['content']['system_main']['nodes'][arg(1)]['field_header_photo']['#items'])){
\t\t\t    \$data = \$page['content']['system_main']['nodes'][arg(1)]['field_header_photo']['#items'];
\t\t\t    if (!empty(\$data)) for (\$i = 0; \$i < count(\$data); \$i++) {
\t\t\t\t\t//image styles for full size images.
\t\t\t\t\t\$variables = array(
\t\t\t\t\t\t'style_name' => 'header_focus',
\t\t\t\t\t\t'path' => \$data[\$i]['uri'],
\t\t\t\t\t\t'width' => \$data[\$i]['width'],
\t\t\t\t\t\t'height' => \$data[\$i]['height'],
\t\t\t\t\t\t'alt' => \$data[\$i]['alt'],
\t\t\t\t\t\t'title' => \$data[\$i]['title'],
\t\t\t\t\t\t'attributes' => array()
\t\t\t\t\t);
\t\t\t
\t\t\t\t\t//get the large image source
\t\t\t\t\t\$DOM = new DOMDocument;
\t\t\t\t\t\$DOM->loadHTML('<?xml encoding=\"UTF-8\">' . theme_image_style(\$variables));
\t\t\t\t\t\$images = \$DOM->getElementsByTagName('img');
\t\t\t\t\t\$large_src = \$images->length > 0 ? \$images->item(0)->getAttribute('src') : NULL;
\t\t\t
\t\t\t\t\t//image styles for image thumbnails/previews.
\t\t\t\t\t\$variables['style_name'] = 'header_focus';
\t\t\t\t\t\$variables['attributes']['class'] = \$i == 0 ? 'header_image' : 'header_image';
\t\t\t\t\t
\t\t\t\t\techo theme_image_style(\$variables);
\t\t\t\t}
\t\t\t
\t\t\t}
\t\t\t?> 
\t\t\t#}
\t    
\t\t\t{% if page.help %}
\t\t\t{{ page.help }}
\t\t\t{% endif %}
\t\t
\t\t\t{% if page.info_messages %}
\t\t\t{{ page.info_messages }}
\t\t\t{% endif %}
\t\t    
\t\t\t{{ page.content }}

\t\t\t{% if page.sub_content %}
\t\t\t<div id=\"sub-content\">
\t\t\t\t{{ page.sub_content }}
\t\t\t</div><!-- /#sub-content -->
\t\t\t{% endif %}
\t\t</div><!-- /.main -->
\t\t<div class=\"footer cf\">
\t\t    {{ page.footer }}
\t\t</div> <!-- /.footer -->
\t</div> <!-- /.content -->
</div><!-- /.page -->
", "themes/custom/smileshoppe/templates/layout/page.html.twig", "/nfs/c03/h03/mnt/49724/domains/dsvoboda.com/html/themes/custom/smileshoppe/templates/layout/page.html.twig");
    }
}
