
<?php
include 'mydb/data.php';
$page_title = 'update credits';

if(isset($_SESSION['user'])){

?>

<?php
include 'header.php';
?>

<?php
$table = 'wp_hk_admin_credits';

$sql = "select * from $table";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<h1>total current credits are <?php echo $row['total_credits']; ?></h1>

<form method="POST">
<label for="credits"> enter credits to add </label><br>
<input type="number" id="credits" name="credits" placeholder="e.g. 100"><br>

<input type="submit" value="submit" name="submit" >

</form>

<?php

if(isset($_POST['submit'])){
$credits1 = mysqli_real_escape_string($conn, $_POST['credits']);
$credits = filter_var($credits1, FILTER_SANITIZE_STRING);

$newCredits = $row['total_credits'] + $credits ;

$sql1 = "UPDATE $table SET total_credits = '$newCredits' WHERE id = 1";
mysqli_query($conn, $sql1);

header("Location: credits.php");
}

?>
<h1> total sold credits are </h1>


<?php

$table1 = 'wp_hk_all_credits';
$total_buy = 0;

$table2 = 'wp_hk_all_users';

$sql2 = "select * from $table2";
$result2 = mysqli_query($conn, $sql2);
$lines2 = mysqli_num_rows($result2);


$sql1 = "SELECT * FROM $table1 ";
$result1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_array($result1)){

$total_buy = $row1['buy'] + $total_buy;

}
$total_buy1 = $total_buy  - $lines2;

echo "$total_buy1";
?>

<?php include 'footer.php'; ?>

<?php
}

else{
?>
<script>
window.location.assign('logout.php');

</script>
<?php
}
?>
