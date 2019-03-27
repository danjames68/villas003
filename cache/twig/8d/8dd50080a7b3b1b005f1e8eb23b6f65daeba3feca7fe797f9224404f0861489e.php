<?php

/* theme.yaml.twig */
class __TwigTemplate_ef8659767920cdb1126e96c2a41c6369fc9bd382c34459a53ab57c2183c5c4f8 extends Twig_Template
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
        echo "streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
         - user/themes/";
        // line 8
        echo $this->getAttribute(($context["component"] ?? null), "extends", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/{{ component.name|hyphenize }}
         - user/themes/{{ component.extends }}
", "theme.yaml.twig", "/Users/minidino/Sites/luxury-villas/user/plugins/devtools/components/theme/inheritance/theme.yaml.twig");
    }
}
