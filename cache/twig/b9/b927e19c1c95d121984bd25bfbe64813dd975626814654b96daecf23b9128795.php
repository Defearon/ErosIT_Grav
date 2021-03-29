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

/* modular/screenshots.html.twig */
class __TwigTemplate_e8fa36eb4b3fd79e592aabe67d0d558c4ab965fd8c2ff5bf7ffe33b2ded51550 extends \Twig\Template
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
        echo "<section id=\"screenshots\">
    <div class=\"row section-head\">
        ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
    </div>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                    <div class=\"columns item\">
                        <div class=\"item-wrap\">
                            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filename", []), "html", null, true);
            echo "\" data-imagelightbox=\"a\" >
                                ";
            // line 12
            echo $this->getAttribute($this->getAttribute($context["item"], "cropZoom", [0 => 700, 1 => 700], "method"), "html", [0 => twig_replace_filter($this->getAttribute($context["item"], "filename", []), ["-" => " "]), 1 => twig_replace_filter($this->getAttribute($context["item"], "filename", []), ["-" => " "])], "method");
            echo "
                                <div class=\"overlay\"></div>
                                <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/screenshots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  56 => 12,  50 => 11,  46 => 9,  42 => 8,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"screenshots\">
    <div class=\"row section-head\">
        {{ content|raw }}
    </div>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                {% for item in page.media.images %}
                    <div class=\"columns item\">
                        <div class=\"item-wrap\">
                            <a href=\"{{ page.url(true) }}/{{ item.filename }}\" data-imagelightbox=\"a\" >
                                {{ item.cropZoom(700, 700).html( item.filename|replace({'-': \" \"}), item.filename|replace({'-': \" \"}))|raw }}
                                <div class=\"overlay\"></div>
                                <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</section>
", "modular/screenshots.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\modular\\screenshots.html.twig");
    }
}
