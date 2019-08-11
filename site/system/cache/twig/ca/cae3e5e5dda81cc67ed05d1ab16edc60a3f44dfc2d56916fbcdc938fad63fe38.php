<?php

/* install.license.html.twig */
class __TwigTemplate_ee12b3157c19f7c1dbe94aebd98a737c461aaeb7c903df8bbad0bd565913e966 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"requirements\" />
\t<textarea rows=\"10\" cols=\"80\" readonly=\"1\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["license"] ?? null), "html", null, true);
        echo "</textarea>

\t";
        // line 5
        echo ($context["buttons"] ?? null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install.license.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/install.license.html.twig");
    }
}
