<?php

/* admin/orders.tpl */
class __TwigTemplate_63cc7fcf050289994185b78caead44f1b97916fa50d68d944fe921ba0057dcb7 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Orders<small> see orders</small></h1></div></div></div>
<center>
<div class=\"btn-group btn-group-justified\">
<a href=\"#\" class=\"btn btn-default\" onclick=\"showpage('order.php?act=lastweek');\">Last 7 Days</a> 
<a href=\"#\" class=\"btn btn-primary\" onclick=\"showpage('order.php?act=lastmonth');\">Last 30 Days</a> 
<a href=\"#\" class=\"btn btn-danger\" onclick=\"showpage('order.php');\">All Orders</a> 
</div></center><p></p>
<center><div class='panel panel-default'><div class='panel-heading'>Orders</div>
";
        // line 9
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listOrder"]) ? $context["listOrder"] : null))) > 0)) {
            // line 10
            echo "<div class='panel-body'><table class='table table-striped table-bordered table-hover table-full-width' id='seller_1'>
<thead><tr><th>Id</th><th>Approved</th><th>Username</th><th>Amount</th><th>Type</th><th>Order Date</th><th>BTC VALUE</th><th>BTC Received</th><th>BTC Confirmations</th><th>TX Hash</th><th width='70px'>Action</th></tr></thead><tbody>
";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listOrder"]) ? $context["listOrder"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 13
                echo "<tr>
<td class='tdCol' >";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >
";
                // line 16
                if (($this->getAttribute($context["order"], "approved", array()) == "1")) {
                    // line 17
                    echo "<span class='label label-success'>Paid</span>
";
                } elseif (($this->getAttribute($context["order"], "approved", array()) == "2")) {
                    // line 19
                    echo "<span class='label label-primary'>Speed Paid</span>
";
                } else {
                    // line 21
                    echo "<span class='label label-danger'>Not Paid</span>
";
                }
                // line 23
                echo "</td>
<td class='tdCol' >";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "username", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderTotal", array()), "html", null, true);
                echo " USD</td>
<td class='tdCol' >";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "type", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "btcvalue", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "btcreceived", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "confirmations", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >
";
                // line 32
                if ((twig_length_filter($this->env, $this->getAttribute($context["order"], "txhash", array())) > 0)) {
                    // line 33
                    echo "<span onclick=\"window.open('https://blockchain.info/ru/tx/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "txhash", array()), "html", null, true);
                    echo "')\" class=\"label label-success\">Open</span>
";
                } else {
                    // line 35
                    echo "<span class=\"label label-danger\">No hash</span>
";
                }
                // line 37
                echo "</td>
<td class='tdCol' ><a href=\"#\" onclick=\"if (confirm('Are you sure?')) {showpage('order.php?act=delete&orderid=";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", array()), "html", null, true);
                echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></a></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 42
            echo "<tr><th colspan='6'><div class='errorMsg'>No order found.</div></th></tr>
";
        }
        // line 44
        echo "</tbody></table></center></div>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
\t\t<script type=\"text/javascript\" src=\"../assets/plugins/select2/select2.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../assets/plugins/DataTables/media/js/jquery.dataTables.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../assets/plugins/DataTables/media/js/DT_bootstrap.js\"></script>
\t\t<script src=\"../assets/js/table-data.js\"></script>
        <script src=\"../assets/plugins/bootstrap-modal/js/bootstrap-modal.js\"></script>
\t\t<script src=\"../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
\t\t<script src=\"../assets/js/ui-modals.js\"></script>
\t\t<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --><script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tTableData.init();
                UIModals.init();
\t\t\t});
\t\t</script>

<p></p><div class=\"well\"><center>
<p><h2>Delete <span class=\"text-danger\">not paid</span> invoices:</h2></p>
<div class=\"btn-group btn-group-justified\">
<a href=\"#\" class=\"btn btn-info\" onclick=\"if (confirm('Are you sure?')) {showpage('order.php?act=delete30');}\">Older than 30 Days</a> 
<a href=\"#\" class=\"btn btn-yellow\" onclick=\"if (confirm('Are you sure?')) {showpage('order.php?act=delete7');}\">Older than 7 Days</a> 
<a href=\"#\" class=\"btn btn-orange\" onclick=\"if (confirm('Are you sure?')) {showpage('order.php?act=delete3');}\">Older than 3 Days</a> 
</div></center></div><p></p>";
    }

    public function getTemplateName()
    {
        return "admin/orders.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  118 => 42,  108 => 38,  105 => 37,  101 => 35,  95 => 33,  93 => 32,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  61 => 23,  57 => 21,  53 => 19,  49 => 17,  47 => 16,  42 => 14,  39 => 13,  35 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
