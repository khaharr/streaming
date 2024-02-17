<?php
$hostname = "database";
$username = "root";
$password = "pass";

$database = "streaming";
$conn = mysqli_connect($hostname, $username, $password , $database);

if (!$conn){
    echo "connection failed!";
}
?>