<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<form action="check_evde.php" method="POST">


<select name="olkeler">
	<option value="a">Azerbaycan</option>
	<option value="b">Turkiye</option>
	<option value="c">Rusiya</option>
</select>
<input type="submit" value="gonder"></input>



</form>
<?php


    $olkeSeher=[
    'Azerbaycan'=>["Baki","Quba","Saatli","imiili","Tovuz","Seki","Goranboy","World","Agdas"],
    'Turkiye'=>["Samsun","Trabzon","Izmir","Istanbul","Kayseri"],
    'Rusiya'=>["Moskva","Leningrad","Samara","Ekatirinburg"]
    		];



?>

	


</body>
</html>