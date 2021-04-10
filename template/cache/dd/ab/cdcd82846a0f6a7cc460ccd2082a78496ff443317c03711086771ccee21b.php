<?php

/* elements/dumpsort.tpl */
class __TwigTemplate_ddabcdcd82846a0f6a7cc460ccd2082a78496ff443317c03711086771ccee21b extends Twig_Template
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
        echo "<div class='cardoption'><div id='row'><div class='well'>
<div class='row'>
<div class='col-sm-3'><label for='catid'>Category:</label>
<select id='catid' style='width: 100%;' name='catid' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 5
        if (((isset($context["categoryId"]) ? $context["categoryId"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"0\">All</option>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "<option ";
            if (((isset($context["categoryId"]) ? $context["categoryId"] : null) == $this->getAttribute($context["category"], "categoryId", array()))) {
                echo " selected ";
            }
            // line 8
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
        // line 10
        echo "</select></div>
<div class='col-sm-3'><label for='cardbin'>Bin:</label><div class='input-group' style='margin-top:3px;'><input  type='hidden' id='cardbin' style='width: 100%;' value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["get"]) ? $context["get"] : null), "bin", array(), "array"), "html", null, true);
        echo "\" /> <span class='input-group-btn'><button type='button' onclick=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\" class='btn btn-default'><i class='fa fa-angle-double-right'></i> Go!</button></span> </div>
</div><div class='col-sm-3'><label for='last4'>Last 4:</label><input class='form-control' id='last4' style='width: 100%; margin-top:3px;' value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["get"]) ? $context["get"] : null), "last4", array(), "array"), 0, 7), "html", null, true);
        echo "\" size=\"4\" onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\" maxlength=\"4\" />
