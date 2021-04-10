<?php

/* admin/elements/cardsort.tpl */
class __TwigTemplate_8075d102e82e68125b97365422db4441f9c3ec9966863f6fcc66df2174246d56 extends Twig_Template
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
        echo "<div class=\"form-inline\">
<div class='cardoption'><div id='row'><div class='well'><div class='row'><div class='col-sm-3'><label for='catid'>Category:</label>
<select id='catid' style='width: 100%;' name='catid' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 4
        if (((isset($context["categoryId"]) ? $context["categoryId"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "<option ";
            if (((isset($context["categoryId"]) ? $context["categoryId"] : null) == $this->getAttribute($context["category"], "categoryId", array()))) {
                echo " selected ";
            }
            // line 7
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
        // line 9
        echo "</select></div>
<div class='col-sm-3'><label for='cardbin'>Bin:</label><div class='input-group' style='margin-top:3px;'><input id='cardbin' type='hidden' style='width: 100%;' value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["get"]) ? $context["get"] : null), "bin", array(), "array"), "html", null, true);
        echo "\"  /> <span class='input-group-btn'><button type='button' onclick=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\" class='btn btn-default'><i class='fa fa-angle-double-right'></i> Go!</button></span> </div>
</div>
<div class='col-sm-3'><label for='cardcountry'>Country:</label><select id='cardcountry' style='width: 100%;' name='cardcountry' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">\"

<option ";
        // line 14
        if (((isset($context["inscountry"]) ? $context["inscountry"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCou"]) ? $context["listCou"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icountry"]) {
            // line 16
            echo "<option ";
            if (((isset($context["inscountry"]) ? $context["inscountry"] : null) == $this->getAttribute($context["icountry"], "cardCou", array()))) {
                echo " selected ";
            }
            // line 17
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icountry"], "cardCou", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icountry"], "cardCou", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icountry"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icountry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</select></div>
<div class='col-sm-3'><label for='cardstate'>State:</label><select id='cardstate' style='width: 100%;' name='cardstate' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">

<option ";
        // line 23
        if (((isset($context["insstate"]) ? $context["insstate"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liststate"]) ? $context["liststate"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["istate"]) {
            // line 25
            echo "<option ";
            if (((isset($context["insstate"]) ? $context["insstate"] : null) == $this->getAttribute($context["istate"], "CardState", array()))) {
                echo " selected ";
            }
            // line 26
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["istate"], "CardState", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["istate"], "CardState", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["istate"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['istate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
</select></div></div>
<div class='row' style='margin-top:10px'><div class='col-sm-2'><label for='cardcity'>City:</label><select id='cardcity' style='width: 100%;' name='cardcity' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">

<option ";
        // line 32
        if (((isset($context["inscity"]) ? $context["inscity"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcity"]) ? $context["listcity"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icity"]) {
            // line 34
            echo "<option ";
            if (((isset($context["inscity"]) ? $context["inscity"] : null) == $this->getAttribute($context["icity"], "CardCity", array()))) {
                echo " selected ";
            }
            // line 35
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icity"], "CardCity", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icity"], "CardCity", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icity"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
</select></div>
<div class='col-sm-2'><label for='cardzip'>Zip:</label><input id='cardzip' type='text' class='form-control' style='width: 100%; margin-top:3px; margin-bottom:10px;' value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["get"]) ? $context["get"] : null), "zip", array(), "array"), 0, 7), "html", null, true);
        echo "\" size=\"7\" onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\" maxlength=\"7\" /></div>
<div class='col-sm-2'><label for='cardtype'>Type:</label><select id='cardtype' style='width: 100%;' name='cardtype' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">

<option ";
        // line 42
        if (((isset($context["instype"]) ? $context["instype"] : null) == "")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
<option ";
        // line 43
        if (((isset($context["instype"]) ? $context["instype"] : null) == "3")) {
            echo " selected ";
        }
        echo " value=\"3\">AMEX</option>
<option ";
        // line 44
        if (((isset($context["instype"]) ? $context["instype"] : null) == "4")) {
            echo " selected ";
        }
        echo " value=\"4\">VISA</option>
<option ";
        // line 45
        if (((isset($context["instype"]) ? $context["instype"] : null) == "5")) {
            echo " selected ";
        }
        echo " value=\"5\">MASTER CARD</option>
<option ";
        // line 46
        if (((isset($context["instype"]) ? $context["instype"] : null) == "6")) {
            echo " selected ";
        }
        echo " value=\"6\">DISCOVER</option>

</select></div>

<div class='col-sm-2'><label for='showUsed'>Show:</label><select id='showUsed' style='width: 100%;' name='showUsed' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&showused='+document.getElementById('showUsed').options[document.getElementById('showUsed').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">

<option ";
        // line 52
        if (((isset($context["showused"]) ? $context["showused"] : null) == "no")) {
            echo " selected ";
        }
        echo " value=\"no\">Unused</option>
<option ";
        // line 53
        if (((isset($context["showused"]) ? $context["showused"] : null) == "yes")) {
            echo " selected ";
        }
        echo " value=\"yes\">Used</option>
<option ";
        // line 54
        if (((isset($context["showused"]) ? $context["showused"] : null) == "all")) {
            echo " selected ";
        }
        echo " value=\"all\">All</option>

</select></div>

<div class='col-sm-2'><label for='cardPerPage'>Cards per page:</label><select id='cardPerPage' style='width: 100%;' name='cardPerPage' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">

<option ";
        // line 60
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "10")) {
            echo " selected ";
        }
        echo " value=\"10\">10</option>
<option ";
        // line 61
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "20")) {
            echo " selected ";
        }
        echo " value=\"20\">20</option>
<option ";
        // line 62
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "50")) {
            echo " selected ";
        }
        echo " value=\"50\">50</option>
<option ";
        // line 63
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "100")) {
            echo " selected ";
        }
        echo " value=\"100\">100</option>

</select></div>

<div class='col-sm-2'><label for='cardpage'>Page:</label><select id='cardpage' name='cardpage' style='width: 100%;' onchange=\"showpage('./card.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&state='+document.getElementById('cardstate').options[document.getElementById('cardstate').selectedIndex].value+'&city='+document.getElementById('cardcity').options[document.getElementById('cardcity').selectedIndex].value+'&zip='+document.getElementById('cardzip').value+'&page='+document.getElementById('cardpage').options[document.getElementById('cardpage').selectedIndex].value+'&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value+'&type='+document.getElementById('cardtype').options[document.getElementById('cardtype').selectedIndex].value);\">

<option ";
        // line 69
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "1")) {
            echo " selected ";
        }
        echo " value=\"1\">1</option>
";
        // line 70
        if (((isset($context["pages"]) ? $context["pages"] : null) > "1")) {
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(2, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "<option ";
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == $context["i"])) {
                    echo " selected ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 75
        echo "
</select></div>
</div></div></div></div>";
    }

    public function getTemplateName()
    {
        return "admin/elements/cardsort.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 75,  265 => 72,  261 => 71,  259 => 70,  253 => 69,  242 => 63,  236 => 62,  230 => 61,  224 => 60,  213 => 54,  207 => 53,  201 => 52,  190 => 46,  184 => 45,  178 => 44,  172 => 43,  166 => 42,  160 => 39,  156 => 37,  143 => 35,  138 => 34,  134 => 33,  128 => 32,  122 => 28,  109 => 26,  104 => 25,  100 => 24,  94 => 23,  88 => 19,  75 => 17,  70 => 16,  66 => 15,  60 => 14,  53 => 10,  50 => 9,  39 => 7,  34 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
