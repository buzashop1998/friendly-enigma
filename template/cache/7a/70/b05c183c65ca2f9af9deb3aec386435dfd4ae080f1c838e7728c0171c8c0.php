<?php

/* elements/btcspeed_status.tpl */
class __TwigTemplate_7a70b05c183c65ca2f9af9deb3aec386435dfd4ae080f1c838e7728c0171c8c0 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>BTC SPEED<small> paid</small></h1></div></div></div>
<div class=\"col-md-4\"></div><div class=\"col-md-4\">
<center><h2>Invoice ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["invoice"]) ? $context["invoice"] : null), "html", null, true);
        echo " </h2></center>
<div class=\"well\">
<p><center>Wallet : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["wallet"]) ? $context["wallet"] : null), "html", null, true);
        echo " </center></p>
";
        // line 6
        if (((isset($context["approved"]) ? $context["approved"] : null) == "0")) {
            // line 7
            echo "<center><span class=\"label label-sm label-warning\">Payment not approved.</span></center>
<p><center><span class=\"label label-sm label-danger\">Waiting for Payment Confirmation:</span> </center></p>
<p><center><div id=\"countdown-1\"></div></center>
<script src=\"js/jquery.timeTo.min.js\"></script>
\t<script>
\t\$('#countdown-1').timeTo(180,
\tfunction(){
\t\tshowpage('order_status.php?invoice_id=";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["invoice"]) ? $context["invoice"] : null), "html", null, true);
            echo "');
        });
\t</script></p><p><center>Please do not close this page until your payment is credited.
\tIf the page for some reason closed, click it again and wait for confirmation.
\tApproximate time of confirmation of 5-20 minutes. <br>Please be patient!</center></p>
";
        } else {
            // line 20
            echo "<p><center><span class=\"label label-sm label-green\">Update credit successful.</span></center></p>
";
        }
        // line 22
        if (((isset($context["smalldep"]) ? $context["smalldep"] : null) == "1")) {
            // line 23
            echo "<div class=\"alert alert-danger\">
<button data-dismiss=\"alert\" class=\"close\">
&times;
</button>
<i class=\"fa fa-times-circle\"></i>
<strong>You send \$ ";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["addusd"]) ? $context["addusd"] : null), "html", null, true);
            echo "</strong> Your deposit is less than the minimum. (\$ ";
            echo twig_escape_filter($this->env, (isset($context["mindeposit"]) ? $context["mindeposit"] : null), "html", null, true);
            echo ") Send missing this same wallet and click \"Refresh\"</div>
";
        }
        // line 30
        echo "</div></div>";
    }

    public function getTemplateName()
    {
        return "elements/btcspeed_status.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  65 => 28,  58 => 23,  56 => 22,  52 => 20,  43 => 14,  34 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
