<?php

/* characters.form.html.twig */
class __TwigTemplate_7370a60a944a4beac174810c5cbaf212b0bb596bcf744d1598b85b46628d8d9c extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" method=\"post\">
\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr><td bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><B>Search Character</B></TD></TR>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name:</td><td><input name=\"name\" value=\"\" size=\"29\" maxlength=\"29\"";
        // line 8
        if (($context["autofocus"] ?? null)) {
            echo " autofocus";
        }
        echo "></TD>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 10
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "characters.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  36 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "characters.form.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/characters.form.html.twig");
    }
}
