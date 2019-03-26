<?php

/* partials/relatedpages.html.twig */
class __TwigTemplate_7de2a1cd6e883af56990d04c8c8538f8c8d18666859bfd25a37eaee44a5455aa extends Twig_Template
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
        echo "<ul class=\"related-pages menu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 4
            echo "        ";
            if (($context["related"] ?? null)) {
                // line 5
                echo "            <li class=\"menu-item\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "show_score", [])) {
                    // line 7
                    echo "                    <div class=\"menu-badge\">
                        <span class=\"label lable-primary\">";
                    // line 8
                    echo $context["score"];
                    echo "</span>
                    </div>
                ";
                }
                // line 11
                echo "                <a href=\"";
                echo $this->getAttribute(($context["related"] ?? null), "url", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "\">";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "</a>
            </li>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 14,  46 => 11,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"related-pages menu\">
    {% for related_path, score in related_pages %}
        {% set related = grav['pages'].get(related_path) %}
        {% if related %}
            <li class=\"menu-item\">
                {% if config.plugins.relatedpages.show_score %}
                    <div class=\"menu-badge\">
                        <span class=\"label lable-primary\">{{ score }}</span>
                    </div>
                {% endif %}
                <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">{{ related.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
</ul>", "partials/relatedpages.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/partials/relatedpages.html.twig");
    }
}
