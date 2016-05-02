<?php
include 'db.php';

$cek='SELECT * FROM  registration ';
$birlesdir=mysqli_query($qosulma,$cek);

while ( $row=mysqli_fetch_assoc($birlesdir)) {
	echo $row['user_name'].'<br>';
}

$boss=mysqli_query($qosulma,$insert);
echo $ad."<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="INSERT.php" method="POST" >
	<input type="text" name="ad"></input>
	<input type="submit" value ="gonder"></input>
</form>

</body>
</html>