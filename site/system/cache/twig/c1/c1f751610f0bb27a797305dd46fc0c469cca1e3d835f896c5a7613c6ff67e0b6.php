<?php

/* characters.html.twig */
class __TwigTemplate_5b13196cc14a237793f7753bda6415134503152482ed6f1e7e8b171742dd0cd7 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"tools/js/tipped.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"tools/css/tipped.css\"/>
<script>
\t\$(document).ready(function() {
\t    Tipped.create('.tooltip');
\t});
</script>
";
        // line 8
        $context["rows"] = 0;
        // line 9
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>
\t<td><img src=\"<";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"10\" height=\"1\" border=\"0\"></td>
\t<td>
        ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array(twig_constant("HOOK_CHARACTERS_BEFORE_INFORMATIONS"))), "html", null, true);
        echo "
\t\t";
        // line 13
        if (($context["canEdit"] ?? null)) {
            // line 14
            echo "\t\t\t<a href=\"admin/?p=players&id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", array(), "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t</a>
\t\t";
        }
        // line 18
        echo "\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "outfit", array())) {
            // line 20
            echo "\t\t\t<div style=\"width:64px;height:64px;border:2px solid #F1E0C6; border-radius:50px; padding:13px; margin-top:38px;margin-left:376px;position:absolute;\"><img style=\"margin-left:";
            if (twig_in_filter($this->getAttribute(($context["player"] ?? null), "getLookType", array(), "method"), array(0 => 75, 1 => 266, 2 => 302))) {
                echo "-0px;margin-top:-0px;width:64px;height:64px;";
            } else {
                echo "-60px;margin-top:-60px;width:128px;height:128px;";
            }
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["outfit"] ?? null), "html", null, true);
            echo "\" alt=\"player outfit\"/></div>
\t\t\t";
        }
        // line 22
        echo "
\t\t\t<tr bgcolor=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Character Information</b></td>
\t\t\t</tr>

\t\t\t";
        // line 27
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 28
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
        echo "\">
