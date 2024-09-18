<?php
include '00.php';

$otp1 = mysqli_real_escape_string($conn, $_GET['otp']);
$otp0 = filter_var($otp1, FILTER_SANITIZE_STRING);

$otp = $_SESSION['otp'];
$email = $_SESSION['email'];

if($otp0 == $otp){
?>

<label for='p1'>enter new password</label><br><br>
<input type='text' id='p1'><br><br>

<label for='p2'>confirm new password</label><br><br>
<input type='text' id='p2'><br><br>

<button onclick='enterNewPassword()'>Submit</button><br><br>
<?php
}else{
?>

<h1>wrong OTP entered</h1>
<?php
}
?>
