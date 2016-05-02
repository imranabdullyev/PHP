
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<?php 



// $server = ;
// $db_username=;
// $db_password="";
// $schema="codeacademy";



$db= mysql_connect("localhost", "root", "codeacademy");



if($db->connect_error){
	die("PROBLEMOS");
}

// var_dump($db);


$dude= "INSERT INTO company (CompanyName, CompanyEmail, CompanyAdrees,CompanyStartDate)
  VALUES('Atatech', 'Ata@edu.az', 'Nizami 11', '2014-05-08' )";

if($db->query($dude) === TRUE){
	echo "Data elave olundu";
}else{
	echo "Error:<b>".$db->error."<b/>";
}





$elovset=$db->query("SELECT * FROM company");
while ($elovsetler=$elovset->fetch_object()){
	echo $elovsetler->CompanyName."<br>";
}


















// class Cars{
// 	public $name;
// 	public $speed;
// 	public $year;
// 	public $price;

// 	function getExpensiveCar(){

// 		if($this->price<20000){
// 			return  $this->price."   ". ": munasib qiymet";
// 		}
// 		else{
// 			return $this->price." ".": Baxadur";
// 		}
// }

// function __construct($ad,$suret,$il,$qiymet){
// 	$this->name=$ad;
// 	$this->speed=$suret;
// 	$this->year=$il;
//  	$this->price=$qiymet;

// }
// }






// $mers= new Cars("Mrecedes","260 km/h","2015",35000);
// $toyota= new Cars("Toyota","240 km/h","2012",25000);
// $lambo= new Cars("lLambo","360 km/h","2014",350000);
// $fiat= new Cars("Fiat","220 km/h","2010",15000);

// $Tetra= array($mers, $toyota, $lambo, $fiat);





// foreach($Tetra as $masinlar){
// 	echo $masinlar->name."<br>";
// 	echo $masinlar->speed."<br>";
// 	echo $masinlar->year."<br>";
// 	echo $masinlar->price."<br>";
// 	echo  $masinlar->getExpensiveCar()."<br>"."<br>";
// }


?>



<?php








?>
</body>
</html>