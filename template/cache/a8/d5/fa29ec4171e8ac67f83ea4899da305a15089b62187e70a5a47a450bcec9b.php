<?php

/* admin/elements/cardedit.tpl */
class __TwigTemplate_a8d5fa29ec4171e8ac67f83ea4899da305a15089b62187e70a5a47a450bcec9b extends Twig_Template
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
        echo "<div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button><h3>Edit card</h3></div>
<center><div class='modal-body'><div class='panel-heading'><i class='fa fa-credit-card'></i>Edit Credit Card</div>
<form id='editcard' action='card.php?act=edit' method='POST' target='result'><table class='table table-bordered table-striped'>
<tr><th width='150px'>Name</th><th colspan='2'>Value</th></tr>
";
        // line 5
        if (((isset($context["found"]) ? $context["found"] : null) == "1")) {
            // line 6
            echo "<tr><td class='tdCol' width='150px'>Card Id</td><td colspan='2' class='tdCol'>";
            echo twig_escape_filter($this->env, (isset($context["cardid"]) ? $context["cardid"] : null), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Card content (*)</td><th colspan='2' class='tdCol' width='500px'><textarea name='content' style='width:100%;height:100px;'>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardContent", array()), "html", null, true);
            echo "</textarea><input name='id' type='hidden' value='";
            echo twig_escape_filter($this->env, (isset($context["cardid"]) ? $context["cardid"] : null), "html", null, true);
            echo "' /></th></tr>
<tr><td class='tdCol' width='150px'>Used by<br /><font color='#ff0000'>(UserID, 0 = Unused)</font></td><td class='tdCol'><input class='form-control' name='used' value='";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardUsed", array()), "html", null, true);
            echo "' /></td><td class='tdCol' width='250px'></td></tr>
<tr><td class='tdCol' width='150px'>Category (*)</td><td class='tdCol'><select name='category' class='form-control'>
";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "<option ";
                if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "categoryId", array()) == $this->getAttribute($context["category"], "categoryId", array()))) {
                    echo " selected ";
                }
                // line 12
                echo "value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "</select></td></tr>
<tr><td class='tdCol' width='150px'>Spliter (*)</td><td class='tdCol'><input class='form-control' name='spliter' value='";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardSpliter", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' ></td></tr>
<tr><td class='tdCol' width='150px'>CCNum position (*)</td><td class='tdCol'><input class='form-control' name='numpost' value='";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardNumPost", array()), "html", null, true);
            echo "' /><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardNum", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>CVV position</td><td class='tdCol'><input class='form-control' name='cvvpost' value='";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardCvvPost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardCvv", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Month position (*)</td><td class='tdCol'><input class='form-control' name='monpost' value='";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardMonPost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardMon", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Year position (*)</td><td class='tdCol'><input class='form-control' name='yeapost' value='";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardYeaPost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardYea", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Country position</td><td class='tdCol'><input class='form-control' name='coupost' value='";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardCouPost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "cardCou", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>State position</td><td class='tdCol'><input class='form-control' name='statepost' value='";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "CardStatePost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "CardState", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>City position</td><td class='tdCol'><input class='form-control' name='citypost' value='";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "CardCityPost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "CardCity", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Zip position</td><td class='tdCol'><input class='form-control' name='zippost' value='";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "CardZipPost", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "CardZip", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Status (*)</td><input name='save' value='save' type='hidden'><td class='tdCol'><select name='status' class='form-control'>
<option value='0' ";
            // line 25
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "0")) {
                echo " selected ";
            }
            echo " >None</option>
<option value='1' ";
            // line 26
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "1")) {
                echo " selected ";
            }
            echo " >Live</option>
<option value='2' ";
            // line 27
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "2")) {
                echo " selected ";
            }
            echo " >Dead</option>
<option value='3' ";
            // line 28
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "3")) {
                echo " selected ";
            }
            echo " >Error</option>
<option value='4' ";
            // line 29
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "4")) {
                echo " selected ";
            }
            echo " >Unknown</option>
<option value='5' ";
            // line 30
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "5")) {
                echo " selected ";
            }
            echo " >Time Off</option>
</select></td><td style='text-align:center' >
";
            // line 32
            if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "1")) {
                // line 33
                echo "<span class='label label-success'>Live</span>
";
            } elseif (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "2")) {
                // line 35
                echo "<span class='label label-danger'>Dead</span>
";
            } elseif (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "3")) {
                // line 37
                echo "<span class='label label-warning'>Error</span>
";
            } elseif (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "4")) {
                // line 39
                echo "<span class='label label-info'>Unknown</span>
";
            } elseif (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "status", array()) == "5")) {
                // line 41
                echo "<span class='label label-info'>Time Off</span>
";
            } else {
                // line 43
                echo "<span class='label label-inverse'>None</span>
";
            }
            // line 45
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Price (*)</td><td class='tdCol'><input class='form-control' name='price' value='";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "price", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "price", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Seller (*)</td><td class='tdCol'><select name='seller' class='form-control'>
<option value='1'>Admin (ID = 1)</option>
";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listseller"]) ? $context["listseller"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
                // line 50
                echo "<option ";
                if (($this->getAttribute((isset($context["card"]) ? $context["card"] : null), "seller", array()) == $this->getAttribute($context["seller"], "userId", array()))) {
                    echo " selected ";
                }
                // line 51
                echo "value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["seller"], "userId", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["seller"], "username", array()), "html", null, true);
                echo " (ID =";
                echo twig_escape_filter($this->env, $this->getAttribute($context["seller"], "userId", array()), "html", null, true);
                echo ")</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "</select></td><td style='text-align:center' >Seller id = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "seller", array()), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Seller precent* (0.01-1) </td><td class='tdCol'><input class='form-control' name='sellerprc' value='";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "sellerprc", array()), "html", null, true);
            echo "' /></td><td style='text-align:center' >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["card"]) ? $context["card"] : null), "sellerprc", array()), "html", null, true);
            echo "</td></tr>
";
        } else {
            // line 56
            echo "<tr><th colspan='2'>This card is not available</th></tr>
";
        }
        // line 58
        echo "</table></form></center>
<div class=\"modal-footer\"><button type=\"button\" data-dismiss=\"modal\" class=\"btn\">Close</button><input form=\"editcard\" type=\"submit\" class=\"btn btn-primary\" name=\"save\" value=\"Save\" /></div>
</div>
<script>\$(function(){
\$('#editcard').submit(function(e){
e.preventDefault();
var m_method=\$(this).attr('method');
var m_action=\$(this).attr('action');
var m_data=\$(this).serialize();
\$.ajax({
type: m_method,
url: m_action,
data: m_data,
success: function(msg){
\$('button.close').trigger('click');
editcard('card.php?act=edit&cardid=";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["cardid"]) ? $context["cardid"] : null), "html", null, true);
        echo "');
}
});
});
});</script>";
    }

    public function getTemplateName()
    {
        return "admin/elements/cardedit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 73,  231 => 58,  227 => 56,  220 => 54,  215 => 53,  202 => 51,  197 => 50,  193 => 49,  185 => 46,  182 => 45,  178 => 43,  174 => 41,  170 => 39,  166 => 37,  162 => 35,  158 => 33,  156 => 32,  149 => 30,  143 => 29,  137 => 28,  131 => 27,  125 => 26,  119 => 25,  112 => 23,  106 => 22,  100 => 21,  94 => 20,  88 => 19,  82 => 18,  76 => 17,  70 => 16,  66 => 15,  63 => 14,  52 => 12,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
