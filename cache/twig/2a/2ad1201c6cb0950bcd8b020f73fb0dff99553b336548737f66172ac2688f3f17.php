<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_556b21f29994eaa518ec0542e558614e1c38f6f54cf20e77f8e3e20dba8a801e extends Twig_Template
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
        $context["taxlist"] = (((isset($context["children_only"]) || array_key_exists("children_only", $context))) ? ($this->getAttribute(($context["taxonomylist"] ?? null), "getChildPagesTags", [], "method")) : ($this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method")));
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<span class=\"tags\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "        ";
                $context["label_class"] = ((($this->getAttribute(($context["uri"] ?? null), "param", [0 => ($context["taxonomy"] ?? null)], "method") == $context["tax"])) ? ("label-primary") : ("label-secondary"));
                // line 7
                echo "        <a class=\"label label-rounded ";
                echo ($context["label_class"] ?? null);
                echo "\" href=\"";
                echo ($context["base_url"] ?? null);
                echo "/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = children_only is defined ? taxonomylist.getChildPagesTags() : taxonomylist.get() %}

{% if taxlist %}
<span class=\"tags\">
    {% for tax,value in taxlist[taxonomy] %}
        {% set label_class = uri.param(taxonomy) == tax ? 'label-primary' : 'label-secondary' %}
        <a class=\"label label-rounded {{ label_class }}\" href=\"{{ base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax }}\">{{ tax }}</a>
    {% endfor %}
</span>
{% endif %}
", "partials/taxonomylist.html.twig", "/Users/minidino/Sites/luxury-villas/user/themes/quark/templates/partials/taxonomylist.html.twig");
    }
}
