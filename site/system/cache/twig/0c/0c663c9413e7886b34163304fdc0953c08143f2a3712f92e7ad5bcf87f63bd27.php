<?php

/* buttons.back.html.twig */
class __TwigTemplate_cf48c3887916578b8bfd915c65d168007c2aa00996db260b51621f40a233bdf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["button_name"] = "Back";
        // line 2
        $this->loadTemplate("buttons.base.html.twig", "buttons.back.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.back.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/buttons.back.html.twig");
    }
}
