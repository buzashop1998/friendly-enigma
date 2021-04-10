<?php

/* head.tpl */
class __TwigTemplate_ae288ed79ffcd882d7c6f558a85ceb508b7c5715cf0111462a125e60d98e7992 extends Twig_Template
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
        echo "
\t<head>
\t\t<title>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo "</title>
\t\t<meta charset=\"utf-8\" />
\t\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content=\"IE=edge,IE=9,IE=8,chrome=1\" /><![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<meta content=\"\" name=\"description\" />
\t\t<meta content=\"\" name=\"author\" />
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/bootstrap/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/font-awesome/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/fonts/style.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/main-responsive.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/iCheck/skins/all.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["themeusr"]) ? $context["themeusr"] : null), "html", null, true);
        echo "\" type=\"text/css\" id=\"skin_color\">
\t\t<link rel=\"stylesheet\" href=\"assets/css/print.css\" type=\"text/css\" media=\"print\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/plugins/select2/select2.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/DataTables/media/css/DT_bootstrap.css\" />
\t\t<link href=\"assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"assets/plugins/bootstrap-modal/css/bootstrap-modal.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"assets/plugins/css3-animation/animations.css\">
\t\t<link rel=\"stylesheet\" href=\"css/timeTo.css\">
        <!--[if IE 7]>
\t\t<link rel=\"stylesheet\" href=\"assets/plugins/font-awesome/css/font-awesome-ie7.min.css\">
\t\t<![endif]-->
\t\t<link rel=\"shortcut icon\" href=\"favicon.ico\" />
\t\t<script type=\"text/javascript\" src=\"js/jquery.blockUI.js\"></script>
\t\t<script type=\"text/javascript\" src=\"js/ajaxx.js\"></script>
</head>";
    }

    public function getTemplateName()
    {
        return "head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  23 => 3,  19 => 1,);
    }
}
