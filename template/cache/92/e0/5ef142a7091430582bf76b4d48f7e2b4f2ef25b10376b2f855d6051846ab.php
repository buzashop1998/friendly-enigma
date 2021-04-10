<?php

/* admin/navbar.tpl */
class __TwigTemplate_92e05ef142a7091430582bf76b4d48f7e2b4f2ef25b10376b2f855d6051846ab extends Twig_Template
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
\t\t\t\t\t<!-- start: TOP NAVIGATION MENU -->
\t\t\t\t\t<ul class=\"nav navbar-right\">
\t\t\t\t\t\t<!-- start: USER DROPDOWN -->
\t\t\t\t\t\t<li class=\"dropdown current-user\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" data-close-others=\"true\" href=\"#\">
<span class=\"label label-info\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["credit"]) ? $context["credit"] : null), "html", null, true);
        echo " \$</span>
\t\t\t\t\t\t\t\t<span class=\"username\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username", array(), "array"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t<i class=\"clip-chevron-down\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<!-- end: TOP NAVIGATION MENU -->
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "admin/navbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }
}
