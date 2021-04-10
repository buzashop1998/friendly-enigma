<?php

set_time_limit(0);
session_start();
include_once ("includes/global.php");
db_connection();
if ($config['btcdeposit'] == '1')
{
    $invoice_id = $_GET['invoice_id'];
    $transaction_hash = $_GET['transaction_hash'];
    $value_in_btc = $_GET['value'] / 100000000;
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
    $userid = $payment['userId'];
    $btcvalue = $payment['btcvalue'];

    if ($value_in_btc > '0')
    {
        $addvalue = clean($value_in_btc);
        $confirm = clean($_GET['confirmations']);
        $sql = "UPDATE " . $config['table_orders'] . " SET btcreceived = '$addvalue', confirmations = '$confirm', txhash = '" . clean($transaction_hash) . "' WHERE orderId = '$paymentid'";
        $result = mysql_query($sql, $data_sql);
    }
    if ($_GET['test'] == true)
    {
        echo 'Ignoring Test Callback';
        return;
    }
    if ($value_in_btc != $btcvalue)
    {
        echo 'Incorrect value BTC';
        return;
    }
    if ($_GET['address'] != $config['my_bitcoin_address'])
    {
        echo 'Incorrect Receiving Address';
        return;
    }
    if ($_GET['secret'] != $config['blockchain_secret'])
    {
        echo 'Invalid Secret';
        return;
    }

    if ($_GET['confirmations'] >= $config['btconfirm'])
    {
        if ($payment['approved'] != '0')
        {
            echo "Update credit successful.";
        } else
        {
            //Add balance to the database
            $sql = "SELECT * FROM " . $config['table_users'] . " WHERE userid = '$userid'";
            $result = mysql_query($sql, $data_sql);
            if ($result)
            {
                $user = mysql_fetch_assoc($result);
            } else
            {
                echo sql_error();
            }
            if ($payment['type'] != 'BTC SPEED')
            {
                //add balance
                $sql = "UPDATE " . $config['table_users'] . " SET credit = '" . ($user["credit"] + $payment['orderTotal']) . "' WHERE userid = '$userid'";
                $result = mysql_query($sql, $data_sql);
                if ($result)
                {
                    //status order//
                    $sql = "UPDATE " . $config['table_orders'] . " SET approved = '1' WHERE orderId = '$paymentid'";
                    $result = mysql_query($sql, $data_sql);
                    if ($result)
                    {
                        $msgBody = "Update credit successful.";
                    } else
                    {
                        echo sql_error();
                    }
                }
                //status order//
                echo "*ok*";
            } else
            {
                echo sql_error();
            }
        }
    } else
    {
        echo "Waiting for confirmations";
    }
} else
{
    echo 'Deposit method is OFF';
}

?>