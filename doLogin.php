<?php 

include('dbConnect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "CALL select_user('".$username."')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_assoc($result);
$rowUsername = $row["username"];
$rowPassword = $row["password"];

if ($password === $rowPassword){
    session_start();
    $_SESSION['username'] = $rowUsername;
    header('Location: home.php'); 
} else {
    echo 'Credentials are not correct';
}

?>