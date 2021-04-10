<?php

/* elements/payment/btcspeed.tpl */
class __TwigTemplate_19fe538fc46479e73f7f29e868242c7269a4dd55782c3ea1383b153f4744fd1c extends Twig_Template
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
        echo "<div id=\"row\" class=\"invoice\"><div class=\"col-sm-3\"></div><div class=\"col-sm-6\">
<center><h4>Please send BTC to:</h4></center>
<div class=\"well\">
\t<center><h5 class=\"text-primary\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["wallet"]) ? $context["wallet"] : null), "html", null, true);
        echo "</h5></center>
\t\t\t\t\t\t\t\t</div>
                                <center><h4>and press:</h4></center>
                                <center><button class=\"btn btn-success btn-lg\" onclick=\"showpage('./order_status.php?invoice_id=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo ";');\" type=\"button\">I paid</button></center>
\t\t\t\t\t\t\t</div><div class=\"col-sm-3\"></div></div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "elements/payment/btcspeed.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }
}
