<?php

/* item.html.twig */
class __TwigTemplate_a51990fcf1d851a54c1da302318392b427ca0748d46d55d6393cfddcdb49357d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["villa"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("villa_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("villa-page"))], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["villa"] ?? null)]), true);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["villa"] ?? null)]), true);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["villa"] ?? null)]), true);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["hero_image_name"] ?? null), [], "array");
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
            <h2>";
            // line 13
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
            echo "</h2>
            ";
            // line 14
            $this->loadTemplate("partials/villa/taxonomy.html.twig", "item.html.twig", 14)->display($context);
            // line 15
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 16)->display(array_merge($context, ["id" => "villa-hero"]));
            // line 17
            echo "
    ";
        }
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        // line 22
        echo "<section id=\"body-wrapper\" class=\"section villa-listing\">
    <section class=\"container ";
        // line 23
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 25
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 26
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 26)->display($context);
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        ";
        // line 29
        $this->loadTemplate("item.html.twig", "item.html.twig", 29, "1076937127")->display($context);
        // line 37
        echo "
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  86 => 25,  81 => 23,  78 => 22,  75 => 21,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set villa = page.find(header_var('villa_url')|defined(theme_var('villa-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, villa])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, villa])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, villa])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/villa/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'villa-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section villa-listing\">
    <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/villa-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}
", "item.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_a51990fcf1d851a54c1da302318392b427ca0748d46d55d6393cfddcdb49357d_1076937127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 29);
        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_item($context, array $blocks = [])
    {
        // line 31
        echo "                ";
        $this->loadTemplate("partials/villa-item.html.twig", "item.html.twig", 31)->display($context);
        // line 32
        echo "            ";
    }

    // line 33
    public function block_sidebar($context, array $blocks = [])
    {
        // line 34
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 34)->display($context);
        // line 35
        echo "            ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 35,  214 => 34,  211 => 33,  207 => 32,  204 => 31,  201 => 30,  183 => 29,  99 => 37,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  86 => 25,  81 => 23,  78 => 22,  75 => 21,  69 => 17,  66 => 16,  63 => 15,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set villa = page.find(header_var('villa_url')|defined(theme_var('villa-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, villa])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, villa])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, villa])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/villa/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'villa-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section villa-listing\">
    <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/villa-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}
", "item.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/item.html.twig");
    }
}
