<?php
include '00.php';

$p1 = mysqli_real_escape_string($conn, $_POST['p1']);
$p = filter_var($p1, FILTER_SANITIZE_STRING);
$email = $_SESSION['email'];

$table = 'wp_hk_all_users';

$update = "UPDATE $table SET password='$p' WHERE email='$email'";
mysqli_query($conn, $update);

echo 1;

?>
