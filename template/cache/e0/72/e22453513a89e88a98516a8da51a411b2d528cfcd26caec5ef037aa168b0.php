<?php

/* admin/index.tpl */
class __TwigTemplate_e072e22453513a89e88a98516a8da51a411b2d528cfcd26caec5ef037aa168b0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9 no-js\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" class=\"no-js\">
\t<!--<![endif]-->
\t<!-- start: HEAD -->
    ";
        // line 8
        $this->env->loadTemplate("admin/head.tpl")->display($context);
        // line 9
        echo "\t<body>
\t\t<!-- start: HEADER -->
\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t<!-- start: TOP NAVIGATION CONTAINER -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<!-- start: RESPONSIVE MENU TOGGLER -->
\t\t\t\t\t<button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
\t\t\t\t\t\t<span class=\"clip-list-2\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- end: RESPONSIVE MENU TOGGLER -->
\t\t\t\t\t<!-- start: LOGO -->
\t\t\t\t\t<a class=\"navbar-brand\" href=\"./index.php\">
\t\t\t\t\t\t";
        // line 22
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t<!-- end: LOGO -->
\t\t\t\t</div>
\t\t\t\t";
        // line 26
        $this->env->loadTemplate("admin/navbar.tpl")->display($context);
        // line 27
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"main-container\">
\t\t\t";
        // line 30
        $this->env->loadTemplate("admin/menu.tpl")->display($context);
        // line 31
        echo "\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"clip-file\"></i>
                                Admin Panel 
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
                    <div id=\"main\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        // line 45
        $this->env->loadTemplate("admin/footer.tpl")->display($context);
        // line 46
        echo "\t\t";
        $this->env->loadTemplate("admin/scripts.tpl")->display($context);
        // line 47
        echo "        ";
        echo (isset($context["page"]) ? $context["page"] : null);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 47,  79 => 46,  77 => 45,  61 => 31,  59 => 30,  54 => 27,  52 => 26,  45 => 22,  30 => 9,  28 => 8,  19 => 1,);
    }
}
