<?php
include '00.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$email1 = mysqli_real_escape_string($conn, $_POST['email']);
$email = filter_var($email1, FILTER_SANITIZE_STRING);
$pass1 = mysqli_real_escape_string($conn, $_POST['password']);
$pass = filter_var($pass1, FILTER_SANITIZE_STRING);

$date = date("d/m/Y h:i:s a");
    $table1 = 'wp_hk_all_users';
    $table2 = 'wp_hk_all_credits';

$sql2 = "select * from $table1 WHERE email = '$email'";
$result2 = mysqli_query($conn, $sql2);
$lines2 = mysqli_num_rows($result2);

if($lines2 == 0){


mysqli_query($conn, "INSERT INTO $table1 (email, password, free_credit, date) VALUES('$email', '$pass', '0', '$date')");
mysqli_query($conn, "INSERT INTO $table2 (email, buy, spend, date) VALUES('$email', '1', '1', '$date')");

$_SESSION['hk_email'] = $email;
$_SESSION['free_credit'] = 0;

echo 1;

}else{
echo 0;

}
}
?>
