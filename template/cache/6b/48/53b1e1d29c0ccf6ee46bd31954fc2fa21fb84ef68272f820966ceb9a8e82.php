<?php

/* admin/cardeditprice.tpl */
class __TwigTemplate_6b4853b1e1d29c0ccf6ee46bd31954fc2fa21fb84ef68272f820966ceb9a8e82 extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : null) == "head")) {
            // line 2
            echo "
<div class=\"page-header\"><h1>Credit Cards <small> edit price</small></h1></div></div></div>
<div id=\"row\"><div id=\"result\"></div></div>

";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "table")) {
            // line 7
            echo "<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'><i class='fa fa-credit-card'></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryName", array()), "html", null, true);
            echo "</div>
<table class='table table-bordered table-striped'>
<tr><th width='175px'><center>Country</center></th><th width='175px'><center>Value</center></th><th width='200px'><center>Action/Result</center></th></tr>

";
            // line 11
            if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listprice"]) ? $context["listprice"] : null))) > 0)) {
                // line 12
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listprice"]) ? $context["listprice"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                    // line 13
                    echo "
<tr>
<td class='tdCol' ><center>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                    echo " <span class='badge badge-danger'> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "count", array()), "html", null, true);
                    echo "</span></center></td>
<td class='tdCol' ><input class='form-control' id='";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "price", array()), "html", null, true);
                    echo "' name='planprice' value='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "price", array()), "html", null, true);
                    echo "' /></td></td>
<td class='tdCol' ><center><button onclick=\"showresult('./editprice.php?act=set&lastprice=";
                    // line 17
                    echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["price"], "price", array())), "html", null, true);
                    echo "&category=";
                    echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array())), "html", null, true);
                    echo "&price='+document.getElementById('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "cardCou", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "price", array()), "html", null, true);
                    echo "').value+'&country=";
                    echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["price"], "cardCou", array())), "html", null, true);
                    echo "');\" type='button' class='btn btn-success'>Set Price</button></center></td>
</tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 21
                echo "<tr><td colspan='3'>No cards.</td></tr>
";
            }
        }
        // line 24
        echo "</table></center></div>";
    }

    public function getTemplateName()
    {
        return "admin/cardeditprice.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  82 => 21,  62 => 17,  52 => 16,  46 => 15,  42 => 13,  38 => 12,  36 => 11,  28 => 7,  21 => 2,  19 => 1,);
    }
}
