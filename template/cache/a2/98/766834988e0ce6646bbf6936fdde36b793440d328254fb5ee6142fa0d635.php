<?php

/* packs.tpl */
class __TwigTemplate_a298766834988e0ce6646bbf6936fdde36b793440d328254fb5ee6142fa0d635 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Dump Packs <small> sale</small></h1></div></div></div>
<div id=\"row\"><div id=\"result\"></div></div>
<div id=\"pricing_table_example2\" class=\"row\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listpack"]) ? $context["listpack"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["packs"]) {
            // line 5
            echo "<div class=\"col-md-4\">
<div class=\"pricing-table\" style=\"margin:10px;\">
<div class=\"top\">
<h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "name", array()), "html", null, true);
            echo "</h2>
</div>
<ul>
<li>
<strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "value", array()), "html", null, true);
            echo "</strong> Dumps
</li>
<li>
<strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "country", array()), "html", null, true);
            echo "</strong>
</li>
<div class=\"well\">
\t<table style=\"width:100%\">
    <tbody><tr>
        <td><h4 class=\"text-success\">Type: <b>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "type", array()), "html", null, true);
            echo "</b></h4></td>
            <td><h4 class=\"text-warning\">Code: <b>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "code", array()), "html", null, true);
            echo "</b></h4></td>
    </tr>
    <tr>
        <td><h4 class=\"text-info\">Class: <b>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "class", array()), "html", null, true);
            echo "</b></h4></td>
        <td><h4 class=\"text-primary\">Level: <b>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "level", array()), "html", null, true);
            echo "</b></h4></td>
    </tr>
</tbody></table>
</div>
</ul>
";
            // line 30
            if ((twig_length_filter($this->env, $this->getAttribute($context["packs"], "comment1", array())) > 0)) {
                // line 31
                echo "<div style=\"margin-left:20px; margin-right:20px\" class=\"alert alert-success\"><center><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "comment1", array()), "html", null, true);
                echo "</strong></center></div>
";
            }
            // line 33
            if ((twig_length_filter($this->env, $this->getAttribute($context["packs"], "comment2", array())) > 0)) {
                // line 34
                echo "<div style=\"margin-left:20px; margin-right:20px\" class=\"alert alert-info\"><center><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "comment2", array()), "html", null, true);
                echo "</strong></center></div>
";
            }
            // line 36
            echo "<hr>
<h1><sup>\$</sup>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "price", array()), "html", null, true);
            echo "</h1>\t
<p></p>
<a href=\"#\" onclick=\"showpage('packs.php?act=get&id=";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["packs"], "Id", array()), "html", null, true);
            echo "');\" class=\"btn btn-bricky\">
Buy
</a>
</div></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['packs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "packs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  100 => 39,  95 => 37,  92 => 36,  86 => 34,  84 => 33,  78 => 31,  76 => 30,  68 => 25,  64 => 24,  58 => 21,  54 => 20,  46 => 15,  40 => 12,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
