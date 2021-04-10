{% if minimal == '0' %}
<script type="text/javascript" src="{{blockchain_root}}Resources/wallet/pay-now-button-v2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.stage-paid').on('show', function() {
			showpage('./order_status.php?invoice_id={{id}};');
		});
	});
	</script>
        <div class="blockchain-btn" style="width:auto" data-create-url="create.php?invoice_id={{id}}"> 
            <div class="blockchain stage-begin pulse">
                <img src="images/bitcoin_pay_now_64.png">
            </div>
            <div class="blockchain stage-loading" style="text-align:center">
                <img src="{{blockchain_root}}Resources/loading-large.gif">
            </div>
            <div class="blockchain stage-ready" style="text-align:center">
            <div id="row" class="invoice"><div class="col-sm-3"></div><div class="col-sm-6">
								<center><h4>Please send:</h4></center>
								<div class="well">
	<center><h1 class="text-success">{{price_in_btc}} BTC</h1></center>
								</div>
<center><h4>To:</h4></center>
<div class="well">
	<center><h5 class="text-primary">[[address]]</h5></center>
								</div>
							</div><div class="col-sm-3"><div class="qr-code" style="margin-top:85px"><img style="margin: 5px" id="qrsend" src="{{blockchain_root}}qr?data=bitcoin:{{bitcoin_address}}%3Famount={{price_in_btc}}%26label=Bitcoin&size=125" alt=""/></div></div></div>
            </div>
            <div class="blockchain stage-paid">
                Payment Received <b>[[value]] BTC</b>. Thank You.
            </div>
            <div class="blockchain stage-error">
                <font color="red">[[error]]</font>
            </div>
        </div>
{% else %}
Minimal deposit = {{mindeposit}}$
{% endif %}