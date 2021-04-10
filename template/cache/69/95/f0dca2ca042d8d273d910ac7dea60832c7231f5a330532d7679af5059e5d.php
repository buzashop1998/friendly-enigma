<?php

/* news.tpl */
class __TwigTemplate_6995f0dca2ca042d8d273d910ac7dea60832c7231f5a330532d7679af5059e5d extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>News <small>and Updates</small></h1></div></div></div>
<div class=\"col-md-12\">
";
        // line 3
        if (((isset($context["saledump"]) ? $context["saledump"] : null) == "1")) {
            // line 4
            echo "<div class=\"row\">
<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-info-circle\"></i> Dump News</div>
<div class=\"panel-body\"><table class=\"table table-hover\" id=\"sample-table-1\"><thead><tr><th class=\"center\" style=\"width:100px\">Date</th><th>Info</th></tr></thead>
<tbody>
";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listdumpnews"]) ? $context["listdumpnews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dumpnews"]) {
                // line 9
                echo "<tr>
<td class=\"center\"><span class=\"label\" style=\"background-color:";
                // line 10
                echo $this->getAttribute($context["dumpnews"], "color", array());
                echo "\">";
                echo $this->getAttribute($context["dumpnews"], "date", array());
                echo "</span></td>
<td style=\"color:";
                // line 11
                echo $this->getAttribute($context["dumpnews"], "color", array());
                echo "\" class=\"text\">";
                echo $this->getAttribute($context["dumpnews"], "text", array());
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dumpnews'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "</tbody></table>
</div></div></div>
<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-credit-card\"></i>Dumps Valid</div><div class=\"panel-body\">
";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listdumpbase"]) ? $context["listdumpbase"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dumpbase"]) {
                // line 18
                echo "<div class=\"col-md-6\">
<div class=\"easy-pie-chart\">
<span class=\"basedump";
                // line 20
                echo $this->getAttribute($context["dumpbase"], "category", array());
                echo " number\" data-percent=\"";
                echo $this->getAttribute($context["dumpbase"], "precent", array());
                echo "\"> 
<span class=\"percent\">";
                // line 21
                echo $this->getAttribute($context["dumpbase"], "precent", array());
                echo "</span> </span>
</div><div style=\"margin: 10px;\"><center><button type=\"button\" onclick=\"showpage('dumps.php?cat=";
                // line 22
                echo $this->getAttribute($context["dumpbase"], "category", array());
                echo "&bin=&page=1&perpage=10');\" class=\"btn btn-default btn-squared\">";
                echo $this->getAttribute($context["dumpbase"], "categoryName", array());
                echo "</button> </center></div></div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dumpbase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</div></div></div></div><hr>
";
        }
        // line 26
        echo "
";
        // line 27
        if (((isset($context["salecc"]) ? $context["salecc"] : null) == "1")) {
            // line 28
            echo "<div class=\"row\">
<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-info-circle\"></i> Credit Card News</div>
<div class=\"panel-body\"><table class=\"table table-hover\" id=\"sample-table-1\"><thead><tr><th class=\"center\" style=\"width:100px\">Date</th><th>Info</th></tr></thead>
<tbody>
";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listccnews"]) ? $context["listccnews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ccnews"]) {
                // line 33
                echo "<tr>
<td class=\"center\"><span class=\"label\" style=\"background-color:";
                // line 34
                echo $this->getAttribute($context["ccnews"], "color", array());
                echo "\">";
                echo $this->getAttribute($context["ccnews"], "date", array());
                echo "</span></td>
<td style=\"color:";
                // line 35
                echo $this->getAttribute($context["ccnews"], "color", array());
                echo "\" class=\"text\">";
                echo $this->getAttribute($context["ccnews"], "text", array());
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ccnews'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "</tbody></table>
</div></div></div>
<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-credit-card\"></i>Credit Cards Valid</div><div class=\"panel-body\">
";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listccbase"]) ? $context["listccbase"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ccbase"]) {
                // line 42
                echo "<div class=\"col-md-6\">
<div class=\"easy-pie-chart\">
<span class=\"ccdump";
                // line 44
                echo $this->getAttribute($context["ccbase"], "category", array());
                echo " number\" data-percent=\"";
                echo $this->getAttribute($context["ccbase"], "precent", array());
                echo "\"> 
<span class=\"percent\">";
                // line 45
                echo $this->getAttribute($context["ccbase"], "precent", array());
                echo "</span> </span>
</div><div style=\"margin: 10px;\"><center><button type=\"button\" onclick=\"showpage('card.php?cat=";
                // line 46
                echo $this->getAttribute($context["ccbase"], "category", array());
                echo "&bin=&page=1&perpage=10');\" class=\"btn btn-default btn-squared\">";
                echo $this->getAttribute($context["ccbase"], "categoryName", array());
                echo "</button> </center></div></div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ccbase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "</div></div></div></div><hr>
";
        }
        // line 50
        echo "
