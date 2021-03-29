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

/* partials/header.html.twig */
class __TwigTemplate_579522c9c5e27c0838065e595ec48bbb678dabe9e4e0ce92e79d9903c1db4168 extends \Twig\Template
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
        echo "<header id=\"header\">
  <div class=\"logo\">
    <a ";
        // line 3
        if ( !($context["page"] ?? null)) {
            echo "class=\"smoothscroll\"";
        }
        echo " href=\"";
        if (($context["page"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "/#hero";
        } else {
            echo "#hero";
        }
        echo "\"><img alt=\"\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/logo.png\"></a>
  </div>

  ";
        // line 6
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        if ($this->getAttribute(($context["site"] ?? null), "social", [])) {
            // line 8
            echo "    ";
            $this->loadTemplate("partials/social.html.twig", "partials/header.html.twig", 8)->display($context);
            // line 9
            echo "  ";
        }
        // line 10
        echo "</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
  <div class=\"logo\">
    <a {% if not page %}class=\"smoothscroll\"{% endif %} href=\"{% if page %}{{ base_url_absolute }}/#hero{% else %}#hero{% endif %}\"><img alt=\"\" src=\"{{ theme_url }}/images/logo.png\"></a>
  </div>

  {% include 'partials/navigation.html.twig' %}
  {% if site.social %}
    {% include 'partials/social.html.twig' %}
  {% endif %}
</header>", "partials/header.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\partials\\header.html.twig");
    }
}
