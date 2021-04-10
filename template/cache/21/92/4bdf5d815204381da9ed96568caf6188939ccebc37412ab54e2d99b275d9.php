<?php

/* admin/news.tpl */
class __TwigTemplate_21924bdf5d815204381da9ed96568caf6188939ccebc37412ab54e2d99b275d9 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>News <small>admin panel</small></h1></div></div></div>
<div class=\"col-md-12\"><div class=\"row\">
<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-info-circle\"></i> Dump News</div>
<div class=\"panel-body\"><table class=\"table table-hover\" id=\"sample-table-1\"><thead><tr><th class=\"center\" style=\"width:100px\">Date</th><th>Info</th></tr></thead>
<tbody>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listdumpnews"]) ? $context["listdumpnews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dumpnews"]) {
            // line 7
            echo "<tr><td class=\"center\"><span class=\"label\" style=\"background-color:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpnews"], "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpnews"], "date", array()), "html", null, true);
            echo "</span></td><td style=\"color:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpnews"], "color", array()), "html", null, true);
            echo "\" class=\"text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpnews"], "text", array()), "html", null, true);
            echo "
<a href=\"#\" style=\"float:right\" onclick=\"if (confirm('Are you sure?')) {showpage('news.php?act=delete&id=";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpnews"], "id", array()), "html", null, true);
            echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></a>
</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dumpnews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</tbody></table><hr><p>
<div class=\"col-md-2\"><input data-date-format=\"dd.mm.yyyy\" placeholder=\"Date...\" data-date-viewmode=\"years\" id=\"date\" class=\"form-control date-picker\" type=\"text\"></div><div class=\"col-md-8\"><input id=\"text\" placeholder=\"Enter text...\" class=\"form-control\" type=\"text\"></div><div class=\"col-md-2\"><input id=\"newsco\" data-colorpicker-guid=\"1\" value=\"#555\" class=\"form-control color-picker\" type=\"text\"></div>
<div class=\"col-md-12\"><button onclick=\"showpage('./news.php?act=addnewsdump&date='+document.getElementById('date').value+'&text='+document.getElementById('text').value+'&color='+encodeURIComponent(document.getElementById('newsco').value)+'&save=Save');\" type='button' style='float: right; margin-top:10px;' class='btn btn-success'>Save</button></div></div></div></div>

<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-credit-card\"></i>Dumps Valid</div><div class=\"panel-body\">
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listdumpbase"]) ? $context["listdumpbase"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dumpbase"]) {
            // line 17
            echo "<div class=\"col-md-6\">
<div class=\"easy-pie-chart\">
<span class=\"basedump";
            // line 19
            echo $this->getAttribute($context["dumpbase"], "category", array());
            echo " number\" data-percent=\"";
            echo $this->getAttribute($context["dumpbase"], "precent", array());
            echo "\"> 
<span class=\"percent\">";
            // line 20
            echo $this->getAttribute($context["dumpbase"], "precent", array());
            echo "</span> </span>
</div><div style=\"margin: 10px;\"><center><button type=\"button\" onclick=\"showpage('dumps.php?cat=";
            // line 21
            echo $this->getAttribute($context["dumpbase"], "category", array());
            echo "&bin=&page=1&perpage=10');\" class=\"btn btn-default btn-squared\">";
            echo $this->getAttribute($context["dumpbase"], "categoryName", array());
            echo "</button> 
<a href=\"#\" onclick=\"if (confirm('Are you sure?')) {showpage('news.php?act=basedelete&id=";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpbase"], "id", array()), "html", null, true);
            echo "');}\" class=\"btn btn-bricky btn-squared\"><i class=\"fa fa-times fa fa-white\"></i></a>
</center></div></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dumpbase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<hr><p>
<div class=\"col-md-6\"><select id=\"dcategory\" style=\"width: 100%;\">
";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "<option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</select></div>
<div class=\"col-md-3\"><input id=\"dprecent\" placeholder=\"Precent...\" style=\"margin-top:3px\" class=\"form-control\" type=\"text\"></div>
<div class=\"col-md-3\"><input id=\"dbcolor\" data-colorpicker-guid=\"1\" style=\"margin-top:3px\" value=\"#8fff00\" class=\"form-control color-picker\" type=\"text\"></div>
<div class=\"col-md-12\"><button onclick=\"showpage('./news.php?act=addbasedump&dprecent='+document.getElementById('dprecent').value+'&dcategory='+document.getElementById('dcategory').options[document.getElementById('dcategory').selectedIndex].value+'&dcolor='+encodeURIComponent(document.getElementById('dbcolor').value)+'&save=Save');\" type='button' style='float: right; margin-top:10px;' class='btn btn-success'>Save</button>
</div></div></div></div></div>

<hr>

<div class=\"row\">
<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-info-circle\"></i> Credit Card News</div>
<div class=\"panel-body\"><table class=\"table table-hover\" id=\"sample-table-1\"><thead><tr><th class=\"center\" style=\"width:100px\">Date</th><th>Info</th></tr></thead>
<tbody>
";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listccnews"]) ? $context["listccnews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ccnews"]) {
            // line 43
            echo "<tr><td class=\"center\"><span class=\"label\" style=\"background-color:";
            echo $this->getAttribute($context["ccnews"], "color", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ccnews"], "date", array()), "html", null, true);
            echo "</span></td><td style=\"color:";
            echo $this->getAttribute($context["ccnews"], "color", array());
            echo "\" class=\"text\">";
            echo $this->getAttribute($context["ccnews"], "text", array());
            echo "
<a href=\"#\" style=\"float:right\" onclick=\"if (confirm('Are you sure?')) {showpage('news.php?act=delete&id=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ccnews"], "id", array()), "html", null, true);
            echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></a>
