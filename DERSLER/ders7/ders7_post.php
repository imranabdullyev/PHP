<?php
include='db.php'

if (isset($_POST['submit'])){
	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$email=$_POST['email'];
	$yas=$_POST['yas'];


$sql="INSET INTO qeydiyyat (ad,soyad,email,yas) VALUES ('$ad','$soyad','$email','$yas');";



if($connection->query($insert_query))
	{echo "Tebrikler siz registrasiyadan ugurla kecdiniz!<br>";
		
}
else 
	echo "Xeta bash verdi<br>";
	
	



}







	



?>