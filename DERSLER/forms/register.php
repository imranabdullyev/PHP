<?php
include "connection.php";		

 $conn= new Connection("localhost","root","","news");


?>




<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap.css">
 

	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div class="row">
	      <form class="col s12">
	           <div class="row">
	                 <div class="input-field col s6">
	                       <input placeholder="First Name" id="first_name" type="text" class="validate">
	                 </div>
	                 <div class="input-field col s6">
	                       <input id="last_name" placeholder="Last Name" type="text" class="validate">
	                 </div>
	           </div>
	           <div class="row">
		      <div class="input-field col s12">
		           <input id="password" placeholder="Password" type="password" class="validate">
		      </div>
		</div>
		<div class="row">
		      <div class="input-field col s12">
		           <input id="email" placeholder="Email" type="email" class="validate">
		     </div>
		</div>
	      </form>
	</div>

</body>
</html>