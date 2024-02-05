<?php
$hostname = "localhost";
$username = "root";
$password = "";

$database = "flash_streaming";
$conn = mysqli_connect($hostname, $username, $password , $database);

if (!$conn){
    echo "connection failed!";
}
?>