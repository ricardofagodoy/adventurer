<?php

/* install.config.html.twig */
class __TwigTemplate_2d18a23cf32e3bd0f9bf65de2fc025dbe340c8416ab90da86fc9c2ef8b0e394b extends Twig_Template
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
        echo "install/\" method=\"post\" autocomplete=\"off\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"database\" />
\t<table>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "server_path", 1 => "mail_admin", 2 => "mail_address"));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_";
            // line 7
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
\t\t\t\t\t<span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), ("step_config_" . $context["value"]), array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t</label>
\t\t\t\t<br>
\t\t\t\t<input type=\"text\" name=\"vars[";
            // line 11
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "]\" id=\"vars_";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            if ( !(null === $this->getAttribute(($context["session"] ?? null), ("var_" . $context["value"]), array(), "array"))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), ("var_" . $context["value"]), array(), "array"), "html", null, true);
                echo "\"";
            }
            echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), (("step_config_" . $context["value"]) . "_desc"), array(), "array"), "html", null, true);
            echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_date_timezone\">
\t\t\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_timezone", array()), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<select name=\"vars[date_timezone]\" id=\"vars_date_timezone\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 26
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "\"";
            if ((( !(null === $this->getAttribute(($context["session"] ?? null), "var_date_timezone", array(), "array")) && ($this->getAttribute(($context["session"] ?? null), "var_date_timezone", array(), "array") == $context["timezone"])) || ((null === $this->getAttribute(($context["session"] ?? null), "var_date_timezone", array(), "array")) && ($context["timezone"] == "Europe/Berlin")))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_timezone_desc", array()), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_client\">
\t\t\t\t\t<span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_client", array()), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<select name=\"vars[client]\" id=\"vars_client\">
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["version"]) {
            // line 42
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (( !(null === $this->getAttribute(($context["session"] ?? null), "var_client", array(), "array")) && ($this->getAttribute(($context["session"] ?? null), "var_client", array(), "array") == $context["id"]))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_client_desc", array()), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_usage\">
\t\t\t\t\t<span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_usage", array()), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<input type=\"hidden\" value=\"0\" name=\"vars[usage]\">
\t\t\t\t<input type=\"checkbox\" name=\"vars[usage]\" id=\"vars_usage\" value=\"1\"";
        // line 57
        if (((null === $this->getAttribute(($context["session"] ?? null), "var_usage", array(), "array")) || ($this->getAttribute(($context["session"] ?? null), "var_usage", array(), "array") == 1))) {
            echo " checked";
        }
        echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["locale"] ?? null), "step_config_usage_desc", array()), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t</table>

\t";
        // line 65
        if (array_key_exists("errors", $context)) {
            // line 66
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "\t\t\t<p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t";
        }
        // line 70
        echo "\t";
        echo ($context["buttons"] ?? null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  192 => 69,  183 => 67,  178 => 66,  176 => 65,  168 => 60,  160 => 57,  153 => 53,  144 => 47,  139 => 44,  124 => 42,  120 => 41,  113 => 37,  104 => 31,  99 => 28,  84 => 26,  80 => 25,  73 => 21,  68 => 18,  58 => 14,  44 => 11,  38 => 8,  34 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install.config.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/install.config.html.twig");
    }
}
