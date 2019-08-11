<?php

/* experience_table.html.twig */
class __TwigTemplate_c1ebff34471d153dca0660550b3b1c783b2a7b0f1af354bed4004700191c4cec extends Twig_Template
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
        echo "This is a list of the experience points that are required to advance to the various levels.
Remember you can also check the respective skill bar in your skill window of the client to check your progress towards the next level.<br/><br/>

<table bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", array()), "html", null, true);
        echo "\" border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t<td class=\"white\" colspan=\"5\"><b>Experience Table</b></td>
\t</tr>
\t<tr>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute(($context["config"] ?? null), "experiencetable_columns", array()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "\t\t<td>
\t\t\t<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">
\t\t\t\t<tr bgcolor=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<td><b>Level</b></td>
\t\t\t\t\t<td><b>Experience</b></td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((($context["i"] * $this->getAttribute(($context["config"] ?? null), "experiencetable_rows", array())) + 1), ((($context["i"] * $this->getAttribute(($context["config"] ?? null), "experiencetable_rows", array())) + ($this->getAttribute(($context["config"] ?? null), "experiencetable_rows", array()) + 1)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 17
                echo "\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $context["level"], "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute(($context["experience"] ?? null), $context["level"], array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</table>
\t\t</td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "experience_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 22,  63 => 19,  59 => 18,  54 => 17,  50 => 16,  43 => 12,  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "experience_table.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/experience_table.html.twig");
    }
}
