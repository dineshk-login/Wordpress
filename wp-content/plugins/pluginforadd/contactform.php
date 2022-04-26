<?php
if($_POST){
  $databaseHost = 'localhost';
  $databaseName = 'wordpress';
  $databaseUsername = 'root';
  $databasePassword = '';
  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
  $firstname= $_POST['fname'];
  $lastname= $_POST['lname'];
  $fathername=$_POST['fathername'];
  $result = mysqli_query($mysqli, "INSERT INTO `userdata`(`firstname`,`lastname`,`fathername`) VALUES('$firstname','$lastname','$fathername')");
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>Contact form</h2>

<form action="" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="father name">Father name:</label><br>
  <input type="text" id="fathername" name="fathername" value=""><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>

