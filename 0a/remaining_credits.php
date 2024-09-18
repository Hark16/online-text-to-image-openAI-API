<?php
include '00.php';
$email = $_SESSION['hk_email'];
$table = 'wp_hk_all_credits';
$total_buy = 0;
$total_spend = 0;

$sql1 = "SELECT * FROM $table WHERE email = '$email'";
$result1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_array($result1)){

$total_buy = $row1['buy'] + $total_buy;
$total_spend = $row1['spend'] + $total_spend;

}

$remaining_credits = $total_buy - $total_spend;

?>