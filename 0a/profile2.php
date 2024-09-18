
<h5><a onclick="logout()">LogOut</a></h5><br><br>

<h2>Your Prompt</h2>
<p>Date of generate</p>
<hr>
<?php
include '00.php';

if(isset($_SESSION['hk_email'])){
$email = $_SESSION['hk_email'];
$table = 'wp_hk_all_images';

$sql = "SELECT * FROM $table WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
?>

<h2><?php echo $row['prompt']; ?></h2>
<p><?php echo $row['date']; ?></p>
<hr>
<?php
}

}
?>

<br><h5><a onclick="profile1()">your Dashboard </a></h5><br>
<br><h5><a onclick="profile3()">your Payments History</a></h5><br>
<br>