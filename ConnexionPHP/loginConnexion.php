<?php
$hostname = "localhost";
$username = "root";
$password = "root";

$database = "flash_streaming";
$conn = mysqli_connect($hostname, $username, $password , $database);

if (!$conn){
    echo "connection failed!";
}
?>