<?php

/* admin/cardaddprice.tpl */
class __TwigTemplate_9aa9b902b1f63a81a03d446d86368280e99d2297b899b6d498ee3d7a1fe9ad21 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Credit Cards <small>set price</small></h1></div></div></div>
<div id=\"row\"><div id=\"result\"></div></div>
<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'><i class='fa fa-credit-card'></i>Set Country Price</div>
<table class='table table-bordered table-striped'>
<tr><th width='175px'><center>Country</center></th><th width='175px'><center>Value</center></th><th width='200px'><center>Action/Result</center></th></tr>
";
        // line 6
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listprice"]) ? $context["listprice"] : null))) > 0)) {
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listprice"]) ? $context["listprice"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 8
                echo "<tr>
<td class='tdCol' ><center>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                echo " <span class='badge badge-danger'> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "count", array()), "html", null, true);
                echo "</span></center></td>
<td class='tdCol' ><input class='form-control' id='";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                echo "' name='planprice' value='' /></td></td>
<td class='tdCol' ><center><button onclick=\"showresult('./addprice.php?act=set&price='+document.getElementById('";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                echo "').value+'&country=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                echo "');\" type='button' class='btn btn-success'>Set Price</button></center></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 15
            echo "<tr><td colspan='3'>No unset price cards.</td></tr>
";
        }
        // line 17
        echo "</table></center></div>
";
    }

    public function getTemplateName()
    {
        return "admin/cardaddprice.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  57 => 15,  45 => 11,  41 => 10,  35 => 9,  32 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
