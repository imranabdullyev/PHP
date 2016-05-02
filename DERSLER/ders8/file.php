<?php


	// $path= "files/codeacademy.txt";
	// $file_connect=fopen($path, w);
	// fwrite($file_connect, "salamdunya");

include "model.php";
//$newDb= new Database("localhost","root","","ders8");

if(isset($_POST['submit'])){
	$fileName=$_POST['fileName'];
	$fileEx=$_POST['fileEx'];


	$newFile= new File($fileName,$fileEx);
}

?>