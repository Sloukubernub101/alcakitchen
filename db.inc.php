<?php 

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "alcaKitchen";


// Create connection
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);


// Check connection
if (!$conn) {
    die("Connection failed: " . $mysqli_connect_error());
}

?> 


