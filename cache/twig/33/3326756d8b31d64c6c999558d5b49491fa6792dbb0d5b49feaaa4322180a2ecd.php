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

/* modular/features.html.twig */
class __TwigTemplate_e4162289b5c39e0651b1f85869f9db93f66ad8db67ace025aebeb8464f50c72a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id='features'>
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "rows", []));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "    <div class=\"row feature ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", []), "html", null, true);
            echo "\">

      <div class=\"";
            // line 5
            if (($this->getAttribute($context["row"], "image", []) || $this->getAttribute($context["row"], "video", []))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description_position", []), "html", null, true);
            echo "\">
        <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", []), "html", null, true);
            echo "</h3>
        <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", []), "html", null, true);
            echo "</p>
      </div>

      <div class=\"";
            // line 10
            if (($this->getAttribute($context["row"], "image", []) || $this->getAttribute($context["row"], "video", []))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns feature-media ";
            if (($this->getAttribute($context["row"], "description_position", []) == "right")) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
        ";
            // line 11
            if ($this->getAttribute($context["row"], "image", [])) {
                // line 12
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["row"], "image", []), [], "array"), "html", [], "method");
                echo "
        ";
            }
            // line 14
            echo "        ";
            if ($this->getAttribute($context["row"], "video", [])) {
                // line 15
                echo "          <div class=\"fluid-video-wrapper\">
            <iframe src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video", []), "html", null, true);
                echo "?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        ";
            }
            // line 19
            echo "      </div>

    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  <div class=\"row feature\">
    ";
        // line 24
        echo ($context["content"] ?? null);
        echo "
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  106 => 23,  97 => 19,  91 => 16,  88 => 15,  85 => 14,  79 => 12,  77 => 11,  63 => 10,  57 => 7,  53 => 6,  43 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id='features'>
  {% for row in page.header.rows %}
    <div class=\"row feature {{row.name}}\">

      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns {{ row.description_position }}\">
        <h3>{{ row.title }}</h3>
        <p>{{ row.description }}</p>
      </div>

      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns feature-media {% if row.description_position == 'right' %}left{% else %}right{% endif %}\">
        {% if row.image %}
          {{ page.media[row.image].html()|raw }}
        {% endif %}
        {% if row.video %}
          <div class=\"fluid-video-wrapper\">
            <iframe src=\"{{ row.video }}?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        {% endif %}
      </div>

    </div>
  {% endfor %}
  <div class=\"row feature\">
    {{ content|raw }}
  </div>
</section>
", "modular/features.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\modular\\features.html.twig");
    }
}
