<?php

include 'mydb/data.php';

$email1 = mysqli_real_escape_string($conn, $_GET['email']);
$email = filter_var($email1, FILTER_SANITIZE_STRING);

$date = date("d/m/Y h:i:s a");
$table1 = 'wp_hk_all_credits';
    $table2 = 'wp_hk_all_users';

mysqli_query($conn, "INSERT INTO $table1 (email, buy, spend, date) VALUES('$email', '1', '0', '$date')");
mysqli_query($conn, "UPDATE $table2 SET free_credit = '1' WHERE email = '$email'");

header("Location: free_credit_front.php");
?>