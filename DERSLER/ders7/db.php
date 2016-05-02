<?php
$server = "localhost";
$username = "root";
$password = "";
$db="masinlar";

// Create connection
$connection =  mysqli_connect($server, $username, $password,$db);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);

} 




?>