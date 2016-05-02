<?php

$host='localhost';
$name='root';
$pass='';
$db='form';


$qosulma=mysqli_connect($host,$name,$pass,$db);

if ($qosulma) {
	echo "qosuldu"."<br>";
}else{
	echo "qosulmadi";
}

?>