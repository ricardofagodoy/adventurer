<?php

/* buttons.base.html.twig */
class __TwigTemplate_f70a8418f154e13cd6f9663917df5d6b9c95ee61cce7d8c1c8345e63898ea9e9 extends Twig_Template
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
        echo "<input type=\"submit\" name=\"";
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["button_name"] ?? null), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "buttons.base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.base.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/buttons.base.html.twig");
    }
}
