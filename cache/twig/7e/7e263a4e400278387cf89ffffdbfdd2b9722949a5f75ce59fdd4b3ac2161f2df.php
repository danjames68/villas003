<?php

/* partials/villa/date.html.twig */
class __TwigTemplate_7b753bc011e57adc19ed565158aa93aeb451fdcde0decd78df93d308decbd6b8 extends Twig_Template
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
        echo "<span class=\"villa-date\">
    <time class=\"dt-published\" datetime=\"";
        // line 2
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
        echo "\">
        <i class=\"fa fa-calendar\"></i> ";
        // line 3
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
        echo "
    </time>
</span>
";
    }

    public function getTemplateName()
    {
        return "partials/villa/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"villa-date\">
    <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
        <i class=\"fa fa-calendar\"></i> {{ page.date|date(system.pages.dateformat.short) }}
    </time>
</span>
", "partials/villa/date.html.twig", "/Users/minidino/Sites/villa-site/user/themes/quark/templates/partials/villa/date.html.twig");
    }
}
