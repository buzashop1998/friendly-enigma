<?php

/* dumps.tpl */
class __TwigTemplate_3a36ef1537d33793ef5374cfae4e1c087dbed7c550dfb5060ed22a75af797f8d extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Dumps <small>select category</small></h1></div></div></div>
<div class=\"panel-heading\"><i class=\"fa fa-credit-card\"></i>Dumps</div><div class=\"panel-body\"><div class=\"form-inline\">

";
        // line 4
        $this->env->loadTemplate("elements/dumpsort.tpl")->display($context);
        // line 5
        echo "
<table class='table table-striped table-bordered table-hover'>
<tr><td><center><input class='dumpallcart' onchange = 'dump_all_add_to_cart();' type='checkbox'></center></td><td><b>Number</b></td><td><b>Type</b></td><td><b>Level</b></td><td><b>Class</b></td><td><b>Code</b></td><td><b>Exp Date</b></td><td><b>Category</b></td><td><b>Country</b></td><td><b>Bank</b></td><td><b>Action/Result</b></td></tr>
";
        // line 8
        if (((isset($context["found"]) ? $context["found"] : null) == "1")) {
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCard"]) ? $context["listCard"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 10
                echo "
<tr><td><center><input class='dump' id='card-";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpId", array()), "html", null, true);
                echo "' onchange = 'dump_cart_select(\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpId", array()), "html", null, true);
                echo "\");' type='checkbox' item_id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpId", array()), "html", null, true);
                echo "' 
";
                // line 12
                if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "dumps", array(), "array"), $this->getAttribute($context["card"], "dumpId", array()), array(), "array"))) {
                } else {
                    // line 14
                    echo " checked 
";
                }
                // line 16
                echo ">
</center></td>
<td class='tdCol' >";
                // line 18
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["card"], "dumpNum", array()), 0, 6), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumptype", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumplevel", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpclass", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpcode", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpMon", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpYea", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "categoryName", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpCou", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpbank", array()), "html", null, true);
                echo "</td>
<td align='center' class='tdCol' id='cardResult";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpId", array()), "html", null, true);
                echo "' >
<button type=\"button\" onclick=\"getDump('";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "dumpId", array()), "html", null, true);
                echo "')\" class=\"btn btn-green\">
";
                // line 29
                if (((isset($context["buyandcheck"]) ? $context["buyandcheck"] : null) == "1")) {
                    // line 30
                    echo "Buy&Check
";
                } else {
                    // line 32
                    echo "Buy
";
                }
                // line 34
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "price", array()), "html", null, true);
                echo "\$)</button></a></td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 37
            echo "<tr><th colspan='11'><div class='errorMsg'>No dump found.</div></th></tr>
";
        }
        // line 39
        echo "</table></div></div></div>
<script> \$(document).ready(function() { 
\t\t\t\t\$(\"#catid\").select2(); 
\t\t\t\t\$(\"#type\").select2();
                \$(\"#code\").select2();
                \$(\"#level\").select2();
                \$(\"#class\").select2();
                \$(\"#cardcountry\").select2();
                \$(\"#bank\").select2();
                \$(\"#cardpage\").select2(); 
                \$(\"#cardPerPage\").select2(); 
                \$(\"#cardbin\").select2({
    tags:[],
    containerCssClass: \"massbin\",
    tokenSeparators: [\",\", \" \"]});
\t\t\t\t});
                </script>
                <script> \$(document).ready( function() {
\$(\".dumpallcart\").click( function() {
                if(!\$(\".dumpallcart\").is(\":checked\")){
                \$(\".dump\").prop(\"checked\", false);
            } else {
                \$(\".dump\").prop(\"checked\", true);
            }});
            });</script> ";
    }

    public function getTemplateName()
    {
        return "dumps.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  125 => 37,  115 => 34,  111 => 32,  107 => 30,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 16,  51 => 14,  48 => 12,  40 => 11,  37 => 10,  33 => 9,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
