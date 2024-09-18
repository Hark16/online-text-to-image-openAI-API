<?php
include '00.php';

$table2 = 'wp_hk_all_users';

$sql2 = "select * from $table2";
$result2 = mysqli_query($conn, $sql2);
$lines2 = mysqli_num_rows($result2);

$table = 'wp_hk_admin_credits';

$sql = "select * from $table";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$total_credits = $row['total_credits'] + $lines2;

$table1 = 'wp_hk_all_credits';
$total_buy = 0;


$sql1 = "SELECT * FROM $table1 ";
$result1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_array($result1)){

$total_buy = $row1['buy'] + $total_buy;

$total_buy1 = $total_buy ;
}

?>