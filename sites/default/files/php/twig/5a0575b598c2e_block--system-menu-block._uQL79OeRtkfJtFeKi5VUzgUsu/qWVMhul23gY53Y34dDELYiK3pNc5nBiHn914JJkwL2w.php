<?php

/* themes/bulma/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_4f8c02e36ba14031d4538465d6a6a8ee4a019a30736191be2b0eba5b9c4b6d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@stable/block/block--system-menu-block.html.twig", "themes/bulma/templates/block/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@stable/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "if" => 4);
        $filters = array("merge" => 6);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 2
        $context["classes"] = (($context["classes"]) ?? (array(0 => "menu")));
        // line 4
        if ((($context["region"] ?? null) == "footer")) {
            // line 6
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "column", 1 => "is-narrow"));
        }
        // line 12
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 13
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "menu-label"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 1,  57 => 13,  55 => 12,  52 => 6,  50 => 4,  48 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@stable/block/block--system-menu-block.html.twig\" %}
{% set classes = classes ?? ['menu'] %}
{# Footer blocks display in columns. #}
{% if region == 'footer' %}
  {%
    set classes = classes|merge([
      'column',
      'is-narrow',
    ])
  %}
{% endif %}
{% set attributes = attributes.addClass(classes) %}
{% set title_attributes = title_attributes.addClass('menu-label') %}
", "themes/bulma/templates/block/block--system-menu-block.html.twig", "/Users/tobbe/www/myDrupal/themes/bulma/templates/block/block--system-menu-block.html.twig");
    }
}
