<?php

/* themes/bulma/templates/system/region--footer.html.twig */
class __TwigTemplate_899ad8fbe6f877733e9b318fc3bbbc196e69cc5191fef8f7f2206bd2825aefbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@stable/layout/region.html.twig", "themes/bulma/templates/system/region--footer.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@stable/layout/region.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array(),
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

        // line 3
        $context["classes"] = array(0 => "columns", 1 => "is-multiline");
        // line 8
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/system/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 1,  50 => 8,  48 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@stable/layout/region.html.twig\" %}
{%
  set classes = [
    'columns',
    'is-multiline',
  ]
%}
{% set attributes = attributes.addClass(classes) %}
", "themes/bulma/templates/system/region--footer.html.twig", "/Users/tobbe/www/myDrupal/themes/bulma/templates/system/region--footer.html.twig");
    }
}
