<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_0c850702a3a826ffc1c9b88139395c3536e7ea33ff7317154a9731971b4b034c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["feed_url"] = (((($this->getAttribute(($context["villa"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["villa"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["villa"] ?? null), "slug", []))) : ($this->getAttribute(($context["villa"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["villa"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["villa"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 5
            echo "<div class=\"sidebar-content\">
    ";
            // line 6
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 6)->display($context);
            // line 7
            echo "</div>
";
        }
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 10
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 11
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "</div>
";
        }
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 16
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 17
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 18
            echo ($context["base_url"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
</div>
";
        }
        // line 21
        echo "
";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/modules/sidebar"], "method"), "content", []);
        echo "

";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 25
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 26
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 27)->display(array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 28
            echo "</div>
";
        }
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 31
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 32
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
\t";
            // line 33
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 33)->display(array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 34
            echo "</div>
";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 37
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 38
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"btn\" href=\"";
            // line 39
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"btn\" href=\"";
            // line 40
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    ";
            // line 41
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enable_json_feed", [])) {
                echo "<a class=\"btn\" href=\"";
                echo ($context["feed_url"] ?? null);
                echo ".json\"><i class=\"fa fa-rss-square\"></i> JSON</a>";
            }
            // line 42
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  103 => 34,  101 => 33,  97 => 32,  94 => 31,  92 => 30,  88 => 28,  86 => 27,  82 => 26,  79 => 25,  77 => 24,  72 => 22,  69 => 21,  61 => 18,  57 => 17,  54 => 16,  52 => 15,  48 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = villa.url == '/' or villa.url == base_url_relative ? (base_url_relative~'/'~villa.slug) : villa.url %}
{% set new_base_url = villa.url == '/' ? '' : villa.url %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<div class=\"sidebar-content\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
    {% include 'partials/relatedpages.html.twig' %}
</div>
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>{{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
\t<a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
</div>
{% endif %}

{{ page.find('/modules/sidebar').content|raw }}

{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
\t{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"btn\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"btn\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    {% if config.plugins.feed.enable_json_feed %}<a class=\"btn\" href=\"{{ feed_url }}.json\"><i class=\"fa fa-rss-square\"></i> JSON</a>{% endif %}
</div>
{% endif %}
", "partials/sidebar.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/partials/sidebar.html.twig");
    }
}
