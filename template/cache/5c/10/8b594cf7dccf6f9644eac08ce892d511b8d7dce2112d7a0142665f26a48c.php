<?php

/* admin/elements/cardadd.tpl */
class __TwigTemplate_5c108b594cf7dccf6f9644eac08ce892d511b8d7dce2112d7a0142665f26a48c extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Credit Cards <small>import cards</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'><i class='fa fa-credit-card'></i>Import Credit Card</div>
<form action='card.php?act=add' method='POST' target='_new' ><table class='table table-bordered table-striped'>
<tr><th width='150px'>Name</th><th width='500px'>Value</th></tr>
<tr><td class='tdCol' width='150px'>List card (*)</td><td class='tdCol' width='500px'><textarea name='listcard' style='width:100%;height:100px;'></textarea></td></tr>
<tr><td class='tdCol' width='150px'>Category (*)</td><td class='tdCol' width='500px'><select class='form-control' name='category' >
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
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
        // line 10
        echo "</select></td></tr>
<tr><td class='tdCol' width='150px'>Spliter (*)</td><td class='tdCol' width='500px'><input class='form-control' name='spliter' /></td></tr>
<tr><td class='tdCol' width='150px'>CCNum position (*)</td><td class='tdCol' width='500px'><input class='form-control' name='numpost' /></td></tr>
<tr><td class='tdCol' width='150px'>CVV position</td><td class='tdCol' width='500px'><input class='form-control' name='cvvpost' /></td></tr>
<tr><td class='tdCol' width='150px'>Month position (*)</td><td class='tdCol' width='500px'><input class='form-control' name='monpost' /></td></tr>
<tr><td class='tdCol' width='150px'>Year position (*)</td><td class='tdCol' width='500px'><input class='form-control' name='yeapost' /></td></tr>
<tr><td class='tdCol' width='150px'>Country position</td><td class='tdCol' width='500px'><input class='form-control' name='coupost' /></td></tr>
<tr><td class='tdCol' width='150px'>State position</td><td class='tdCol' width='500px'><input class='form-control' name='statepost' /></td></tr>
<tr><td class='tdCol' width='150px'>City position</td><td class='tdCol' width='500px'><input class='form-control' name='citypost' /></td></tr>
<tr><td class='tdCol' width='150px'>Zip position</td><td class='tdCol' width='500px'><input class='form-control' name='zippost' /></td></tr>
<tr><td class='tdCol' width='150px'>Seller (*)</td><td class='tdCol' width='500px'><select class='form-control' name='seller' >
<option value='1'>Admin (ID = 1)</option>
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listseller"]) ? $context["listseller"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
            // line 23
            echo "<option value='";
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
        // line 25
        echo "</select></td></tr>
<tr><td class='tdCol' width='150px'>Sellet precent* (0.01-1) <--[dot!]</td><td class='tdCol' width='500px'><input class='form-control' name='sellerprc' /></td></tr>
<tr><td class='tdCol' width='150px'>No refund (*)<p>(all card is Live)</p></td><td class='tdCol' width='500px'>
<div class='make-switch' data-on='success' data-off='warning'><input name='norefund' value='1' type='checkbox'>
</td></tr>
<tr><th colspan='2'><center><input class='btn btn-bricky' type='button' name='save' onclick=\"showpage('card.php');\" value='Cancel' /> <input class='btn btn-green' type='submit' name='save' value='Save' /></center></th></tr>
</table></form></div>
<script src=\"../assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "admin/elements/cardadd.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  60 => 23,  56 => 22,  42 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
