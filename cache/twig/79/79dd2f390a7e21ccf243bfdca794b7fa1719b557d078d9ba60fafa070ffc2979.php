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

/* default.html.twig */
class __TwigTemplate_6345cc0ed48ee3905894e2500868752e238fd083bfd2bf7e5fa631f97b9a5272 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
 <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
  <div class=\"row\">
   ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
 </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
 <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
  <div class=\"row\">
   {{ page.content|raw }}
 </div>
</section>
{% endblock %}
", "default.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\default.html.twig");
    }
}
