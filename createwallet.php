<?php
set_time_limit(0);
session_start();
include_once("includes/global.php");
db_connection();
if ($config['btcspeed'] == '1'){
$invoice_id = $_GET['invoice_id'];
$callback_url = $config['homeUrl'] . "callback.php?invoice_id=" . $invoice_id . "&secret=" . $config['blockchain_secret'];
$response = json_decode(file_get_contents($config['blockchain_root'] . "api/receive?method=create&callback=" . urlencode($callback_url) . "&address=" . $config['my_bitcoin_address']));
print $response->input_address;
}
else
{
echo 'Deposit method is OFF';
}
?>