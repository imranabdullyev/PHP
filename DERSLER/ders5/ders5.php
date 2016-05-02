<?php



$server = "localhost";
$db_username="root";
$db_password="";
$schema="codeacademy"



$db = new mysqli ($server, $db_username, $db_password, $schema);

if($db ->connect_error){
	die("PROBLEMOS");
}


?>