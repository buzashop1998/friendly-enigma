<?php

/* admin/login.tpl */
class __TwigTemplate_56d9f1c0be199b8ce5c3e7f10ca1dbe14ac0a49ef699b79054cd5f6237356014 extends Twig_Template
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
\t<head>
\t\t<title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo "</title>
\t\t<meta charset=\"utf-8\" />
\t\t<!--[if IE]><meta http-equiv='X-UA-Compatible' content=\"IE=edge,IE=9,IE=8,chrome=1\" /><![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<meta content=\"\" name=\"description\" />
\t\t<meta content=\"\" name=\"author\" />
\t\t<link rel=\"stylesheet\" href=\"../assets/plugins/bootstrap/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/plugins/font-awesome/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/fonts/style.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/css/main-responsive.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/plugins/iCheck/skins/all.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css\">
\t\t<link rel=\"stylesheet\" href=\"../assets/css/theme_light.css\" type=\"text/css\" id=\"skin_color\">
\t\t<link rel=\"stylesheet\" href=\"../assets/css/print.css\" type=\"text/css\" media=\"print\"/>
        <link rel=\"stylesheet\" href=\"../assets/plugins/css3-animation/animations.css\">
\t\t<!--[if IE 7]>
\t\t<link rel=\"stylesheet\" href=\"../assets/plugins/font-awesome/css/font-awesome-ie7.min.css\">
\t\t<![endif]-->
\t</head>
\t<body class=\"login example1\">
\t\t<div class=\"main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3\">
        <div class=\"fadeIn\">
\t\t\t<div class=\"logo\">";
        // line 34
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "
            </div>
\t\t\t</div>
\t\t\t<div class=\"box-login\">
            <div class=\"stretchRight\">
\t\t\t\t<h3>Sign in to your account</h3>
\t\t\t\t<p>
\t\t\t\t\tPlease enter your name and password to log in.
\t\t\t\t</p>
                </div>
\t\t\t\t<form class=\"form-login\" action=\"\" name=\"login\" method=\"POST\">
\t\t\t\t\t<div class=\"errorHandler alert alert-danger no-display\">
\t\t\t\t\t\t<i class=\"fa fa-remove-sign\"></i> You have some form errors. Please check below.
\t\t\t\t\t</div>
                    ";
        // line 48
        $this->env->loadTemplate("elements/alerts.tpl")->display($context);
        // line 49
        echo "\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i> </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group form-actions\">
\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control password\" name=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t<a class=\"forgot\" href=\"forgot.php\">
\t\t\t\t\t\t\t\t\tI forgot my password
\t\t\t\t\t\t\t\t</a> </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<img src=\"../captcha/captcha.php\" alt=\"captcha\" />
\t\t\t\t\t\t\t<span class=\"input-icon\" style=\"width:200px; float: right;\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"captcha\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i> </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-actions\" ><div class=\"slideExpandUp\">
\t\t\t\t\t\t\t<label for=\"remember\" class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"grey remember\" id=\"remember\" name=\"remember\">
\t\t\t\t\t\t\t\tKeep me signed in
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-bricky pull-right\" name=\"submit\">
\t\t\t\t\t\t\t\tLogin <i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t</button></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"new-account\">
\t\t\t\t\t\t\tDon't have an account yet?
\t\t\t\t\t\t\t<a href=\"register.php\" class=\"register\">
\t\t\t\t\t\t\t\tCreate an account
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"copyright\">
\t\t\t\t2014 ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo " &copy;
\t\t\t</div>
\t\t</div>
\t\t<!--[if lt IE 9]>
\t\t<script src=\"../assets/plugins/respond.min.js\"></script>
\t\t<script src=\"../assets/plugins/excanvas.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t<![endif]-->
\t\t<!--[if gte IE 9]><!-->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
\t\t<!--<![endif]-->
\t\t<script src=\"../assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js\"></script>
\t\t<script src=\"../assets/plugins/bootstrap/js/bootstrap.min.js\"></script>
\t\t<script src=\"../assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\"></script>
\t\t<script src=\"../assets/plugins/blockUI/jquery.blockUI.js\"></script>
\t\t<script src=\"../assets/plugins/iCheck/jquery.icheck.min.js\"></script>
\t\t<script src=\"../assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js\"></script>
\t\t<script src=\"../assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js\"></script>
\t\t<script src=\"../assets/plugins/less/less-1.5.0.min.js\"></script>
\t\t<script src=\"../assets/plugins/jquery-cookie/jquery.cookie.js\"></script>
\t\t<script src=\"../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js\"></script>
\t\t<script src=\"../assets/js/main.js\"></script>
\t\t<script src=\"../assets/plugins/jquery-validation/dist/jquery.validate.min.js\"></script>
\t\t<script src=\"../assets/js/login.js\"></script>
\t\t<script src=\"../assets/js/ui-elements.js\"></script>
\t\t<script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tMain.init();
\t\t\t\tLogin.init();
\t\t\t});
\t\t</script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 88,  76 => 49,  74 => 48,  57 => 34,  28 => 8,  19 => 1,);
    }
}
