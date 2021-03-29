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

/* partials/footer.html.twig */
class __TwigTemplate_05cf3bdbc985b62c526003101c7f1be6980f02ee2883b3f8ce63402d668e8064 extends \Twig\Template
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
        echo "<footer>
    <div class=\"row\">         
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "text", []), "html", null, true);
        echo "
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <h3 class=\"address\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "address", []), "title", []), "html", null, true);
        echo "</h3>
                    <p>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "address", []), "lines", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                           ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "line", []), "html", null, true);
            echo " <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </p>
                </div>
                <div class=\"columns\">
                    <h3 class=\"social\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "social_title", []), "html", null, true);
        echo "</h3>
                    <ul>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["item"], "icon", [])), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"contact\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "contact", []), "title", []), "html", null, true);
        echo "</h3>
                    <ul>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "contact", []), "lines", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2014 Woo | Design by <a title=\"Styleshout\" href=\"http://www.styleshout.com/\">Styleshout</a> | Converted to GRAV by <a title=\"Grav\" href=\"http://www.getgrav.org/\">Grav Team</a></p>
        <div id=\"go-top\">
            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#hero\"><i class=\"icon-up-open\"></i></a>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  113 => 35,  109 => 34,  104 => 32,  99 => 29,  88 => 27,  84 => 26,  79 => 24,  74 => 21,  65 => 19,  61 => 18,  56 => 16,  47 => 10,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"row\">         
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ theme_url }}/images/footer-logo.png\" alt=\"\" />
                </a>
            </div>
            <p>
                {{ site.footer.text }}
            </p>
        </div>
        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <h3 class=\"address\">{{ site.footer.address.title }}</h3>
                    <p>
                        {% for item in site.footer.address.lines %}
                           {{ item.line }} <br>
                        {% endfor %}
                    </p>
                </div>
                <div class=\"columns\">
                    <h3 class=\"social\">{{ site.footer.social_title }}</h3>
                    <ul>
                        {% for item in site.social %}
                            <li><a href=\"{{ item.url }}\">{{ item.icon|capitalize }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"contact\">{{ site.footer.contact.title }}</h3>
                    <ul>
                        {% for item in site.footer.contact.lines %}
                            <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
        <p class=\"copyright\">&copy; 2014 Woo | Design by <a title=\"Styleshout\" href=\"http://www.styleshout.com/\">Styleshout</a> | Converted to GRAV by <a title=\"Grav\" href=\"http://www.getgrav.org/\">Grav Team</a></p>
        <div id=\"go-top\">
            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#hero\"><i class=\"icon-up-open\"></i></a>
        </div>
    </div>
</footer>", "partials/footer.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\partials\\footer.html.twig");
    }
}
