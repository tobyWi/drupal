<?php

/* themes/bulma/templates/field/field.html.twig */
class __TwigTemplate_c83834795f274a6b5ec23374660d98b1ea4d44e904a3822e4b9d27df728dbeaf extends Twig_Template
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
        $tags = array("set" => 44, "import" => 69, "if" => 71, "for" => 74, "macro" => 56);
        $filters = array("merge" => 58);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'import', 'if', 'for', 'macro'),
                array('merge'),
                array()
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

        // line 44
        $context["title_classes"] = array(0 => "label", 1 => (((        // line 46
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")), 2 => (((        // line 47
($context["label_display"] ?? null) == "inline")) ? ("is-pulled-left") : ("")));
        // line 50
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method");
        // line 52
        $context["item_classes"] = (($context["item_classes"]) ?? (array()));
        // line 54
        $context["use_item_wrapper"] = ((array_key_exists("use_item_wrapper", $context)) ? (($context["use_item_wrapper"] ?? null)) : (true));
        // line 55
        echo "
";
        // line 69
        $context["helpers"] = $this;
        // line 70
        echo "
";
        // line 71
        if (($context["label_hidden"] ?? null)) {
            // line 72
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 73
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
      ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 75
                    echo "        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["helpers"]->getrender_item($context["item"], ($context["item_classes"] ?? null), ($context["use_item_wrapper"] ?? null))));
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "    </div>
  ";
            } else {
                // line 79
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 80
                    echo "      <div";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["helpers"]->getrender_item($context["item"], ($context["item_classes"] ?? null), ($context["use_item_wrapper"] ?? null))));
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "  ";
            }
        } else {
            // line 84
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
    <div";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</div>
    ";
            // line 86
            if ((($context["multiple"] ?? null) && ($context["use_item_wrapper"] ?? null))) {
                // line 87
                echo "      <div>
    ";
            }
            // line 89
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 90
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["helpers"]->getrender_item($context["item"], ($context["item_classes"] ?? null), ($context["use_item_wrapper"] ?? null))));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
            if ((($context["multiple"] ?? null) && ($context["use_item_wrapper"] ?? null))) {
                // line 93
                echo "      </div>
    ";
            }
            // line 95
            echo "  </div>
";
        }
    }

    // line 56
    public function getrender_item($__item__ = null, $__item_classes__ = null, $__use_item_wrapper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "item_classes" => $__item_classes__,
            "use_item_wrapper" => $__use_item_wrapper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "  ";
            // line 58
            $context["item"] = twig_array_merge(($context["item"] ?? null), array("attributes" => $this->getAttribute($this->getAttribute(            // line 59
($context["item"] ?? null), "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method")));
            // line 62
            echo "  ";
            if (($context["use_item_wrapper"] ?? null)) {
                // line 63
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["item"] ?? null), "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["item"] ?? null), "content", array()), "html", null, true));
                echo "</div>
  ";
            } else {
                // line 65
                echo "    ";
                $context["renderables"] = $this->loadTemplate("@bulma/macros/renderables.html.twig", "themes/bulma/templates/field/field.html.twig", 65);
                // line 66
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["renderables"]->getmerge_attributes($this->getAttribute(($context["item"] ?? null), "attributes", array()), ($context["item"] ?? null), "content")));
                echo "
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
        return "themes/bulma/templates/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 66,  182 => 65,  174 => 63,  171 => 62,  169 => 59,  168 => 58,  166 => 57,  152 => 56,  146 => 95,  142 => 93,  139 => 92,  130 => 90,  125 => 89,  121 => 87,  119 => 86,  113 => 85,  108 => 84,  104 => 82,  93 => 80,  88 => 79,  84 => 77,  75 => 75,  71 => 74,  66 => 73,  63 => 72,  61 => 71,  58 => 70,  56 => 69,  53 => 55,  51 => 54,  49 => 52,  47 => 50,  45 => 47,  44 => 46,  43 => 44,);
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
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}
{#
  Ensures that the visually hidden option for field labels works correctly.
  @todo: Remove when https://www.drupal.org/node/2779919 is resolved.
#}
{%
  set title_classes = [
    'label',
    label_display == 'visually_hidden' ? 'visually-hidden',
    label_display == 'inline' ? 'is-pulled-left'
  ]
%}
{% set title_attributes = title_attributes.addClass(title_classes) %}
{# Child templates can specify classes to be added to items. #}
{% set item_classes = item_classes ?? [] %}
{# Child templates can specify whether items should be wrapped. #}
{% set use_item_wrapper = use_item_wrapper is defined ? use_item_wrapper : true %}

{% macro render_item(item, item_classes, use_item_wrapper) %}
  {%
    set item = item|merge({
      'attributes': item.attributes.addClass(item_classes)
    })
  %}
  {% if use_item_wrapper %}
    <div{{ item.attributes }}>{{ item.content }}</div>
  {% else %}
    {% import \"@bulma/macros/renderables.html.twig\" as renderables %}
    {{ renderables.merge_attributes(item.attributes, item, 'content') }}
  {% endif %}
{% endmacro render_item %}
{% import _self as helpers %}

{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes }}>
      {% for item in items %}
        {{ helpers.render_item(item, item_classes, use_item_wrapper) }}
      {% endfor %}
    </div>
  {% else %}
    {% for item in items %}
      <div{{ attributes }}>{{ helpers.render_item(item, item_classes, use_item_wrapper) }}</div>
    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes }}>
    <div{{ title_attributes }}>{{ label }}</div>
    {% if multiple and use_item_wrapper %}
      <div>
    {% endif %}
    {% for item in items %}
      {{ helpers.render_item(item, item_classes, use_item_wrapper) }}
    {% endfor %}
    {% if multiple and use_item_wrapper %}
      </div>
    {% endif %}
  </div>
{% endif %}", "themes/bulma/templates/field/field.html.twig", "/Users/tobbe/www/myDrupal/themes/bulma/templates/field/field.html.twig");
    }
}
