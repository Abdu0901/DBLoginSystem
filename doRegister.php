<?php 

include('dbConnect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "CALL create_user('".$username."', '".$password."')";

$result = mysqli_query($mysqli, $query);

if ($result === TRUE){
    echo 'User created.';
} else {
    echo 'Error in creating user.';
}

?>