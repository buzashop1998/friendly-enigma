<?php

/* admin/menu.tpl */
class __TwigTemplate_753b7ad2b91a1cb0788b93e28199227e563da893a54c33e2a0f11766050b007b extends Twig_Template
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
\t\t\t\t<!-- start: SIDEBAR -->
\t\t\t\t<div class=\"main-navigation navbar-collapse collapse\">
\t\t\t\t\t<!-- start: MAIN MENU TOGGLER BUTTON -->
\t\t\t\t\t<div class=\"navigation-toggler\">
\t\t\t\t\t\t<i class=\"clip-chevron-left\"></i>
\t\t\t\t\t\t<i class=\"clip-chevron-right\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: MAIN MENU TOGGLER BUTTON -->
\t\t\t\t\t<!-- start: MAIN NAVIGATION MENU -->
\t\t\t\t\t<ul class=\"main-navigation-menu\">
\t\t\t\t\t\t<li class=\"active open\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('news.php');\"><i class=\"clip-home-3\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">News</span><span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"javascript:void(0)\"><i class=\"fa fa-credit-card\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Credit Cards</span><i class=\"icon-arrow\"></i>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
                            <ul class=\"sub-menu\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('card.php');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Credit Cards</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
                                <li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('addprice.php');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Set CC Price</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
                                <li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('editprice.php');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Edit CC Price</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
                                <li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('category.php');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">CC Categorys</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                       
                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('order.php?act=lastweek');\"><i class=\"clip-banknote\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Orders</span>
                                <span class=\"badge badge-new\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["totalOrder"]) ? $context["totalOrder"] : null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('user.php');\"><i class=\"clip-user-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Users</span>
                                <span class=\"badge badge-new\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["totalUser"]) ? $context["totalUser"] : null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        <li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('setting.php');\"><i class=\"clip-settings\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">Settings</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"showpage('faq.php');\"><i class=\"fa fa-question\"></i>
\t\t\t\t\t\t\t\t<span class=\"title\">FAQ</span>
\t\t\t\t\t\t\t\t<span class=\"selected\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

                        
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "admin/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 56,  69 => 49,  19 => 1,);
    }
}
