
<?php

include '00.php';

if(isset($_GET['amt']) && isset($_GET['email'])){
$amt1 = mysqli_real_escape_string($conn, $_GET['amt']);
$amt= filter_var($amt1, FILTER_SANITIZE_STRING);
$amt2 = $amt/100;

$email1 = mysqli_real_escape_string($conn, $_GET['email']);
$email = filter_var($email1, FILTER_SANITIZE_STRING);
$table = 'wp_hk_all_payments';

    $payment_status="you did not add balance";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into $table (email, amount, status, date) values('$email', '$amt2', '$payment_status', '$added_on')");
$oid = mysqli_insert_id($conn);
    $_SESSION['OID'] = $oid;


}


if(isset($_GET['payment_id']) && isset($_SESSION['OID'])){

$payment_id1 = mysqli_real_escape_string($conn, $_GET['payment_id']);
$payment_id= filter_var($payment_id1, FILTER_SANITIZE_STRING);
$oid = $_SESSION['OID'];
$email = $_SESSION['hk_email'];
$credits = $_SESSION['credits'];
$date = date("d/m/Y h:i:s a");

$table1 = 'wp_hk_all_credits';
$table2 = 'wp_hk_all_payments';

    mysqli_query($conn, "update $table2 set status='your payment is done',payment_id='$payment_id' where id='$oid'");
mysqli_query($conn, "INSERT INTO $table1 (email, buy, spend, date) VALUES('$email', '$credits', '0', '$date')");

}
?>
