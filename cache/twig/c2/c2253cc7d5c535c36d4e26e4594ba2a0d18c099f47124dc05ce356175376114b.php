<?php

/* villa.html.twig */
class __TwigTemplate_d085027101c18c6b14e112b65066def434d6755a554c3dda9e1e40da1bf73e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "villa.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $context["villa_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["villa"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("villa_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("villa-page"))], "method");
        // line 5
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["villa"] ?? null)]), true);
        // line 6
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["villa"] ?? null)]), true);
        // line 7
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["villa"] ?? null)]), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 21
    public function block_hero($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->loadTemplate("partials/hero.html.twig", "villa.html.twig", 22)->display(array_merge($context, ["id" => "villa-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", []), "hero_image" => ($context["villa_image"] ?? null)]));
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        // line 26
        echo "    <section id=\"body-wrapper\" class=\"section villa-listing\">
        <section class=\"container ";
        // line 27
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 29
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 30
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "villa.html.twig", 30)->display($context);
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        $this->loadTemplate("villa.html.twig", "villa.html.twig", 33, "1984469727")->display(array_merge($context, ["villa" => ($context["page"] ?? null)]));
        // line 54
        echo "        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
";
    }

    public function getTemplateName()
    {
        return "villa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  91 => 29,  86 => 27,  83 => 26,  80 => 25,  75 => 22,  72 => 21,  67 => 17,  65 => 16,  60 => 15,  57 => 14,  50 => 11,  47 => 10,  44 => 9,  40 => 1,  38 => 7,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
{% set villa_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set villa = page.find(header_var('villa_url')|defined(theme_var('villa-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, villa])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, villa])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, villa])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'villa-hero', content: page.content, hero_image: villa_image} %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section villa-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {villa: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/villa-list-item.html.twig' with {villa: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "villa.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/villa.html.twig");
    }
}


/* villa.html.twig */
class __TwigTemplate_d085027101c18c6b14e112b65066def434d6755a554c3dda9e1e40da1bf73e24_1984469727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "villa.html.twig", 33);
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

    // line 34
    public function block_item($context, array $blocks = [])
    {
        // line 35
        echo "
                <div class=\"bricklayer\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 38
            echo "                    ";
            $this->loadTemplate("partials/villa-list-item.html.twig", "villa.html.twig", 38)->display(array_merge($context, ["villa" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 39
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>

                ";
        // line 42
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 43
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 44
            $this->loadTemplate("partials/pagination.html.twig", "villa.html.twig", 44)->display(array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 45
            echo "                    </div>
                ";
        }
        // line 47
        echo "
            ";
    }

    // line 50
    public function block_sidebar($context, array $blocks = [])
    {
        // line 51
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "villa.html.twig", 51)->display($context);
        // line 52
        echo "            ";
    }

    public function getTemplateName()
    {
        return "villa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 52,  296 => 51,  293 => 50,  288 => 47,  284 => 45,  282 => 44,  279 => 43,  277 => 42,  273 => 40,  259 => 39,  256 => 38,  239 => 37,  235 => 35,  232 => 34,  214 => 33,  104 => 54,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  91 => 29,  86 => 27,  83 => 26,  80 => 25,  75 => 22,  72 => 21,  67 => 17,  65 => 16,  60 => 15,  57 => 14,  50 => 11,  47 => 10,  44 => 9,  40 => 1,  38 => 7,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
{% set villa_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set villa = page.find(header_var('villa_url')|defined(theme_var('villa-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, villa])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, villa])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, villa])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'villa-hero', content: page.content, hero_image: villa_image} %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section villa-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {villa: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/villa-list-item.html.twig' with {villa: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "villa.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/villa.html.twig");
    }
}