</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ccnews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</tbody></table>
<hr><p>
<div class=\"col-md-2\"><input id=\"ccdate\" data-date-format=\"dd.mm.yyyy\" placeholder=\"Date...\" data-date-viewmode=\"years\" class=\"form-control date-picker\" type=\"text\"></div><div class=\"col-md-8\"><input id=\"cctext\" placeholder=\"Enter text...\" class=\"form-control\" type=\"text\"></div><div class=\"col-md-2\"><input id=\"cccolor\" data-colorpicker-guid=\"1\" value=\"#555\" class=\"form-control color-picker\" type=\"text\"></div>
<div class=\"col-md-12\"><button onclick=\"showpage('./news.php?act=addnewscc&date='+document.getElementById('ccdate').value+'&text='+document.getElementById('cctext').value+'&color='+encodeURIComponent(document.getElementById('cccolor').value)+'&save=Save');\" type='button' style='float: right; margin-top:10px;' class='btn btn-success'>Save</button></div></div></div></div>

<div class=\"col-sm-6\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-credit-card\"></i>Credit Cards Valid</div><div class=\"panel-body\">
";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listccbase"]) ? $context["listccbase"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ccbase"]) {
            // line 54
            echo "<div class=\"col-md-6\"><div class=\"easy-pie-chart\"><span class=\"ccdump";
            echo $this->getAttribute($context["ccbase"], "category", array());
            echo " number\" data-percent=\"";
            echo $this->getAttribute($context["ccbase"], "precent", array());
            echo "\"> <span class=\"percent\">";
            echo $this->getAttribute($context["ccbase"], "precent", array());
            echo "</span> </span></div><div style=\"margin: 10px;\"><center><button type=\"button\" onclick=\"showpage('card.php?cat=";
            echo $this->getAttribute($context["ccbase"], "category", array());
            echo "&bin=&page=1&perpage=10');\" class=\"btn btn-default btn-squared\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ccbase"], "categoryName", array()), "html", null, true);
            echo "</button>
<a href=\"#\" onclick=\"if (confirm('Are you sure?')) {showpage('news.php?act=basedelete&id=";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["ccbase"], "id", array()), "html", null, true);
            echo "');}\" class=\"btn btn-bricky btn-squared\"><i class=\"fa fa-times fa fa-white\"></i></a>
</center></div></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ccbase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "<hr><p>

<div class=\"col-md-6\"><select id=\"cccategory\" style=\"width: 100%;\">
";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dumplistCategory"]) ? $context["dumplistCategory"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dumpcategory"]) {
            // line 62
            echo "<option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpcategory"], "categoryId", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpcategory"], "categoryName", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dumpcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</select></div>
<div class=\"col-md-3\"><input id=\"ccprecent\" placeholder=\"Precent...\" class=\"form-control\" style=\"margin-top:3px\" type=\"text\"></div>
<div class=\"col-md-3\"><input id=\"bcccolor\" data-colorpicker-guid=\"1\" style=\"margin-top:3px\" value=\"#8fff00\" class=\"form-control color-picker\" type=\"text\"></div>
<div class=\"col-md-12\"><button onclick=\"showpage('./news.php?act=addbasecc&ccprecent='+document.getElementById('ccprecent').value+'&cccategory='+document.getElementById('cccategory').options[document.getElementById('cccategory').selectedIndex].value+'&cccolor='+encodeURIComponent(document.getElementById('bcccolor').value)+'&save=Save');\" type='button' style='float: right; margin-top:10px;' class='btn btn-success'>Save</button>
</div></div></div></div></div>
<script src=\"../assets/plugins/bootstrap-colorpicker/js/commits.js\"></script>
<script src=\"../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
<script src=\"../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js\"></script>
<script src=\"../assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js\"></script>
<script>
\$('.date-picker').datepicker({
autoclose: true
});
\$('.color-picker').colorpicker({
format: 'hex'
});
</script>
<script> \$(document).ready(function() { 
\$(\"#dcategory\").select2();
\$(\"#cccategory\").select2();
});
</script>
<script type=\"text/javascript\">
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
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listdumpbase"]) ? $context["listdumpbase"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dumpbase"]) {
            // line 107
            echo "                                \$('.easy-pie-chart .basedump";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dumpbase"], "category", array()), "html", null, true);
            echo "').easyPieChart({
\t\t\t\t\t\t\t\t\tanimate: 6000,
\t\t\t\t\t\t\t\t\tlineWidth: 5,
\t\t\t\t\t\t\t\t\tbarColor: '";
            // line 110
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
        // line 115
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listccbase"]) ? $context["listccbase"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ccbase"]) {
            // line 116
            echo "                                \$('.easy-pie-chart .ccdump";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ccbase"], "category", array()), "html", null, true);
            echo "').easyPieChart({
\t\t\t\t\t\t\t\t\tanimate: 6000,
\t\t\t\t\t\t\t\t\tlineWidth: 5,
\t\t\t\t\t\t\t\t\tbarColor: '";
            // line 119
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
        // line 124
        echo "\t\t\t\t\t\t\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/news.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 124,  279 => 119,  272 => 116,  267 => 115,  256 => 110,  249 => 107,  245 => 106,  201 => 64,  190 => 62,  186 => 61,  181 => 58,  172 => 55,  159 => 54,  155 => 53,  147 => 47,  138 => 44,  127 => 43,  123 => 42,  109 => 30,  98 => 28,  94 => 27,  90 => 25,  81 => 22,  75 => 21,  71 => 20,  65 => 19,  61 => 17,  57 => 16,  50 => 11,  41 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
