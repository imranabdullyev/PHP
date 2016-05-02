<?php


$servername = "localhost";
$username = "root";
$password = "";
$schema="ders8";

// Create connection
$conn = new mysqli($servername, $username, $password,$schema);

// Check connection
if ($conn->connect_error) {

	echo "string";
    die("Connection failed: " . $conn->connect_error);



} 

?>