\t\t\t\t<td width=\"20%\">Name:</td>
\t\t\t\t<td>";
        // line 30
        echo ($context["flag"] ?? null);
        echo " <span style=\"color: ";
        if ($this->getAttribute(($context["player"] ?? null), "isOnline", array(), "method")) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\"><b>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</b></span>";
        echo twig_escape_filter($this->env, ($context["oldName"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 33
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 34
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
        echo "\">
\t\t\t\t<td>Sex:</td>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, ($context["sex"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 39
        if (($context["marriage_enabled"] ?? null)) {
            // line 40
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 41
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Marital status:</td>
\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, ($context["marital_status"] ?? null), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 46
        echo "
\t\t\t";
        // line 47
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 48
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
        echo "\">
\t\t\t\t<td>Profession:</td>
\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, ($context["vocation"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "level", array())) {
            // line 54
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 55
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Level:</td>
\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLevel", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 60
        echo "
\t\t\t";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "experience", array())) {
            // line 62
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 63
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Experience:</td>
\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getExperience", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "magic_level", array())) {
            // line 70
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 71
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Magic Level:</td>
\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getMagLevel", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 76
        echo "
\t\t\t";
        // line 77
        if (($context["frags_enabled"] ?? null)) {
            // line 78
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 79
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Frags:</td>
\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, ($context["frags_count"] ?? null), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 84
        echo "
\t\t\t";
        // line 85
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 86
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
        echo "\">
\t\t\t\t<td>Residence:</td>
\t\t\t\t<td>";
        // line 88
        echo twig_escape_filter($this->env, ($context["town"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 91
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "balance", array())) {
            // line 92
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 93
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Balance:</td>
\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getBalance", array(), "method"), "html", null, true);
            echo " Gold Coins.</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 98
        echo "
\t\t\t";
        // line 99
        if ($this->getAttribute(($context["house"] ?? null), "found", array())) {
            // line 100
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 101
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>House:</td>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["house"] ?? null), "name", array()) . $this->getAttribute(($context["house"] ?? null), "town", array())) . $this->getAttribute(($context["house"] ?? null), "add", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<form action=\"?subtopic=houses&page=view\" method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"house\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute(($context["house"] ?? null), "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"image\" name=\"View\" alt=\"View\" src=\"";
            // line 110
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/buttons/sbutton_view.gif\" border=\"0\" width=\"120\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 118
        echo "
\t\t\t";
        // line 119
        if ( !(null === $this->getAttribute(($context["guild"] ?? null), "rank", array()))) {
            // line 120
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 121
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Guild membership:</td>
\t\t\t\t<td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute(($context["guild"] ?? null), "rank", array()), "html", null, true);
            echo " of the ";
            echo $this->getAttribute(($context["guild"] ?? null), "link", array());
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 126
        echo "
\t\t\t";
        // line 127
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 128
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
        echo "\">
\t\t\t\t<td>Last login:</td>
\t\t\t\t<td>";
        // line 130
        if (($this->getAttribute(($context["player"] ?? null), "getLastLogin", array(), "method") == 0)) {
            echo "Never logged in.";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLastLogin", array(), "method"), "M d Y, H:i:s"), "html", null, true);
            echo " CEST";
        }
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 133
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "creation_date", array())) {
            // line 134
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 135
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td>Created:</td>
\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getCreated", array(), "method"), "M d Y, H:i:s"), "html", null, true);
            echo " CEST</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 140
        echo "
\t\t\t";
        // line 141
        if ( !(null === ($context["comment"] ?? null))) {
            // line 142
            echo "\t\t\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 143
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t\t<td valign=\"top\">Comment:</td>
\t\t\t\t<td>";
            // line 145
            echo ($context["comment"] ?? null);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 148
        echo "
\t\t\t";
        // line 149
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 150
        echo "\t\t\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
        echo "\">
\t\t\t\t<td>Account Status:</td>
\t\t\t\t<td>";
        // line 152
        if ($this->getAttribute(($context["account"] ?? null), "isPremium", array(), "method")) {
            echo "Premium Account";
        } else {
            echo "Free Account";
        }
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t";
        // line 155
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array(twig_constant("HOOK_CHARACTERS_AFTER_INFORMATIONS"))), "html", null, true);
        echo "
\t\t<br/>
\t\t<table border=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t";
        // line 159
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "skills", array())) {
            // line 160
            echo "\t\t\t\t<!-- SKILLS -->
\t\t\t\t<td width=\"30%\" valign=\"top\">
\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"white\"><B>Skills</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 166
            $context["i"] = 0;
            // line 167
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 168
                echo "\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 169
                echo "\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<td valign=\"top\">";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "value", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<!-- SKILLS_END -->
\t\t\t\t";
        }
        // line 178
        echo "
\t\t\t\t";
        // line 179
        if (($context["quests_enabled"] ?? null)) {
            // line 180
            echo "\t\t\t\t<!-- QUESTS -->
\t\t\t\t<td width=\"40%\" valign=\"top\">
\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Quests</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 186
            $context["i"] = 0;
            // line 187
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["done"]) {
                // line 188
                echo "\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 189
                echo "\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<td valign=\"top\">";
                // line 190
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</TD>
\t\t\t\t\t\t\t<td><img src=\"images/";
                // line 191
                if ($context["done"]) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ".png\" border=\"0\"/></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['done'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<!-- QUESTS_END -->
\t\t\t\t";
        }
        // line 198
        echo "
\t\t\t\t";
        // line 199
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", array()), "equipment", array())) {
            // line 200
            echo "\t\t\t\t<!-- EQUIPMENT -->
\t\t\t\t<td width=\"100\" valign=\"top\">
\t\t\t\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Equipment</b></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr bgcolor=\"";
            // line 206
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(1)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table width=\"100\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" style=\"background: #808080; border:1px solid #808080;\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 212
            echo $this->getAttribute(($context["equipment"] ?? null), 2, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 6, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 9, array(), "array");
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr height=\"11px\"><td>";
            // line 213
            if ( !(null === ($context["skull"] ?? null))) {
                echo "<img src=\"images/";
                echo twig_escape_filter($this->env, ($context["skull"] ?? null), "html", null, true);
                echo ".gif\">";
            }
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 218
            echo $this->getAttribute(($context["equipment"] ?? null), 1, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 4, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 7, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 8, array(), "array");
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 223
            echo $this->getAttribute(($context["equipment"] ?? null), 3, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 5, array(), "array");
            echo "</td></tr><tr><td style=\"border:1px solid #808080;\">";
            echo $this->getAttribute(($context["equipment"] ?? null), 10, array(), "array");
            echo "</td></tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<!-- EQUIPMENT_END -->
\t\t\t\t";
        }
        // line 234
        echo "\t\t\t</tr>
\t\t</table>

\t\t";
        // line 237
        if ((twig_length_filter($this->env, ($context["deaths"] ?? null)) > 0)) {
            // line 238
            echo "\t\t<!-- DEATHS -->
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Character Deaths</b></td>
\t\t\t</tr>
\t\t\t";
            // line 244
            $context["i"] = 0;
            // line 245
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deaths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["death"]) {
                // line 246
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 247
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["death"], "time", array()), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 248
                echo $this->getAttribute($context["death"], "description", array());
                echo "</td>
\t\t\t</tr>

\t\t\t";
                // line 251
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 252
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['death'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "\t\t<!-- DEATHS_END -->
\t\t";
        }
        // line 255
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["frags"] ?? null)) > 0)) {
            // line 256
            echo "\t\t<!-- FRAGS -->
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Victims</b></td>
\t\t\t</tr>
\t\t\t";
            // line 262
            $context["i"] = 0;
            // line 263
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["frags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["frag"]) {
                // line 264
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 265
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["frag"], "time", array()), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 266
                echo $this->getAttribute($context["frag"], "description", array());
                echo "(";
                if ($this->getAttribute($context["frag"], "unjustified", array())) {
                    echo "<span style=\"color: red; font-size: 10px\">Unjustified</span>";
                } else {
                    echo "<span style=\"color: green; font-size: 10px\">Justified</span>";
                }
                echo ")</td>
\t\t\t</tr>
\t\t\t";
                // line 268
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 269
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "\t\t</table>
\t\t<!-- FRAGS_END -->
\t\t";
        }
        // line 273
        echo "
\t\t";
        // line 274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array(twig_constant("HOOK_CHARACTERS_BEFORE_SIGNATURE"))), "html", null, true);
        echo "

\t\t";
        // line 276
        if ($this->getAttribute(($context["config"] ?? null), "signature_enabled", array())) {
            // line 277
            echo "\t\t<!-- SIGNATURE -->
\t\t<script type=\"text/javascript\">
\t\t\tfunction showSignLinks()
\t\t\t{
\t\t\t\tif(document.getElementById('signLinks').style.display == \"none\")
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('signLinks').style.display = \"inline\";
\t\t\t\t\tdocument.getElementById('signText').innerHTML = \"Hide links\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('signLinks').style.display = \"none\";
\t\t\t\t\tdocument.getElementById('signText').innerHTML = \"Show links\";
\t\t\t\t}
\t\t\t}
\t\t</script>
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\"><tr bgcolor=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\"><td colspan=2 class=\"white\"><b>Signature</b></td></tr>
\t\t\t<tr bgcolor=\"";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", array()), "html", null, true);
            echo "\"><td align=\"center\" valign=\"top\">
\t\t\t\t<img src=\"";
            // line 296
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" alt=\"Signature for player ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t<br/>
\t\t\t\t<b><a href=\"#\" onclick=\"showSignLinks(); return false;\" id=\"signText\">Show links</a></b>
\t\t\t\t<br/>
\t\t\t\t<table id=\"signLinks\" style=\"display: none;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Website:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"<a href=&quot;";
            // line 303
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "&quot;><img src=&quot;";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "&quot;></a>\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Forum:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"[URL=";
            // line 307
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "][IMG]";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "[/IMG][/URL]\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Direct link:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"";
            // line 311
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td></tr>
\t\t</table>
\t\t<!-- SIGNATURE_END -->
\t\t";
        }
        // line 318
        echo "\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array(twig_constant("HOOK_CHARACTERS_AFTER_SIGNATURE"))), "html", null, true);
        echo "
\t\t";
        // line 319
        if ( !($context["hidden"] ?? null)) {
            // line 320
            echo "\t\t";
            $context["rows"] = 0;
            // line 321
            echo "\t\t<!-- ACCOUNT_INFORMATION -->
\t\t<br/><br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Account Information</b></td>
\t\t\t</tr>

\t\t\t";
            // line 328
            $context["realName"] = $this->getAttribute(($context["account"] ?? null), "getRLName", array(), "method");
            // line 329
            echo "\t\t\t";
            if ( !twig_test_empty(($context["realName"] ?? null))) {
                // line 330
                echo "\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 331
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\">Real name:</td>
\t\t\t\t<td>";
                // line 333
                echo twig_escape_filter($this->env, ($context["realName"] ?? null), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 336
            echo "
\t\t\t";
            // line 337
            $context["group"] = $this->getAttribute(($context["player"] ?? null), "getGroup", array(), "method");
            // line 338
            echo "\t\t\t";
            if (($this->getAttribute(($context["group"] ?? null), "isLoaded", array(), "method") && ($this->getAttribute(($context["group"] ?? null), "getId", array(), "method") != 1))) {
                // line 339
                echo "\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 340
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t<td>Position:</td>
\t\t\t\t<td>";
                // line 342
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["group"] ?? null), "getName", array(), "method")), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 345
            echo "
\t\t\t";
            // line 346
            $context["realLocation"] = $this->getAttribute(($context["account"] ?? null), "getLocation", array(), "method");
            // line 347
            echo "\t\t\t";
            if ( !twig_test_empty(($context["realLocation"] ?? null))) {
                // line 348
                echo "\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 349
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\">Location:</td>
\t\t\t\t<td>";
                // line 351
                echo twig_escape_filter($this->env, ($context["realLocation"] ?? null), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            // line 354
            echo "
\t\t\t";
            // line 355
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 356
            echo "\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["rows"] ?? null))), "html", null, true);
            echo "\">
\t\t\t<td width=\"20%\">Created:</td>
\t\t\t<td>";
            // line 358
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["account"] ?? null), "getCreated", array(), "method"), "j F Y, g:i a"), "html", null, true);
            echo "
\t\t\t\t";
            // line 359
            if ((preg_match("/^\\d+\$/", ($context["bannedUntil"] ?? null)) || (($context["bannedUntil"] ?? null) == "-1"))) {
                // line 360
                echo "\t\t\t\t\t<span style=\"color: red\">[Banished ";
                if ((($context["bannedUntil"] ?? null) == "-1")) {
                    echo "forever";
                } else {
                    echo "until ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["bannedUntil"] ?? null), "d F Y, h:s"), "html", null, true);
                }
                echo "]</span>
\t\t\t\t";
            } else {
                // line 362
                echo "\t\t\t\t";
                echo ($context["bannedUntil"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 364
            echo "\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t<!-- ACCOUNT_INFORMATION_END -->
\t\t";
            // line 368
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array(twig_constant("HOOK_CHARACTERS_AFTER_ACCOUNT"))), "html", null, true);
            echo "
\t\t<!-- CHARACTERS_LIST -->
\t\t<br/><br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=4 class=\"white\"><b>Characters</b></td>
\t\t\t</tr>
\t\t\t<tr bgcolor=\"";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t<td width=\"62%\"><B>Name</b></td>
\t\t\t\t<td width=\"30%\"><B>Level</b></td>
\t\t\t\t<td width=\"8%\"><b>Status</b></td>
\t\t\t\t<td><b>&#160;</b></td>
\t\t\t</tr>
\t\t\t";
            // line 381
            $context["i"] = 0;
            // line 382
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 383
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["player"], "isHidden", array(), "method") && ($this->getAttribute(call_user_func_array($this->env->getFunction('config')->getCallable(), array("characters")), "deleted", array(), "array") ||  !$this->getAttribute($context["player"], "isDeleted", array(), "method")))) {
                    // line 384
                    echo "\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 385
                    echo "\t\t\t<tr bgcolor=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                    echo "\">
\t\t\t\t<td>
\t\t\t\t\t<nobr>";
                    // line 387
                    echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                    echo ".&#160;";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
                    if ($this->getAttribute($context["player"], "isDeleted", array(), "method")) {
                        echo "<span style=\"color: red\"> [DELETED]</span>";
                    }
                    echo "</nobr>
\t\t\t\t</td>

\t\t\t\t<td>";
                    // line 390
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", array(), "method"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getVocationName", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 391
                    if ($this->getAttribute($context["player"], "isOnline", array(), "method")) {
                        echo "<b><span style=\"color: green\">Online</span></b>";
                    }
                    echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t<form action=\"";
                    // line 394
                    echo twig_escape_filter($this->env, ($context["characters_link"] ?? null), "html", null, true);
                    echo "\" method=post>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"name\" value=\"";
                    // line 397
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t<input type=\"image\" name=\"View ";
                    // line 398
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
                    echo "\" alt=\"View ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", array(), "method"), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                    echo "/images/global/buttons/sbutton_view.gif\" border=\"0\" width=\"120\" height=\"18\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</form>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t\t";
                }
                // line 406
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 407
            echo "\t\t\t</table>