</div><div class='col-sm-3'><label for='type'>Type:</label><select id='type' style='width: 100%;' name='type' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 14
        if (((isset($context["instype"]) ? $context["instype"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listtype"]) ? $context["listtype"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["itype"]) {
            // line 16
            echo "<option ";
            if (((isset($context["instype"]) ? $context["instype"] : null) == $this->getAttribute($context["itype"], "dumptype", array()))) {
                echo " selected ";
            }
            // line 17
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itype"], "dumptype", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itype"], "dumptype", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itype"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</select></div></div>
<div class='row' style='margin-top:10px'><div class='col-sm-3'><label for='code'>Code:</label><select id='code' style='width: 100%;' name='code' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 21
        if (((isset($context["inscode"]) ? $context["inscode"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcode"]) ? $context["listcode"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icode"]) {
            // line 23
            echo "<option ";
            if (((isset($context["inscode"]) ? $context["inscode"] : null) == $this->getAttribute($context["icode"], "dumpcode", array()))) {
                echo " selected ";
            }
            // line 24
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icode"], "dumpcode", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icode"], "dumpcode", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icode"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select></div>
<div class='col-sm-3'><label for='level'>Level:</label><select id='level' style='width: 100%;' name='level' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 28
        if (((isset($context["inslevel"]) ? $context["inslevel"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listlevel"]) ? $context["listlevel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ilevel"]) {
            // line 30
            echo "<option ";
            if (((isset($context["inslevel"]) ? $context["inslevel"] : null) == $this->getAttribute($context["ilevel"], "dumplevel", array()))) {
                echo " selected ";
            }
            // line 31
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ilevel"], "dumplevel", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ilevel"], "dumplevel", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ilevel"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ilevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</select></div>
<div class='col-sm-3'><label for='class'>Class:</label><select id='class' style='width: 100%;' name='class' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 35
        if (((isset($context["insclass"]) ? $context["insclass"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listclass"]) ? $context["listclass"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["iclass"]) {
            // line 37
            echo "<option ";
            if (((isset($context["insclass"]) ? $context["insclass"] : null) == $this->getAttribute($context["iclass"], "dumpclass", array()))) {
                echo " selected ";
            }
            // line 38
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["iclass"], "dumpclass", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["iclass"], "dumpclass", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["iclass"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</select></div>
<div class='col-sm-3'><label for='cardcountry'>Country:</label><select id='cardcountry' style='width: 100%;' name='cardcountry' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 42
        if (((isset($context["inscountry"]) ? $context["inscountry"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCou"]) ? $context["listCou"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icountry"]) {
            // line 44
            echo "<option ";
            if (((isset($context["inscountry"]) ? $context["inscountry"] : null) == $this->getAttribute($context["icountry"], "dumpCou", array()))) {
                echo " selected ";
            }
            // line 45
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icountry"], "dumpCou", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icountry"], "dumpCou", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icountry"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icountry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</select></div></div>
<div class='row' style='margin-top:10px'><div class='col-sm-6'><label for='bank'>Bank:</label><select id='bank' style='width: 100%;' name='bank' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 49
        if (((isset($context["insbank"]) ? $context["insbank"] : null) == "0")) {
            echo " selected ";
        }
        echo " value=\"\">All</option>
";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listbank"]) ? $context["listbank"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ibank"]) {
            // line 51
            echo "<option ";
            if (((isset($context["insbank"]) ? $context["insbank"] : null) == $this->getAttribute($context["ibank"], "dumpbank", array()))) {
                echo " selected ";
            }
            // line 52
            echo "value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ibank"], "dumpbank", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ibank"], "dumpbank", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ibank"], "count", array()), "html", null, true);
            echo ")</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ibank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</select></div>
<div class='col-sm-3'><label for='cardpage'>Page:</label><select id='cardpage' style='width: 100%;' name='cardpage' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page='+document.getElementById('cardpage').options[document.getElementById('cardpage').selectedIndex].value+'&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 56
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "1")) {
            echo " selected ";
        }
        echo " value=\"1\">1</option>
";
        // line 57
        if (((isset($context["pages"]) ? $context["pages"] : null) > "1")) {
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(2, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
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
        // line 62
        echo "</select></div>
<div class='col-sm-3'><label for='cardPerPage'>Dumps per page:</label><select id='cardPerPage' style='width: 100%; margin-bottom:10px;' name='cardPerPage' onchange=\"showpage('./dumps.php?cat='+document.getElementById('catid').options[document.getElementById('catid').selectedIndex].value+'&bin='+document.getElementById('cardbin').value+'&last4='+document.getElementById('last4').value+'&type='+document.getElementById('type').options[document.getElementById('type').selectedIndex].value+'&code='+document.getElementById('code').options[document.getElementById('code').selectedIndex].value+'&level='+document.getElementById('level').options[document.getElementById('level').selectedIndex].value+'&class='+document.getElementById('class').options[document.getElementById('class').selectedIndex].value+'&country='+document.getElementById('cardcountry').options[document.getElementById('cardcountry').selectedIndex].value+'&bank='+document.getElementById('bank').options[document.getElementById('bank').selectedIndex].value+'&page=1&perpage='+document.getElementById('cardPerPage').options[document.getElementById('cardPerPage').selectedIndex].value);\">
<option ";
        // line 64
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "10")) {
            echo " selected ";
        }
        echo " value=\"10\">10</option>
<option ";
        // line 65
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "20")) {
            echo " selected ";
        }
        echo " value=\"20\">20</option>
<option ";
        // line 66
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "50")) {
            echo " selected ";
        }
        echo " value=\"50\">50</option>
<option ";
        // line 67
        if (((isset($context["cardPerPage"]) ? $context["cardPerPage"] : null) == "100")) {
            echo " selected ";
        }
        echo " value=\"100\">100</option>
</select></div></div></div></div></div>";
    }

    public function getTemplateName()
    {
        return "elements/dumpsort.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 67,  299 => 66,  293 => 65,  287 => 64,  283 => 62,  267 => 59,  263 => 58,  261 => 57,  255 => 56,  251 => 54,  238 => 52,  233 => 51,  229 => 50,  223 => 49,  219 => 47,  206 => 45,  201 => 44,  197 => 43,  191 => 42,  187 => 40,  174 => 38,  169 => 37,  165 => 36,  159 => 35,  155 => 33,  142 => 31,  137 => 30,  133 => 29,  127 => 28,  123 => 26,  110 => 24,  105 => 23,  101 => 22,  95 => 21,  91 => 19,  78 => 17,  73 => 16,  69 => 15,  63 => 14,  58 => 12,  54 => 11,  51 => 10,  40 => 8,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }
}
