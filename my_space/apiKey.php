
<?php
include 'mydb/data.php';
$page_title = 'update api keys';

if(isset($_SESSION['user'])){

?>

<?php
include 'header.php';
?>

<?php
$table = 'wp_hk_admin_apis';

$sql1 = "select * from $table WHERE my_key_name = 'stripe p k'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);

$sql2 = "select * from $table WHERE my_key_name = 'stripe s k'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

$sql3 = "select * from $table WHERE my_key_name = 'open ai'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_array($result3);
?>

<h1>update this details</h1>
<form method="POST">
<label for="stripepk"> enter stripe payment gateway publishable key </label><br>
<input type="text" id="stripepk" name="pk" value="<?php echo$row1['my_key']; ?>" ><br>
<label for="stripesk"> enter stripe payment gateway secret key </label><br>
<input type="text" id="stripesk" name="sk" value="<?php echo$row2['my_key']; ?>" ><br>
<label for="openai"> enter open ai api key </label><br>
<input type="text" id="openai" name="ai" value="<?php echo$row3['my_key']; ?>" ><br>

<input type="submit" value="submit" name="submit" >

</form>

<?php

if(isset($_POST['submit'])){

$pk1 = mysqli_real_escape_string($conn, $_POST['pk']);
$pk = filter_var($pk1, FILTER_SANITIZE_STRING);

$sk1 = mysqli_real_escape_string($conn, $_POST['sk']);
$sk = filter_var($sk1, FILTER_SANITIZE_STRING);

$ai1 = mysqli_real_escape_string($conn, $_POST['ai']);
$ai = filter_var($ai1, FILTER_SANITIZE_STRING);


$sql1 = "UPDATE $table SET my_key = '$pk' WHERE id = 1";
mysqli_query($conn, $sql1);
$sql2 = "UPDATE $table SET my_key = '$sk' WHERE id = 2";
mysqli_query($conn, $sql2);
$sql3 = "UPDATE $table SET my_key = '$ai' WHERE id = 3";
mysqli_query($conn, $sql3);
?>
<script>
window.location.assign('apiKey.php');
</script>
<?php
}

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
