<?php

/* admin/scripts.tpl */
class __TwigTemplate_e809dd46563b95ddef81dee1415c0455890615c815a1b24211c597ea13d1b678 extends Twig_Template
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
        echo "<!-- start: MAIN JAVASCRIPTS -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"../assets/plugins/respond.min.js\"></script>
\t\t<script src=\"../assets/plugins/excanvas.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t\t<![endif]-->
\t\t<!--[if gte IE 9]><!-->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
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
        <script src=\"../assets/plugins/select2/select2.min.js\"></script>
\t\t<script src=\"../assets/js/main.js\"></script>
\t\t<!-- end: MAIN JAVASCRIPTS -->
\t\t\t\t<script>
\t\t\t\t\t\$(\".main-navigation-menu\").find(\"li\").click(function(){    
\t\t\t\t\tif (\$(this).find(\"ul\").length){
\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\".main-navigation-menu .active\").removeClass(\"active open\");
\t\t\t\t\t\t\$(this).addClass(\"active open\");
\t\t\t\t\t}});
\t\t\t\t</script>
\t\t<script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tMain.init();
\t\t\t});
\t\t</script>";
    }

    public function getTemplateName()
    {
        return "admin/scripts.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
