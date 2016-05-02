<?php
include 'db.php';

$ad=$_POST['ad'];

	
$insert="INSERT INTO registration (user_surname) VALUES ('$ad')";



if (mysqli_query($qosulma,$insert)) {
    echo "New record created successfully"."<br>";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($qosulma);
}


header("Location: index.php");
	
?>