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

/* themes/custom/smileshoppe/templates/navigation/menu.html.twig */
class __TwigTemplate_26deb368a02bf70c0bb460a3c4c619204868c7c96e6c240400ff436bf24c8db1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 31, "set" => 35, "if" => 47, "for" => 53];
        $filters = ["clean_class" => 37, "escape" => 49];
        $functions = ["link" => 74];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['link']
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo " ";
        // line 30
        echo "
";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo " ";
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            // line 34
            echo "  ";
            // line 35
            $context["menu_classes"] = [0 => "menu", 1 => ("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 37
($context["menu_name"] ?? null))))];
            // line 40
            echo "  ";
            // line 41
            echo "  ";
            // line 42
            $context["submenu_classes"] = [0 => "menu", 1 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["menu_name"] ?? null)))) . "--submenu")];
            // line 47
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 48
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 49
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method")), "html", null, true);
                    echo "> ";
                    // line 50
                    echo "    ";
                } else {
                    // line 51
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method"), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method")), "html", null, true);
                    echo "> ";
                    // line 52
                    echo "    ";
                }
                // line 53
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    echo "      ";
                    // line 55
                    echo "      ";
                    // line 56
                    $context["item_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 57
($context["menu_name"] ?? null)))) . "--item"), 1 => (($this->getAttribute(                    // line 58
$context["item"], "is_expanded", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))) . "--item--expanded")) : ("")), 2 => (($this->getAttribute(                    // line 59
$context["item"], "is_collapsed", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))) . "--item--collapsed")) : ("")), 3 => (($this->getAttribute(                    // line 60
$context["item"], "in_active_trail", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))) . "--item--active-trail")) : ("")), 4 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 61
$context["item"], "title", [])))];
                    // line 64
                    echo "      ";
                    // line 65
                    echo "      ";
                    // line 66
                    $context["link_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 67
($context["menu_name"] ?? null)))) . "--link")];
                    // line 70
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    // line 71
                    echo "      \t";
                    if (twig_in_filter("nolink", $this->getAttribute($this->getAttribute($context["item"], "url", []), "toString", [], "method"))) {
                        // line 72
                        echo "\t\t<span class=\"nolink\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "</span>
\t\t";
                    } else {
                        // line 74
                        echo "\t\t";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => ($context["link_classes"] ?? null)], "method"))), "html", null, true);
                        echo "
\t\t";
                    }
                    // line 76
                    echo "        ";
                    // line 77
                    echo "        ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 78
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)));
                        echo " ";
                        // line 79
                        echo "        ";
                    }
                    // line 80
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/smileshoppe/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 82,  175 => 80,  172 => 79,  168 => 78,  165 => 77,  163 => 76,  157 => 74,  151 => 72,  148 => 71,  144 => 70,  142 => 67,  141 => 66,  139 => 65,  137 => 64,  135 => 61,  134 => 60,  133 => 59,  132 => 58,  131 => 57,  130 => 56,  128 => 55,  126 => 54,  121 => 53,  118 => 52,  114 => 51,  111 => 50,  107 => 49,  104 => 48,  101 => 47,  99 => 44,  98 => 42,  96 => 41,  94 => 40,  92 => 37,  91 => 35,  89 => 34,  87 => 33,  84 => 32,  68 => 31,  63 => 30,  60 => 29,  57 => 22,  55 => 21,);
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
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
  1. We use menu_name (see above) to create a CSS class name from it.
  See https://www.drupal.org/node/2649076
#}
{{ menus.menu_links(items, attributes, 0, menu_name) }} {# 1. #}

{% macro menu_links(items, attributes, menu_level, menu_name) %} {# 1. #}
  {% import _self as menus %}
  {# 1. #}
  {%
    set menu_classes = [
      'menu',
      'menu-' ~ menu_name|clean_class,
    ]
  %}
  {# 1. #}
  {%
    set submenu_classes = [
      'menu',
      'menu-' ~ menu_name|clean_class ~ '--submenu',
    ]
  %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass(menu_classes) }}> {# 1. #}
    {% else %}
      <ul{{ attributes.removeClass(menu_classes).addClass(submenu_classes) }}> {# 1. #}
    {% endif %}
    {% for item in items %}
      {# 1. #}
      {%
        set item_classes = [
          'menu-' ~ menu_name|clean_class ~ '--item',
          item.is_expanded ? 'menu-' ~ menu_name|clean_class ~ '--item--expanded',
          item.is_collapsed ? 'menu-' ~ menu_name|clean_class ~ '--item--collapsed',
          item.in_active_trail ? 'menu-' ~ menu_name|clean_class ~ '--item--active-trail',
          item.title|clean_class
        ]
      %}
      {# 1. #}
      {%
        set link_classes = [
          'menu-' ~ menu_name|clean_class ~ '--link',
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>{# 1. #}
      \t{% if \"nolink\" in item.url.toString() %}
\t\t<span class=\"nolink\">{{ item.title }}</span>
\t\t{% else %}
\t\t{{ link(item.title, item.url, item.attributes.removeClass(item_classes).addClass(link_classes)) }}
\t\t{% endif %}
        {# 1. #}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1, menu_name) }} {# 1. #}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}", "themes/custom/smileshoppe/templates/navigation/menu.html.twig", "/nfs/c03/h03/mnt/49724/domains/dsvoboda.com/html/themes/custom/smileshoppe/templates/navigation/menu.html.twig");
    }
}
