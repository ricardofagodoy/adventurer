<?php

/* commands.html.twig */
class __TwigTemplate_f48f67c376cd191754be7738f945f838f72323a582f134973d60162cf88e7775 extends Twig_Template
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
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t<tr>
\t\t<td bgcolor=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\" width=\"150\"><b>Words</b></td>
\t\t<td bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\"><b>Description</b></td>
\t\t";
        // line 5
        if (($context["canEdit"] ?? null)) {
            // line 6
            echo "\t\t<td bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\" class=\"white\"><b>Options</b></td>
\t\t";
        }
        // line 8
        echo "\t</tr>
\t";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 11
            echo "\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 12
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
            echo "\">
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "words", array()), "html", null, true);
            echo "</td>
\t\t<td><i>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "description", array()), "html", null, true);
            echo "</i></td>
\t\t";
            // line 15
            if (($context["canEdit"] ?? null)) {
                // line 16
                echo "\t\t<td>
\t\t\t<a href=\"?subtopic=commands&action=edit&id=";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "id", array()), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t</a>
\t\t\t<a id=\"delete\" href=\"?subtopic=commands&action=delete&id=";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "id", array()), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t<img src=\"images/del.png\"/>Delete
\t\t\t</a>
\t\t\t<a href=\"?subtopic=commands&action=hide&id=";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "id", array()), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["command"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t<img src=\"images/";
                // line 24
                if (($this->getAttribute($context["command"], "hidden", array()) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>";
                if (($this->getAttribute($context["command"], "hidden", array()) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 25
                echo "\t\t\t</a>
\t\t\t";
                // line 26
                if ((($context["i"] ?? null) != 1)) {
                    // line 27
                    echo "\t\t\t<a href=\"?subtopic=commands&action=moveup&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "id", array()), "html", null, true);
                    echo "\" title=\"Move up\">
\t\t\t\t<img src=\"images/icons/arrow_up.gif\"/>Move up
\t\t\t</a>
\t\t\t";
                }
                // line 31
                echo "\t\t\t";
                if ((($context["i"] ?? null) != ($context["last"] ?? null))) {
                    // line 32
                    echo "\t\t\t<a href=\"?subtopic=commands&action=movedown&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "id", array()), "html", null, true);
                    echo "\" title=\"Move down\">
\t\t\t\t<img src=\"images/icons/arrow_down.gif\"/>Move down
\t\t\t</a>
\t\t\t";
                }
                // line 36
                echo "\t\t</td>
\t\t";
            }
            // line 38
            echo "\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "commands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  132 => 38,  128 => 36,  120 => 32,  117 => 31,  109 => 27,  107 => 26,  104 => 25,  92 => 24,  82 => 23,  76 => 20,  70 => 17,  67 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 12,  49 => 11,  44 => 10,  42 => 9,  39 => 8,  33 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "commands.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/commands.html.twig");
    }
}
