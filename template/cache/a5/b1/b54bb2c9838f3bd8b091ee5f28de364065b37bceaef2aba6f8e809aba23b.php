<?php

/* menu.tpl */
class __TwigTemplate_a5b1b54bb2c9838f3bd8b091ee5f28de364065b37bceaef2aba6f8e809aba23b extends Twig_Template
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
        echo "<div class=\"navbar-content\">
\t\t\t\t<div class=\"main-navigation navbar-collapse collapse\">
\t\t\t\t\t<div class=\"navigation-toggler\">
\t\t\t\t\t\t<i class=\"clip-chevron-left\"></i>
\t\t\t\t\t\t<i class=\"clip-chevron-right\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"main-navigation-menu\">
                        <li class=\"active open\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('card.php');\"><i class=\"clip-globe\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Credit Cards</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        // line 14
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "salecc", array(), "array") == "1")) {
            // line 15
            echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('card.php');\"><i class=\"fa fa-credit-card\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Credit Cards</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        }
        // line 22
        echo "                        ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "saledump", array(), "array") == "1")) {
            // line 23
            echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('dumps.php');\"><i class=\"clip-phone-3\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Dumps</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        }
        // line 30
        echo "                        ";
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userType", array(), "array") == "3")) {
            // line 31
            echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('sellerstats.php');\"><i class=\"clip-stats\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Seller Stats</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        }
        // line 38
        echo "                        ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "salecc", array(), "array") == "1")) {
            // line 39
            echo "
                        ";
        }
        // line 41
        echo "
\t\t\t\t\t\t";
        // line 42
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "salecc", array(), "array") == "1")) {
            // line 43
            echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('card.php?act=mycard');\"><i class=\"clip-user-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">My Cards</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        }
        // line 50
        echo "                        ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "saledump", array(), "array") == "1")) {
            // line 51
            echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('dumps.php?act=mycard');\"><i class=\"clip-user-3\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">My Dumps</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        }
        // line 58
        echo "                        ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "packs", array(), "array") == "1")) {
            // line 59
            echo "
                        ";
        }
        // line 61
        echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('buy.php');\"><i class=\"fa fa-money\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Add Balance</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('faq.php');\"><i class=\"fa fa-question\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">FAQ</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        // line 73
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userType", array(), "array") != "1")) {
            // line 74
            echo "                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('support.php');\"><i class=\"fa fa-stack-exchange\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Support</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        }
        // line 81
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  125 => 74,  123 => 73,  109 => 61,  105 => 59,  102 => 58,  93 => 51,  90 => 50,  81 => 43,  79 => 42,  76 => 41,  72 => 39,  69 => 38,  60 => 31,  57 => 30,  48 => 23,  45 => 22,  36 => 15,  34 => 14,  19 => 1,);
    }
}
