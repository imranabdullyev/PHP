<?php
if (isset($_POST['submit'])) {


	$myPath="uplad/"
	$myfile=$_FILES['file'];
	$filename=$myfile['name'];
	$filesize=$myfile['size'];
	$filetype=$myfile['type'];
	$filetmp=$myfile['tmp_name'];
	$ext

	move_uploaded_file($filetmp, $myPath.$new_name);
}




?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="fille" name="file"></input>
	<input type="submit" name="submit" value="Gonderginren"></input>
</form>



</body>
</html>