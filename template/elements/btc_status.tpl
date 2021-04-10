<div class="page-header"><h1>BTC<small> paid</small></h1></div></div></div>
<div class="col-md-4"></div><div class="col-md-4">
<center><h2>Invoice {{invoice}} </h2></center>
<div class="well">
<p><center>Amount Due : {{priceusd}} USD ({{pricebtc}} BTC) </center></p>
{% if approved == '0' %}
<center>Payment not approved.</center>
<p><center>Waiting for Payment Confirmation: </center></p><p><a href="#" class="btn btn-green btn-lg btn-block" onclick="showpage('order_status.php?invoice_id={{invoice}}');">Refresh</a></p>
{% else %}
<p><center>Update credit successful.</center></p>
{% endif %}
</div></div>