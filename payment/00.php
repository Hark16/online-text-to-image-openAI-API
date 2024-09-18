<?php

$conn = mysqli_connect(root,username,password,dbName);

$table00 = 'wp_hk_admin_apis';
$sql1 = "select * from $table00 WHERE my_key_name = 'stripe p k'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);
$sql2 = "select * from $table00 WHERE my_key_name = 'stripe s k'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

$pk = $row1['my_key'];
$sk = $row2['my_key'];

session_start();
date_default_timezone_set("Asia/Kolkata");
error_reporting(0);

?>