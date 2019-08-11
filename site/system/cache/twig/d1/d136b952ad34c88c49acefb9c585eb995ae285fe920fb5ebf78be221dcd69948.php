<?php

/* news.html.twig */
class __TwigTemplate_2b9516e86627004e13aa6f18867c5fd1331ecec8734755f99b1d6aaf78dd7637 extends Twig_Template
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
        echo "<div id=\"News\">
\t<div class=\"NewsHeadline\">
\t\t<div class=\"NewsHeadlineBackground\" style=\"background-image:url(";
        // line 3
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/newsheadline_background.gif)\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/icon_";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo ".gif\" class=\"NewsHeadlineIcon\" />
\t\t\t<div class=\"NewsHeadlineDate\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), $this->getAttribute(($context["config"] ?? null), "news_date_format", array())), "html", null, true);
        echo " - </div>
\t\t\t<div class=\"NewsHeadlineText\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
\t\t\t";
        // line 7
        if ( !twig_test_empty(($context["author"] ?? null))) {
            // line 8
            echo "\t\t\t<div class=\"NewsHeadlineAuthor\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
            echo "</i></div>
\t\t\t";
        }
        // line 10
        echo "\t\t</div>
\t</div>
</div>
<table style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<td style=\"padding-left:10px;padding-right:10px;\" >";
        // line 15
        echo ($context["content"] ?? null);
        echo "</td>
\t</tr>
\t";
        // line 17
        if ( !(null === ($context["comments"] ?? null))) {
            // line 18
            echo "\t<tr>
\t\t<td>
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 24
        echo "</table>
<br/>";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  67 => 20,  63 => 18,  61 => 17,  56 => 15,  49 => 10,  43 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.html.twig", "/Users/ricardogodoy/Repository/QuesTibia/site/templates/kathrine/news.html.twig");
    }
}
