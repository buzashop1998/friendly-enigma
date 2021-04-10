<?php

/* checkbin.tpl */
class __TwigTemplate_52e645646c1f2d4e1156d563c5d30a0339d90cd8b3958018bda6b81d8a01303a extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : null) == "page")) {
            // line 2
            echo "<div class=\"page-header\"><h1>Bin checker<small> 1 line = 1 bin</small></h1></div></div></div>
<div class='col-md-12'>
<div class=\"row\">
<div class=\"col-sm-8\">
<h4>Example:</h4>
<div class=\"well\">
<span>5457497</span><br>
<span>5457497921800000</span><br>
<span>5457497921800000|03|15|416</span><br>
<span>5457497921800000|0315|416</span><br>
<span>5457497921800000/0315/416</span><br>
<span>5457497921800000;0315;416;Maria De La Torre;Canada;ON;Brampton;L6Z0C7;5 Copperfield</span><br>
<span>5457497921800000|0315|416|Maria De La Torre|Canada|ON|Brampton|L6Z0C7|5 Copperfield</span>
</div>
</div>
<div class=\"col-sm-4\">
<h4>Price:</h4>
<div class=\"well\">
<center><h1 class=\"pulse\">FREE</h1></center>
</div>
<p><center><h4>1 bin = 1 line</h4></center></p>
</div>
</div>
<hr>
<center><div class='panel panel-default'><div class='panel-heading'>Bin Checker</div>
<form action=\"\" >
<textarea class=\"form-control\" id=\"listcc\" cols=\"120\" rows=\"10\"></textarea>
</div>
<p><button type=submit onclick=\"bincheck();\" class=\"btn btn-green btn-lg btn-block\">CHECK NOW</button>
</form></p></div>
";
        }
        // line 33
        echo "
";
        // line 34
        if (((isset($context["type"]) ? $context["type"] : null) == "result")) {
            // line 35
            echo "<div class=\"page-header\"><h1>Bin checker<small> Result</small></h1></div></div></div>
<p><div class=\"panel-heading\"><i class=\"fa fa-external-link-square\"></i>BIN INFO</div>
<table class='table table-striped table-bordered table-hover'><tr><th>Card Number</th><th>Bank Name</th><th>Card Type</th><th>Country</th><th>Bank Phone</th></tr>
";
            // line 38
            echo (isset($context["info"]) ? $context["info"] : null);
            echo "
</table>
<script src=\"assets/plugins/bootstrap-modal/js/bootstrap-modal.js\"></script>
\t\t<script src=\"assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
\t\t<script src=\"assets/js/ui-modals.js\"></script>
\t\t<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
\t\t<script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tUIModals.init();
\t\t\t});
\t\t</script>
        <div id=\"ajax-modal\" class=\"modal fade\" tabindex=\"-1\" style=\"display: none;\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "checkbin.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 38,  59 => 35,  57 => 34,  54 => 33,  21 => 2,  19 => 1,);
    }
}
