<?php

include 'db.php';
$conn=new Conn ('localhost','root','','saturdat');

if (isset($_POST['action'])){
	$name=$_POST['Name'];
	$surname=$_POST['Last_name'];
	$Password=$_POST['Pass'];
	$Email=$_POST['Email'];

$query = "INSERT registration(Name,Surname,Email,Password) VALUES($name,$surname,$Email,$Password)";
$insert =mysqli_query($conn,$query);

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</head>
<body>


<div class="row">
    <form class="col s12" action=" " method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="First Name" id="first_name" type="text" class="validate" name="Name">
          
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" placeholder="Last Name" name="Last_name" >
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" placeholder="Password" name="Pass" >
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" placeholder="Email" name="Email" >
        
        </div>
      </div>
       
     <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    
  </button>
        
    </form>
  </div>


</body>
</html>