<script src=\"/assets/plugins/bootstrap-colorpicker/js/commits.js\"></script>
<script src=\"/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
<script src=\"/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js\"></script>
<script src=\"/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js\"></script>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\$(function () {
\t\t\t\t\t\t\t\tif (isIE8 || isIE9) {
\t\t\t\t\t\t\t\t\tif (!Function.prototype.bind) {
\t\t\t\t\t\t\t\t\t\tFunction.prototype.bind = function (oThis) {
\t\t\t\t\t\t\t\t\t\t\tif (typeof this !== \"function\") {
\t\t\t\t\t\t\t\t\t\t\t\t// closest thing possible to the ECMAScript 5 internal IsCallable function
\t\t\t\t\t\t\t\t\t\t\t\tthrow new TypeError(\"Function.prototype.bind - what is trying to be bound is not callable\");
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tvar aArgs = Array.prototype.slice.call(arguments, 1),
\t\t\t\t\t\t\t\t\t\t\tfToBind = this,
\t\t\t\t\t\t\t\t\t\t\tfNOP = function () {}, fBound = function () {
\t\t\t\t\t\t\t\t\t\t\t\treturn fToBind.apply(this instanceof fNOP && oThis ? this : oThis, aArgs.concat(Array.prototype.slice.call(arguments)));
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\t\tfNOP.prototype = this.prototype;
\t\t\t\t\t\t\t\t\t\t\tfBound.prototype = new fNOP();
\t\t\t\t\t\t\t\t\t\t\treturn fBound;
\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
                                ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listdumpbase"]) ? $context["listdumpbase"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dumpbase"]) {
            // line 76
            echo "                                \$('.easy-pie-chart .basedump";
            echo $this->getAttribute($context["dumpbase"], "category", array());
            echo "').easyPieChart({
\t\t\t\t\t\t\t\t\tanimate: 6000,
\t\t\t\t\t\t\t\t\tlineWidth: 5,
\t\t\t\t\t\t\t\t\tbarColor: '";
            // line 79
            echo $this->getAttribute($context["dumpbase"], "color", array());
            echo "',
\t\t\t\t\t\t\t\t\tsize: 80
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dumpbase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listccbase"]) ? $context["listccbase"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ccbase"]) {
            // line 85
            echo "                                \$('.easy-pie-chart .ccdump";
            echo $this->getAttribute($context["ccbase"], "category", array());
            echo "').easyPieChart({
\t\t\t\t\t\t\t\t\tanimate: 6000,
\t\t\t\t\t\t\t\t\tlineWidth: 5,
\t\t\t\t\t\t\t\t\tbarColor: '";
            // line 88
            echo $this->getAttribute($context["ccbase"], "color", array());
            echo "',
\t\t\t\t\t\t\t\t\tsize: 80
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t});
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ccbase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t\t\t\t\t\t});
</script>";
    }

    public function getTemplateName()
    {
        return "news.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 93,  225 => 88,  218 => 85,  213 => 84,  202 => 79,  195 => 76,  191 => 75,  164 => 50,  160 => 48,  150 => 46,  146 => 45,  140 => 44,  136 => 42,  132 => 41,  127 => 38,  116 => 35,  110 => 34,  107 => 33,  103 => 32,  97 => 28,  95 => 27,  92 => 26,  88 => 24,  78 => 22,  74 => 21,  68 => 20,  64 => 18,  60 => 17,  55 => 14,  44 => 11,  38 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
