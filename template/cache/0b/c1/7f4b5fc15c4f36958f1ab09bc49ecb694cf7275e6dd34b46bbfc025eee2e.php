<?php

/* admin/card.tpl */
class __TwigTemplate_0bc17f4b5fc15c4f36958f1ab09bc49ecb694cf7275e6dd34b46bbfc025eee2e extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Credit Cards <small>admin panel</small></h1></div></div></div>
<div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"fa fa-credit-card\"></i>Credit cards</div><div class=\"panel-body\">

";
        // line 4
        $this->env->loadTemplate("admin/elements/cardsort.tpl")->display($context);
        // line 5
        echo "
<table class='table table-striped table-bordered table-hover'>
<tr><td><b>Id</b></td><td><b>Type</b></td><td><b>Bin</b></td><td><b>Exp Date</b></td><td><b>Category</b></td><td><b>Country</b></td><td><b>State</b></td><td><b>City</b></td><td><b>Zip</b></td><td><b>User</b></td><td><b>Status</b></td><td><b>Action</b></td></tr>
";
        // line 8
        if (((isset($context["found"]) ? $context["found"] : null) == "1")) {
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCard"]) ? $context["listCard"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 10
                echo "<tr><td class='tdCol' >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                echo "</td>
<td class='tdCol' ><center>
";
                // line 12
                if ((twig_slice($this->env, $this->getAttribute($context["card"], "cardNum", array()), 0, 1) == "3")) {
                    // line 13
                    echo "<img src=\"../images/amex.png\">
";
                } elseif ((twig_slice($this->env, $this->getAttribute($context["card"], "cardNum", array()), 0, 1) == "4")) {
                    // line 15
                    echo "<img src=\"../images/visa.png\">
";
                } elseif ((twig_slice($this->env, $this->getAttribute($context["card"], "cardNum", array()), 0, 1) == "5")) {
                    // line 17
                    echo "<img src=\"../images/mc.png\">
";
                } elseif ((twig_slice($this->env, $this->getAttribute($context["card"], "cardNum", array()), 0, 1) == "6")) {
                    // line 19
                    echo "<img src=\"../images/disc.png\">
";
                } else {
                    // line 21
                    echo "<img src=\"../images/none.png\">
";
                }
                // line 23
                echo "</center></td>
<td class='tdCol' >";
                // line 24
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["card"], "cardNum", array()), 0, 6), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardMon", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardYea", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "categoryName", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardCou", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "CardState", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "CardCity", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "CardZip", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "username", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >
";
                // line 33
                if (($this->getAttribute($context["card"], "status", array()) == "1")) {
                    // line 34
                    echo "<span class='label label-success'>Live</span>
";
                } elseif (($this->getAttribute($context["card"], "status", array()) == "2")) {
                    // line 36
                    echo "<span class='label label-danger'>Dead</span>
";
                } elseif (($this->getAttribute($context["card"], "status", array()) == "3")) {
                    // line 38
                    echo "<span class='label label-warning'>Error</span>
";
                } elseif (($this->getAttribute($context["card"], "status", array()) == "4")) {
                    // line 40
                    echo "<span class='label label-info'>Unknown</span>
";
                } elseif (($this->getAttribute($context["card"], "status", array()) == "5")) {
                    // line 42
                    echo "<span class='label label-info'>Time Off</span>
";
                } else {
                    // line 44
                    echo "<span class='label label-inverse'>None</span>
";
                }
                // line 46
                echo "</td>
<td class='tdCol' ><a href=\"#\" onclick=\"editcard('card.php?act=edit&cardid=";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                echo "');\" class=\"btn btn-xs btn-teal tooltips\" data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></a> <a href=\"#\" onclick=\"if (confirm('If u delete this, user will can\\'t see it in \\'My cards\\' list. Are you sure?')) {showpage('card.php?act=delete&cardid=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></a></td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 50
            echo "<tr><th colspan='11'><div class='errorMsg'>No card found.</div></th></tr>
";
        }
        // line 52
        echo "</table>
<script> \$(document).ready(function() { 
\t\t\t\t\$(\"#catid\").select2(); 
\t\t\t\t\$(\"#cardcountry\").select2(); 
\t\t\t\t\$(\"#cardstate\").select2();
\t\t\t\t\$(\"#cardcity\").select2(); 
\t\t\t\t\$(\"#cardpage\").select2(); 
\t\t\t\t\$(\"#cardPerPage\").select2(); 
                \$(\"#cardtype\").select2();
\t\t\t\t\$(\"#showUsed\").select2(); 
                \$(\"#cardbin\").select2({
    tags:[],
    containerCssClass: \"massbin\",
    tokenSeparators: [\",\", \" \"]});
\t\t\t\t});
                </script>
<script src=\"../assets/plugins/bootstrap-modal/js/bootstrap-modal.js\"></script>
<script src=\"../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
<div id=\"ajax-modal\" class=\"modal fade\" tabindex=\"-1\" style=\"display: none;\"></div>
<div><a href='#' style='margin-top:20px' class='btn btn-green btn-lg btn-block' onclick=\"showpage('card.php?act=add');\">Import cards</a><p></div>";
    }

    public function getTemplateName()
    {
        return "admin/card.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  143 => 50,  132 => 47,  129 => 46,  125 => 44,  121 => 42,  117 => 40,  113 => 38,  109 => 36,  105 => 34,  103 => 33,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  72 => 25,  68 => 24,  65 => 23,  61 => 21,  57 => 19,  53 => 17,  49 => 15,  45 => 13,  43 => 12,  37 => 10,  33 => 9,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
