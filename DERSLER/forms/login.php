<?php
include "connection.php";		

 $conn= new Connection("localhost","root","","news");


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="UTF-8"/>
	<meta charset="utf-8i">	
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap.css">
 

	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

      
            <form class="col s 6">
	      <div class="row">
		<div class="input-field col s6">
		      <input placeholder="User Name" id="first_name" type="text" class="validate">
		      
		</div>
	      </div>

	      <div class="row">
		<div class="input-field col s6">
	                 <input id="password" placeholder="Password" type="password" class="validate">
	                 
	           </div>
	      </div>

	</form>
 

</body>
</html>