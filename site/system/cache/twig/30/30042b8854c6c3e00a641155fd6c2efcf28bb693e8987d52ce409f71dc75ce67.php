<?php

/* serverinfo.html.twig */
class __TwigTemplate_0b93ac801de818f4b5a1e9de35a3ae3ef74046d64e089b24aa6e8ce97e299a7f extends Twig_Template
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
        echo "<div style=\"text-align:center\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "serverName", array()), "html", null, true);
        echo "</h1>
    <h3>
        ";
        // line 4
        if (($context["experienceStages"] ?? null)) {
            // line 5
            echo "        Experience stages: ";
            echo twig_escape_filter($this->env, ($context["experienceStages"] ?? null), "html", null, true);
            echo "<br>
        ";
        }
        // line 7
        echo "        Commands: <a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("commands")), "html", null, true);
        echo "\">Look here</a><br>
        Team: <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("team")), "html", null, true);
        echo "\">Look here</a><br>
    </h3>
</div>

<ul>
    <h2>Server Info:</h2>
    <li>IP: <b>";
        // line 14
        echo twig_escape_filter($this->env, ($context["serverIp"] ?? null), "html", null, true);
        echo "</b> (Port: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "loginPort", array()), "html", null, true);
        echo "</b>)</li>
    ";
        // line 15
        if (($context["clientVersion"] ?? null)) {
            // line 16
            echo "    <li>Client: <b>";
            echo twig_escape_filter($this->env, ($context["clientVersion"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 18
        echo "    <li>Online: <b>24/7</b></li>
    ";
        // line 19
        if (($context["globalSaveHour"] ?? null)) {
            // line 20
            echo "    <li>Global save: <b>";
            echo twig_escape_filter($this->env, ($context["globalSaveHour"] ?? null), "html", null, true);
            echo ":00</b></li>
    ";
        }
        // line 22
        echo "    <li>World type: <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "worldType", array())), "html", null, true);
        echo " <i>(Protection level: ";
        echo twig_escape_filter($this->env, ($context["protectionLevel"] ?? null), "html", null, true);
        echo ")</i></b></li>
    <li>House rent: ";
        // line 23
        echo twig_escape_filter($this->env, ($context["houseRent"] ?? null), "html", null, true);
        echo ".</li><br>
    ";
        // line 24
        if (($context["houseOld"] ?? null)) {
            // line 25
            echo "    <li>Houses with inactive owners are cleaned after 30 days.</li>
    ";
        }
        // line 27
        echo "
    <h2>Rates</h2>
    ";
        // line 29
        if (array_key_exists("rateExp", $context)) {
            // line 30
            echo "    <li>Exp Rate: <b>x";
            echo twig_escape_filter($this->env, ($context["rateExp"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 32
        echo "    ";
        if (($context["rateExpFromPlayers"] ?? null)) {
            // line 33
            echo "        <li>Exp Rate from Players: <b>x";
            echo twig_escape_filter($this->env, ($context["rateExpFromPlayers"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 35
        echo "    ";
        if (array_key_exists("rateMagic", $context)) {
            // line 36
            echo "    <li>Magic Level: <b>x";
            echo twig_escape_filter($this->env, ($context["rateMagic"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 38
        echo "    ";
        if (array_key_exists("rateSkill", $context)) {
            // line 39
            echo "    <li>Skills: <b>x";
            echo twig_escape_filter($this->env, ($context["rateSkill"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 41
        echo "    ";
        if (array_key_exists("rateLoot", $context)) {
            // line 42
            echo "    <li>Loot: <b>x";
            echo twig_escape_filter($this->env, ($context["rateLoot"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 44
        echo "    ";
        if (array_key_exists("rateSpawn", $context)) {
            // line 45
            echo "    <li>Spawn: <b>x";
            echo twig_escape_filter($this->env, ($context["rateSpawn"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 47
        echo "    ";
        if (($context["houseLevel"] ?? null)) {
            // line 48
            echo "    <li>Houses: <b>";
            echo twig_escape_filter($this->env, ($context["houseLevel"] ?? null), "html", null, true);
            echo " level</b></li>
    ";
        }
        // line 50
        echo "    <li>Guilds: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "guild_need_level", array()), "html", null, true);
        echo " level</b> (Create via website)</li>
    <br>

    <h2>Frags & Skull system</h2>
    <li>PZ Lock: <b>";
        // line 54
        echo twig_escape_filter($this->env, (($context["pzLocked"] ?? null) / (60 * 1000)), "html", null, true);
        echo " min</b></li>
    ";
        // line 55
        if (($context["whiteSkullTime"] ?? null)) {
            // line 56
            echo "    <li>White Skull Time: <b>";
            echo twig_escape_filter($this->env, ($context["whiteSkullTime"] ?? null), "html", null, true);
            echo " min</b></li>
    ";
        }
        // line 58
        echo "    <li>Red skull length: <b>";
        echo twig_escape_filter($this->env, (($context["redSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
        echo " days</b></li>
    ";
        // line 59
        if (($context["blackSkull"] ?? null)) {
            // line 60
            echo "    <li>Black skull length: <b>";
            echo twig_escape_filter($this->env, (($context["blackSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 62
        echo "\t";
        if (array_key_exists("killsToRedSkull", $context)) {
            // line 63
            echo "    <li>Kills to red skull: <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "killsToRedSkull", array()), "html", null, true);
            echo "</b></li>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 64
($context["config"] ?? null), "lua", array(), "any", false, true), "dailyFragsToRedSkull", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array(), "any", false, true), "kills_per_day_red_skull", array(), "any", true, true))) {
            // line 65
            echo "    <li>
        <h3>Red skull</h3>
        <ul>
            <li>";
            // line 68
            echo twig_escape_filter($this->env, ($context["dailyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags daily</li>
            <li>";
            // line 69
            echo twig_escape_filter($this->env, ($context["weeklyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags weekly</li>
            <li>";
            // line 70
            echo twig_escape_filter($this->env, ($context["monthlyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags monthly</li>
        </ul>
        ";
            // line 72
            if (((($context["blackSkull"] ?? null) && $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array(), "any", false, true), "dailyFragsToBlackSkull", array(), "any", true, true)) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array(), "any", false, true), "kills_per_day_black_skull", array(), "any", true, true))) {
                // line 73
                echo "        <h3>Black skull</h3>
        <ul>
            <li>";
                // line 75
                echo twig_escape_filter($this->env, ($context["dailyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags daily</li>
            <li>";
                // line 76
                echo twig_escape_filter($this->env, ($context["weeklyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags weekly</li>
            <li>";
                // line 77
                echo twig_escape_filter($this->env, ($context["monthlyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 79
($context["config"] ?? null), "lua", array(), "any", false, true), "dailyFragsToBanishment", array(), "any", true, true)) {
                // line 80
                echo "        <h3>Banishment</h3>
        <ul>
            <li>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "dailyFragsToBanishment", array()), "html", null, true);
                echo " frags daily</li>
            <li>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "weeklyFragsToBanishment", array()), "html", null, true);
                echo " frags weekly</li>
            <li>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", array()), "monthlyFragsToBanishment", array()), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            }
            // line 87
            echo "    </li>
    ";
        }
        // line 89
        echo "    ";
        if (($context["banishmentLength"] ?? null)) {
            // line 90
            echo "    <li>Banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["banishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 92
        echo "\t";
        if (($context["finalBanishmentLength"] ?? null)) {
            // line 93
            echo "    <li>Final banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["finalBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 95
        echo "\t";
        if (($context["ipBanishmentLength"] ?? null)) {
            // line 96
            echo "    <li>IP banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["ipBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 98
        echo "    <br>
    <h2>Other</h2>
    <li>Respect our <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("rules")), "html", null, true);
        echo "\">rules</a>.</li>
    <li>Please report rule violations (Botters, players breaking rules etc) with <b>CTRL + R</b>.</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "serverinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 100,  288 => 98,  282 => 96,  279 => 95,  273 => 93,  270 => 92,  264 => 90,  261 => 89,  257 => 87,  251 => 84,  247 => 83,  243 => 82,  239 => 80,  237 => 79,  232 => 77,  228 => 76,  224 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  205 => 68,  200 => 65,  198 => 64,  193 => 63,  190 => 62,  184 => 60,  182 => 59,  177 => 58,  171 => 56,  169 => 55,  165 => 54,  157 => 50,  151 => 48,  148 => 47,  142 => 45,  139 => 44,  133 => 42,  130 => 41,  124 => 39,  121 => 38,  115 => 36,  112 => 35,  106 => 33,  103 => 32,  97 => 30,  95 => 29,  91 => 27,  87 => 25,  85 => 24,  81 => 23,  74 => 22,  68 => 20,  66 => 19,  63 => 18,  57 => 16,  55 => 15,  49 => 14,  40 => 8,  35 => 7,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "serverinfo.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/system/templates/serverinfo.html.twig");
    }
}
