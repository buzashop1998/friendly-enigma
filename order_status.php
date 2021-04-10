<?php

set_time_limit(0);
session_start();
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader, array('cache' => 'template/cache', 'auto_reload' => true));
include_once ("includes/global.php");
db_connection();
if (!is_login())
{
    header("location: login.php");
} else
{
    if ($config['btcdeposit'] == '1' && $config['btcspeed'] != '1')
    {
        $invoice_id = intval($_GET['invoice_id']);
        $paymentid = clean($invoice_id);
        $sql = "SELECT * FROM " . $config['table_orders'] . " WHERE orderId = '" . $paymentid . "'";
        $result = mysql_query($sql, $data_sql);
        if ($result)
        {
            $payment = mysql_fetch_assoc($result);
        } else
        {
            echo sql_error();
        }
        echo $twig->render('elements/btc_status.tpl', array(
            'invoice' => $invoice_id,
            'priceusd' => $payment['orderTotal'],
            'pricebtc' => $payment['btcvalue'],
            'approved' => $payment['approved']));

    } else
        if ($config['btcspeed'] == '1')
        {
            $invoice_id = intval($_GET['invoice_id']);
            $paymentid = clean($invoice_id);
            $sql = "SELECT * FROM " . $config['table_orders'] . " WHERE orderId = '" . $paymentid . "'";
            $result = mysql_query($sql, $data_sql);
            if ($result)
            {
                $payment = mysql_fetch_assoc($result);
            } else
            {
                echo sql_error();
            }
            if ($payment['userId'] == $_SESSION["userId"])
            {
                if ($payment['type'] == 'BTC SPEED')
                {
                    $wallet = $payment['wallet'];
                    $walletbalance = $payment['walletbalance'];
                    $userid = $payment['userId'];
                    $response = json_decode(file_get_contents($config['blockchain_root'] . "ru/merchant/" . urlencode($config['bcguid']) . "/address_balance?password=" . urlencode($config['bcmainpass']) . "&address=" . urlencode($wallet) . "&confirmations=" . urlencode($config['btconfirm'])));
                    $received = $response->total_received;
                    if ($received != $walletbalance)
                    {
                        if ($received > $walletbalance)
                        {
                            $addbal = $received - $walletbalance;
                            $price_usd = file_get_contents($config['blockchain_root'] . "tobtc?currency=USD&value=1");
                            $value_btc = $addbal / 100000000;
                            $addusd = $value_btc / $price_usd;
                            $addusd = round($addusd, 2);
                            if ($addusd < $config['mindeposit'])
                            {
                                $smalldep = '1';
                            } else
                            {
                                //Add balance database
                                $sql = "SELECT * FROM " . $config['table_users'] . " WHERE userid = '$userid'";
                                $result = mysql_query($sql, $data_sql);
                                if ($result)
                                {
                                    $user = mysql_fetch_assoc($result);
                                } else
                                {
                                    echo sql_error();
                                }
                                $sql = "UPDATE " . $config['table_users'] . " SET credit = '" . ($user["credit"] + $addusd) . "' WHERE userid = '$userid'";
                                $result = mysql_query($sql, $data_sql);
                                if ($result)
                                {
                                    //add balance
                                    $addusd = $payment['orderTotal'] + $addusd;
                                    $value_btc = $payment['btcvalue'] + $value_btc;
                                    $sql = "UPDATE " . $config['table_orders'] . " SET confirmations = '" . $config['btconfirm'] . "', walletbalance = '" . $received . "', approved = '2', orderTotal = '" . $addusd . "', btcvalue = '" . $value_btc . "' WHERE orderId = '$paymentid'";
                                    $result = mysql_query($sql, $data_sql);
                                    if (!$result)
                                    {
                                        echo sql_error();
                                    } else
                                    {
                                        $sql = "SELECT * FROM " . $config['table_orders'] . " WHERE orderId = '" . $paymentid . "'";
                                        $result = mysql_query($sql, $data_sql);
                                        if ($result)
                                        {
                                            $payment = mysql_fetch_assoc($result);
                                        } else
                                        {
                                            echo sql_error();
                                        }
                                    }
                                } else
                                {
                                    echo sql_error();
                                }
                            }
                        }
                    }
                    echo $twig->render('elements/btcspeed_status.tpl', array(
                        'invoice' => $invoice_id,
                        'wallet' => $wallet,
                        'smalldep' => $smalldep,
                        'addusd' => $addusd,
                        'mindeposit' => $config['mindeposit'],
                        'approved' => $payment['approved']));
                }
                //other//
                else
                    if ($payment['type'] == 'Unitaco PM' or $payment['type'] == 'Unitaco WMZ' or $payment['type'] == 'Unitaco PAYMER')
                    {
                        if ($payment['approved'] == '0')
                        {
                            $paramsArray = array('data' => '<request>
	<user>
	<login>' . $config['UMERCH'] . '</login>
	<pass>' . $config['UPASS'] . '</pass>
	</user>
	<order>' . $payment['uorderid'] . '</order>
	</request>');
                            $vars = http_build_query($paramsArray);
                            $options = array('http' => array(
                                    'method' => 'POST',
                                    'header' => 'Content-type: application/x-www-form-urlencoded',
                                    'content' => $vars,
                                    ));
                            $context = stream_context_create($options);
                            $result = file_get_contents('https://unitaco.com/api/history', false, $context);
                            $xml = simplexml_load_string($result);
                            if ($xml->records_count == '1' && $xml->result->message == 'success')
                            {
                                if ($xml->records->record->status == 'success' && $xml->records->record->type == 'pay' && $xml->records->record->currency == 'USD' && $xml->records->record->result == 'success' && $xml->records->record->info->sum == $payment['orderTotal'] && $xml->records->record->info->order == $payment['uorderid'])
                                {

                                    //Add balance database
                                    $userid = $payment['userId'];
                                    $sql = "SELECT * FROM " . $config['table_users'] . " WHERE userid = '$userid'";
                                    $result = mysql_query($sql, $data_sql);
                                    if ($result)
                                    {
                                        $user = mysql_fetch_assoc($result);
                                    } else
                                    {
                                        echo sql_error();
                                    }
                                    $sql = "UPDATE " . $config['table_users'] . " SET credit = '" . ($user["credit"] + $payment['orderTotal']) . "' WHERE userid = '$userid'";
                                    $result = mysql_query($sql, $data_sql);
                                    if ($result)
                                    {
                                        //add balance
                                        $sql = "UPDATE " . $config['table_orders'] . " SET approved = '1' WHERE orderId = '$paymentid'";
                                        $result = mysql_query($sql, $data_sql);
                                        if (!$result)
                                        {
                                            echo sql_error();
                                        } else
                                        {
                                            $sql = "SELECT * FROM " . $config['table_orders'] . " WHERE orderId = '" . $paymentid . "'";
                                            $result = mysql_query($sql, $data_sql);
                                            if ($result)
                                            {
                                                $payment = mysql_fetch_assoc($result);
                                            } else
                                            {
                                                echo sql_error();
                                            }
                                        }
                                    } else
                                    {
                                        echo sql_error();
                                    }
                                }
                            }
                        }
                        echo $twig->render('elements/unitaco_status.tpl', array('invoice' => $invoice_id, 'approved' => $payment['approved']));
                    }
            }
        } else
        {
            echo 'Deposit method is OFF';
        }
}
db_close();

?>