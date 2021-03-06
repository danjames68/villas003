<?php

/* partials/villa/menu.html.twig */
class __TwigTemplate_1d54aa6b2680cd28efc01f0cb0acf8dd2b93919c017e03d383dce367ef2ec6b7 extends Twig_Template
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
        $context["title_level"] = ((($context["title_level"] ?? null)) ? (($context["title_level"] ?? null)) : ("h2"));
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 3
            echo "    <";
            echo ($context["title_level"] ?? null);
            echo " class=\"p-name mt-1\">
        ";
            // line 4
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 5
                echo "        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
        ";
            }
            // line 7
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "menu", []);
            echo "</a>
    </";
            // line 8
            echo ($context["title_level"] ?? null);
            echo ">
";
        } else {
            // line 10
            echo "    <";
            echo ($context["title_level"] ?? null);
            echo " class=\"p-name mt-1\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "menu", []);
            echo "</a></";
            echo ($context["title_level"] ?? null);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "partials/villa/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  43 => 8,  36 => 7,  30 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set title_level = title_level ?: 'h2' %}
{% if page.header.link %}
    <{{ title_level }} class=\"p-name mt-1\">
        {% if page.header.continue_link is not same as(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
        {% endif %}
        <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.menu }}</a>
    </{{ title_level }}>
{% else %}
    <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.menu }}</a></{{ title_level }}>
{% endif %}", "partials/villa/menu.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/partials/villa/menu.html.twig");
    }
}
