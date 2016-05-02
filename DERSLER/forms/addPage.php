<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="css/add.css">

</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
		   <div class="input-field col s5">
		      <input value="" id="first_name2" type="text" class="validate" name="pageTitle">
		      <label class="active" for="first_name2">Page title</label>
		   </div>
		 </div>	

	            <div class="row">
	               <div class="input-field col s5">
	                  <input value="" id="first_name2" type="text" class="validate" name="pageUrl">
	                 <label class="active" for="first_name2">page url</label>
	    </div>
	  </div>
<div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="pageText"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
 </div>
    
    <!-- Switch -->




    
   

 
 
    <div class="file-field input-field" name="news_thumbImg">
      <div class="btn">
        <span>File</span>
        <input type="file" name="pageImg" >
      </div>
     
    </div>
    <div class="row">
 
      

  </div>
 <input type="submit" name="submit">



</form>   	
  </div>


</body>
<?php
 
include "model.php";
$newDb= new Database('localhost','root','','news');
if(isset($_POST['submit'])){
$pageTitle=$_POST['pageTitle'];
$pageUrl=$_POST['pageUrl'];
$pageText=$_POST['pageText'];
$pageImg=$_FILES['pageImg'];

$pageNews= new News($pageTitle, $pageUrl, $pageImg, $pageText);
$pageNews->insertData($newDb->connection);
}
?> 
 
</html>