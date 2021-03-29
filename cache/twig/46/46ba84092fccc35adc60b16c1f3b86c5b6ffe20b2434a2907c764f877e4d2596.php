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

/* partials/gallery-plusplus.html.twig */
class __TwigTemplate_75cce6d5ee0da84ffdcd568f88299349e8821033832645e9a1e648d453022d42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["id"] = twig_random($this->env);
        // line 3
        echo "
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "
";
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((((((((((((((((((((((((((((("\$(\"#" .         // line 19
($context["id"] ?? null)) . "\").justifiedGallery({
    rowHeight: ") .         // line 20
($context["rowHeight"] ?? null)) . ",
    margins: ") .         // line 21
($context["margins"] ?? null)) . ",
    lastRow: \"") .         // line 22
($context["lastRow"] ?? null)) . "\",
    captions: ") .         // line 23
($context["captions"] ?? null)) . ",
    border: ") .         // line 24
($context["border"] ?? null)) . ",
});

GLightbox({
    selector: \".glightbox-") .         // line 28
($context["id"] ?? null)) . "\",
    openEffect: \"") .         // line 29
($context["openEffect"] ?? null)) . "\",
    closeEffect: \"") .         // line 30
($context["closeEffect"] ?? null)) . "\",
    slideEffect: \"") .         // line 31
($context["slideEffect"] ?? null)) . "\",
    closeButton: ") .         // line 32
($context["closeButton"] ?? null)) . ",
    touchNavigation: ") .         // line 33
($context["touchNavigation"] ?? null)) . ",
    touchFollowAxis: ") .         // line 34
($context["touchFollowAxis"] ?? null)) . ",
    keyboardNavigation: ") .         // line 35
($context["keyboardNavigation"] ?? null)) . ",
    closeOnOutsideClick: ") .         // line 36
($context["closeOnOutsideClick"] ?? null)) . ",
    loop: ") .         // line 37
($context["loop"] ?? null)) . ",
    draggable: ") .         // line 38
($context["draggable"] ?? null)) . ",
    descPosition: \"") .         // line 39
($context["descPosition"] ?? null)) . "\",
});"), 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "
";
        // line 44
        echo "<p id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 46
            echo "        ";
            $context["index"] = $this->getAttribute($context["loop"], "index0", []);
            // line 47
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["links"] ?? null), ($context["index"] ?? null), [], "array"), "html", null, true);
            echo "\" class=\"glightbox-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 49
            echo "                ";
            if ((($context["descEnabled"] ?? null) == "true")) {
                // line 50
                echo "                    data-description=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["descs"] ?? null), ($context["index"] ?? null), [], "array"), "html", null, true);
                echo "\"
                ";
            }
            // line 52
            echo "        >
            ";
            // line 53
            echo $context["image"];
            echo "
        </a>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</p>

";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://shortcode-gallery-plusplus/vendor/glightbox/glightbox.min.css"], "method");
        // line 7
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://shortcode-gallery-plusplus/vendor/justified-gallery/justifiedGallery.min.css"], "method");
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 13
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://shortcode-gallery-plusplus/vendor/glightbox/glightbox.min.js"], "method");
        // line 14
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://shortcode-gallery-plusplus/vendor/justified-gallery/jquery.justifiedGallery.min.js"], "method");
    }

    public function getTemplateName()
    {
        return "partials/gallery-plusplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 14,  175 => 13,  172 => 12,  169 => 11,  164 => 7,  161 => 6,  158 => 5,  152 => 56,  135 => 53,  132 => 52,  126 => 50,  123 => 49,  116 => 47,  113 => 46,  96 => 45,  91 => 44,  88 => 42,  85 => 39,  83 => 38,  81 => 37,  79 => 36,  77 => 35,  75 => 34,  73 => 33,  71 => 32,  69 => 31,  67 => 30,  65 => 29,  63 => 28,  58 => 24,  56 => 23,  54 => 22,  52 => 21,  50 => 20,  48 => 19,  47 => 18,  44 => 16,  42 => 11,  39 => 9,  37 => 5,  34 => 3,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# a random id for each gallery #}
{% set id = random() %}

{# add css libraries #}
{% block stylesheets %}
    {% do assets.addCss('plugin://shortcode-gallery-plusplus/vendor/glightbox/glightbox.min.css') %}
    {% do assets.addCss('plugin://shortcode-gallery-plusplus/vendor/justified-gallery/justifiedGallery.min.css') %}
{% endblock %}

{# add js libraries #}
{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('plugin://shortcode-gallery-plusplus/vendor/glightbox/glightbox.min.js') %}
    {% do assets.addJs('plugin://shortcode-gallery-plusplus/vendor/justified-gallery/jquery.justifiedGallery.min.js') %}
{% endblock %}

{# add javascript for gallery and lightbox configuration #}
{% do assets.addInlineJs(
'\$(\"#' ~ id ~ '\").justifiedGallery({
    rowHeight: ' ~  rowHeight  ~ ',
    margins: ' ~  margins  ~ ',
    lastRow: \"' ~  lastRow  ~ '\",
    captions: ' ~  captions  ~ ',
    border: ' ~  border  ~ ',
});

GLightbox({
    selector: \".glightbox-' ~ id ~ '\",
    openEffect: \"' ~ openEffect ~ '\",
    closeEffect: \"' ~ closeEffect ~ '\",
    slideEffect: \"' ~ slideEffect ~ '\",
    closeButton: ' ~ closeButton ~ ',
    touchNavigation: ' ~ touchNavigation ~ ',
    touchFollowAxis: ' ~ touchFollowAxis ~ ',
    keyboardNavigation: ' ~ keyboardNavigation ~ ',
    closeOnOutsideClick: ' ~ closeOnOutsideClick ~ ',
    loop: ' ~ loop ~ ',
    draggable: ' ~ draggable ~ ',
    descPosition: \"' ~ descPosition ~ '\",
});', { 'group': 'bottom' })
%}

{# html #}
<p id=\"{{ id }}\">
    {% for image in images %}
        {% set index = loop.index0 %}
        <a href=\"{{ links[index] }}\" class=\"glightbox-{{ id }}\"
                {# add description only if enabled #}
                {% if descEnabled == \"true\" %}
                    data-description=\"{{ descs[index] }}\"
                {% endif %}
        >
            {{ image|raw }}
        </a>
    {% endfor %}
</p>

", "partials/gallery-plusplus.html.twig", "D:\\git\\ErosIT_Grav\\user\\plugins\\shortcode-gallery-plusplus\\templates\\partials\\gallery-plusplus.html.twig");
    }
}
