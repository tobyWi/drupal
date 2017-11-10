<?php

/* themes/bulma/templates/system/page.html.twig */
class __TwigTemplate_e43c04c96fc92d555a62df8903c99249a9dd6cffc093025a4742824b3d72426b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'header_and_search' => array($this, 'block_header_and_search'),
            'tabs' => array($this, 'block_tabs'),
            'secondary_menu' => array($this, 'block_secondary_menu'),
            'tiles' => array($this, 'block_tiles'),
            'main' => array($this, 'block_main'),
            'main_content' => array($this, 'block_main_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'bottom' => array($this, 'block_bottom'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 56, "if" => 57, "set" => 196);
        $filters = array("merge" => 196, "without" => 224);
        $functions = array("create_attribute" => 197);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'set'),
                array('merge', 'without'),
                array('create_attribute')
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

        // line 56
        $this->displayBlock('navbar', $context, $blocks);
        // line 87
        $this->displayBlock('header', $context, $blocks);
        // line 121
        $this->displayBlock('secondary_menu', $context, $blocks);
        // line 131
        $this->displayBlock('tiles', $context, $blocks);
        // line 182
        $this->displayBlock('main', $context, $blocks);
        // line 253
        $this->displayBlock('bottom', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 56
    public function block_navbar($context, array $blocks = array())
    {
        // line 57
        if ((($this->getAttribute(($context["page"] ?? null), "navbar_branding", array()) || $this->getAttribute(($context["page"] ?? null), "navbar_social", array())) || $this->getAttribute(($context["page"] ?? null), "primary_menu", array()))) {
            // line 59
            echo "<nav class=\"navbar has-shadow\">
  <div class=\"container\">
    <div class=\"navbar-brand\">
      ";
            // line 62
            if ($this->getAttribute(($context["page"] ?? null), "navbar_branding", array())) {
                // line 63
                echo "      <div class=\"navbar-item\">
      ";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar_branding", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 67
            echo "      <div id=\"js-navbar-burger\" class=\"navbar-burger burger\" data-target=\"navbar-menu\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id=\"js-navbar-menu\" class=\"navbar-menu\">
      ";
            // line 74
            if ($this->getAttribute(($context["page"] ?? null), "navbar_social", array())) {
                // line 75
                echo "      <div class=\"navbar-start\">
      ";
                // line 76
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar_social", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 79
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
                // line 80
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
                echo "
      ";
            }
            // line 82
            echo "    </div>
  </div>
</nav>
";
        }
    }

    // line 87
    public function block_header($context, array $blocks = array())
    {
        // line 88
        echo "<section class=\"hero is-primary\">
  ";
        // line 89
        $this->displayBlock('header_and_search', $context, $blocks);
        // line 109
        echo "  ";
        $this->displayBlock('tabs', $context, $blocks);
        // line 119
        echo "</section>
";
    }

    // line 89
    public function block_header_and_search($context, array $blocks = array())
    {
        // line 90
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "header", array()) || $this->getAttribute(($context["page"] ?? null), "header_search", array()))) {
            // line 91
            echo "  ";
            // line 92
            echo "  <div class=\"hero-body is-primary\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
          ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          ";
            // line 97
            if (($context["is_front"] ?? null)) {
                // line 98
                echo "            <h1 class=\"title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</h1>
          ";
            }
            // line 100
            echo "        </div>
        <div class=\"column is-narrow\">
          ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_search", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 108
        echo "  ";
    }

    // line 109
    public function block_tabs($context, array $blocks = array())
    {
        // line 110
        echo "  ";
        // line 111
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "header_tabs", array())) {
            // line 112
            echo "    <div class=\"hero-footer\">
      <div class=\"container\">
        ";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_tabs", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 118
        echo "  ";
    }

    // line 121
    public function block_secondary_menu($context, array $blocks = array())
    {
        // line 123
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", array())) {
            // line 124
            echo "<nav class=\"nav has-shadow\">
  <div class=\"container\">
    ";
            // line 126
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
  </div>
</nav>
";
        }
    }

    // line 131
    public function block_tiles($context, array $blocks = array())
    {
        // line 133
        if ($this->getAttribute(($context["page"] ?? null), "tile_one", array())) {
            // line 134
            echo "<div class=\"blocks tiles\">
  <div class=\"container\">
    <div class=\"tile is-ancestor\">
      <div class=\"tile is-vertical is-8\">
        <div class=\"tile\">
          ";
            // line 139
            if (($this->getAttribute(($context["page"] ?? null), "tile_one", array()) || $this->getAttribute(($context["page"] ?? null), "tile_two", array()))) {
                // line 140
                echo "            <div class=\"tile is-parent is-vertical\">
              <div class=\"tile is-child notification is-primary\">
                ";
                // line 142
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_one", array()), "html", null, true));
                echo "
              </div>
              <div class=\"tile is-child notification is-warning\">
                ";
                // line 145
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_two", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 149
            echo "
          ";
            // line 150
            if ($this->getAttribute(($context["page"] ?? null), "tile_three", array())) {
                // line 151
                echo "            <div class=\"tile is-parent\">
              <div class=\"tile is-child notification is-info\">
                ";
                // line 153
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_three", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 157
            echo "
        </div>

        ";
            // line 160
            if ($this->getAttribute(($context["page"] ?? null), "tile_four", array())) {
                // line 161
                echo "          <div class=\"tile is-parent\">
            <div class=\"tile is-child notification is-danger\">
              ";
                // line 163
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_four", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 167
            echo "
      </div>

      ";
            // line 170
            if ($this->getAttribute(($context["page"] ?? null), "tile_five", array())) {
                // line 171
                echo "        <div class=\"tile is-parent\">
          <div class=\"tile is-child notification is-success\">
            ";
                // line 173
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tile_five", array()), "html", null, true));
                echo "
          </div>
        </div>
      ";
            }
            // line 177
            echo "    </div>
  </div>
</div>
";
        }
    }

    // line 182
    public function block_main($context, array $blocks = array())
    {
        // line 184
        echo "<section class=\"section\">
  <main role=\"main\" class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 187
        echo "
    ";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
    ";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

    <div class=\"columns is-centered\">
      ";
        // line 192
        $this->displayBlock('main_content', $context, $blocks);
        // line 209
        echo "      ";
        $this->displayBlock('sidebar_first', $context, $blocks);
        // line 229
        echo "      ";
        $this->displayBlock('sidebar_second', $context, $blocks);
        // line 248
        echo "    </div>

  </main>
</section>
";
    }

    // line 192
    public function block_main_content($context, array $blocks = array())
    {
        // line 193
        echo "      ";
        // line 194
        echo "      ";
        if ( !$this->getAttribute(($context["page"] ?? null), "content_attributes", array())) {
            // line 195
            echo "      ";
            // line 196
            $context["page"] = twig_array_merge(($context["page"] ?? null), array("content_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "main-content", 1 => "column")), "method")));
            // line 203
            echo "      ";
        }
        // line 204
        echo "      ";
        // line 205
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_attributes", array()), "html", null, true));
        echo ">
        ";
        // line 206
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>
      ";
    }

    // line 209
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 210
        echo "      ";
        // line 211
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 212
            echo "      ";
            // line 213
            echo "        ";
            if ( !$this->getAttribute(($context["page"] ?? null), "sidebar_first_attributes", array())) {
                // line 214
                echo "        ";
                // line 215
                $context["page"] = twig_array_merge(($context["page"] ?? null), array("sidebar_first_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "sidebar-first", 1 => "column", 2 => "is-2")), "method")));
                // line 223
                echo "        ";
            }
            // line 224
            echo "        <aside";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["page"] ?? null), "sidebar_first_attributes", array()), "role"), "html", null, true));
            echo " role=\"complimentary\">
          ";
            // line 225
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 228
        echo "      ";
    }

    // line 229
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 230
        echo "      ";
        // line 231
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 232
            echo "        ";
            if ( !$this->getAttribute(($context["page"] ?? null), "sidebar_second_attributes", array())) {
                // line 233
                echo "        ";
                // line 234
                $context["page"] = twig_array_merge(($context["page"] ?? null), array("sidebar_second_attributes" => $this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(), "addClass", array(0 => array(0 => "sidebar-second", 1 => "column", 2 => "is-2")), "method")));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        <aside";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["page"] ?? null), "sidebar_second_attributes", array()), "role"), "html", null, true));
            echo " role=\"complimentary>
          ";
            // line 244
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 247
        echo "      ";
    }

    // line 253
    public function block_bottom($context, array $blocks = array())
    {
        // line 255
        if ($this->getAttribute(($context["page"] ?? null), "bottom", array())) {
            // line 256
            echo "<section class=\"hero is-info bsa\">
  <div class=\"container\">
    ";
            // line 258
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", array()), "html", null, true));
            echo "
  </div>
</section>
";
        }
    }

    // line 264
    public function block_footer($context, array $blocks = array())
    {
        // line 265
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 266
            echo "  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      ";
            // line 268
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bulma/templates/system/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  483 => 268,  479 => 266,  477 => 265,  474 => 264,  465 => 258,  461 => 256,  459 => 255,  456 => 253,  452 => 247,  446 => 244,  441 => 243,  438 => 242,  436 => 234,  434 => 233,  431 => 232,  428 => 231,  426 => 230,  423 => 229,  419 => 228,  413 => 225,  408 => 224,  405 => 223,  403 => 215,  401 => 214,  398 => 213,  396 => 212,  393 => 211,  391 => 210,  388 => 209,  381 => 206,  376 => 205,  374 => 204,  371 => 203,  369 => 196,  367 => 195,  364 => 194,  362 => 193,  359 => 192,  351 => 248,  348 => 229,  345 => 209,  343 => 192,  337 => 189,  333 => 188,  330 => 187,  326 => 184,  323 => 182,  315 => 177,  308 => 173,  304 => 171,  302 => 170,  297 => 167,  290 => 163,  286 => 161,  284 => 160,  279 => 157,  272 => 153,  268 => 151,  266 => 150,  263 => 149,  256 => 145,  250 => 142,  246 => 140,  244 => 139,  237 => 134,  235 => 133,  232 => 131,  223 => 126,  219 => 124,  217 => 123,  214 => 121,  210 => 118,  203 => 114,  199 => 112,  196 => 111,  194 => 110,  191 => 109,  187 => 108,  178 => 102,  174 => 100,  168 => 98,  166 => 97,  162 => 96,  156 => 92,  154 => 91,  151 => 90,  148 => 89,  143 => 119,  140 => 109,  138 => 89,  135 => 88,  132 => 87,  124 => 82,  118 => 80,  115 => 79,  109 => 76,  106 => 75,  104 => 74,  95 => 67,  89 => 64,  86 => 63,  84 => 62,  79 => 59,  77 => 57,  74 => 56,  70 => 264,  67 => 263,  65 => 253,  63 => 182,  61 => 131,  59 => 121,  57 => 87,  55 => 56,);
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
 * Default theme implementation to display a single page.
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
 * - messages: Status and error messages. Should be displayed prominently.
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
 * Region attributes:
 * - page.content_attributes: The attributes for the main content region
 *   wrapper. If not set, defaults will be used.
 * - page.sidebar_first_attributes: The attributes for the sidebar_first region
 *   wrapper. If not set, defaults will be used.
 * - page.sidebar_second_attributes: The attributes for the sidebar_second
 *   region wrapper. If not set, defaults will be used.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
{% block navbar %}
{% if page.navbar_branding or page.navbar_social or page.primary_menu %}
{# Top navbar #}
<nav class=\"navbar has-shadow\">
  <div class=\"container\">
    <div class=\"navbar-brand\">
      {% if page.navbar_branding %}
      <div class=\"navbar-item\">
      {{ page.navbar_branding }}
      </div>
      {% endif %}
      <div id=\"js-navbar-burger\" class=\"navbar-burger burger\" data-target=\"navbar-menu\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id=\"js-navbar-menu\" class=\"navbar-menu\">
      {% if page.navbar_social %}
      <div class=\"navbar-start\">
      {{ page.navbar_social }}
      </div>
      {% endif %}
      {% if page.primary_menu %}
      {{ page.primary_menu }}
      {% endif %}
    </div>
  </div>
</nav>
{% endif %}
{% endblock navbar %}
{% block header %}
<section class=\"hero is-primary\">
  {% block header_and_search %}
  {% if page.header or page.header_search %}
  {# Header hero region + search #}
  <div class=\"hero-body is-primary\">
    <div class=\"container\">
      <div class=\"columns is-vcentered\">
        <div class=\"column\">
          {{ page.header }}
          {% if is_front %}
            <h1 class=\"title\">{{ site_slogan }}</h1>
          {% endif %}
        </div>
        <div class=\"column is-narrow\">
          {{ page.header_search }}
        </div>
      </div>
    </div>
  </div>
  {% endif %}
  {% endblock header_and_search %}
  {% block tabs %}
  {# Drupal tabs #}
  {% if page.header_tabs %}
    <div class=\"hero-footer\">
      <div class=\"container\">
        {{ page.header_tabs }}
      </div>
    </div>
  {% endif %}
  {% endblock tabs %}
</section>
{% endblock header %}
{% block secondary_menu %}
{# Secondary menu #}
{% if page.secondary_menu %}
<nav class=\"nav has-shadow\">
  <div class=\"container\">
    {{ page.secondary_menu }}
  </div>
</nav>
{% endif %}
{% endblock secondary_menu %}
{% block tiles %}
{# Pinterest blocks style #}
{% if page.tile_one %}
<div class=\"blocks tiles\">
  <div class=\"container\">
    <div class=\"tile is-ancestor\">
      <div class=\"tile is-vertical is-8\">
        <div class=\"tile\">
          {% if page.tile_one or page.tile_two %}
            <div class=\"tile is-parent is-vertical\">
              <div class=\"tile is-child notification is-primary\">
                {{ page.tile_one }}
              </div>
              <div class=\"tile is-child notification is-warning\">
                {{ page.tile_two }}
              </div>
            </div>
          {% endif %}

          {% if page.tile_three %}
            <div class=\"tile is-parent\">
              <div class=\"tile is-child notification is-info\">
                {{ page.tile_three }}
              </div>
            </div>
          {% endif %}

        </div>

        {% if page.tile_four %}
          <div class=\"tile is-parent\">
            <div class=\"tile is-child notification is-danger\">
              {{ page.tile_four }}
            </div>
          </div>
        {% endif %}

      </div>

      {% if page.tile_five %}
        <div class=\"tile is-parent\">
          <div class=\"tile is-child notification is-success\">
            {{ page.tile_five }}
          </div>
        </div>
      {% endif %}
    </div>
  </div>
</div>
{% endif %}
{% endblock tiles %}
{% block main %}
{# Main section #}
<section class=\"section\">
  <main role=\"main\" class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    {{ page.highlighted }}
    {{ page.help }}

    <div class=\"columns is-centered\">
      {% block main_content %}
      {# Set attributes for content. #}
      {% if not page.content_attributes %}
      {%
        set page = page|merge({
          'content_attributes': create_attribute().addClass([
            'main-content',
            'column',
          ]),
        })
      %}
      {% endif %}
      {# Main content #}
      <div{{page.content_attributes}}>
        {{ page.content }}
      </div>
      {% endblock main_content %}
      {% block sidebar_first %}
      {# Sidebar first #}
      {% if page.sidebar_first %}
      {# Set attributes for content. #}
        {% if not page.sidebar_first_attributes %}
        {%
          set page = page|merge({
            'sidebar_first_attributes': create_attribute().addClass([
              'sidebar-first',
              'column',
              'is-2',
            ]),
          })
        %}
        {% endif %}
        <aside{{page.sidebar_first_attributes|without('role')}} role=\"complimentary\">
          {{ page.sidebar_first }}
        </aside>
      {% endif %}
      {% endblock sidebar_first %}
      {% block sidebar_second %}
      {# Sidebar second #}
      {% if page.sidebar_second %}
        {% if not page.sidebar_second_attributes %}
        {%
          set page = page|merge({
            'sidebar_second_attributes': create_attribute().addClass([
              'sidebar-second',
              'column',
              'is-2',
            ]),
          })
        %}
        {% endif %}
        <aside{{page.sidebar_second_attributes|without('role')}} role=\"complimentary>
          {{ page.sidebar_second }}
        </aside>
      {% endif %}
      {% endblock sidebar_second %}
    </div>

  </main>
</section>
{% endblock main %}
{% block bottom %}
{# Bottom second colored section #}
{% if page.bottom %}
<section class=\"hero is-info bsa\">
  <div class=\"container\">
    {{ page.bottom }}
  </div>
</section>
{% endif %}
{% endblock bottom %}

{% block footer %}
{% if page.footer %}
  <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      {{ page.footer }}
    </div>
  </footer>
{% endif %}
{% endblock footer %}
", "themes/bulma/templates/system/page.html.twig", "/Users/tobbe/www/myDrupal/themes/bulma/templates/system/page.html.twig");
    }
}
