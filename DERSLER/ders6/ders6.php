<?php



class Car {
	public $name;
	public $color;
	public $prise;
	public $year;
	public $power;
}

 $naz=new Car();
   $naz ->name="Lifan";
   $naz ->color="white";
   $naz ->prise= 1200;
   $naz ->year= 2015;
   $naz ->power= 60;


 $toyota=new Car();
   $toyota ->name="toyota";
   $toyota ->color="black";
   $toyota ->prise= 2200;
   $toyota ->year= 2015;
   $toyota ->power= 120;

 $mazda=new Car();
   $mazda ->name="mazda";
   $mazda ->color="golden";
   $mazda ->prise= 3200;
   $mazda ->year= 2015;
   $mazda ->power= 160;


$ford=new Car();
   $ford ->name="Lifan";
   $ford ->color="white";
   $ford ->prise= 1200;
   $ford ->year= 2015;
   $ford ->power= 60;


$myarray=[$naz,$toyota, $mazda,$ford];
$myproperty=["name","color","price","year","power"];

// echo "<table>";

// foreach ($myarray as $value) {
// 	echo "<tr>";
// 		echo "<td>" $value->name'</td>';
// 		echo "<td>"$value->color'</td>';
// 		echo "<td>"$value->prise'</td>';
// 		echo "<td>"$value->year'</td>';
// 		echo "<td>"$value->power'</td>';
// 	echo "</tr>";
// }
// echo "</table>";
include='check6.php';
?>	


<style>

	input{
		display:block;
		margin:10px;

	}
</style>

<form action="check6.php" method="post">
	<input type="text" name="name"></input>
	<input type="text" name="color"></input>
	<input type="text" name="prise"></input>
	<input type="text" name="year"></input>
	<input type="text" name="power"></input>
	<input type="submit" name="gonder"></input>
</form>

