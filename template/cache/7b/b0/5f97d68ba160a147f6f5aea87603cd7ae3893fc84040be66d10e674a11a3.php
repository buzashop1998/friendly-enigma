<?php

/* deposit.tpl */
class __TwigTemplate_7bb05f97d68ba160a147f6f5aea87603cd7ae3893fc84040be66d10e674a11a3 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Add Balance<small> minimal = ";
        echo twig_escape_filter($this->env, (isset($context["mindeposit"]) ? $context["mindeposit"] : null), "html", null, true);
        echo "\$</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:600px'><div class='panel-heading'>Add Balance</div>
<table class='table table-bordered table-striped'>
<tr><th width='150px'>Payment System</th><th width='150px'>Vaule</th><th width='150px'>Action</th></tr>

";
        // line 6
        if (((isset($context["pmdeposit"]) ? $context["pmdeposit"] : null) == "1")) {
            // line 7
            echo "<tr><form action='' ><td><center><img alt='' src='images/pm.png'></center></td><td><input type='hidden' class='form-control' id='userId' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' /><input placeholder='USD' id='value' class='form-control' type='text'></td><td><center><button type='submit' onclick='depositpm();' class='btn btn-danger'>Deposit</button></center></td></form></tr>
";
        }
        // line 9
        echo "
";
        // line 10
        if ((((isset($context["btcdeposit"]) ? $context["btcdeposit"] : null) == "1") && ((isset($context["btcspeed"]) ? $context["btcspeed"] : null) != "1"))) {
            // line 11
            echo "<tr><form action='' ><td><center><img alt='' src='images/btc.png'></center></td><td><input type='hidden' class='form-control' id='userIdbtc' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' /><input placeholder='USD' id='valuebtc' class='form-control' type='text'></td><td><center><button type='submit' onclick='depositbtc();' class='btn btn-warning'>Deposit</button></center></td></form></tr>
";
        }
        // line 13
        echo "
";
        // line 14
        if (((isset($context["btcspeed"]) ? $context["btcspeed"] : null) == "1")) {
            // line 15
            echo "<tr><form action='' ><td><center><img alt='' src='images/btc-speed.png'></center></td><td><input type='hidden' class='form-control' id='userIdspeed' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' /><center> Min. deposit = ";
            echo twig_escape_filter($this->env, (isset($context["mindeposit"]) ? $context["mindeposit"] : null), "html", null, true);
            echo " \$</center><br><center><input type='text' class='form-control' id='userIdspeedsum' value='' /> \$</center></td><td><center><button type='submit' onclick='depositbtcspeed();' class='btn btn-warning'>Deposit</button></center></td></form></tr>
";
        }
        // line 17
        echo "
";
        // line 18
        if (((isset($context["upmusd"]) ? $context["upmusd"] : null) == "1")) {
            // line 19
            echo "<tr><form action='' ><td><center><img alt='' src='images/pm.png'></center></td><td><input type='hidden' class='form-control' id='userIdupm' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' /><input placeholder='USD' id='valuepm' class='form-control' type='text'></td><td><center><button type='submit' onclick='depositupm();' class='btn btn-danger'>Deposit</button></center></td></form></tr>
";
        }
        // line 21
        echo "
";
        // line 22
        if (((isset($context["uwmz"]) ? $context["uwmz"] : null) == "1")) {
            // line 23
            echo "<tr><form action='' ><td><center><img alt='' src='images/wmz.png'></center></td><td><input type='hidden' class='form-control' id='userIdwmz' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' /><input placeholder='USD' id='valuewmz' class='form-control' type='text'></td><td><center><button type='submit' onclick='deposituwmz();' class='btn btn-info'>Deposit</button></center></td></form></tr>
";
        }
        // line 25
        echo "
";
        // line 26
        if (((isset($context["upaymerz"]) ? $context["upaymerz"] : null) == "1")) {
            // line 27
            echo "<tr><form action='' ><td><center><img alt='' src='images/paymer.png'></center></td><td><input type='hidden' class='form-control' id='userIdpaymer' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' /><input placeholder='USD' id='valuepaymer' class='form-control' type='text'></td><td><center><button type='submit' onclick='depositupaymer();' class='btn btn-primary'>Deposit</button></center></td></form></tr>
";
        }
        // line 29
        echo "
</table></center></div>

";
        // line 32
        if (((isset($context["btcdeposit"]) ? $context["btcdeposit"] : null) == "1")) {
            // line 33
            echo "<center><div class=\"well\"><h2>1 USD = ";
            echo twig_escape_filter($this->env, (isset($context["btcprice"]) ? $context["btcprice"] : null), "html", null, true);
            echo " BTC</h2></div></center>
";
        }
        // line 35
        echo "<hr><center>
";
        // line 36
        if (((isset($context["pmdeposit"]) ? $context["pmdeposit"] : null) == "1")) {
            // line 37
            echo "<span class=\"label label-sm label-success\">*Perfect Money - instant!</span>&nbsp;&nbsp;
";
        }
        // line 39
        echo "<span class=\"label label-sm label-danger\">*Min. deposit = ";
        echo twig_escape_filter($this->env, (isset($context["mindeposit"]) ? $context["mindeposit"] : null), "html", null, true);
        echo "\$</span>
