
<?php

include '00.php';

include 'razorpay-php/Razorpay.php'; //include library
$transaction_id = rand(1, 999999);

$amt = 0.17;
$qty = $_GET['selectedValue'];
$cur = 'USD';

$amount = $qty * $amt * 100;

use Razorpay\Api\Api;

$api= new Api($pk, $sk);

$order  = $api->order->create([
    'receipt'         => $transaction_id, // generate your own transaction id
    'amount'          => $amount, // amount in the smallest currency unit
    'currency'        => $cur,
    'payment_capture' =>  '1' 
  ]);


$_SESSION['order_id'] = $order->id;
$_SESSION['api_key'] = $pk;
$_SESSION['amount'] = $amount;
$_SESSION['cur'] = $cur;
$_SESSION['credits'] = $_GET['selectedValue'];



header("Location: payNow.php");
?>
