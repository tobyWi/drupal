<?php

/* block.html.twig */
class __TwigTemplate_1a8bcd778619fd3e80eb6e81fee340b84246f0e3420802c0de25c528ee712494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@stable/block/block.html.twig", "block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@stable/block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 4, "if" => 12);
        $filters = array("clean_class" => 6, "merge" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'merge'),
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

        // line 4
        $context["classes"] = (($context["classes"]) ?? (array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 6
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 7
($context["plugin_id"] ?? null))), 3 => "clearfix")));
        // line 12
        if ((($context["region"] ?? null) == "footer")) {
            // line 14
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "column", 1 => "is-narrow"));
        }
        // line 20
        if (($context["block_panel_style"] ?? null)) {
            // line 21
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "panel"));
            // line 23
            $context["title_classes"] = (($context["title_classes"]) ?? (array()));
            // line 26
            $context["title_classes"] = twig_array_merge(($context["title_classes"] ?? null), array(0 => "panel-heading"));
        } elseif ( !        // line 30
($context["title_classes"] ?? null)) {
            // line 32
            $context["title_classes"] = array(0 => "subtitle", 1 => "is-4", 2 => "is-uppercase");
        }
        // line 39
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 40
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "  ";
        if (($context["block_panel_style"] ?? null)) {
            // line 44
            echo "    <div class=\"panel-block\">
  ";
        }
        // line 46
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        // line 47
        if (($context["block_panel_style"] ?? null)) {
            // line 48
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  94 => 47,  89 => 46,  85 => 44,  82 => 43,  79 => 42,  75 => 1,  73 => 40,  71 => 39,  68 => 32,  66 => 30,  64 => 26,  62 => 23,  60 => 21,  58 => 20,  55 => 14,  53 => 12,  51 => 7,  50 => 6,  49 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@stable/block/block.html.twig\" %}
{# Child templates can override the default classes. #}
{%
  set classes = classes ?? [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'clearfix',
  ]
%}
{# Footer blocks display in columns. #}
{% if region == 'footer' %}
  {%
    set classes = classes|merge([
      'column',
      'is-narrow',
    ])
  %}
{% endif %}
{% if block_panel_style %}
  {% set classes = classes|merge(['panel']) %}
  {%
    set title_classes = title_classes ?? []
  %}
  {%
    set title_classes = title_classes|merge([
      'panel-heading',
    ])
  %}
{% elseif not title_classes %}
  {%
    set title_classes = [
      'subtitle',
      'is-4',
      'is-uppercase'
    ]
  %}
{% endif %}
{% set attributes = attributes.addClass(classes) %}
{% set title_attributes = title_attributes.addClass(title_classes) %}
{# Override the content block to conditionally add a panel wrapper. #}
{% block content %}
  {% if block_panel_style %}
    <div class=\"panel-block\">
  {% endif %}
  {{ content }}
  {% if block_panel_style %}
    </div>
  {% endif %}
{% endblock %}
", "block.html.twig", "themes/bulma/templates/block/block.html.twig");
    }
}