";
        // line 40
        if (((isset($context["btcdeposit"]) ? $context["btcdeposit"] : null) == "1")) {
            // line 41
            echo "&nbsp;&nbsp;<span class=\"label label-sm label-primary\">*Bitcoin - Automatically (~10min)!</span>
";
        }
        // line 43
        echo "</center>
<hr><div class='row'><center><div id='buyresult'></div></center></div>
";
        // line 45
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listOrders"]) ? $context["listOrders"] : null))) > 0)) {
            // line 46
            echo "<div class=\"page-header\"><h1>You Orders<small> btc</small></h1></div></div></div>
<div class=\"row\"><center><div class=\"panel panel-default\" style=\"width:860px\"><div class=\"panel-heading\"></div><table class=\"table table-bordered table-striped\"><tbody><tr>
<th style=\"text-align: center;\">Id</th>
<th style=\"text-align: center;\">Status</th>
<th style=\"text-align: center;\">Date</th>
<th style=\"text-align: center;\">Wallet / System</th>
<th style=\"text-align: center;\">Received BTC</th>
<th style=\"text-align: center;\">Added to Balance</th>
<th style=\"text-align: center;\">Action</th>
</tr>
";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listOrders"]) ? $context["listOrders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
                // line 57
                echo "<tr>
<td style=\"text-align: center;\" class=\"tdCol\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "orderId", array()), "html", null, true);
                echo "</td>
<td style=\"text-align: center;\" class=\"tdCol\">
";
                // line 60
                if ((($this->getAttribute($context["orders"], "approved", array()) == "2") || ($this->getAttribute($context["orders"], "approved", array()) == "1"))) {
                    // line 61
                    echo "<span class=\"label label-success\">Paid</span>
";
                } else {
                    // line 63
                    echo "<span class=\"label label-warning\">Not Paid</span>
";
                }
                // line 65
                echo "</td><td style=\"text-align: center;\" class=\"tdCol\">
";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "sdate", array()), "html", null, true);
                echo "
</td><td style=\"text-align: center;\" class=\"tdCol\">
";
                // line 68
                if (($this->getAttribute($context["orders"], "type", array()) == "BTC SPEED")) {
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "wallet", array()), "html", null, true);
                    echo "
";
                } elseif (($this->getAttribute($context["orders"], "type", array()) == "Unitaco PM")) {
                    // line 71
                    echo "<span class=\"label label-danger\">Perfect Money</span>
";
                } elseif (($this->getAttribute($context["orders"], "type", array()) == "Unitaco WMZ")) {
                    // line 73
                    echo "<span class=\"label label-info\">Webmoney WMZ</span>
";
                } elseif (($this->getAttribute($context["orders"], "type", array()) == "Unitaco PAYMER")) {
                    // line 75
                    echo "<span class=\"label label-default\">Paymer</span>
";
                }
                // line 77
                echo "</td>
<td style=\"text-align: center;\" class=\"tdCol\">
";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "btcvalue", array()), "html", null, true);
                echo "</td>
<td style=\"text-align: center;\" class=\"tdCol\">
";
                // line 81
                if ((($this->getAttribute($context["orders"], "orderTotal", array()) != "0") && ($this->getAttribute($context["orders"], "approved", array()) != "0"))) {
                    // line 82
                    echo "<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "orderTotal", array()), "html", null, true);
                    echo " \$</span>
";
                } else {
                    // line 84
                    echo "-
";
                }
                // line 86
                echo "</td>
<td style=\"text-align: center;\" class=\"tdCol\"><span class=\"label label-default\" onclick=\"showpage('./order_status.php?invoice_id=";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["orders"], "orderId", array()), "html", null, true);
                echo ";');\">Open / Refresh</span></td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "</tbody></table></div>
";
        }
        // line 91
        echo "</center></div>";
    }

    public function getTemplateName()
    {
        return "deposit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 91,  225 => 89,  217 => 87,  214 => 86,  210 => 84,  204 => 82,  202 => 81,  197 => 79,  193 => 77,  189 => 75,  185 => 73,  181 => 71,  176 => 69,  174 => 68,  169 => 66,  166 => 65,  162 => 63,  158 => 61,  156 => 60,  151 => 58,  148 => 57,  144 => 56,  132 => 46,  130 => 45,  126 => 43,  122 => 41,  120 => 40,  115 => 39,  111 => 37,  109 => 36,  106 => 35,  100 => 33,  98 => 32,  93 => 29,  87 => 27,  85 => 26,  82 => 25,  76 => 23,  74 => 22,  71 => 21,  65 => 19,  63 => 18,  60 => 17,  52 => 15,  50 => 14,  47 => 13,  41 => 11,  39 => 10,  36 => 9,  30 => 7,  28 => 6,  19 => 1,);
    }
}
