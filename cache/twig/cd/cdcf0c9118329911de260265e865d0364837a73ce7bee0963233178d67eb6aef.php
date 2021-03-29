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

/* partials/base.html.twig */
class __TwigTemplate_22b1d05566513787b6e81b84b1adde4549a06cda567e16196891f6f2fbd14d39 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
 ";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"><!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "</head>
    <body>

        <div id=\"preloader\">
            <div id=\"status\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
        </div>

        ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "  
    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\" />

         ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/js/modernizr.js\"></script>

        ";
        // line 24
        $this->displayBlock('assets', $context, $blocks);
        // line 27
        echo "    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/default.css"], "method");
        // line 17
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/layout.css"], "method");
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/media-queries.css"], "method");
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css"], "method");
        // line 20
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/prettyPhoto.css"], "method");
        // line 21
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 24
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        // line 38
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "        ";
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        // line 42
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "        ";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        // line 46
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        // line 50
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 51
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-migrate-1.2.1.min.js"], "method");
        // line 52
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.flexslider.js"], "method");
        // line 53
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/waypoints.js"], "method");
        // line 54
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.fittext.js"], "method");
        // line 55
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.fitvids.js"], "method");
        // line 56
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/imagelightbox.js"], "method");
        // line 57
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.prettyPhoto.js"], "method");
        // line 58
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js"], "method");
        // line 59
        echo "            
            ";
        // line 60
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        // line 61
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 61,  246 => 60,  243 => 59,  240 => 58,  237 => 57,  234 => 56,  231 => 55,  228 => 54,  225 => 53,  222 => 52,  219 => 51,  216 => 50,  213 => 49,  209 => 47,  206 => 46,  203 => 45,  198 => 42,  194 => 43,  191 => 42,  188 => 41,  184 => 39,  181 => 38,  178 => 37,  170 => 25,  167 => 24,  158 => 21,  155 => 20,  152 => 19,  149 => 18,  146 => 17,  143 => 16,  140 => 15,  136 => 27,  134 => 24,  128 => 22,  126 => 15,  121 => 13,  118 => 12,  116 => 11,  108 => 10,  105 => 9,  102 => 8,  94 => 62,  92 => 49,  89 => 48,  87 => 45,  84 => 44,  82 => 41,  79 => 40,  77 => 37,  70 => 33,  63 => 28,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
 {% set html_lang = grav.language.getActive ?: grav.config.site.default_lang %}
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ html_lang }}\"><!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

         {% block stylesheets %}
                {% do assets.addCss('theme://css/default.css') %}
                {% do assets.addCss('theme://css/layout.css') %}
                {% do assets.addCss('theme://css/media-queries.css') %}
                {% do assets.addCss('theme://css/animate.css') %}
                {% do assets.addCss('theme://css/prettyPhoto.css') %}
        {% endblock %}
        <script src=\"{{ theme_url }}/js/modernizr.js\"></script>

        {% block assets deferred %}
            {{ assets.css()|raw }}
        {% endblock %}
    {% endblock head %}
</head>
    <body>

        <div id=\"preloader\">
            <div id=\"status\">
                <img src=\"{{ theme_url }}/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
        </div>

        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/jquery-migrate-1.2.1.min.js') %}
            {% do assets.addJs('theme://js/jquery.flexslider.js') %}
            {% do assets.addJs('theme://js/waypoints.js') %}
            {% do assets.addJs('theme://js/jquery.fittext.js') %}
            {% do assets.addJs('theme://js/jquery.fitvids.js') %}
            {% do assets.addJs('theme://js/imagelightbox.js') %}
            {% do assets.addJs('theme://js/jquery.prettyPhoto.js') %}
            {% do assets.addJs('theme://js/main.js') %}
            
            {{ assets.js()|raw }}
            {{ assets.js('bottom')|raw }} 
        {% endblock %}  
    </body>
</html>
", "partials/base.html.twig", "D:\\git\\ErosIT_Grav\\user\\themes\\woo\\templates\\partials\\base.html.twig");
    }
}
