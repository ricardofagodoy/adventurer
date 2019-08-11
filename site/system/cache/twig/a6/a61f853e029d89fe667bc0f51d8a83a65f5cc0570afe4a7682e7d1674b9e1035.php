<?php

/* team.html.twig */
class __TwigTemplate_c292e64bf4b375cfe271f1982ee058b0726649321e536a6d5bf406694fbbd6aa extends Twig_Template
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
        echo "<div class=\"TableContainer\">
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" style=\"background-color: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", array()), "html", null, true);
        echo "\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Support in game</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>

\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "\t\t\t\t\t";
        if (($this->getAttribute(($context["config"] ?? null), "team_style", array()) == 1)) {
            // line 22
            echo "
\t\t\t\t\t\t<table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
\t\t\t\t\t\t\t<tr bgcolor=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<td width=\"10%\" class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Group</b>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
            // line 29
            if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", array())) {
                // line 30
                echo "\t\t\t\t\t\t\t\t<td width=\"5%\" class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Outfit</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 34
            echo "
\t\t\t\t\t\t\t\t<td width=\"40%\" class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Name</b>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
            // line 39
            if ($this->getAttribute(($context["config"] ?? null), "team_display_status", array())) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Status</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "
\t\t\t\t\t\t\t\t";
            // line 45
            if (($this->getAttribute(($context["config"] ?? null), "multiworld", array()) || $this->getAttribute(($context["config"] ?? null), "team_display_world", array()))) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t<b>World</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "
\t\t\t\t\t\t\t\t";
            // line 51
            if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", array())) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Last login</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 59
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["group"], "members", array()))) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($context["group"], "members", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                        echo "\" style=\"height: 32px;\">
\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "group_name", array()), "html", null, true);
                        echo "</td>

\t\t\t\t\t\t\t\t\t\t";
                        // line 65
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", array())) {
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img style=\"position: absolute; margin-top: ";
                            // line 67
                            if (twig_in_filter($this->getAttribute($this->getAttribute($context["member"], "player", array()), "looktype", array()), array(0 => 75, 1 => 266, 2 => 302))) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "outfit", array()), "html", null, true);
                            echo "\" alt=\"player outfit\"/>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if ($this->getAttribute(($context["config"] ?? null), "account_country", array())) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["member"], "flag_image", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["member"], "link", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t";
                        // line 78
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_status", array())) {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 80
                            if ($this->getAttribute($context["member"], "status", array())) {
                                // line 81
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: green\"><b>Online</b></span>
\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 83
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: red\"><b>Offline</b></span>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 88
                        if (($this->getAttribute(($context["config"] ?? null), "multiworld", array()) || $this->getAttribute(($context["config"] ?? null), "team_display_world", array()))) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span><b>";
                            // line 90
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "world_name", array()), "html", null, true);
                            echo "</b></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 94
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", array())) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 96
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "last_login", array()), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 104
($context["config"] ?? null), "team_style", array()) == 2)) {
            // line 105
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 106
                echo "\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["group"], "members", array()))) {
                    // line 107
                    echo "\t\t\t\t\t\t\t<div style=\"text-align:center\"><h2>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "group_name", array()), "html", null, true);
                    echo "</h2></div>

\t\t\t\t\t\t\t<table cellspacing=\"1\" cellpadding=\"4\" border=\"0\" width=\"100%\">
\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 111
                    if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", array())) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t<td width=\"5%\" class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Outfit</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "
\t\t\t\t\t\t\t\t\t<td width=\"40%\" class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Name</b>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t";
                    // line 121
                    if ($this->getAttribute(($context["config"] ?? null), "team_display_status", array())) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Status</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 126
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 127
                    if (($this->getAttribute(($context["config"] ?? null), "multiworld", array()) || $this->getAttribute(($context["config"] ?? null), "team_display_world", array()))) {
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>World</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 133
                    if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", array())) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Last login</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "members", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), array(($context["i"] ?? null))), "html", null, true);
                        echo "\" style=\"height: 32px;\">
\t\t\t\t\t\t\t\t\t";
                        // line 143
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", array())) {
                            // line 144
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<img style=\"position: absolute; margin-top: ";
                            // line 145
                            if (twig_in_filter($this->getAttribute($this->getAttribute($context["member"], "player", array()), "looktype", array()), array(0 => 75, 1 => 266, 2 => 302))) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "outfit", array()), "html", null, true);
                            echo "\" alt=\"player outfit\"/>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 148
                        echo "
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                        // line 150
                        if ($this->getAttribute(($context["config"] ?? null), "account_country", array())) {
                            // line 151
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["member"], "flag_image", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["member"], "link", array());
                        echo "
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t";
                        // line 156
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_status", array())) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                            // line 158
                            if ($this->getAttribute($context["member"], "status", array())) {
                                // line 159
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: green\"><b>Online</b></span>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 161
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: red\"><b>Offline</b></span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 163
                            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 165
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 166
                        if (($this->getAttribute(($context["config"] ?? null), "multiworld", array()) || $this->getAttribute(($context["config"] ?? null), "team_display_world", array()))) {
                            // line 167
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span><b>";
                            // line 168
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "world_name", array()), "html", null, true);
                            echo "</b></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 171
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 172
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", array())) {
                            // line 173
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 174
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "last_login", array()), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 177
                        echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
                }
                // line 181
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 183,  442 => 182,  436 => 181,  432 => 179,  425 => 177,  419 => 174,  416 => 173,  414 => 172,  411 => 171,  405 => 168,  402 => 167,  400 => 166,  397 => 165,  393 => 163,  389 => 161,  385 => 159,  383 => 158,  380 => 157,  378 => 156,  371 => 153,  365 => 151,  363 => 150,  359 => 148,  347 => 145,  344 => 144,  342 => 143,  337 => 142,  334 => 141,  330 => 140,  326 => 138,  320 => 134,  318 => 133,  315 => 132,  309 => 128,  307 => 127,  304 => 126,  298 => 122,  296 => 121,  289 => 116,  283 => 112,  281 => 111,  277 => 110,  270 => 107,  267 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 102,  248 => 101,  241 => 99,  235 => 96,  232 => 95,  230 => 94,  227 => 93,  221 => 90,  218 => 89,  216 => 88,  213 => 87,  209 => 85,  205 => 83,  201 => 81,  199 => 80,  196 => 79,  194 => 78,  187 => 75,  181 => 73,  179 => 72,  175 => 70,  163 => 67,  160 => 66,  158 => 65,  153 => 63,  148 => 62,  145 => 61,  140 => 60,  137 => 59,  133 => 58,  129 => 56,  123 => 52,  121 => 51,  118 => 50,  112 => 46,  110 => 45,  107 => 44,  101 => 40,  99 => 39,  92 => 34,  86 => 30,  84 => 29,  76 => 24,  72 => 22,  69 => 21,  67 => 20,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "team.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/team.html.twig");
    }
}
