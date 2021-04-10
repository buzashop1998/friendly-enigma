<?php

/* index.tpl */
class __TwigTemplate_ccf8b1b29aff8b3512a7849f686691d5a328c5bc95348b5fbbb62c3898c91026 extends Twig_Template
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
    ";
        // line 7
        $this->env->loadTemplate("head.tpl")->display($context);
        // line 8
        echo "\t<body>
\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
\t\t\t\t\t\t<span class=\"clip-list-2\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- start: LOGO -->
                    <div class=\"fadeIn\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.php\">
\t\t\t\t\t\t";
        // line 18
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "
\t\t\t\t\t</a>
                    </div>
\t\t\t\t\t<!-- end: LOGO -->
\t\t\t\t</div>
\t\t\t\t";
        // line 23
        $this->env->loadTemplate("navbar.tpl")->display($context);
        // line 24
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"main-container\">
\t\t\t";
        // line 27
        $this->env->loadTemplate("menu.tpl")->display($context);
        // line 28
        echo "\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"clip-file\"></i>
                                ";
        // line 35
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userType", array(), "array") == "3")) {
            // line 36
            echo "                                Seller Panel 
                                ";
        } else {
            // line 38
            echo "                                User Panel
                                ";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
                    <div id=\"main\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        // line 46
        $this->env->loadTemplate("footer.tpl")->display($context);
        // line 47
        echo "\t\t";
        $this->env->loadTemplate("scripts.tpl")->display($context);
        // line 48
        echo "        ";
        echo (isset($context["page"]) ? $context["page"] : null);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 48,  87 => 47,  85 => 46,  77 => 40,  73 => 38,  69 => 36,  67 => 35,  58 => 28,  56 => 27,  51 => 24,  49 => 23,  41 => 18,  29 => 8,  27 => 7,  19 => 1,);
    }
}
