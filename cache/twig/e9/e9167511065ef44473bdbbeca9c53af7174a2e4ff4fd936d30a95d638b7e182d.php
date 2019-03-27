<?php

/* blueprints.yaml.twig */
class __TwigTemplate_11f36ffd853a2170680c17b81e31cc9e0c6636e07733478963fa26a490509623 extends Twig_Template
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
        echo "name: ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
version: 0.1.0
description: ";
        // line 3
        echo $this->getAttribute(($context["component"] ?? null), "description", []);
        echo "
icon: rebel
author:
  name: ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []);
        echo "
  email: ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "email", []);
        echo "
homepage: https://github.com/";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []));
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []));
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/issues
readme: https://github.com/";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []));
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/blob/develop/README.md
license: MIT
";
    }

    public function getTemplateName()
    {
        return "blueprints.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  47 => 11,  39 => 8,  35 => 7,  31 => 6,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("name: {{ component.name|titleize }}
version: 0.1.0
description: {{ component.description }}
icon: rebel
author:
  name: {{ component.author.name }}
  email: {{ component.author.email }}
homepage: https://github.com/{{ component.author.name|hyphenize }}/grav-theme-{{ component.name|hyphenize }}
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/{{ component.author.name|hyphenize }}/grav-theme-{{ component.name|hyphenize }}/issues
readme: https://github.com/{{ component.author.name|hyphenize }}/grav-theme-{{ component.name|hyphenize }}/blob/develop/README.md
license: MIT
", "blueprints.yaml.twig", "/Users/minidino/Sites/luxury-villas/user/plugins/devtools/components/theme/inheritance/blueprints.yaml.twig");
    }
}
