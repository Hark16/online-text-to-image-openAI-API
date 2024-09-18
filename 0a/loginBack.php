<?php
include '00.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email1 = mysqli_real_escape_string($conn, $_POST['email']);
$email = filter_var($email1, FILTER_SANITIZE_STRING);
$pass1 = mysqli_real_escape_string($conn, $_POST['password']);
$pass = filter_var($pass1, FILTER_SANITIZE_STRING);

    $table =  'wp_hk_all_users';

$sql= "SELECT * FROM $table WHERE email = '$email' and password = '$pass' ";
$result = mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
 if ($total===1){
if($pass === $row['password'] ){

        // Login successful
$_SESSION['hk_email'] = $email;
echo 1;
        exit;
    }}

        // Login failed
echo 0;
        exit;

}

?>