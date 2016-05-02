 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">







  <div class="row">
    <div class="input-field col s5">
      <input value="Xeberin bashliqi" id="first_name2" type="text" class="validate" name="news_title">
      <label class="active" for="first_name2">Xeberin bashliqi</label>
    </div>
  </div>	
  <div class="row">
    <div class="input-field col s5	">
      <input value="Alvin" id="first_name2" type="text" class="validate" name="desk">
      <label class="active" for="first_name2">Xeberin izahi</label>
    </div>
  </div>

    <div class="row">

<!--       <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="text">Xeberin metni</textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div> -->

  </div>
    <!-- Switch -->

<p>
      <input name="status" type="radio" id="test1" value="0" />
      <label for="test1">Hide</label>
    </p>
    <p>
      <input name="status" type="radio" id="test2" value="1" />
      <label for="test2">Show</label>
    </p>


    
   

 <input type="date" class="datepicker" name="date">
  <!-- Disabled Switch -->
 
 
    <div class="file-field input-field" name="news_thumbImg">
      <div class="btn">
        <span>File</span>
        <input type="file" name="file" >
      </div>
     
    </div>
    <div class="row">
 
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="newsText"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>

  </div>
 <input type="submit" name="submit">



</form>   	

</body>
</html>


<?php 
include '../app/model.php';
$conn = new Connect("localhost","root","","oxu.az");

if (isset($_POST['submit'])) {
	echo "string";
	$title=$_POST['news_title'];
	$desc=$_POST['desk'];
	$status=$_POST['status'];
	$date=$_POST['date'];
	$text=$_POST['newsText'];
	$img=$_FILES['file']['name'];
	$addnews= new News($conn->connect,$title,$img,$img,$desc,$text,$status,$date);
}
// 
// step 1 = img upload 
// step 2 = balaca img olmalidi yaninda title description olmalidi sonra read more basilanda hemin xeberin full text ve boyuk img olmalidi
// step 3 = yeni users page login  
?>









 