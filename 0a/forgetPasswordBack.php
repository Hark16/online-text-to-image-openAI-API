<?php
include '00.php';
include('smtp/PHPMailerAutoload.php');

$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;
$hk_html = "

<h1>password change request </h1>
<p> someone are trying to change password on website www.texttoimagepro.com<br>
if it was you then please enter below OTP on the dashboard or ignore this mail.</p>
<br>
<h3>".$otp."</h3>

<br><br>
<p>thank-you</p>
";

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "texttoimagepro@gmail.com";
	$mail->Password = "tgxuysmcwphvkrmv";
	$mail->SetFrom("texttoimagepro@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{

?>
<label for='otp'>enter OTP sent to your email</label><br>
<input type='number' id='otp'><br>

<button onclick='forgetPasswordOTP()'> verify </button>
<?php
	}
}

$email1 = mysqli_real_escape_string($conn, $_GET['email']);
$email = filter_var($email1, FILTER_SANITIZE_STRING);
$_SESSION['email'] = $email;

$table = 'wp_hk_all_users';
$sql = "SELECT * FROM $table WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$lines = mysqli_num_rows($result);

if($lines == 1){

smtp_mailer($email, 'Forget Password OTP', $hk_html);

}else{

?>

<h1>no email found</h1>
<?php } ?>
