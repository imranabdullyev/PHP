<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 

include 'db.php';







session_set_cookie_params(0);
session_start();
if(isset($_SESSION['email']))
{
  $select_all_query = "SELECT * FROM registration;";
  $students = $connection->query($select_all_query);
  echo '<table class="responsestable">';
  echo "<tr>
    <th>ID </th>
    <th>Name</th>
    <th>Surname</th>
    <th>E-mail</th>
    <th>Sign-up date</th>
    <th>Last sign-in date</th>
    <th>Password</th>
  </tr>";

  while($row= $mysqli_fetch_assoc($query))
  {
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>".$value."</td>";
    }
    $user_id = $row>id;
    echo "<td><a href= 'delete_student.php?id=$user_id'>DELETE</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
else 
echo "You have no access to this page";


?>