<?php

/* mypacks.tpl */
class __TwigTemplate_48a9c42484fdb8003f256e487238da95cfcbad87663ddb44d12cd29709c72307 extends Twig_Template
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
        echo "<div class='page-header'><h1>My Packs <small> open</small></h1></div></div></div><table class='table table-striped table-bordered table-hover'>
<tr><td><b>Id</b></td><td><b>Name</b></td><td><b>Category</b></td><td><b>Type</b></td><td><b>Level</b></td><td><b>Class</b><td><b>Code</b></td><td><b>Counry</b></td><td><b>Quantity</b></td></td><td><b>Date</b></td><td>Action</td></tr>
";
        // line 3
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listCard"]) ? $context["listCard"] : null))) > 0)) {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCard"]) ? $context["listCard"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 5
                echo "<tr>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "id", array()), "html", null, true);
                echo "
</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "name", array()), "html", null, true);
                echo "
</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 13
                if (($this->getAttribute($context["card"], "categoryname", array()) == "0")) {
                    // line 14
                    echo "<span class=\"label label-default\"> All</span>
";
                } else {
                    // line 16
                    echo "<span class=\"label label-default\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "categoryname", array()), "html", null, true);
                    echo "</span>
";
                }
                // line 18
                echo "</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 20
                if (($this->getAttribute($context["card"], "type", array()) == "0")) {
                    // line 21
                    echo "<span class=\"label label-info\"> All</span>
";
                } else {
                    // line 23
                    echo "<span class=\"label label-info\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "type", array()), "html", null, true);
                    echo "</span>
";
                }
                // line 25
                echo "</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 27
                if (($this->getAttribute($context["card"], "level", array()) == "0")) {
                    // line 28
                    echo "<span class=\"label label-success\"> All</span>
";
                } else {
                    // line 30
                    echo "<span class=\"label label-success\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "level", array()), "html", null, true);
                    echo "</span>
";
                }
                // line 32
                echo "</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 34
                if (($this->getAttribute($context["card"], "class", array()) == "0")) {
                    // line 35
                    echo "<span class=\"label label-warning\"> All</span>
";
                } else {
                    // line 37
                    echo "<span class=\"label label-warning\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "class", array()), "html", null, true);
                    echo "</span>
";
                }
                // line 39
                echo "</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 41
                if (($this->getAttribute($context["card"], "code", array()) == "0")) {
                    // line 42
                    echo "<span class=\"label label-danger\"> All</span>
";
                } else {
                    // line 44
                    echo "<span class=\"label label-danger\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "code", array()), "html", null, true);
                    echo "</span>
";
                }
                // line 46
                echo "</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 48
                if (($this->getAttribute($context["card"], "country", array()) == "0")) {
                    // line 49
                    echo "<span class=\"label label-inverse\"> All</span>
";
                } else {
                    // line 51
                    echo "<span class=\"label label-inverse\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "country", array()), "html", null, true);
                    echo "</span>
";
                }
                // line 53
                echo "</center></td>
<td class='tdCol' style='font-size:12px;'><center>
<span class='badge'>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
                echo "</span>
</center></td>
<td class='tdCol' style='font-size:12px;'><center>
";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "sdate", array()), "html", null, true);
                echo "
</center></td>
<td class='tdCol' style='font-size:12px;'><center>
<a type=\"button\" onclick=\"showpage('packs.php?act=open&id=";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "id", array()), "html", null, true);
                echo "');\" class=\"btn btn-success\" >Open</a>
</center></td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 65
            echo "<tr><th colspan='11'>No packs found.</th></tr>
";
        }
        // line 67
        echo "</table><th>";
    }

    public function getTemplateName()
    {
        return "mypacks.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 67,  163 => 65,  153 => 61,  147 => 58,  141 => 55,  137 => 53,  131 => 51,  127 => 49,  125 => 48,  121 => 46,  115 => 44,  111 => 42,  109 => 41,  105 => 39,  99 => 37,  95 => 35,  93 => 34,  89 => 32,  83 => 30,  79 => 28,  77 => 27,  73 => 25,  67 => 23,  63 => 21,  61 => 20,  57 => 18,  51 => 16,  47 => 14,  45 => 13,  39 => 10,  33 => 7,  29 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
