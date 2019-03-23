<?php

/* partials/villa-list-item.html.twig */
class __TwigTemplate_a58c758b34eb9714176662590535b2b4407bd5f3dd438e96234cda1d7dd978b7 extends Twig_Template
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
        echo "
<div class=\"card\">
    ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "    <div class=\"card-image\">
        <a href=\"";
            // line 6
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 800, 1 => 400], "method"), "html", []);
            echo "</a>
    </div>
    ";
        }
        // line 9
        echo "    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            ";
        // line 11
        $this->loadTemplate("partials/villa/taxonomy.html.twig", "partials/villa-list-item.html.twig", 11)->display($context);
        // line 12
        echo "    </div>
        <div class=\"card-title\">
        ";
        // line 14
        $this->loadTemplate("partials/villa/title.html.twig", "partials/villa-list-item.html.twig", 14)->display(array_merge($context, ["title_level" => "h5"]));
        // line 15
        echo "        </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 18
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 19
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
        ";
        } else {
            // line 21
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        ";
        }
        // line 23
        echo "    </div>
    <div class=\"card-footer\">
        ";
        // line 25
        $this->loadTemplate("partials/villa/taxonomy.html.twig", "partials/villa-list-item.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/villa-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  74 => 25,  70 => 23,  64 => 21,  58 => 19,  56 => 18,  51 => 15,  49 => 14,  45 => 12,  43 => 11,  39 => 9,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"card\">
    {% set image = page.media.images|first %}
    {% if image %}
    <div class=\"card-image\">
        <a href=\"{{ page.url }}\">{{ image.cropZoom(800,400).html }}</a>
    </div>
    {% endif %}
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            {% include 'partials/villa/taxonomy.html.twig' %}
    </div>
        <div class=\"card-title\">
        {% include 'partials/villa/title.html.twig' with {title_level: 'h5'} %}
        </div>
    </div>
    <div class=\"card-body\">
        {% if page.summary != page.content %}
            {{ page.summary|raw }}
        {% else %}
            {{ page.content|raw }}
        {% endif %}
    </div>
    <div class=\"card-footer\">
        {% include 'partials/villa/taxonomy.html.twig' %}
    </div>
</div>

", "partials/villa-list-item.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/partials/villa-list-item.html.twig");
    }
}
