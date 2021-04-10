<?php

/* elements/payment/pm.tpl */
class __TwigTemplate_e63ccd510a2b0de7bf7fdd3db4528b690d192e50988fe41eaa4fa4f23ace8bd7 extends Twig_Template
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
        if (((isset($context["minimal"]) ? $context["minimal"] : null) == "0")) {
            // line 2
            echo "
<form action=\"https://perfectmoney.is/api/step1.asp\" method=\"POST\">
<input type=\"hidden\" name=\"PAYEE_ACCOUNT\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["merchant"]) ? $context["merchant"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" name=\"PAYEE_NAME\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["storename"]) ? $context["storename"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" name=\"PAYMENT_ID\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" name=\"PAYMENT_AMOUNT\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
            echo "\"><BR>
<input type=\"hidden\" name=\"PAYMENT_UNITS\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["currency"]) ? $context["currency"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" name=\"STATUS_URL\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["adminEmail"]) ? $context["adminEmail"] : null), "html", null, true);
            echo "\">
<input type=\"hidden\" name=\"PAYMENT_URL\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["homeUrl"]) ? $context["homeUrl"] : null), "html", null, true);
            echo "process.php\">
<input type=\"hidden\" name=\"PAYMENT_URL_METHOD\" value=\"POST\">
<input type=\"hidden\" name=\"NOPAYMENT_URL\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["homeUrl"]) ? $context["homeUrl"] : null), "html", null, true);
            echo "index.php\">
<input type=\"hidden\" name=\"NOPAYMENT_URL_METHOD\" value=\"POST\">
<input type=\"hidden\" name=\"SUGGESTED_MEMO\" value=\"\">
<input type=\"hidden\" name=\"BAGGAGE_FIELDS\" value=\"\">
<input type=\"submit\" name=\"PAYMENT_METHOD\" value=\"Pay Now!\">
</form>
<script>document.forms[0].submit();</script>

";
        } else {
            // line 21
            echo "
Minimal deposit = ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["mindeposit"]) ? $context["mindeposit"] : null), "html", null, true);
            echo "\$

";
        }
    }

    public function getTemplateName()
    {
        return "elements/payment/pm.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  66 => 21,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
