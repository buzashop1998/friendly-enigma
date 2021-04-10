<?php

/* navbar.tpl */
class __TwigTemplate_fb82accd66778fb4c8a7aad9d15d299c4b2d4f13e66a95f0c5b9882efff177b1 extends Twig_Template
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
        echo "<div class=\"navbar-tools\">
\t\t\t\t\t<ul class=\"nav navbar-right\">
                    ";
        // line 3
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "saledump", array(), "array") == "1")) {
            // line 4
            echo "                    <li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-close-others=\"true\" data-hover=\"dropdown\" data-toggle=\"dropdown\" href=\"#\" onclick=\"showpage('dumpcart.php?act=order');\">
\t\t\t\t\t\t\t\t<span>DUMPS&nbsp;&nbsp;</span>
                                <i class=\"clip-cart\"></i>
\t\t\t\t\t\t\t\t<div id=\"dumpcart\">
                                ";
            // line 9
            if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "dumps_val", array(), "array") == false)) {
                // line 10
                echo "                                <span class=\"badge\"> 0</span>
                                ";
            } else {
                // line 12
                echo "                                <span class=\"badge\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "dumps_val", array(), "array"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 14
            echo "                            </div></a></li>
                    ";
        }
        // line 16
        echo "                    ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "salecc", array(), "array") == "1")) {
            // line 17
            echo "                        <li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-close-others=\"true\" data-hover=\"dropdown\" data-toggle=\"dropdown\" href=\"#\" onclick=\"showpage('cart.php?act=order');\">
\t\t\t\t\t\t\t\t<span>CC&nbsp;&nbsp;</span>
                                <i class=\"clip-cart\"></i>
\t\t\t\t\t\t\t\t<div id=\"cart\">
                                ";
            // line 22
            if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "cards_val", array(), "array") == false)) {
                // line 23
                echo "                                <span class=\"badge\"> 0</span>   
                                ";
            } else {
                // line 25
                echo "                                <span class=\"badge\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "cards_val", array(), "array"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 27
            echo "                                </div></a></li>
                    ";
        }
        // line 29
        echo "                                
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-close-others=\"true\" data-hover=\"dropdown\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"clip-bubble-3\"></i>
                                ";
        // line 33
        echo (isset($context["msgnew"]) ? $context["msgnew"] : null);
        echo "
\t\t\t\t\t\t\t</a>
                                ";
        // line 35
        echo (isset($context["shortmsg"]) ? $context["shortmsg"] : null);
        echo "
\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- start: USER DROPDOWN -->
\t\t\t\t\t\t<li class=\"dropdown current-user\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
                            <span id=\"balance\"><span class=\"label label-info\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["credit"]) ? $context["credit"] : null), "html", null, true);
        echo " \$</span></span>
\t\t\t\t\t\t\t\t<span class=\"username\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username", array(), "array"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t<i class=\"clip-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
        // line 45
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "salecc", array(), "array") == "1")) {
            // line 46
            echo "                                <li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('card.php?act=mycard');\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-user-2\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;My Cards
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
                                ";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "saledump", array(), "array") == "1")) {
            // line 54
            echo "                                <li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('dumps.php?act=mycard');\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-user-3\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;My Dumps
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
                                ";
        }
        // line 61
        echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('buy.php');\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;Add Balance
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"logout();\">
\t\t\t\t\t\t\t\t\t\t<i class=\"clip-exit\"></i>
\t\t\t\t\t\t\t\t\t\t&nbsp;Log Out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: USER DROPDOWN -->
\t\t\t\t\t</ul>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "navbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 61,  118 => 54,  115 => 53,  106 => 46,  104 => 45,  97 => 41,  93 => 40,  85 => 35,  80 => 33,  74 => 29,  70 => 27,  64 => 25,  60 => 23,  58 => 22,  51 => 17,  48 => 16,  44 => 14,  38 => 12,  34 => 10,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }
}
