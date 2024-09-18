
<h5><a onclick="logout()">LogOut</a></h5><br><br>

<h4>Payment Status</h4>


<h6>Amount in USD</h6>
<p>Date of payment</p>

<hr>
<?php
include '00.php';

if(isset($_SESSION['hk_email'])){
$email = $_SESSION['hk_email'];
$table = 'wp_hk_all_payments';

$sql = "SELECT * FROM $table WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
?>

<h4>status: <?php echo $row['status']; ?></h4>


<h6>amount: $<?php echo $row['amount']; ?></h6>
<p><?php echo $row['date']; ?></p>
<hr>
<?php
}

}
?>

<br><h5><a onclick="profile1()">your Dashboard </a></h5><br>
<br><h5><a onclick="profile2()">your Images History</a></h5><br>
<br>