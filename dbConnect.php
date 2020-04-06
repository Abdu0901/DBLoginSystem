<?php 

$hostname = 'localhost:8889';
$username = 'root';
$password = 'root';
$database = 'db_loginsystem';

$mysqli = mysqli_connect($hostname, $username, $password, $database);

if ($mysqli === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
}

?>