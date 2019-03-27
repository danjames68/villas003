<?php

/* theme.php.twig */
class __TwigTemplate_b35d5ec9c31d787aab403b92b92faf7ec67312d938c79f1907e61f56329fb98c extends Twig_Template
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
        echo "<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class ";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo " extends ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "extends", []));
        echo "
{
    // Access plugin events in this class
}
";
    }

    public function getTemplateName()
    {
        return "theme.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class {{ component.name|camelize }} extends {{ component.extends|camelize }}
{
    // Access plugin events in this class
}
", "theme.php.twig", "/Users/minidino/Sites/luxury-villas/user/plugins/devtools/components/theme/inheritance/theme.php.twig");
    }
}
