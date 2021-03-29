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

/* modular/testimonials.html.twig */
class __TwigTemplate_0e4b4b343c63061ccc29d2beb2eaccb82f2639863ccf6d9c95903f92014ca67e extends \Twig\Template
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
        echo "<section id=\"testimonials\">
    <div class=\"row content\">
        <span><i class=\"quote-left fa fa-quote-left\"></i></span>
        <div class=\"text-container\">
            <div class=\"twelve columns\">
                ";
        // line 6
        echo ($context["content"] ?? null);
        echo "
            </div>
            <div class=\"twelve columns flex-container\">
                <div class=\"flexslider\">

                    <ul class=\"slides\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                            <li>
                                <blockquote>
                                    <p> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quote", []), "html", null, true);
            echo "</p>
                                    <cite>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
            echo "</cite>
                                </blockquote>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </ul>

                </div>
            </div>
        </div>
        <span><i class=\"quote-right fa fa-quote-right\"></i></span>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  58 => 16,  54 => 15,  50 => 13,  46 => 12,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"testimonials\">
    <div class=\"row content\">
        <span><i class=\"quote-left fa fa-quote-left\"></i></span>
        <div class=\"text-container\">
            <div class=\"twelve columns\">
                {{ content|raw }}
            </div>
            <div class=\"twelve columns flex-container\">
                <div class=\"flexslider\">

                    <ul class=\"slides\">
                        {% for item in page.header.testimonials %}
                            <li>
                                <blockquote>
                                    <p> {{ item.quote }}</p>
                                    <cite>{{ item.title }}</cite>
                                </blockquote>
                            </li>
                        {% endfor %}
                    </ul>

                </div>
            </div>
        </div>
        <span><i class=\"quote-right fa fa-quote-right\"></i></span>
    </div>
</section>
", "modular/testimonials.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\modular\\testimonials.html.twig");
    }
}