\t\t\t<!-- CHARACTERS_LIST_END -->
\t\t\t";
        }
        // line 410
        echo "\t\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), array(twig_constant("HOOK_CHARACTERS_AFTER_CHARACTERS"))), "html", null, true);
        echo "
\t\t\t";
        // line 411
        if (($context["canEdit"] ?? null)) {
            // line 412
            echo "\t\t\t\t<a href=\"admin/?p=players&id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", array(), "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t\t\t\t\t<img src=\"images/edit.png\"/>Edit
\t\t\t\t</a>
\t\t\t";
        }
        // line 416
        echo "\t\t</td>
\t\t<td>
\t\t\t<img src=\"";
        // line 418
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"10\" height=\"1\" border=\"0\">
\t\t</td>
\t</tr>
</table>
<br/><br/>";
        // line 422
        echo ($context["search_form"] ?? null);
    }

    public function getTemplateName()
    {
        return "characters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1026 => 422,  1019 => 418,  1015 => 416,  1007 => 412,  1005 => 411,  1000 => 410,  995 => 407,  989 => 406,  974 => 398,  970 => 397,  964 => 394,  956 => 391,  950 => 390,  939 => 387,  933 => 385,  930 => 384,  927 => 383,  922 => 382,  920 => 381,  911 => 375,  905 => 372,  898 => 368,  892 => 364,  886 => 362,  875 => 360,  873 => 359,  869 => 358,  863 => 356,  861 => 355,  858 => 354,  852 => 351,  846 => 349,  843 => 348,  840 => 347,  838 => 346,  835 => 345,  829 => 342,  823 => 340,  820 => 339,  817 => 338,  815 => 337,  812 => 336,  806 => 333,  800 => 331,  797 => 330,  794 => 329,  792 => 328,  785 => 324,  780 => 321,  777 => 320,  775 => 319,  770 => 318,  760 => 311,  751 => 307,  742 => 303,  730 => 296,  726 => 295,  722 => 294,  703 => 277,  701 => 276,  696 => 274,  693 => 273,  688 => 270,  682 => 269,  680 => 268,  669 => 266,  665 => 265,  660 => 264,  655 => 263,  653 => 262,  647 => 259,  642 => 256,  639 => 255,  635 => 253,  629 => 252,  627 => 251,  621 => 248,  617 => 247,  612 => 246,  607 => 245,  605 => 244,  599 => 241,  594 => 238,  592 => 237,  587 => 234,  569 => 223,  555 => 218,  543 => 213,  535 => 212,  526 => 206,  520 => 203,  515 => 200,  513 => 199,  510 => 198,  504 => 194,  491 => 191,  487 => 190,  482 => 189,  479 => 188,  474 => 187,  472 => 186,  466 => 183,  461 => 180,  459 => 179,  456 => 178,  450 => 174,  441 => 171,  437 => 170,  432 => 169,  429 => 168,  424 => 167,  422 => 166,  416 => 163,  411 => 160,  409 => 159,  402 => 155,  392 => 152,  386 => 150,  384 => 149,  381 => 148,  375 => 145,  369 => 143,  366 => 142,  364 => 141,  361 => 140,  355 => 137,  349 => 135,  346 => 134,  344 => 133,  333 => 130,  327 => 128,  325 => 127,  322 => 126,  314 => 123,  308 => 121,  305 => 120,  303 => 119,  300 => 118,  289 => 110,  285 => 109,  279 => 106,  270 => 101,  267 => 100,  265 => 99,  262 => 98,  256 => 95,  250 => 93,  247 => 92,  245 => 91,  239 => 88,  233 => 86,  231 => 85,  228 => 84,  222 => 81,  216 => 79,  213 => 78,  211 => 77,  208 => 76,  202 => 73,  196 => 71,  193 => 70,  191 => 69,  188 => 68,  182 => 65,  176 => 63,  173 => 62,  171 => 61,  168 => 60,  162 => 57,  156 => 55,  153 => 54,  151 => 53,  145 => 50,  139 => 48,  137 => 47,  134 => 46,  128 => 43,  122 => 41,  119 => 40,  117 => 39,  111 => 36,  105 => 34,  103 => 33,  87 => 30,  81 => 28,  79 => 27,  72 => 23,  69 => 22,  57 => 20,  55 => 19,  52 => 18,  44 => 14,  42 => 13,  38 => 12,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "characters.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/characters.html.twig");
    }
}
