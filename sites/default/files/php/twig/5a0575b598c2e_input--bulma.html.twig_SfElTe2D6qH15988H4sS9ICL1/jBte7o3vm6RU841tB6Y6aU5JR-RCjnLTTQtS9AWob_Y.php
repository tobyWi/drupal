<?php

/* themes/bulma/templates/elements/input--bulma.html.twig */
class __TwigTemplate_52ec6be5c6420ef8f2b7c0103417deb070d1fcc0d70d23c31da1699f1971e360 extends Twig_Template
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
        $tags = array("set" => 16, "if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 15
        echo "  ";
        // line 16
        $context["classes"] = array(0 => "input");
        // line 20
        echo "
<div class=\"control";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["icon"] ?? null)) ? (" has-icons-left") : (""))));
        echo "\">
    <input";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
    ";
        // line 23
        if (($context["icon"] ?? null)) {
            // line 24
            echo "        <span class=\"icon is-left\">
            <i class=\"fa fa-";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
            echo "\"></i>
        </span>
    ";
        }
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/elements/input--bulma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  65 => 25,  62 => 24,  60 => 23,  54 => 22,  50 => 21,  47 => 20,  45 => 16,  43 => 15,);
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
 * Default theme implementation for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 *
 * @ingroup themeable
 */
#}
  {%
  set classes = [
  'input'
  ]
  %}

<div class=\"control{{ icon ? ' has-icons-left' }}\">
    <input{{ attributes.addClass(classes) }} />{{ children }}
    {% if icon %}
        <span class=\"icon is-left\">
            <i class=\"fa fa-{{ icon }}\"></i>
        </span>
    {% endif %}
</div>", "themes/bulma/templates/elements/input--bulma.html.twig", "/Users/tobbe/www/myDrupal/themes/bulma/templates/elements/input--bulma.html.twig");
    }
}
