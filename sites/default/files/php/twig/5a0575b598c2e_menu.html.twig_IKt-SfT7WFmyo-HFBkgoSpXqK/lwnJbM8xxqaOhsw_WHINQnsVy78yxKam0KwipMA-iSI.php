<?php

/* themes/bulma/templates/navigation/menu.html.twig */
class __TwigTemplate_3fcf0ac679358cbf2bcdfe6c51d96fbf76de742c98e291c92b8bb8e37d2e54a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("import" => 23, "macro" => 31, "set" => 34, "if" => 42, "for" => 48);
        $filters = array("clean_class" => 36);
        $functions = array("link" => 50);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'set', 'if', 'for'),
                array('clean_class'),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null))));
        echo " ";
        // line 30
        echo "
";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

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
            $context["menu_classes"] = array(0 => "menu-list", 1 => (\Drupal\Component\Utility\Html::getClass(            // line 36
($context["menu_name"] ?? null)) . "-menu"));
            // line 38
            echo "  ";
            // line 39
            echo "  ";
            $context["submenu_classes"] = array(0 => "submenu");
            // line 42
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 43
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 44
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["menu_classes"] ?? null)), "method"), "html", null, true));
                    echo "> ";
                    // line 45
                    echo "    ";
                } else {
                    // line 46
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["menu_classes"] ?? null)), "method"), "addClass", array(0 => ($context["submenu_classes"] ?? null)), "method"), "html", null, true));
                    echo "> ";
                    // line 47
                    echo "    ";
                }
                // line 48
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 50
                    echo "        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        ";
                    // line 51
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 52
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
        ";
                    }
                    // line 54
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 56,  128 => 54,  122 => 52,  120 => 51,  115 => 50,  111 => 49,  106 => 48,  103 => 47,  99 => 46,  96 => 45,  92 => 44,  89 => 43,  86 => 42,  83 => 39,  81 => 38,  79 => 36,  77 => 34,  75 => 33,  72 => 32,  56 => 31,  51 => 30,  48 => 29,  45 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
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
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0, menu_name) }} {# 1. #}

{% macro menu_links(items, attributes, menu_level, menu_name) %} {# 1. #}
  {% import _self as menus %}
  {# 1. #}
  {% set menu_classes = [
    'menu-list',
    menu_name|clean_class ~ '-menu',
  ] %}
  {# 1. #}
  {% set submenu_classes = [
    'submenu',
  ] %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass(menu_classes) }}> {# 1. #}
    {% else %}
      <ul{{ attributes.removeClass(menu_classes).addClass(submenu_classes) }}> {# 1. #}
    {% endif %}
    {% for item in items %}
      <li{{ item.attributes }}>{# 1. #}
        {{ link(item.title, item.url) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}", "themes/bulma/templates/navigation/menu.html.twig", "/Users/tobbe/www/myDrupal/themes/bulma/templates/navigation/menu.html.twig");
    }
}
