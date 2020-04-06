<?php 

include('dbConnect.php');

$username = $_POST['username'];


$query = "CALL select_user('".$username."')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_assoc($result);

echo $row["password"];

?>